<?php

namespace App\Models\Admin\products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;
    protected $connection = "mysql-products";

    protected $fillable = ['product_id','image'];

    public function product()
    {
        return $this->BelongsTo(Product::class);
    }
}
