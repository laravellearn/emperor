<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin\Log;
use SoapClient;
use App\Models\Admin\Permissions\Permission;
use App\Models\Admin\Permissions\Role;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory,SoftDeletes;

    protected $connection = "mysql";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'mobile', 'email', 'password', 'mobile_verified_at'
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

    public static function sendSms($code, $mobile)
    {
        $user = '';
        $pass = '';
        if ($user != null && $pass != null) {
            $client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");
            $user = $user;
            $pass = $pass;
            $fromNum = "+983000505";
            $toNum = $mobile;
            $pattern_code = "ovvjcd95qay5i8d";
            $input_data = array('code' => $code);

            return $client->sendPatternSms($fromNum, $toNum, $user, $pass, $pattern_code, $input_data);
        }
    }

    public function tokens()
    {
        return $this->belongsToMany(Token::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasPermission($permission)
    {
        return $this->permissions->contains('title', $permission->title) || $this->hasRole($permission->roles);
    }

    public function hasRole($roles)
    {
        return !!$roles->intersect($this->roles)->all();
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
