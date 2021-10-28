
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà sách Trí Đức</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/public/User/CSS/home.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/public/User/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{asset('/public/User/CSS/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('/public/User/CSS/font.css')}}">
    @yield('detailproductcss')
    {{-- <style>
        @font-face {
    font-family: Roboto Condensed;
    src: url("/public/User/FONTS/Roboto_Condensed/RobotoCondensed-BoldItalic.ttf");
  }
  
  @font-face {
    font-family: Roboto-Italic;
    src: url("/public/User/FONTS/Roboto_Condensed/RobotoCondensed-LightItalic.ttf");
  }
  body {
  font-family: Roboto Condensed !important;
}
header {
  font-family: Roboto-Italic !important;
}
.category-respon {
  font-family: Roboto-Italic !important;
}
.home-slider {
  font-family: Roboto-Italic !important;
}
.ban-book {
  font-family: Roboto-Italic !important;
}
.btn-custom-action button {
  font-family: Roboto-Italic !important;
}
.sold-price {
  font-family: Roboto-Italic !important;
}
.more-link {
  font-family: Roboto-Italic !important;
}

    </style> --}}
</head>

<body>
    <div class="nav-wrapper">
        <!-- nav-3 when responsive -->
        <div class="list-menu-res">
            <ul class="nav-ul d-block list-unstyled">
                <li><a href="">Trang chủ</a></li>
                <li class="has-children">
                    <a class="link-pro"><span>Sản phẩm <i class="fas fa-caret-right"></i></span></a>
                </li>
                <li><a href=" ">Giới thiệu</a></li>
                <li><a href=" ">Blogs</a></li>
                <li><a href=" ">Liên hệ</a></li>
            </ul>
            <ul class="menu-child-1" role="menu">
                <li class="btn-turn-pro">
                    <a>SẢN PHẨM</a>
                </li>
                <li class="btn-come-back">
                    <a><i class="fas fa-caret-left pe-2"></i><span>Quay Lại</span></a>
                </li>
                <li class="list-menu">
                    <a href="" title="Sách Văn học" class="has-submenu submenu-1 d-flex justify-content-between">Sách Văn học<i class="fas fa-caret-right"></i></a>
                    <!-- <ul class="menu3 menu3-1  sm-nowrap">
                        <li>
                            <a href="" title="Văn học Việt Nam ">Văn học Việt Nam</a>
                        </li>
                        <li>
                            <a href=" " title="Văn học Nước ngoài ">Văn học Nước ngoài</a>
                        </li>

                        <li>
                            <a href="" title="Truyện Giả tưởng - Huyền Bí - Phiêu Lưu - Kinh Dị ">Truyện Giả tưởng - Huyền Bí - Phiêu Lưu - Kinh Dị</a>
                        </li>

                        <li>
                            <a href="" title="Truyện ngắn - Tản văn - Tạp Văn - Ngôn Tình ">Truyện ngắn - Tản văn - Tạp Văn - Ngôn Tình</a>
                        </li>

                        <li>
                            <a href="" title="Tiểu Thuyết - Truyện Dài ">Tiểu Thuyết - Truyện Dài</a>
                        </li>

                        <li>
                            <a href="" title="Tiểu sử - Hồi ký - Du ký ">Tiểu sử - Hồi ký - Du ký</a>
                        </li>
                        <li>
                            <a href="" title="Sách Kinh Điển ">Sách Kinh Điển</a>
                        </li>
                    </ul> -->
                </li>
                <li class="list-menu">
                    <a href=" " title="Sách Kỹ năng " class="has-submenu d-flex justify-content-between">Sách Kỹ năng<i class="fas fa-caret-right"></i></span></a>
                    <!-- <ul class="menu3 menu3-2 sm-nowrap">
                        <li>
                            <a href="" title="Sách Kỹ Năng Trong GIa Đình ">Sách Kỹ Năng Trong GIa Đình</a>
                        </li>

                        <li>
                            <a href="" title="Sách Kỹ Năng Trong Cuộc Sống - Làm Việc ">Sách Kỹ Năng Trong Cuộc Sống - Làm Việc</a>
                        </li>

                        <li>
                            <a href="" title="Sách Tuổi Mới Lớn ">Sách Tuổi Mới Lớn</a>
                        </li>

                    </ul> -->

                </li>
                <li>
                    <a href="" title="Sách Thiếu nhi ">Sách Thiếu nhi</a>
                </li>
                <li>
                    <a href="" title="Sách Kinh doanh ">Sách Kinh doanh</a>
                </li>
                <li class="list-menu">
                    <a href="" title="Sách Tham khảo " class="has-submenu d-flex justify-content-between">Sách Tham khảo<i class="fas fa-caret-right"></i></span></a>
                    <!-- <ul class="menu3 menu3-3">
                        <li>
                            <a href="" title="Sách Kiến Thức ">Sách Kiến Thức</a>
                        </li>
                        <li>
                            <a href="" title="Sách Ngoại Ngữ ">Sách Ngoại Ngữ</a>
                        </li>
                        <li>
                            <a href="" title="Sách Giáo Dục - Học Tập ">Sách Giáo Dục - Học Tập</a>
                        </li>
                    </ul> -->
                </li>
                <li>
                    <a href="" title="Truyện tranh ">Truyện tranh</a>

                </li>
                <li>
                    <a href="" title="Văn phòng phẩm ">Văn phòng phẩm</a>

                </li>
                <li>
                    <a href="" title="Combo ">Combo</a>

                </li>
                <li>
                    <a href="" title="Sách Công Nghệ và Tin học ">Sách Công Nghệ và Tin học</a>
                </li>
                <li>
                    <a href="" title="Sách Chính Trị - Lịch Sử - Văn Hóa - Địa Lý ">Sách Chính Trị - Lịch Sử - Văn Hóa - Địa Lý</a>

                </li>

            </ul>
        </div>
        <div class="content-main">
            <div class="black-bag">
            </div>
            <header>
                <div class="site-topbar">
                    <div class="topbar-containner d-none d-lg-flex justify-content-between">
                        <p>Tri thức là sức mạnh</p>
                        <div class="lnk-action d-flex">
                            <a href=""><span>Đăng ký</span></a>
                            <a href=""><span>Đăng Nhập</span></a>
                            <div class="cart">
                                <a href="">
                                    <p><i class="fas fa-shopping-cart"></i> <span>Giỏ hàng : </span>0</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 
                        nav mobile and tablet -->
                    <div class="nav-repon-bar justify-content-between d-lg-none d-flex">
                        <button class="btn-nav-mobile"><i class="bi bi-list"></i></button>
                        <div class="mobile-menu-icon d-flex">
                            <a href="">
                                <i class="fas fa-user"></i>
                            </a>
                            <button class="btn-mobile-search">
                                    <i class="fas fa-search"></i>
                                </button>
                            <div class="cart">
                                <a href="">
                                    <p><i class="fas fa-shopping-cart"></i> <span>Giỏ hàng : </span>0</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu and logo -->
                <div class="site-botbar d-flex justify-content-between">
                    <div class="logo">
                        <a href="">
                            <img src="https://theme.hstatic.net/200000290933/1000682082/14/logo.png?v=116" alt="Nhà sách Trí Đức">
                        </a>
                    </div>
                    <div class="navbar">
                        <div class="nav-list">
                            <ul class="nav-ul d-flex list-unstyled">
                                <li><a href="">Trang chủ</a></li>
                                <li>
                                    <a href="" class="link-pro"><span>Sản phẩm <i class="fas fa-sort-down"></i></span></a>
                                    <ul class="menu-parent" role="menu">
                                        @foreach($categorys as $category )
                                    <li class="list-menu">
                                            <a href="" title="{{ $category-> Name }}" class="has-submenu submenu-1">{{ $category-> Name }}<i class="fas fa-caret-right"></i></a>
                                            <ul class="menu3 menu3-1 sm-nowrap">
                                                @if($category-> CategoryChild)
                                                @foreach( $category-> CategoryChild as $item)
                                    
                                                <li>
                                                    <a href="" title="{{ $item-> Name }} ">{{ $item-> Name }}</a>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li><a href=" ">Giới thiệu</a></li>
                                <li><a href=" ">Blogs</a></li>
                                <li><a href=" ">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="search-inp ">
                            <input type="text " placeholder="Tìm kiếm... ">
                            <button><i class="fas fa-search "></i></button>
                        </div>
                    </div>
                </div>
                <!-- show menu when responsiving-->
            </header>
            @yield('content')
            @yield('detailproduct')
            <footer>
                <div class="site-footer ">
                    <div class="container-fluid p-0 ">
                        <div class="row footer-icon ">
                            <div class="col-lg-3 ">
                                <div class="ps-2 ">
                                    <div class="ship-pro ">
                                        <i class="fas fa-truck "></i>
                                        <span>Giao hàng nhanh chóng</span>
                                    </div>
                                    <div>
                                        <span>Nhận hàng tận tay</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="ps-2 ">
                                    <div class="ship-pro ">
                                        <i class="fas fa-cog "></i>
                                        <span>Miễn phí đổi trả hàng</span>
                                    </div>
                                    <div>
                                        <span>Trong vòng 7 ngày</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="ps-2 ">
                                    <div class="phone ">
                                        <i class="fas fa-phone-alt "></i>
                                        <span>Đặt hàng trực tuyến</span>
                                    </div>
                                    <div>
                                        <span>SĐT: 024.6672.5121</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="ps-2 ">
                                    <div class="working-time ">
                                        <i class="far fa-clock "></i>
                                        <span>Làm viêc các ngày trong tuần</span>
                                    </div>
                                    <div>
                                        <span>Thứ 2 - CN</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row contact-store ">
                            <div class="col-lg-2 ">
                                <h5>Liên Kết</h5>
                                <ul>
                                    <li><a href=" "><span>Sản phẩm khuyến mãi</span></a></li>
                                    <li><a href=" "><span>Sản phẩm nổi bật</span></a></li>
                                    <li><a href=" "><span>Tất cả sản phẩm</span></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 ">
                                <h5>Hỗ trợ</h5>
                                <ul>
                                    <li><a href=" "><span>Trang chủ</span></a></li>
                                    <li><a href=" "><span>Sản phẩm</span></a></li>
                                    <li><a href=" "><span>Giới thiệu</span></a></li>
                                    <li><a href=" "><span>Blogs</span></a></li>
                                    <li><a href=" "><span>Liên hệ</span></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 ">
                                <h5>Dịch vụ</h5>
                                <ul>
                                    <li><a href=" "><span>Tìm kiếm</span></a></li>
                                    <li><a href=" "><span>Giới thiệu</span></a></li>
                                    <li><a href=" "><span>Chính sách đổi trả</span></a></li>
                                    <li><a href=" "><span>Chính sách bảo mật</span></a></li>
                                    <li><a href=" "><span>Điều khoản dịch vụ</span></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 connect-us mb-sm-2">
                                <h5>Kết nối với chúng tôi</h5>
                                <div class="fan-page "><iframe name="f3f38c06b9d9078 " width="1000px " height="300px " data-testid="fb:page Facebook Social Plugin " title="fb:page Facebook Social Plugin " frameborder="0 " allowtransparency="true
                                                            " allowfullscreen="true " scrolling="no " allow="encrypted-media " src="https://www.facebook.com/v10.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2f7e3fd0644914%26domain%3Dnhasachtriduc.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fnhasachtriduc.vn%252Ff3db12621977db4%26relation%3Dparent.parent&amp;container_width=277&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftriducbookstore&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false "
                                        style="border: none; visibility: visible; width: 320px; height: 130px; " class=" "></iframe>
                                </div>
                            </div>
                            <div class="col-lg-3 info-store ">
                                <h4>024.6672.5121</h4>
                                <span>Thứ 2 - Chủ Nhật: 8:00- 22:00</span>
                                <span class="address pt-3 pb-2 "><i class="fas fa-map-marker-alt "></i> 524 Đường Láng, Đống Đa, Hà Nội</span>
                                <span class="gmail pb-4 "><i class="far fa-envelope "></i> Triducbooks@gmail.com</span>
                                <a href=" " class="connect-fb ">
                                    <i class="fab fa-facebook "></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-info pt-4 pb-4 ">
                    <div class="link-copy ">
                        <a href=" ">Tìm kiếm</a><span> | </span>
                        <a href=" ">Giới thiệu</a><span> | </span>
                        <a href=" ">Chính sách đổi trả</a><span> | </span>
                        <a href=" ">Chính sách bảo mật</a><span> | </span>
                        <a href=" ">Điều khoản dịch vụ</a>
                    </div>
                    <div class="cp-right ">
                        <span>Copyright © 2021 Nhà Sách Trí Đức.</span>
                        <span class="powered ">Powered by Haravan.</span>
                    </div>
                    <a href=" " class="message ">
                        <svg width="60px " height="60px " viewBox="0 0 60 60 " cursor="pointer "><svg x="0 " y="0 " width="60px " height="60px "><g stroke="none " stroke-width="1 " fill="none " fill-rule="evenodd "><g><circle fill="#44bec7 " cx="30 " cy="30
                                                            " r="30 "></circle><svg x="10 " y="10 "><g transform="translate(0.000000, -10.000000) " fill="#FFFFFF "><g id="logo " transform="translate(0.000000, 10.000000) "><path d="M20,0 C31.2666,0 40,8.2528 40,19.4 C40,30.5472
                                                            31.2666,38.8 20,38.8 C17.9763,38.8 16.0348,38.5327 14.2106,38.0311 C13.856,37.9335 13.4789,37.9612 13.1424,38.1098 L9.1727,39.8621 C8.1343,40.3205 6.9621,39.5819 6.9273,38.4474 L6.8184,34.8894 C6.805,34.4513
                                                            6.6078,34.0414 6.2811,33.7492 C2.3896,30.2691 0,25.2307 0,19.4 C0,8.2528 8.7334,0 20,0 Z M7.99009,25.07344 C7.42629,25.96794 8.52579,26.97594 9.36809,26.33674 L15.67879,21.54734 C16.10569,21.22334 16.69559,21.22164
                                                            17.12429,21.54314 L21.79709,25.04774 C23.19919,26.09944 25.20039,25.73014 26.13499,24.24744 L32.00999,14.92654 C32.57369,14.03204 31.47419,13.02404 30.63189,13.66324 L24.32119,18.45264 C23.89429,18.77664 23.30439,18.77834
                                                            22.87569,18.45674 L18.20299,14.95224 C16.80079,13.90064 14.79959,14.26984 13.86509,15.75264 L7.99009,25.07344 Z "></path></g></g></svg></g>
                        </g>
                        </svg>
                        </svg>
                    </a>
                    <button class="btn-up "> 
                            <i class="fas fa-chevron-up "></i>
                        </button>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js " integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>
    <script type="text/javascript " src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js "></script>
    <script src="{{asset('public/User/JS/home.js')}}"></script>
    @yield('detailproductjs')
</body>

</html>