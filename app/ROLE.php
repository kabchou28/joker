<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ROLE extends Model
{
    public function activites()
    {
        return $this->BelongsToMany(Activite::class);
    }
    public function users()
    {
        return $this->BelongsToMany(User::class);
    }
}

