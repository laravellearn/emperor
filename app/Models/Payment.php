<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class Payment extends Model
{
    use HasFactory;
    protected $connection = "mysql-products";

    protected $fillable = ['vendor_id','price','status'];

    public function user()
    {
        return $this->belongsTo(User::class,'vendor_id');
    }

    public function getCreatedAtAttribute($created_at)
    {
        $createDate = new Verta($created_at);
        $createDate = $createDate->format('H:i:s - Y/m/d');
        return $createDate;
    }
}
