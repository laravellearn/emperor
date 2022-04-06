<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql-settings')->table('footers')->insert([
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
            'upLabel' => 'برگشت به بالا',
            'widgetLabel1' => 'فوتر اول',
            'widgetLabel2' => 'فوتر دوم',
            'widgetLabel3' => 'فوتر سوم',
            'widgetLabel4' => 'فوتر چهارم',
            'widgetLabel5' => 'فوتر پنجم',
            'rssLabel' => 'از تخفیف‌ها و جدیدترین‌های دیجی‌استور باخبر شوید:',
            'socialLabel' => 'دیجی‌استور را در شبکه‌های اجتماعی دنبال کنید:',
            'supportLabel' => 'هفت روز هفته ، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم',
            'phoneLabel' => 'شماره تماس :',
            'addressLabel' => 'آدرس فروشگاه :',
            'emailLabel' => 'آدرس ایمیل :',
            'aboutHeadLabel' => 'فروشگاه اینترنتی دیجی‌استور بررسی، انتخاب و خرید آنلاین',
            'aboutbodyLabel' => 'دیجی‌استور به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به سایت دیجی‌استور با دنیایی از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.',
            'copyright' => 'استفاده از مطالب فروشگاه اینترنتی دیجی‌استور فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌استور) می‌باشد.',
        ]);
    }
}
