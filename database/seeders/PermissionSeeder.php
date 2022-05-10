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
            //Begin Footer Setting
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
            //
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-logo",
                'description' => "لوگوی فوتر سایت",
            ],
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
            //
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-menu",
                'description' => "منوی فوتر سایت",
            ],
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
            //
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "settings-footer-namad",
                'description' => "ویرایش نمادهای فوتر سایت",
            ],
            //End Footer Setting

            //logs
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "logs",
                'description' => "گزارشات سیستم",
            ],
            //End logs

            //permissions
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "roles",
                'description' => "نقش ها",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "permissions",
                'description' => "دسترسی ها",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "role-create",
                'description' => "ایجاد نقش",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "permission-create",
                'description' => "ایجاد دسترسی",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "role-edit",
                'description' => "ویرایش نقش",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "permission-edit",
                'description' => "ویرایش دسترسی",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "role-delete",
                'description' => "حذف موقت نقش",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "permission-delete",
                'description' => "حذف موقت دسترسی",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "role-trash",
                'description' => "سطل زباله نقش",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "permission-trash",
                'description' => "سطل زباله دسترسی",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "role-forceDelete",
                'description' => "حذف کامل نقش",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "permission-forceDelete",
                'description' => "حذف کامل دسترسی",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "role-restore",
                'description' => "یازیابی نقش ها",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "permission-restore",
                'description' => "بازیابی دسترسی ها",
            ],
            //End Permissions

        ]);
    }
}
