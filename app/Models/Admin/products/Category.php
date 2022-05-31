<?php

namespace App\Models\admin\products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $connection = "mysql-products";

    protected $fillable = ['title','icon','image','description','metaTitle','metaDescription','slug','parent_id'];

}
