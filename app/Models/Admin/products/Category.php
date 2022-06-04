<?php

namespace App\Models\admin\products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $connection = "mysql-products";

    protected $fillable = ['parent_id','title','description','slug','image','icon','isActive','metaTitle','metaDescription','level'];

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

}
