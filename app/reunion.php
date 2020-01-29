<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reunion extends Model
{
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
