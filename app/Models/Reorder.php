<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reorder extends Model
{
    use HasFactory;
    protected $table = 'hrms_r4_reorder_points';
    protected $fillable = [
        'consumer',
        'item_id',
        'category',
        'item_name',
        'quantity',
        'status'
    ];
}
