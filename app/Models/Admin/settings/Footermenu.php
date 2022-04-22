<?php

namespace App\Models\Admin\settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footermenu extends Model
{
    use HasFactory;
    protected $connection = "mysql-settings";
    protected $table = "footer-menus";
    protected $fillable = ['title','url','type','isActive'];
}
