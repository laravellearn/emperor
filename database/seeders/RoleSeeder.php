<?php

namespace Database\Seeders;

use App\Models\Admin\Permissions\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "super-admin",
                'description' => "مدیر سیستم",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "admin",
                'description' => "مدیر فروشگاه",
            ],
        ]);

        foreach (Permission::all() as $permission) {
            DB::table('permission_role')->insert([
                [
                    'role_id' => "1",
                    'permission_id' => $permission->id,
                ],
            ]);
        }

        DB::table('role_user')->insert([
            [
                'role_id' => "1",
                'user_id' => "1",
            ],
        ]);
    }
}
