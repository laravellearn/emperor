<?php

namespace Database\Seeders;

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
            'copyRight' => 'استفاده از مطالب فروشگاه اینترنتی دیجی‌استور فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌استور) می‌باشد.',
            'phone' => '07191010552 - 09210034734',
            'email' => 'laravellearn_ir@gmail.com',
            'address' => 'فارس، شیراز، خیابان ملاصدرا',
            'socialIcon1' => 'fa fa-instagram',
            'socialIcon2' => 'fa fa-twitter',
            'socialIcon3' => 'fa fa-facebook',
            'socialIcon4' => 'fa fa-linkedin-square',
            'socialIcon5' => '',
            'socialIcon6' => '',
            'socialLink1' => '#',
            'socialLink2' => '#',
            'socialLink3' => '#',
            'socialLink4' => '#',
            'socialLink5' => '#',
            'socialLink6' => '#',
            'enamad' => '<img src="/home/images/footer-img/enamad.png"><img src="/home/images/footer-img/samandehi.png">',
            'linkApp1' => "#",
            'imageApp1' => "/home/images/footer-img/71abe5c9.png",
            'linkApp2' => "#",
            'imageApp2' => "/home/images/footer-img/1090a120.png"


        ]);
        DB::connection('mysql-settings')->table('footer-logos')->insert([
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'تحویل اکسپرس',
                'type' => 'top',
                'url' => '',
                'isActive' => '1',
                'image' => '/home/images/footer-svg/delivery.svg',
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'پشتیبانی 24 ساعته',
                'type' => 'top',
                'url' => '',
                'isActive' => '1',
                'image' => '/home/images/footer-svg/contact-us.svg',
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'پرداخت درب منزل',
                'type' => 'top',
                'url' => '',
                'isActive' => '1',
                'image' => '/home/images/footer-svg/payment-terms.svg',
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => '7 روز ضمانت بازگشت',
                'type' => 'top',
                'url' => '',
                'isActive' => '1',
                'image' => '/home/images/footer-svg/return-policy.svg',
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'ضمانت اصل بودن کالا',
                'type' => 'top',
                'url' => '',
                'isActive' => '1',
                'image' => '/home/images/footer-svg/origin-guarantee.svg',
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'لوگوی فوتر 1',
                'type' => 'bottom',
                'url' => '',
                'isActive' => '1',
                'image' => '/home/images/footer-svg/footer-1.svg',
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'لوگوی فوتر 2',
                'type' => 'bottom',
                'url' => '',
                'isActive' => '1',
                'image' => '/home/images/footer-svg/footer-2.svg',
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'لوگوی فوتر 3',
                'type' => 'bottom',
                'url' => '',
                'isActive' => '1',
                'image' => '/home/images/footer-svg/footer-3.svg',
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'لوگوی فوتر 4',
                'type' => 'bottom',
                'url' => '',
                'isActive' => '1',
                'image' => '/home/images/footer-svg/footer-4.svg',
            ],
            [
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'لوگوی فوتر 5',
                'type' => 'bottom',
                'url' => '',
                'isActive' => '1',
                'image' => '/home/images/footer-svg/footer-5.svg',
            ],
        ]);
    }
}
