<?php

namespace App\Models\Admin\Products;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Garanty extends Model
{
    use HasFactory,SoftDeletes;
    protected $connection = "mysql-products";
    protected $fillable = ['title','isActive'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function getDeletedAtAttribute($deleted_at)
    {
        $deleted_at = new Verta($deleted_at);
        $deleted_at = $deleted_at->format('H:i:s - Y/m/d');
        return $deleted_at;
    }
}
