<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Affair extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';

    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function lawyer(){
        return $this->belongsToMany(Lawyer::class, 'affair_lawyers');
    }
}
