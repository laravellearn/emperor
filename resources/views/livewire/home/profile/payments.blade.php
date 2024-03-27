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


    <div class="headline-profile order-end" style="margin-top:0;">
        <span>لیست درخواست تسویه حساب ها</span>
    </div>
    <div class="profile-stats profile-table">
        <div class="table-orders">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>مبلغ درخواستی</th>
                        <th>وضعیت</th>
                        <th>تاریخ درخواست</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                        <tr>
                            <td>{{ number_format($payment->price) }}</td>
                            <td>
                                @if ($payment->status == 'unpaid')
                                    <span class="badge badge-danger">تسویه نشده</span>
                                @else
                                    <span class="badge badge-success">تسویه شده</span>
                                @endif
                            </td>
                            <td>{{ $payment->created_at }}</td>
                            <td><i class="fa fa-angle-left"></i></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

    </div>
@endsection
