<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Log extends Model
{
    use HasFactory;
    protected $connection = "mysql-settings";

    protected $fillable = ['user_id','ip','actionType','description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
