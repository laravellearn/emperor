<?php

namespace App\Models\admin\settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Footerlogo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $connection = "mysql-settings";
    protected $table = "footer-logos";
    protected $fillable = ['title','type','image','isActive'];
}
