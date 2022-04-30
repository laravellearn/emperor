<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Token extends Model
{
    use HasFactory;
    protected $connection = "mysql";
    protected $fillable = ['user_id','code','type','expired_at'];

    public static function tokenCreate($user_id,$code,$type)
    {
        Token::create([
            'user_id' => $user_id,
            'code' => $code,
            'type' => $type,
            'expired_at' => Carbon::now()->addMinutes(3)
        ]);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
