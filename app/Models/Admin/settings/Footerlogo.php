<?php

namespace App\Models\admin\settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footerlogo extends Model
{
    use HasFactory;
    protected $connection = "mysql-settings";
    protected $table = "footer-logos";
    protected $fillable = ['title','type','image','isActive'];
}
