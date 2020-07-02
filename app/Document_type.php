<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document_type extends Model
{
    public function client(){
        return $this->hasMany(Client::class)->withPivot('name');
    }

    public function lawyer(){
        return $this->hasMany(Lawyer::class)->withPivot('name');
    }
}
