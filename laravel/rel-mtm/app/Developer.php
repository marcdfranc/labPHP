<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    public function projects()
    {
        return $this->belongsToMany('App\Project', 'allocations')->withPivot(['hours_per_week', 'created_at']);
    }
}
