<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_name',
        'description',
        'ratings_report',
        'employees_report',
        'sales_report',
        'inventory_report',
        'feedback_report',
       'financial_report',
       'status_report'


    ];
    


    
}
