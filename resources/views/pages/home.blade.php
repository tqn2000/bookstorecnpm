@extends('welcome')
@section('content')
<div class="site-main">
                <div class="main">
                    <!-- respon category table  -->
                    <div class="category-respon">
                        <div class="name-category d-flex justify-content-between">
                            <span>DANH MỤC</span>
                            <button class="btn-show-category"><i class="bi bi-list-stars"></i></button>
                        </div>
                        < <div class="respon-ul">
                            <ul class="list-unstyled">
                                @foreach($categorys as $category )
                                
                                <li><a href=" "><span><i class="fas fa-star"></i>{{ $category-> Name }}</span></a></li>
                              
                                @endforeach
                                <li><a href=" "><span><i class="fas fa-star"></i>Tin Tức-Sự Kiện</span></a></li>
                                <li><a href=" "><span><i class="fas fa-star"></i>Giới thiệu</span></a></li>
                                <li><a href=" "><span><i class="fas fa-star"></i>Liên hệ</span></a></li>
                            </ul>
                        </div> 
                    </div>
                    <div class="home-slider ">
                        <div class="home-list-slider ">
                            <ul class="d-block list-unstyled ">
                            @foreach($categorys as $category )
                                <!-- <li><a href=" "><span>Sách văn học</span></a></li>
                                <li><a href=" "><span>Sách kỹ năng</span></a></li>
                                <li><a href=" "><span>Sách Thiếu Nhi</span></a></li>
                                <li><a href=" "><span>Combo</span></a></li>
                                <li><a href=" "><span>Sách Tham khảo</span></a></li>
                                <li><a href=" "><span>Truyện Tranh</span></a></li>
                                <li><a href=" "><span>Văn Phòng Phẩm</span></a></li> -->
                                <li><a href=" "><span>{{ $category-> Name }}</span></a></li>
                               
                            @endforeach
                            <li><a href=" "><span>Tin Tức-Sự Kiện</span></a></li>
                                <li><a href=" "><span>Giới thiệu</span></a></li>
                                <li><a href=" "><span>Liên hệ</span></a></li>
                            </ul>
                        </div>
                        <div class="banner ">  
                            <img src="{{('public/User/IMAGE/slideshow_1.jpg ')}}" alt=" ">
                            <img src="{{('public/User/IMAGE/slideshow_2.jpg ')}} " alt=" ">
                        </div>
                    </div>
                    <div class="container-fluid ban-book mb-5 ">
                        <div class="row d-flex ">
                            <div class="img-banner-child category-book ">
                                <div class="row w-100 m-0 align-items-center h-100 p-2 ">
                                    <div class="col-4 kind-item-book ">
                                        <a href=" ">
                                            <img src="{{('public/User/IMAGE/icon-1.png ')}} " alt=" ">
                                            <span>Kỹ năng</span>
                                        </a>
                                    </div>
                                    <div class="col-4 kind-item-book ">
                                        <a href=" ">
                                            <img src="{{('public/User/IMAGE/icon-2.png ')}}  " alt=" ">
                                            <span>Văn học</span>
                                        </a>
                                    </div>
                                    <div class="col-4 kind-item-book ">
                                        <a href=" ">
                                            <img src="{{('public/User/IMAGE/icon-3.png ')}}  " alt=" ">
                                            <span>Truyện tranh</span>
                                        </a>
                                    </div>
                                    <div class="col-4 kind-item-book ">
                                        <a href=" ">
                                            <img src="{{('public/User/IMAGE/icon-4.png ')}}  " alt=" ">
                                            <span>Thiếu nhi</span>
                                        </a>
                                    </div>
                                    <div class="col-4 kind-item-book ">
                                        <a href=" ">
                                            <img src="{{('public/User/IMAGE/icon-5.png ')}} " alt=" ">
                                            <span>Tham khảo</span>
                                        </a>
                                    </div>
                                    <div class="col-4 kind-item-book ">
                                        <a href=" ">
                                            <img src="{{('public/User/IMAGE/icon-6.png ')}}  " alt=" ">
                                            <span>Ưu đãi</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="img-banner-child ">
                                <a href=" ">
                                    <img src="https://theme.hstatic.net/200000290933/1000682082/14/img_banner_1.jpg?v=116 " alt=" ">
                                </a>
                            </div>
                            <div class="img-banner-child ">
                                <a href=" ">
                                    <img src="https://theme.hstatic.net/200000290933/1000682082/14/img_banner_2.jpg?v=116 " alt=" ">
                                </a>
                            </div>
                            <div class="img-banner-child ">
                                <a href=" ">
                                    <img src="https://theme.hstatic.net/200000290933/1000682082/14/img_banner_3.jpg?v=116 " alt=" ">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-selling p-0 ">
                        <h5>BÁN CHẠY</h5>
                        <div class="hot-selling-row ">
                            @foreach($products as $product)
                            <div class="list-hot-selling ">
                                <div class="item-sell ">
                                    <p class="d-flex justify-content-center "><span class="discount ">-10%</span></p>
                                    <div class="btn-custom-action d-flex justify-content-between ">
                                        <button class="btn-quick-view "><i class="far fa-chart-bar "></i><span>Xem nhanh</span></button>
                                        <button class="btn-cart d-flex "><span>+ Thêm vào giỏ</span><i class="bi bi-cart3 ps-1 "></i></button>
                                    </div>
                                    <div class="img-hot-book ">
                                        <img src="{{$product -> Url}} " alt=" ">
                                    </div>
                                    <div class="pro-infor ">
                                        <a href=" " title="{{$product->ProductName}} " class="pro-name ">
                                            <p>{{$product->ProductName}}</p>
                                        </a>
                                        <p class="price d-flex justify-content-center ">
                                            <span class="sold-price ">{{$product->PriceProduct}}<span>đ</span></span>
                                            <del class="initial-price ">{{round((($product->PriceProduct)*10)/9)}}<span>đ</span></del>
                                        </p>
                                    </div>   
                                  
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- <div class="ban-quick-view">
                    <div class="mode-view">
                        <div class="overlay">
                        </div>
                        <div class="quick-view-pro">
                            <div class="d-flex justify-content-between p-3 title-pro">
                                <h5>COMBO PHÁT TRIỂN TOÀN DIỆN - BỘ SÁCH 5 CUỐN KỸ NĂNG SỐNG DÀNH CHO TRẺ</h5>
                                <button class="close-quick-view"><i class="fas fa-times-circle"></i></button>
                            </div>
                            <div class="container-fluid view-info">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="quick-view-img">
                                            <img src="https://product.hstatic.net/200000290933/product/nhat-dinh-thanh-cong_8fef3134c9ee40b6aa2c1d31252d1e36.jpg" alt="">
                                        </div>
                                        <div class="row img-child-view">
                                            <div class="col-4"><img src="https://product.hstatic.net/200000290933/product/nhat-dinh-thanh-cong_8fef3134c9ee40b6aa2c1d31252d1e36.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pt-5">
                                        <div class="quick-price">
                                            <span class="quick-sold-price">61.200<span>đ</span></span>
                                            <del class="quick-initial-price">68.000<span>đ</span></del>
                                        </div>
                                        <label class="number-name">Số lượng</label>
                                        <div class="number-value">
                                            <input type="number" min="1" value="1">
                                        </div>
                                        <div>
                                            <button class="btn-add-cart"><i class="fas fa-cart-plus"></i>THÊM VÀO GIỎ</button>
                                            <span class="ps-2">hoặc</span>
                                            <a href="" style="text-decoration: none; color: #E05543;font-weight: bold;">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="featured-product ">
                    <div class="d-flex justify-content-between title-feature mb-2 ">
                        <h5>SẢN PHẨM NỔI BẬT</h5>
                        <a href=" " class="more-link">
                                Xem thêm
                                <i class="fas fa-chevron-circle-right "></i>
                            </a>
                    </div>
                    <div class="container-fluid pb-5 ps-0 pe-0">
                        <div class="d-flex banner-pro-feature">
                            <div class="hidden-xs banner-left-feature">
                                <img src="{{('public/User/IMAGE/banner-left-1.jpg ')}}  " alt=" ">
                            </div>
                            <div class="banner-right-feature ps-3 pe-0 ps-sm-0 ps-md-3">
                                <div class="container-fluid p-0">
                                    <div class="row list-highlight-pro ">
                                        <div class="col-md-3 mb-3 h-auto col-sm-6">
                                            <div class="item-sell" id="1">
                                                <p class="d-flex justify-content-center "><span class="discount ">-10%</span></p>
                                                <div class="btn-custom-action d-flex justify-content-between ">
                                                    <button class="btn-quick-view "><i class="far fa-chart-bar "></i><span>Xem nhanh</span></button>
                                                    <button class="btn-cart d-flex "><span>+ Thêm vào giỏ</span><i class="bi bi-cart3 ps-1 "></i></button>
                                                </div>
                                                <div class="img-hot-book ">
                                                    <img src="https://product.hstatic.net/200000290933/product/z2539880070382_da52894a5ee431f7217caab2b078b3d0_067327ff13614828972efe780b904caa_large.jpg " alt=" ">
                                                </div>
                                                <div class="pro-infor ">
                                                    <a href=" " title="BỘ SÁCH KỸ NĂNG SỐNG DÀNH CHO TRẺ - MÌNH KHÔNG ĐỂ MẸ PHẢI LO LẮNG " class="pro-name ">
                                                        <p>BỘ SÁCH KỸ NĂNG SỐNG DÀNH CHO TRẺ - MÌNH KHÔNG ĐỂ MẸ PHẢI LO LẮNG</p>
                                                    </a>
                                                    <p class="price d-flex justify-content-center ">
                                                        <span class="sold-price ">61.200<span>đ</span></span>
                                                        <del class="initial-price ">68.000<span>đ</span></del>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 b-3 col-sm-6">
                                            <div class="item-sell ">
                                                <p class="d-flex justify-content-center "><span class="discount ">-10%</span></p>
                                                <div class="btn-custom-action d-flex justify-content-between ">
                                                    <button class="btn-quick-view "><i class="far fa-chart-bar "></i><span>Xem nhanh</span></button>
                                                    <button class="btn-cart d-flex "><span>+ Thêm vào giỏ</span><i class="bi bi-cart3 ps-1 "></i></button>
                                                </div>
                                                <div class="img-hot-book ">
                                                    <img src="https://product.hstatic.net/200000290933/product/z2539880070382_da52894a5ee431f7217caab2b078b3d0_067327ff13614828972efe780b904caa_large.jpg " alt=" ">
                                                </div>
                                                <div class="pro-infor ">
                                                    <a href=" " title="BỘ SÁCH KỸ NĂNG SỐNG DÀNH CHO TRẺ - MÌNH KHÔNG ĐỂ MẸ PHẢI LO LẮNG " class="pro-name ">
                                                        <p>BỘ SÁCH KỸ NĂNG SỐNG DÀNH CHO TRẺ - MÌNH KHÔNG ĐỂ MẸ PHẢI LO LẮNG</p>
                                                    </a>
                                                    <p class="price d-flex justify-content-center ">
                                                        <span class="sold-price ">61.200<span>đ</span></span>
                                                        <del class="initial-price ">68.000<span>đ</span></del>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 b-3 col-sm-6">
                                            <div class="item-sell ">
                                                <p class="d-flex justify-content-center "><span class="discount ">-10%</span></p>
                                                <div class="btn-custom-action d-flex justify-content-between ">
                                                    <button class="btn-quick-view "><i class="far fa-chart-bar "></i><span>Xem nhanh</span></button>
                                                    <button class="btn-cart d-flex "><span>+ Thêm vào giỏ</span><i class="bi bi-cart3 ps-1 "></i></button>
                                                </div>
                                                <div class="img-hot-book ">
                                                    <img src="https://product.hstatic.net/200000290933/product/z2539880070382_da52894a5ee431f7217caab2b078b3d0_067327ff13614828972efe780b904caa_large.jpg " alt=" ">
                                                </div>
                                                <div class="pro-infor ">
                                                    <a href=" " title="BỘ SÁCH KỸ NĂNG SỐNG DÀNH CHO TRẺ - MÌNH KHÔNG ĐỂ MẸ PHẢI LO LẮNG " class="pro-name ">
                                                        <p>BỘ SÁCH KỸ NĂNG SỐNG DÀNH CHO TRẺ - MÌNH KHÔNG ĐỂ MẸ PHẢI LO LẮNG</p>
                                                    </a>
                                                    <p class="price d-flex justify-content-center ">
                                                        <span class="sold-price ">61.200<span>đ</span></span>
                                                        <del class="initial-price ">68.000<span>đ</span></del>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 b-3 col-sm-6">
                                            <div class="item-sell ">
                                                <p class="d-flex justify-content-center "><span class="discount ">-10%</span></p>
                                                <div class="btn-custom-action d-flex justify-content-between ">
                                                    <button class="btn-quick-view "><i class="far fa-chart-bar "></i><span>Xem nhanh</span></button>
                                                    <button class="btn-cart d-flex "><span>+ Thêm vào giỏ</span><i class="bi bi-cart3 ps-1 "></i></button>
                                                </div>
                                                <div class="img-hot-book ">
                                                    <img src="https://product.hstatic.net/200000290933/product/z2539880070382_da52894a5ee431f7217caab2b078b3d0_067327ff13614828972efe780b904caa_large.jpg " alt=" ">
                                                </div>
                                                <div class="pro-infor ">
                                                    <a href=" " title="BỘ SÁCH KỸ NĂNG SỐNG DÀNH CHO TRẺ - MÌNH KHÔNG ĐỂ MẸ PHẢI LO LẮNG " class="pro-name ">
                                                        <p>BỘ SÁCH KỸ NĂNG SỐNG DÀNH CHO TRẺ - MÌNH KHÔNG ĐỂ MẸ PHẢI LO LẮNG</p>
                                                    </a>
                                                    <p class="price d-flex justify-content-center ">
                                                        <span class="sold-price ">61.200<span>đ</span></span>
                                                        <del class="initial-price ">68.000<span>đ</span></del>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 b-3 col-sm-6">
                                            <div class="item-sell ">
                                                <p class="d-flex justify-content-center "><span class="discount ">-10%</span></p>
                                                <div class="btn-custom-action d-flex justify-content-between ">
                                                    <button class="btn-quick-view "><i class="far fa-chart-bar "></i><span>Xem nhanh</span></button>
                                                    <button class="btn-cart d-flex "><span>+ Thêm vào giỏ</span><i class="bi bi-cart3 ps-1 "></i></button>
                                                </div>
                                                <div class="img-hot-book ">
                                                    <img src="https://product.hstatic.net/200000290933/product/z2539880070382_da52894a5ee431f7217caab2b078b3d0_067327ff13614828972efe780b904caa_large.jpg " alt=" ">
                                                </div>
                                                <div class="pro-infor ">
                                                    <a href=" " title="BỘ SÁCH KỸ NĂNG SỐNG DÀNH CHO TRẺ - MÌNH KHÔNG ĐỂ MẸ PHẢI LO LẮNG " class="pro-name ">
                                                        <p>BỘ SÁCH KỸ NĂNG SỐNG DÀNH CHO TRẺ - MÌNH KHÔNG ĐỂ MẸ PHẢI LO LẮNG</p>
                                                    </a>
                                                    <p class="price d-flex justify-content-center ">
                                                        <span class="sold-price ">61.200<span>đ</span></span>
                                                        <del class="initial-price ">68.000<span>đ</span></del>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="new-content pt-5 ">
                        <h5 class="mb-3 ">
                            BÀI VIẾT MỚI
                        </h5>
                        <div class=" container-fluid p-0 ">
                            <div class="row ">
                                <div class="col-md-3 items-content col-sm-12">
                                    <div class="child-item ">
                                        <div class="img-content ">
                                            <a href=" ">
                                                <img src="https://file.hstatic.net/200000290933/article/ong-nguyen-trung-kien-pho-giam-doc-ns-tri-duc-phat-bieu-tai-buoi-le_53c281183a094a39b429056e29ad7167.jpg " alt=" ">
                                            </a>
                                        </div>
                                        <div class="title-content">
                                            <a href=" " class="review ">
                                                <p>Nhà sách Trí Đức dành một quỹ khuyến học 30 triệu đồng trao tặng cho phường Láng Hạ</p>
                                            </a>
                                            <span class="d-block update-content ">Ngày đăng: <span>04/03/2021</span></span>
                                            <a href=" " class="see-more ">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 "></div>
                                <div class="col-3 "></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection