<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;
    protected $table = 'hrms_r4_ratings';
    protected $fillable = [
        'rating',
        'comment',
        'name'
    ];
}
