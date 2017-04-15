<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BatchFill extends Model
{
    protected $primaryKey = 'BF_id';

    protected $fillable = [
        'BF_id', 'BF_PackingId', 'BF_drums',
        'BF_litres', 'FK_B_id'
    ];

    function batch(){
        $this->hasOne('App\Batch');

    }

    function finshedgood(){

        $this->hasOne('App\FinishedGood');

    }
}
