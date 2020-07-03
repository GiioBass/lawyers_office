<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class Affair_Lawyer extends  Pivot
{
    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'affair_lawyers';

}
