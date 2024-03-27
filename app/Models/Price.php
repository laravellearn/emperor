<?php

namespace App\Models;

use App\Models\Admin\Products\Garanty;
use App\Models\Admin\products\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class Price extends Model
{
    use HasFactory;
    protected $connection = "mysql-products";

    protected $fillable = ['user_id','product_id','garanty_id','price','number','isActive'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function garanty()
    {
        return $this->belongsTo(Garanty::class);
    }

    public function getCreatedAtAttribute($created_at)
    {
        $createDate = new Verta($created_at);
        $createDate = $createDate->format('H:i:s - Y/m/d');
        return $createDate;
    }
}
