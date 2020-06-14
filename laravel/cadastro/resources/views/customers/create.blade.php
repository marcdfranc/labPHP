@extends('layout.app', ['current' => 'customers'])

@section('body')
    <div class="card border">
        <div class="card-header">
            <h5>New Customer</h5>
        </div>
        <div class="card-body">
            <form action="/customers" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Customer Name</label>
                    <input class="form-control {{ $errors->has('name')? "is-invalid" : "" }}" type="text" name="name" id="name" placeholder="Customer Name">
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>                        
                    @endif
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input class="form-control {{ $errors->has('age')? "is-invalid" : "" }}" type="text" name="age" id="age" placeholder="Age">
                    @if ($errors->has('age'))
                        <div class="invalid-feedback">
                            {{ $errors->first('age') }}
                        </div>                        
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control {{ $errors->has('address')? "is-invalid" : "" }}" type="text" name="address" id="address" placeholder="Adress">
                    @if ($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>                        
                    @endif
                </div>
                <div class="form-group">
                    <label for="mail">Mail</label>
                    <input class="form-control {{ $errors->has('mail')? "is-invalid" : "" }}" type="text" name="mail" id="mail" placeholder="Adress">
                    @if ($errors->has('mail'))
                        <div class="invalid-feedback">
                            {{ $errors->first('mail') }}
                        </div>                        
                    @endif
                </div>                

                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <a href="/customers" class="btn btn-danger btn-sm" role="button">Cancel</a>
            </form>
        </div>

        
        
        @if ($errors->any())
            <div class="card-footer">                
                <div class="alert alert-danger" role="alert">
                    <span>Error!</span>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
        @endif
    </div>
@endsection