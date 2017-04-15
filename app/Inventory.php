<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $primaryKey = 'IN_id';

    protected $fillable = [
        'IN_id', 'IN_name', 'IN_description', 'IN_type', 'IN_rate', 'IN_quantity'
    ];

}
