<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MoneyValidationFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Balance;
use App\User;
use DB;


class BalanceController extends Controller
{
    public function index()
    {
        $amount = 0;

        if (isset(auth()->user()->balance)) {
            $amount = auth()->user()->balance->amount;
        }
       // dd(auth()->user());
        
        return view('admin.balance.index', compact('amount'));
    }

    public function deposit()
    {
        return view('admin.balance.deposit');
    }

    public function store(MoneyValidationFormRequest $request)
    {
        DB::beginTransaction();

        $result = $this->makeStore(auth()->user()->balance()->firstOrCreate([]), $request);
        
        if ($result['error']) {
            DB::rollback();    
            return redirect()->back()->with('error', $result['message']);
        } else {
            DB::commit();
            return redirect()->route('admin.balance')->with('success', $result['message']);
        }        
    }

    private function makeStore(Balance $balance, $request, $userIdTransaction = null) : Array
    {        
        $totalBefore = $balance->amount ? $balance->amount : 0;
        $balance->amount = $totalBefore + $request->value;
        return $balance->save() && auth()->user()->historics()->create([
            'type' => isset($userIdTransaction)? 'T' : 'I',
            'amount' => $request->value,
            'total_before' => $totalBefore,
            'total_after' => $balance->amount,                
            'date' => date('Ymd'),
            'user_id_transaction' => $userIdTransaction
        ]) ? array('error'=> false, 'message' => 'Saldo inserido com sucesso!') 
        : array('error'=> true, 'message' => 'Erro ao inserrir histoórico de transação!');
    }

    public function drawn()
    {
        return view('admin.balance.drawn');
    }

    public function drawnStore(MoneyValidationFormRequest $request)
    {
        DB::beginTransaction();

        $result = $this->makeDrawn(auth()->user()->balance()->firstOrCreate([]), $request);       
        
        if ($result['error']) {
            DB::rollback();    
            return redirect()->back()->with('error', $result['message']);
        } else {
            DB::commit();
            return redirect()->route('admin.balance')->with('success', $result['message']);
        }      
    }

    private function makeDrawn(Balance $balance, $request, $userIdTransaction = null) : Array
    {

        if ($balance->amount < $request->value) {
            return redirect()->back()->with('error', 'Saldo insuficiente para saque!');
        }

        $totalBefore = $balance->amount ? $balance->amount : 0;
        $balance->amount = $totalBefore - $request->value;
        return  $balance->save() && auth()->user()->historics()->create([
            'type' => isset($userIdTransaction)? 'T' : 'O',            
            'amount' => $request->value,
            'total_before' => $totalBefore,
            'total_after' => $balance->amount,                
            'date' => date('Ymd'),
            'user_id_transaction' => $userIdTransaction
        ]) ? array('error'=> false, 'message' => 'Saque realizado com sucesso!') 
        : array('error'=> true, 'message' => 'Erro ao processar saque!');
    }

    public function transfer()
    {
        return view('admin.balance.transfer');
    }
   
    public function transferConfirm(Request $request, User $user)
    {
        if(!$sender = $user->findOneByNameOrEmail($request->sender)) {
            return redirect()->back()->with('error', 'Usuário Informado não foi encontrado.');
        }

        if (count($sender) > 1) {
            return redirect()->back()->with('error', 'Desculpe, mas estamos tendo dificuldades em encontrar o usuário, tente ser mais preciso informando o e-mail.');
        } else {
            $sender = $sender->first();
        }
        
        if (auth()->user()->id === $sender->id) {
            return redirect()->back()->with('error', 'Você não pode transferir valores para você mesmo.');
        }
        
        
        return view('admin.balance.transfer_confirm', compact('sender'));
        
       //dd($sender);
    }

    public function transferStore(Request $request, User $user)
    {
        if (!$sender = $user->find($request->sender_id)) {
            return redirect()->route('admin.balance.transfer')->with('error', 'Recebedor não encontrado.');
        }     
        
        $balance = auth()->user()->balance()->firstOrCreate([]);
        
        if ($balance->amount < $request->value) {
            return redirect()->route('admin.balance')->with('error', 'Saldo insuficiente para Transferencia!');
        }
        
        DB::beginTransaction();

        $result = $this->makeDrawn($balance, $request, $sender->id);

        if ($result['error']) {
            DB::rollback();    
            return redirect()->back()->with('error', $result['message']);
        } 

        $result = $this->makeStore($sender->balance()->firstOrCreate([]), $request, $balance->id);
        
        
        if ($result['error']) {
            DB::rollback();    
            return redirect()->route('admin.balance')->with('error', 'Erro de transfência!');
        } else {
            DB::commit();
            return redirect()->route('admin.balance')->with('success', 'Valor Trasnferido com sucesso!');
        }      
    }
}
