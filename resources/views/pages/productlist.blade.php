@extends('welcome')
@section('productlist')
<div class="site-main category-product-show">
    <div class="main">
        <div class="category-respon">
            <div class="name-category d-flex justify-content-between">
                <span>DANH MỤC</span>
                <button class="btn-show-category"><i class="bi bi-list-stars"></i></button>
            </div>
            <div class="respon-ul">
                <ul class="list-unstyled">
                    <li><a href=" "><span><i class="fas fa-star"></i>Sách văn học</span></a></li>
                    <li><a href=" "><span><i class="fas fa-star"></i>Sách kỹ năng</span></a></li>
                    <li><a href=" "><span><i class="fas fa-star"></i>Sách Thiếu Nhi</span></a></li>
                    <li><a href=" "><span><i class="fas fa-star"></i>Combo</span></a></li>
                    <li><a href=" "><span><i class="fas fa-star"></i>Sách Tham khảo</span></a></li>
                    <li><a href=" "><span><i class="fas fa-star"></i>Truyện Tranh</span></a></li>
                    <li><a href=" "><span><i class="fas fa-star"></i>Văn Phòng Phẩm</span></a></li>
                    <li><a href=" "><span><i class="fas fa-star"></i>Tin Tức-Sự Kiện</span></a></li>
                    <li><a href=" "><span><i class="fas fa-star"></i>Giới thiệu</span></a></li>
                    <li><a href=" "><span><i class="fas fa-star"></i>Liên hệ</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- dẫn trang -->
    <div class="link-page">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/BookStore/home">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="/BookStore/home/8888">Sản phẩm</a></li>
                <li class="breadcrumb-item active categoryName" aria-current="page"></li>
            </ol>
        </nav>
    </div>
    <div class="list-group">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-3 sidebars cate-left">
                    <ul class="nav-ul d-block list-unstyled">
                        <li><a href="">Trang chủ</a></li>
                        <!-- bỏ href -->
                        <li>
                            <a id="8888" key="P1"><span>Sản phẩm <i id="target" class="fas fa-sort-down"></i></span></a>
                            <ul role="menu" class="p-0 sm-nowrap-parent">
                                @foreach($categorys as $category )
                                <li class="list-menu">
                                    <a id="{{$category-> ID}}" title="{{ $category-> Name }}" class="has-submenu submenu-1">{{ $category-> Name }}<i class="fas fa-caret-right" id="show-{{$category-> ID}}"></i></a>
                                    <ul class="sm-nowrap p-0 wrap-show-{{$category-> ID}}">
                                        @if($category-> CategoryChild)
                                        @foreach( $category-> CategoryChild as $item)
                                        <li>
                                            <a id="{{ $item-> ID }} " title="{{ $item-> Name }} ">{{ $item-> Name }}</a>
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
                <div class="col-lg-9">
                    <div class="intruct-pro d-flex justify-content-between align-items-center">
                        <h5></h5>
                        <div class="d-flex sorted-by align-items-center">
                            <span>Sắp xếp theo:</span>
                            <select class="form-select" aria-label="Default select example">
                                <option selected value="1">Giá tăng dần</option>
                                <option value="2">Giá giảm dần</option>
                                <option value="3">Cũ nhất</option>
                                <option value="4">Mới nhất</option>
                                <option value="5">A-Z</option>
                                <option value="6">Z-A</option>
                                <option value="7">Bán chạy nhất</option>
                              </select>
                        </div>
                    </div>
                    <div class="lst-another-pros">
                        <div class="container-fluid p-0">
                            <div class="row list-highlight-pro gx-3" id="pro-auth">
                                
                                
                            </div>
                            <div id="pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Xem nhanh sản phẩm -->
    <div class="ban-quick-view">
        <div class="mode-view">
            <div class="overlay">
            </div>
            <div class="quick-view-pro" data="">
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
                            <!-- <div class="row img-child-view">
                                <div class="col-4"><img src="https://product.hstatic.net/200000290933/product/nhat-dinh-thanh-cong_8fef3134c9ee40b6aa2c1d31252d1e36.jpg" alt=""></div>
                            </div> -->
                        </div>
                        <div class="col-lg-6 pt-5">
                            <div class="quick-price">
                                <span class="quick-sold-price"><span class="sprice">90,000</span><span>đ</span></span>
                                <del class="quick-initial-price"><span class="iprice">68.000</span><span>đ</span></del>
                            </div>
                            <label class="number-name">Số lượng</label>
                            <div class="number-value">
                                <input type="number" min="1" value="1">
                            </div>
                            <div>
                                <button class="btn-add-cart" onclick="addCartView()"><i class="fas fa-cart-plus"></i>THÊM VÀO GIỎ</button>
                                <span class="ps-2">hoặc</span>
                                <a id="link-detail-pro" data-link="" style="cursor: pointer; text-decoration: none; color: #E05543;font-weight: bold;">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('productjs')
<script src="{{asset('public/User/JS/product.js')}}"></script>
@endsection