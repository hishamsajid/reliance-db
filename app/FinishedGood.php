<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinishedGood extends Model
{
    protected $primaryKey = 'FG_id';

    protected $fillable = [

        'FG_id', 'FG_brand', 'FG_type',
        'FG_shadeName', 'FG_shadeNo', 'FG_specification',
        'FG_unit', 'FK_BF_id'

    ];

    function batchfill(){

        $this->hasOne('App\BatchFill');

    }
}
