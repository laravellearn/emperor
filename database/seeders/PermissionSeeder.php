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
                'description' => "لیست نقش ها",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "permissions",
                'description' => "لیست دسترسی ها",
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

            //users
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "users",
                'description' => "مشاهده لیست کاربران",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "user-login",
                'description' => "ورود به پنل کاربر",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "user-permission",
                'description' => "سطح دسترسی کاربر",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "user-basket",
                'description' => "تاریخچه خرید کاربر",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "user-edit",
                'description' => "ویرایش کاربر",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "user-delete",
                'description' => "حذف موقت کاربر",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "user-trash",
                'description' => "سطل زباله کاربر",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "user-forceDelete",
                'description' => "حذف کامل کاربر",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "user-restore",
                'description' => "بازیابی کاربر",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "user-create",
                'description' => "ایجاد کاربر",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "user-info",
                'description' => "نمایش اطلاعات کاربر",
            ],

            //End Users

            //Product Categories
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-categories",
                'description' => "دسته بندی محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-categories-create",
                'description' => "افزودن دسته بندی برای محصول",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-categories-trash",
                'description' => "سطل زباله دسته بندی محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-categories-edit",
                'description' => "ویرایش دسته بندی محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-categories-delete",
                'description' => "حذف موقت دسته بندی محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-categories-forceDelete",
                'description' => "حذف کامل دسته بندی محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-categories-restore",
                'description' => "بازیابی دسته بندی محصولات",
            ],

            //End Product Categories

            //Product Brands
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-brands",
                'description' => "برند محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-brands-create",
                'description' => "افزودن برند برای محصول",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-brands-trash",
                'description' => "سطل زباله برند محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-brands-edit",
                'description' => "ویرایش برند محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-brands-delete",
                'description' => "حذف موقت برند محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-brands-forceDelete",
                'description' => "حذف کامل برند محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-brands-restore",
                'description' => "بازیابی برند محصولات",
            ],

            //End Product Brands

            //Product Garanties
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-garanties",
                'description' => "گارانتی محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-garanties-create",
                'description' => "افزودن گارانتی برای محصول",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-garanties-trash",
                'description' => "سطل زباله گارانتی محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-garanties-edit",
                'description' => "ویرایش گارانتی محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-garanties-delete",
                'description' => "حذف موقت گارانتی محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-garanties-forceDelete",
                'description' => "حذف کامل گارانتی محصولات",
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => "product-garanties-restore",
                'description' => "بازیابی گارانتی محصولات",
            ],

            //End Product Garanties


        ]);
    }
}
