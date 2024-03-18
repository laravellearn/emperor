<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productorder extends Model
{
    use HasFactory;
    protected $connection = "mysql-products";
    protected $table = "products-order";

    protected $fillable = ['user_id','cart_id','order_id','product_id','price'];



}
