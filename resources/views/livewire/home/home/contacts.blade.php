@extends('livewire.home.layouts.product')
@section('title', 'فروشگاه')
@section('content')

    <!--    about------------------------->
    <div class="col-12">
        <section class="contact-us">
            <div class="page-content-contact-us">
                <h1 class="page-content-contact-us-title">تماس باما</h1>
                <div class="page-content-contact-us-row">
                    <div class="page-content-contact-us-col-big">
                        <p class="page-content-contact-us-full-paragraph">
                            کاربر گرامی، لطفاً در صورت وجود هرگونه سوال یا ابهامی،
                            پیش از ارسال ایمیل یا تماس تلفنی با دیجی‌کالا، بخش
                            <a href="#" class="btn-link-spoiler">پرسش‏های متداول</a>
                            را ملاحظه فرمایید و در
                            صورتی که پاسخ خود را نیافتید، با ما تماس بگیرید.
                        </p>
                        <br>
                        <br>
                        <p class="page-content-contact-us-full-paragraph">برای پیگیری یا سوال درباره سفارش و ارسال پیام
                            بهتر است از فرم زیر استفاده کنید.</p>
                        <div class="page-content-contact-us-row-col">
                            <form action="{{ route('contact.store') }}" method="post" class="contact-us-form">
                                @csrf
                                <div class="contact-us-form-body">
                                    <div class="form-legal-item">
                                        <label for="#" class="form-legal-label">
                                            عنوان تماس
                                            <span class="required-star" style="color:red;">*</span>
                                        </label>
                                        <input type="text" class="ui-input-field form-control" name="title">
                                    </div>

                                    <div class="form-legal-item">
                                        <label for="#" class="form-legal-label">
                                            تلفن تماس
                                            <span class="required-star" style="color:red;">*</span>
                                        </label>
                                        <input type="text" class="ui-input-field form-control" name="mobile">
                                    </div>

                                    <div class="form-legal-item legal-item-textarea">
                                        <label for="#" class="form-legal-label">
                                            متن پیام
                                            <span class="required-star" style="color:red;">*</span>
                                        </label>
                                        <textarea id="" cols="30" rows="10" name="description"
                                            class="ui-textarea-field form-control"></textarea>
                                    </div>

                                    <div class="upload-drag-uploaded-and-submit">
                                        <button type="submit" class="contact-us-form-submit">ثبت و ارسال</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr class="info-page-separator">
                        <div class="message-light">
                            <span>روزهایی که در سال جاری به دلیل تعطیلی، دیجی‌کالا هیچ‌گونه پاسخگویی، سرویس‌دهی و خدماتی
                                ندارد، به شرح زیر است:</span>
                            <ul>
                                <li>۱۳ فروردین</li>
                                <li>۱۴ خرداد</li>
                                <li>۱۸ شهریور (تاسوعا)</li>
                                <li>۱۹ شهریور (عاشورا)</li>
                                <li>۲۷ مهر (اربعین)</li>
                                <li>۵ آبان (رحلت حضرت رسول اکرم)</li>
                                <li>۲۲ بهمن</li>
                            </ul>
                        </div>
                        <div class="message-light-success">
                            <span class="info-page-bold">
                                تلفن تماس و فکس:

                                <a href="tel: +982161930000">۶۱۹۳۰۰۰۰ - ۰۲۱</a> ، <a href="tel: +982195119095"> ۹۵۱۱۹۰۹۵
                                    - ۰۲۱</a>
                            </span>
                            پاسخگویی ۲۴ ساعته، ٧ روز هفته)
                        </div>
                    </div>
                    <br>
                    <h2 class="page-content-contact-us-title-smaller">دفتر مرکزی:
                        <p class="page-content-contact-us-full-paragraph">استان تهران - شهر تهران - خیابان گاندی جنوبی -
                            نبش خیابان ۲۱ - پلاک ۲۸</p>
                    </h2>
                    <h2 class="page-content-contact-us-title-smaller">مرکز امور مشتریان:
                        <p class="page-content-contact-us-full-paragraph">لطفاً کالا را برای بازگرداندن و ارسال آن به
                            خدمات پس از فروش
                            دیجی‌کالا از طریق پست، تنها به صندوق پستی 3469-15875 ارسال نمایید.
                        </p>
                    </h2>
                    <div class="message-light-error">
                        لطفاً قبل از هر اقدامی با کارشناسان پشتیبانی خدمات پس از فروش تماس گرفته و از ارسال کالا بدون
                        هماهنگی با خدمات پس از فروش دیجی‌کالا جداً، خودداری کنید
                    </div>
                    <p class="page-content-contact-us-full-paragraph">
                        <span>ایمیل سازمانی دیجی‌اسمارت:</span>
                        <a href="#">info@digistore.com</a>
                    </p>
                    <div class="message-light pull-right">
                        توجه داشته باشید که 300061930000 و 100061930000 تنها شماره‌هایی است که دیجی‌کالا از طریق آن برای
                        کاربران و مشتریان خود پیامک (اس ام اس) ارسال می‌کند. بنابراین ارسال هرگونه پیامک تحت عنوان
                        دیجی‌کالا، با هر شماره دیگری تخلف و سوء استفاده از نام دیجی‌کالا است و در صورت دریافت چنین
                        پیامکی،
                        لطفاً جهت پیگیری قانونی آن را به
                        <a href="#">
                            info@digistore.com
                        </a>
                        اطلاع دهید.
                        <br>
                        همچنین 300061930000 و 100061930000، سامانه ارسال پیامک است که وضعیت پردازش سفارش یا رویدادها،
                        خدمات
                        و سرویس‌های ویژه دیجی‌کالا را به اطلاع کاربران می‌رساند و روشن است که امکان دریافت پیام‌های شما
                        از
                        طریق این شماره وجود ندارد.
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--    about------------------------->

@endsection
