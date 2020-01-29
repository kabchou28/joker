<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activité extends Model
{
    public function roles()
    {
        return $this->BelongsToMany(ROLE::class)->using(a_r::class);
    }
}
