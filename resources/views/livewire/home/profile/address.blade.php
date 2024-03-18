@section('title', 'پروفایل کاربری')
<div>
    <!--search-category------------------------->
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
                            <div class="wallet-amount">0</div>
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
                    <li>
                        <a wire:click="logout({{ $user->id }})" style="cursor: pointer;" class="profile-menu-url">
                            <span class="mdi mdi-power"></span>خروج
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="col-lg-9 col-md-8 col-xs-12 pull-right">
        <div class="headline-profile">
            <span>افزودن آدرس</span>
        </div>
        <div class="profile-stats m-30 p-30">
            <div class="profile-stats-row">
                <form action="{{ route('addresses.store') }}" method="post">
                    @CSRF
                    <div class="col-lg-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label>عنوان آدرس:</label>
                            <input type="text" class="form-control" placeholder="" name="title">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label> نام تحویل گیرنده :</label>
                            <input type="text" class="form-control" placeholder="" name="deliverName">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label>شماره موبایل:</label>
                            <input type="text" class="form-control" placeholder="" name="mobile">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label>شماره ثابت:</label>
                            <input type="text" class="form-control" placeholder="" name="phone">
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label>استان:</label>
                            <select name="province_id" id="province_id" class="form-control">
                                <option value="">--هیچکدام--</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label>شهرستان:</label>
                            <select name="city_id" id="city_id" class="form-control">

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label>کدپستی:</label>
                            <input type="text" class="form-control" placeholder="" name="postalCode">
                        </div>
                    </div>

                    <div class="col-lg-12 col-xs-12 pull-right" style="padding:0;">
                        <div class="profile-stats-col">
                            <label>آدرس کامل:</label>
                            <textarea class="form-control" placeholder="" name="address"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xs-12 pull-right" style="padding:0;">
                        <input type="submit" value="ثبت آدرس" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

        <div class="headline-profile order-end" style="margin-top:0;">
            <span>لیست آدرس ها</span>
        </div>
        <div class="profile-stats profile-table">
            <div class="table-orders">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">عنوان آدرس</th>
                            <th scope="col">استان</th>
                            <th scope="col">شهرستان</th>
                            <th scope="col">شماره موبایل</th>
                            <th scope="col">شماره ثابت</th>
                            <th scope="col">عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($addresses as $address)
                        <tr>
                            <td>1</td>
                            <td class="order-code">{{ $address->title }}</td>
                            <td>{{ $address->province->name }}</td>
                            <td>{{ $address->city->name }}</td>
                            <td>{{ $address->mobile }}</td>
                            <td class="text-success">{{ $address->phone }}</td>
                            <td><i class="fa fa-angle-left"></i></td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
@section('scripts')

    <script>
        $(document).ready(function() {

            //getCities
            $('#province_id').on('change', function() {
                var province_id = $(this).val();
                if (province_id) {
                    $.ajax({
                        url: '/user/profile/addresses/' + province_id,
                        type: "GET",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data) {
                                $('#city_id').empty();
                                $('#city_id').append(
                                    '<option value="">انتخاب شهرستان</option>');
                                $.each(data, function(key, city_id) {
                                    $('select[name="city_id"]').append(
                                        '<option value="' + city_id.id +
                                        '">' + city_id.name + '</option>');
                                });
                            } else {
                                $('#city_id').empty();
                            }
                        }
                    });
                } else {
                    $('#city_id').empty();
                }
            });

        });
    </script>
@endsection
