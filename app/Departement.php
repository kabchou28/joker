<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\MorphPivot;
class Departement extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class)->using(DepUSer::class);
    }
    public function reunions()
    {
        return $this->hasMany(reunion::class);
    }
}
