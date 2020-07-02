<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lawyer extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'names',
        'last_name',
        'document_type_id'
    ];

    public function document_type(){
        return $this->belongsTo(Document_type::class);
    }
    public function affair(){
        return $this->belongsToMany(Affair::class)->withPivot('affair_id', 'lawyer_id', 'id');
    }
}
