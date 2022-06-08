<?php

namespace App\Models\Admin\products;

use App\Models\Admin\Products\Color;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $connection = "mysql-products";
    protected $fillable = ['title','isActive','slug'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function garanty()
    {
        return $this->belongsTo(Garanty::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
