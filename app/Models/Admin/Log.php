<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Hekmatinasser\Verta\Verta;

class Log extends Model
{
    use HasFactory;
    protected $connection = "mysql-settings";

    protected $fillable = ['user_id','ip','actionType','description'];

    public function getCreatedAtAttribute($created_at)
    {
        $createDate = new Verta($created_at);
        $createDate = $createDate->format('H:i:s - Y/m/d');
        return $createDate;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
