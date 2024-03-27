<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormAnswer extends Model
{
    protected $fillable = [
        'answer_field',
        // dagdagan mo ng mga iba pang field na gustong sagutan
    ];
}