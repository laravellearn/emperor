<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class Cart extends Model
{
    use HasFactory;
    protected $connection = "mysql-products";

    protected $fillable = ['user_id','price','status'];

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
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

}
