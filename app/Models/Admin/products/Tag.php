<?php

namespace App\Models\Admin\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $connection = "mysql-products";
    protected $fillable = ['title'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
