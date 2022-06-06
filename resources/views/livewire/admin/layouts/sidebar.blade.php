<div class="ecaps-sidemenu-area">
    <!-- Desktop Logo -->
    <div class="ecaps-logo">
        <a href="{{ route('home') }}" target="_blank"><img class="desktop-logo"
                src="{{ asset('admin/img/core-img/logo.png') }}" alt="لوگوی دسک تاپ"> <img class="small-logo"
                src="{{ asset('admin/img/core-img/small-logo.png') }}" alt="آرم موبایل"></a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->

            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="{{ Request::routeIs('admin.home') ? 'active' : '' }}"><a
                            href="{{ route('admin.home') }}"><i
                                class="zmdi zmdi-view-dashboard"></i><span>داشبورد</span></a></li>
                    {{-- <li class="treeview">
                        <a href="javascript:void(0)"><i class="fa fa-newspaper-o"></i> <span>مقالات</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="article-categories.html">دسته بندی</a></li>
                            <li><a href="article-tags.html">برچسب</a></li>
                            <li><a href="articles.html">لیست مقالات</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="fa fa-file-image-o"></i> <span>رسانه ها</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="banners.html">بنر ها</a></li>
                            <li><a href="sliders.html">اسلایدر ها</a></li>
                        </ul>
                    </li>

                    <li><a href="pages.html"><i class="zmdi zmdi-assignment"></i><span>صفحات</span></a></li>
                    <li><a href="menus.html"><i class="zmdi zmdi-menu"></i><span>منو ها</span></a></li>
                    <li><a href="comments.html"><i class="zmdi zmdi-comments"></i><span>نظرات</span></a></li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="fa fa-cube"></i> <span>فروشندگان</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="vendors.html">لیست فروشندگان</a></li>
                            <li><a href="#">افزودن فروشنده</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-file-text"></i> <span>جزییات فروشگاه</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">آدرس ها</a></li>
                            <li><a href="#">آدرس های انبار</a></li>
                            <li><a href="#">زمان های ارسال</a></li>
                            <li><a href="#">اطلاع رسانی</a></li>
                            <li><a href="#">لیست عمومی</a></li>
                            <li><a href="#">کالاهای مورد علاقه</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="zmdi zmdi-rss"></i><span>خبرنامه</span></a></li>
                    <li><a href="#"><i class="fa fa-id-badge"></i><span>تبلیغات</span></a></li>
                    <li><a href="#"><i class="fa fa-credit-card"></i><span>تراکنش ها</span></a></li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-card-giftcard"></i> <span>تخفیفات</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">کد های تخفیف</a></li>
                            <li><a href="#">کارت های هدیه</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="fa fa-first-order"></i> <span>سفارشات</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">تمام سفارشات</a></li>
                            <li><a href="#">در انتظار</a></li>
                            <li><a href="#">در حال پردازش</a></li>
                            <li><a href="#">تکمیل شده</a></li>
                            <li><a href="#">مرجوعی</a></li>
                            <li><a href="#">لغو شده</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-replay"></i> <span>مرجوعی ها</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">جزییات مرجوعی</a></li>
                            <li><a href="#">دلایل مرجوعی</a></li>
                            <li><a href="#">مرجوعی های تائید شده</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-notifications"></i> <span>اطلاع رسانی ها</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">ایمیلی</a></li>
                            <li><a href="#">پیامکی</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="fa fa-ticket"></i> <span>تیکت ها</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">بسته شده</a></li>
                            <li><a href="#">در حال بررسی</a></li>
                            <li><a href="#">باز</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="fa fa-calculator"></i> <span>حسابداری</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">فروش ها</a></li>
                            <li><a href="#">تسویه حساب ها</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="fa fa-cubes"></i> <span>انبارداری</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">موجودی</a></li>
                        </ul>
                    </li> --}}

                    @canany(['product-categories', 'product-brands','product-garanties'])
                        <li
                            class="treeview {{ Request::routeIs(['admin.product.categories', 'admin.product.categories.edit', 'admin.product.categories.trash', 'admin.product.categories.level2', 'admin.product.categories.edit.level2', 'admin.product.categories.level3', 'admin.product.categories.edit.level3','admin.product.brands', 'admin.product.brands.edit', 'admin.product.brands.trash','admin.product.garanties', 'admin.product.garanties.edit', 'admin.product.garanties.trash']) ? 'active' : '' }}">
                            <a href="javascript:void(0)"><i class="fa fa-shopping-bag"></i> <span>محصولات</span> <i
                                    class="fa fa-angle-left"></i></a>
                            <ul class="treeview-menu">
                                @can('product-categories')
                                    <li><a {{ Request::routeIs(['admin.product.categories', 'admin.product.categories.edit', 'admin.product.categories.trash', 'admin.product.categories.level2', 'admin.product.categories.edit.level2', 'admin.product.categories.level3', 'admin.product.categories.edit.level3']) ? 'style=color:#54c6d0' : '' }}
                                            href="{{ route('admin.product.categories') }}">دسته بندی</a></li>
                                @endcan
                                @can('product-brands')
                                    <li><a {{ Request::routeIs(['admin.product.brands', 'admin.product.brands.edit', 'admin.product.brands.trash']) ? 'style=color:#54c6d0' : '' }}
                                            href="{{ route('admin.product.brands') }}">برند ها</a></li>
                                @endcan
                                @can('product-garanties')
                                    <li><a {{ Request::routeIs(['admin.product.garanties', 'admin.product.garanties.edit', 'admin.product.garanties.trash']) ? 'style=color:#54c6d0' : '' }}
                                            href="{{ route('admin.product.garanties') }}">گارانتی ها</a></li>
                                @endcan

                            </ul>

                        </li>
                    @endcan


                    @canany(['users'])
                        <li
                            class="treeview {{ Request::routeIs(['admin.users', 'admin.users.create']) ? 'active' : '' }}">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-accounts-alt"></i> <span>کاربران</span> <i
                                    class="fa fa-angle-left"></i></a>
                            <ul class="treeview-menu">
                                @can('users')
                                    <li><a {{ Request::routeIs(['admin.users']) ? 'style=color:#54c6d0' : '' }}
                                            href="{{ route('admin.users') }}">لیست کاربران</a></li>
                                @endcan
                                @can('user-create')
                                    <li><a {{ Request::routeIs(['admin.users.create']) ? 'style=color:#54c6d0' : '' }}
                                            href="{{ route('admin.users.create') }}">افزودن کاربر</a></li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    @canany(['permissions', 'roles'])
                        <li
                            class="treeview {{ Request::routeIs(['admin.roles', 'admin.permissions', 'admin.roles.edit', 'admin.permissions.edit', 'admin.roles.trash', 'admin.permissions.trash']) ? 'active' : '' }}">
                            <a href="javascript:void(0)"><i class="fa fa-user-secret"></i> <span>سطوح دسترسی</span> <i
                                    class="fa fa-angle-left"></i></a>
                            <ul class="treeview-menu">
                                @can('roles')
                                    <li><a href="{{ route('admin.roles') }}"
                                            {{ Request::routeIs(['admin.roles', 'admin.roles.edit', 'admin.roles.trash']) ? 'style=color:#54c6d0' : '' }}>نقش
                                            ها</a></li>
                                @endcan
                                @can('permissions')
                                    <li><a href="{{ route('admin.permissions') }}"
                                            {{ Request::routeIs(['admin.permissions', 'admin.permissions.edit', 'admin.permissions.trash']) ? 'style=color:#54c6d0' : '' }}>سطح
                                            دسترسی</a></li>
                                @endcan
                            </ul>
                        </li>

                    @endcan

                    @can('logs')
                        <li class="{{ Request::routeIs(['admin.logs']) ? 'active' : '' }}">
                            <a href="{{ route('admin.logs') }}"><i class="zmdi zmdi-chart"></i><span>گزارشات
                                    سیستم</span></a>
                        </li>
                    @endcan

                    <li
                        class="treeview {{ Request::routeIs(['admin.settings.footer.label', 'admin.settings.footer.social', 'admin.settings.footer.logo', 'admin.settings.footer.logo.update', 'admin.settings.footer.menu', 'admin.settings.footer.menu.update', 'admin.settings.footer.namad', 'admin.settings.footer.logo.trash']) ? 'active' : '' }}">
                        @canany(['setting-footer'])
                            <a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> <span>تنظیمات</span> <i
                                    class="fa fa-angle-left"></i></a>
                        @endcan
                        <ul class="treeview-menu">
                            @canany(['setting-footer', 'setting-footer-label', 'settings-footer-social',
                                'settings-footer-logo', 'settings-footer-menu', 'settings-footer-namad'])
                                <!-- تنظیمات فوتر-برچسب ها-تنظیمات عمومی(لوگو و ...) -  -->
                                <li><a {{ Request::routeIs(['admin.settings.footer.label', 'admin.settings.footer.social', 'admin.settings.footer.logo', 'admin.settings.footer.logo.update', 'admin.settings.footer.menu', 'admin.settings.footer.menu.update', 'admin.settings.footer.namad', 'admin.settings.footer.logo.trash']) ? 'style=color:#54c6d0' : '' }}
                                        href="{{ route('admin.settings.footer') }}">تنظیمات فوتر</a></li>
                            @endcan
                            <!-- استان و شهر و ... -  -->
                            <li><a href="#">تنظیمات فروشگاه</a></li>
                        </ul>
                    </li>
                    {{-- <li><a href="#"><i class="zmdi zmdi-cloud-done"></i><span>بکاپ گیری</span></a></li> --}}
                </ul>
            </nav>
        </div>
    </div>
</div>
