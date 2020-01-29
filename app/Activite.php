<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    public function roles()
    {
        return $this->BelongsToMany(ROLE::class);
    }
}
