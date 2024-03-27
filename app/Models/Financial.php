<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    use HasFactory;
    protected $connection = "mysql-products";

    protected $fillable = ['vendor_id','item_id','price','status'];

}
