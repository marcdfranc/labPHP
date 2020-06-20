<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function developers()
    {
        return $this->belongsToMany('App\Developer', 'allocations')->withPivot('hours_per_week');
    }
}
