<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ///////Begin Footer Setting
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "setting-footer",
                'description' => "تنظیمات فوتر سایت",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "setting-footer-label",
                'description' => "ویرایش برچسب های فوتر سایت",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-social",
                'description' => "ویرایش شبکه های اجتماعی در فوتر سایت",
            ],
            //////////////////
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-logo-create",
                'description' => "ایجاد لوگوی فوتر سایت",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-logo-edit",
                'description' => "ویرایش لوگوی فوتر سایت",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-logo-delete",
                'description' => "حذف موقت لوگوی فوتر سایت",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-logo-trash",
                'description' => "سطل زباله لوگوی فوتر سایت",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-logo-Restore",
                'description' => "بازیابی لوگوی فوتر سایت",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-logo-forceDelete",
                'description' => "حذف کامل لوگوی فوتر سایت",
            ],
            ///////////////////
            //////////////////
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-menu-create",
                'description' => "ایجاد منوی فوتر سایت",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-menu-edit",
                'description' => "ویرایش منوی فوتر سایت",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-menu-delete",
                'description' => "حذف کامل منوی فوتر سایت",
            ],
            ///////////////////
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-namad",
                'description' => "ویرایش نمادهای سایت",
            ],
            /////End Footer Setting
        ]);
    }
}
