<div class="header_top_bar top_bar_two">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header_top_inner">
                    <div class="phone">
                        <p><i class="ion-clock"></i>{{ trans('setting.title.pages1') }}</p>
                    </div>
                    <div class="header_top_right">
                        <ul class="header_top_right_inner">
                            <li class="language_wrapper_two">
                                <a href="#">
                                    <span>{{ trans('setting.pages_account') }} <i class="fa fa-angle-down"></i> </span>
                                </a>
                                <ul class="account__name">
                                    <li><a href="my-account.html">{{ trans('setting.pages_account') }}</a></li>
                                    <li><a href="checkout.html">{{ trans('setting.checkout') }}</a></li>
                                    <li><a href="login.html">{{ trans('setting.sign_in') }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header_middle middle-two">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header_middle_wrapper">
                    <div class="header_middle_inner middel_two">
                        <div class="search_box search_box_two ">
                            <div class="search_inner search_two">
                                <form action="#">
                                    <input type="text" placeholder="Search our catalog">
                                    <button type="submit"><i class="ion-ios-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="logo logo_two">
                            <a href="index.html">
                                <img src="{{ asset(config('setting.font_image.logo_pages')) }}" alt="">
                            </a>
                        </div>
                        <div class="mini__cart minicart_two">
                            <div class="mini_cart_inner minicart_inner_two">
                                <div class="cart_icon">
                                    <a href="#">
													<span class="cart_icon_inner">
														<i class="ion-android-cart"></i>
														<span class="cart_count">2</span>
													</span>
                                        <span class="item_total"></span>
                                    </a>
                                </div>
                                <!--Mini Cart Box-->
                                <div class="mini_cart_box cart_box_two mini_cart_two">
                                    <div class="mini_cart_item">
                                        <div class="mini_cart_img">
                                            <a href="#">
                                                <img src="" alt="">
                                                <span class="cart_count"></span>
                                            </a>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </div>
                                    <div class="price_content">
                                        <div class="cart-total-price cart-total-price_two">
                                            <span class="label">{{ trans('setting.total') }}</span>
                                            <span class="value"></span>
                                        </div>
                                    </div>
                                    <div class="min_cart_checkout checkoyt_two">
                                        <a href="checkout.html">{{ trans('setting.checkout') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header header_bottm bottom_two sticky-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <div class="main_menu_inner">
                    <div class="menu menu_two">
                        <nav>
                            <ul>
                                <li class="active"><a href="index.html">Home <i class=""></i></a>
                                </li>
                                <li class="mega_parent"><a href="#">{{ trans('setting.cat') }} <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="mega_menu">
                                        @foreach ($categories as $category)
                                            @if (!$category->parent_id)
                                                <li class="mega_item">
                                                    <a class="mega_title" href="#">{{ $category->name }}</a>
                                                    <ul>
                                                        @foreach ($category->categories as $category_child)
                                                            <li>
                                                                <a href="{{ route('categories.show', ['category' => $category_child->id]) }}">{{ $category_child->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">vegetable</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="slider_area slider_area_two">
    <div class="slider_list  owl-carousel">
        <div class="single_slide single_slide_two"
             style="background-image: url(assets/img/banner/banner1_home2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider__content slider_content_two">
                            <p>Exclusive Offer -10% Off This Week</p>
                            <h2>Live <strong>healthy</strong> with a glass</h2>
                            <h3>of <strong>fruit juice</strong> every day</h3>
                            <h6>Starting at<span>$42.99</span></h6>
                            <div class="slider_btn">
                                <a href="shop.html">Shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slide single_slide_two"
             style="background-image: url(assets/img/banner/banner2_home2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider__content">
                            <p>Exclusive Offer -10% Off This Week</p>
                            <h2>We <strong>provide</strong> the best</h2>
                            <h3> product <strong> for you </strong></h3>
                            <h6>Starting at <span>$42.99</span></h6>
                            <div class="slider_btn">
                                <a href="shop.html">Shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
