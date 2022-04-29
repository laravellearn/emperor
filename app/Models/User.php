<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin\Log;
use SoapClient;

class User extends Authenticatable
{
    use HasFactory;

    protected $connection = "mysql";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'mobile', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'mobile_verified_at' => 'datetime',
    ];

    public function logs()
    {
        return $this->belongsToMany(Log::class);
    }

    public static function sendSms($code,$mobile)
    {
        $client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");
        $user = "";
        $pass = "";
        $fromNum = "+983000505";
        $toNum = $mobile;
        $pattern_code = "ovvjcd95qay5i8d";
        $input_data = array('code' => $code);

        return $client->sendPatternSms($fromNum,$toNum,$user,$pass,$pattern_code,$input_data);

    }

    public function tokens()
    {
        return $this->belongsToMany(Token::class);
    }
}
