<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $primaryKey = 'R_id';

    protected $fillable = [
            'R_id',
            'R_remarks',
            'R_order_no',
            'R_batchSize',
            'R_quantity',
            'IN_id_FK' ];
}

function inventory(){

    $this->hasMany('App\Inventory');

}