<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{

    protected $primaryKey ='LT_id';

    protected $fillable = [
    'LT_id', 'LT_testName', 'LT_standard', 'LT_values',
        'FK_B_id'
    ];

    function batch(){

        $this->hasOne('App\Batch');
    }

}
