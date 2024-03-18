<?php

namespace App\Models\Admin\products;

use App\Models\admin\products\Category;
use App\Models\Admin\Products\Color;
use App\Models\Admin\Products\Tag;
use App\Models\Item;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $connection = "mysql-products";
    protected $fillable = [
        'title',
        'isActive',
        'slug',
        'level1_id',
        'level2_id',
        'level3_id',
        'brand_id',
        'garanty_id',
        'description',
        'body',
        'image',
        'price',
        'discountPrice',
        'number',
        'weight',
        'viewCount',
        'digiclub',
        'orderMax',
        'orderMin',
        'special'
    ];

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

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class);
    }

    public function level1_id()
    {
        return $this->belongsTo(Category::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function getCreatedAtAttribute($created_at)
    {
        $createDate = new Verta($created_at);
        $createDate = $createDate->format('H:i:s - Y/m/d');
        return $createDate;
    }

    public function getUpdatedAtAttribute($updated_at)
    {
        $updateDate = new Verta($updated_at);
        $updateDate = $updateDate->format('H:i:s - Y/m/d');
        return $updateDate;
    }

    public function getDeletedAtAttribute($udelete_at)
    {
        $deleteDate = new Verta($udelete_at);
        $deleteDate = $deleteDate->format('H:i:s - Y/m/d');
        return $deleteDate;
    }

}
