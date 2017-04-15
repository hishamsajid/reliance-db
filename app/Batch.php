<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $primaryKey = 'B_id';

    protected  $fillable = [
        'B_id', 'B_remarks', 'B_size', 'B_item', 'B_quantity',
        'R_id_FK', 'B_orderNo'
    ];

    function recipe(){

        $this->hasOne('App\Inventory');

    }

    function labTest(){

        $this->hasMany('App\LabTest');
    }

    function batchFill(){

        $this->hasMany('App\BatchFill');

    }


}
