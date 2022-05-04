<?php

namespace App\Models\Admin\Permissions;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Permissions\Role;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = ['title','description'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
