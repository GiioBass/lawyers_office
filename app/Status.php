<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{

    protected $primaryKey = 'id';

    public function affair(){
        return $this->hasMany(Affair::class);
    }
}
