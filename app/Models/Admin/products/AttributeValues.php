<?php

namespace App\Models\Admin\products;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValues extends Model
{
    use HasFactory;
    protected $connection = "mysql-products";
    protected $fillable = ['attribute_id','value'];
    protected $table = "attribute_values";

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function getDeletedAtAttribute($deleted_at)
    {
        $deleted_at = new Verta($deleted_at);
        $deleted_at = $deleted_at->format('H:i:s - Y/m/d');
        return $deleted_at;
    }
}
