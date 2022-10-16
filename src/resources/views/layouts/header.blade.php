<!--header area start-->

<!--offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                    </div>
                    <div class="welcome-text">
                        <p>Free Delivery: Take advantage of our time to save event</p>
                    </div>
                    <div class="search_container">
                        <form action="#">
                            <div class="hover_category">
                                <select class="select_option" name="select" id="categori2">
                                    <option selected value="1">All Categories</option>
                                    <option value="2">Accessories</option>
                                    <option value="3">Accessories & More</option>
                                    <option value="4">Butters & Eggs</option>
                                    <option value="5">Camera & Video </option>
                                    <option value="6">Mornitors</option>
                                    <option value="7">Tablets</option>
                                    <option value="8">Laptops</option>
                                    <option value="9">Handbags</option>
                                    <option value="10">Headphone & Speaker</option>
                                    <option value="11">Herbs & botanicals</option>
                                    <option value="12">Vegetables</option>
                                    <option value="13">Shop</option>
                                    <option value="14">Laptops & Desktops</option>
                                    <option value="15">Watchs</option>
                                    <option value="16">Electronic</option>
                                </select>
                            </div>
                            <div class="search_box">
                                <input placeholder="Search product..." type="text">
                                <button type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="call-support">
                        <p>Call Support: <a href="tel:0123456789">0123456789</a></p>
                    </div>

                    <div class="offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> demo@example.com</a></span>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--offcanvas menu area end-->
<header>
    <div class="main_header">
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="welcome-text">
                            <p>Free Delivery: Take advantage of our time to save event</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="language_currency text-right">
                            <ul>
                                <li class="currency"><a href="#"> USD <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">GPB</a></li>
                                        <li><a href="#">RUP</a></li>
                                    </ul>
                                </li>
                                <li class="language"><a href="#"> English <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Russian</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-4">
                        <div class="logo">
                            <a href="{{ route('index') }}"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-6">
                        <div class="header_right_info">
                            <div class="header_account_area">
                                <div class="header_account-list top_links">
                                    <a href="{{ route('login') }}"><i class="icon-users"></i></a>
                                </div>
                                <div class="header_account-list  mini_cart_wrapper">
                                    <a href="{{ route('cart') }}">
                                        <i class="icon-shopping-bag"></i>
                                        <span class="item_count">2</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header area end-->
