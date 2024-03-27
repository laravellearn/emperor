@section('title', 'افزودن محصول')
@extends('livewire.home.layouts.product')
@section('content') <!--search-category------------------------->
    <div class="col-lg-3 col-md-4 col-xs-12">
        <div class="sidebar-wrapper">
            <div class="box-sidebar">
                <div class="profile-box" style="border: none;">
                    <img src="{{ asset('home/images/profile/1.jpg') }}" class="profile-box-img-banner" alt="profile">
                </div>
            </div>

            <div class="box-sidebar">
                <div class="profile-box">
                    <div class="profile-box-avator">
                        <img src="{{ $user->profilePhoto }}" alt="profile">
                    </div>

                    <div class="profile-box-content">
                        <span class="profile-box-nameuser">{{ $user->name }}</span>
                        <span class="profile-box-phone">{{ $user->mobile }}</span>
                    </div>

                    <a href="#" class="profile-box-row-arrow">
                        <div class="profile-box-title">کیف پول</div>
                        <div class="profile-box-price">
                            <div class="wallet-amount">{{ number_format($financial) }}</div>
                            <div class="profile-box-currency">تومان</div>
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <p class="profile-box-wallet-link">افزایش موجودی</p>
                    </a>

                    <a href="#" class="profile-box-row-arrow">
                        <div class="profile-box-title">دیجی کلاب</div>
                        <div class="profile-box-price">
                            <div class="wallet-amount">0</div>
                            <div class="profile-box-currency">امتیاز</div>
                            <i class="fa fa-angle-left"></i>
                        </div>
                    </a>
                </div>
                <ul class="profile-menu-items">
                    <li><a href="{{ route('user.profile') }}" class="profile-menu-url"><span
                                class="mdi mdi-account-outline"></span>پروفایل</a></li>
                    <li><a href="profile-order.html" class="profile-menu-url"><span class="mdi mdi-basket"></span>همه
                            سفارش ها</a></li>
                    <li><a href="profile-order-return.html" class="profile-menu-url"><span
                                class="mdi mdi-autorenew"></span>در خواست مرجوعی</a></li>
                    <li><a href="profile-favorites.html" class="profile-menu-url"><span
                                class="mdi mdi-heart-outline"></span>لیست
                            علاقه مندی ها</a></li>
                    <li><a href="profile-comments.html" class="profile-menu-url"><span
                                class="mdi mdi-comment-multiple-outline"></span>نقد و نظرات</a></li>
                    <li><a href="{{ route('user.address') }}" class="profile-menu-url active-profile"><span
                                class="mdi mdi-map-marker-outline"></span>آدرس
                            ها</a></li>
                    <li><a href="#" class="profile-menu-url"><span class="mdi mdi-history"></span>بازدید های
                            اخیر</a>
                    </li>
                    <li><a href="profile-personal-info.html" class="profile-menu-url"><span
                                class="mdi mdi-account-circle"></span>اطلاعات شخصی</a></li>
                    @if ($user->typeUser != 'vendor')
                        <form action="{{ route('vendor.request', $user) }}" method="post">
                            @method('patch')
                            @csrf
                            <li><button type="submit" class="profile-menu-url active-profile"><span
                                        class="mdi mdi-account-outline"></span>درخواست فروشندگی</button></li>
                        </form>
                    @else
                        <form action="{{ route('vendor.payments.request') }}" method="post">
                            @csrf
                            <li><button type="submit" class="profile-menu-url active-profile"><span
                                        class="mdi mdi-account-outline"></span>درخواست تسویه حساب</button></li>
                        </form>

                        <li>
                            <a href="{{ route('vendor.payments.list') }}" style="cursor: pointer;" class="profile-menu-url">
                                <span class="mdi mdi-power"></span>لیست درخواست های تسویه حساب
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('vendor.product.get') }}" style="cursor: pointer;" class="profile-menu-url">
                                <span class="mdi mdi-power"></span>افزودن محصول
                            </a>
                        </li>
                    @endif
                    <li>
                        <a wire:click="logout({{ $user->id }})" style="cursor: pointer;" class="profile-menu-url">
                            <span class="mdi mdi-power"></span>خروج
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
        <div class="headline-profile">
            <span>افزودن محصول</span>
        </div>
        <div class="profile-stats m-30 p-30">
            <div class="profile-stats-row">
                <form action="{{ route('vendor.product.post') }}" method="post">
                    @CSRF
                    <div class="col-lg-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label>انتخاب محصول:</label>
                            <select name="product_id" id="product_id" class="form-control">
                                <option value="">--هیچکدام--</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label>انتخاب گارانتی:</label>
                            <select name="garanty_id" id="garanty_id" class="form-control">
                                <option value="">--هیچکدام--</option>
                                @foreach ($garanties as $garanty)
                                    <option value="{{ $garanty->id }}">{{ $garanty->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label> مبلغ محصول(تومان) :</label>
                            <input type="text" class="form-control" placeholder="" name="price">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label>تعداد موجودی :</label>
                            <input type="text" class="form-control" placeholder="" name="number">
                        </div>
                    </div>

                    <div class="col-lg-12 col-xs-12 pull-right" style="padding:0;">
                        <input type="submit" value="ثبت محصول" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

        <div class="headline-profile order-end" style="margin-top:0;">
            <span>لیست محصولات</span>
        </div>
        <div class="profile-stats profile-table">
            <div class="table-orders">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">عنوان محصول</th>
                            <th scope="col">گارانتی</th>
                            <th scope="col">موجودی</th>
                            <th scope="col">مبلغ</th>
                            <th scope="col">وضعیت محصول</th>
                            <th scope="col">عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productsVendor as $item)
                            <tr>
                                <td class="order-code">{{ $item->product->title }}</td>
                                <td>{{ $item->garanty->title }}</td>
                                <td>{{ $item->number }}</td>
                                <td>{{ number_format($item->price) }}</td>
                                <td class="text-success">
                                    @if ($item->isActive == 0)
                                        <label class="badge badge-danger">غیرفعال</label>
                                    @else
                                        <label class="badge badge-success">فعال</label>
                                    @endif
                                </td>
                                <td><i class="fa fa-angle-left"></i></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>

    </div>
@endsection
