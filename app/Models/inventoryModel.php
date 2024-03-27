<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventoryModel extends Model
{
    protected $table = 'hrms_r4_inventory';
    protected $fillable = [
        'r4_category_name',
        'r4_item_name',
        'r4_quantity',
        'r4_status'
    ];
}