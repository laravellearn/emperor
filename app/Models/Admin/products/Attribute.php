<?php

namespace App\Models\Admin\products;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use HasFactory,SoftDeletes;
    protected $connection = "mysql-products";
    protected $fillable = ['title','isActive','isFilter'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function AttributeValues()
    {
        return $this->belongsToMany(AttributeValues::class);
    }

    public function getDeletedAtAttribute($deleted_at)
    {
        $deleted_at = new Verta($deleted_at);
        $deleted_at = $deleted_at->format('H:i:s - Y/m/d');
        return $deleted_at;
    }
}
