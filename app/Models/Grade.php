<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{

    public function accounts() {
        return $this->hasMany('App\Models\Account');
    }

}
