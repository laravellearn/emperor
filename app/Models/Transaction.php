<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class Transaction extends Model
{
    use HasFactory;
    protected $connection = "mysql-products";

    const STATUS_SUCCESS = 2;
    const STATUS_PENDING = 1;
    const STATUS_FAILED = 0;

    protected $fillable = ['payment_id','user_id','cart_id','paid','status','invoice_details','transaction_id','transaction_result'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }


    public function getInvoiceDetailsAttribute()
    {
        return unserialize($this->attributes['invoice_details']);
    }

    public function setInvoiceDetailsAttribute($value)
    {
        $this->attributes['invoice_details'] = serialize($value);
    }

    public function getTransactionResultAttribute()
    {
        return unserialize($this->attributes['transaction_result']);
    }

    public function setTransactionResultAttribute($value)
    {
        $this->attributes['transaction_result'] = serialize($value);
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
