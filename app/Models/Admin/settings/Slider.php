<?php

namespace App\Models\Admin\settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $connection = "mysql-settings";
    protected $fillable = ['alt','image','link','position'];
    
}
