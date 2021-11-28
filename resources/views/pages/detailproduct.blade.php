
@extends('welcome')
@section('detailproduct')

<div class="site-main">
 
    <!-- dẫn trang -->
    @foreach ($products as $product )
    <div class="link-page">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="/BookStore/home">Trang chủ</a></li>
              <li class="breadcrumb-item"><a href="/BookStore/all/8888">Sản phẩm</a></li>
              <li style="color: rgb(168, 149, 149)" class="breadcrumb-item active" aria-current="page">{{$product->ProductName}}</li>
            </ol>
          </nav>
    </div>
    @endforeach
    <!-- chi tiết sản phẩm -->
    <div class="info-detail-product">
        <div class="container-fluid">
            <div class="row">
                @foreach ($products as $product )  
                
                <div class="col-lg-4 image-pro-detail ps-0 col-md-12 pe-md-0 pe-0">
                    <img id="pro-image-{{$product->ID}}" src="{{$product->Url}}" alt="">
                    {{-- <span class="sales-dis"><small>Sale</small> 10%</span> --}}
                </div>
                <div class="col-lg-5 content-info-detail col-md-12">
                    <h3 id="pro-name-{{$product->ID}}">{{$product->ProductName}}</h3>
                    <div class="price-pro d-flex align-items-end">
                        <span class="saled-price me-2"><span id="salprice-pro-{{$product->ID}}">{{$product->PriceProduct}}</span><ins>đ</ins></span>
                        {{-- <del class="initial-pro-price"><span>{{round((($product->PriceProduct)*10)/9)}}</span><ins>đ</ins></del> --}}
                    </div>
                    <p class="content-pro mb-0">
                        {{$product->Description}}
                        
                    </p>
                   
                    <div class="number-guest-book d-flex pt-4 pb-4" id="number-book-{{$product->ID}}">
                        <button id="btn-decrease"><span>-</span></button>
                        <input type="number" value="1" min="1">
                        <button id="btn-increase"><span>+</span></button>
                    </div>
                    <div class="btn-processing d-flex justify-content-between">
                        <div class="container-fluid ps-3 pe-3">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <button class="btn-cart-pro w-100 set-cart" onclick="setCart('{{$product->ID}}')">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span>Thêm vào giỏ</span>
                                    </button>
                                </div>
                                <div class="col-lg-6 col-md-12 pt-md-3 pt-lg-0">
                                    <button class="btn-buy-now w-100">
                                        <i class="fas fa-check"></i>
                                        <span>Mua ngay</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="tag d-flex">
                        <span>Tags:</span>
                        <ul>
                            <li><a href="">Sách thiếu nhi</a></li>
                            <li><a href="">Sách mới</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3 pe-0">
                    <div class="policy">
                        <p>Chính sách giao hàng</p>
                        <div>
                            <i class="fas fa-truck"></i>
                            <span>Giao hàng bởi Giaohangtietkiem</span>
                        </div>
                        <div>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Giao sách tận tay</span>
                        </div>
                        <div>
                            <i class="fas fa-gift"></i>
                            <span>Cam kết sách chuẩn, hoàn tiền 500% khi phát hiện sách giả, sách lậu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- các sản phẩm liên quan -->
    <div class="view-ld-pro">
        <div class="container-fluid p-0">
            <div class="row gx-3">
                <div class="col-lg-3 pro-right-contact d-none d-lg-block">
                    <!-- Sản phẩm mới  -->
                    <div class="new-products">
                        <div class="title-new-pro">
                            <h6>Sản phẩm mới</h6>
                        </div>
                        <div class="ls-new-pro">
                            <div class="info-new-pro">
                                <!-- các spham trong sản phẩm mới -->
                                <div class="item-new-pro d-flex">
                                    <a href="">
                                        <img src="https://product.hstatic.net/200000290933/product/004.u2377.d20160718.t134151_d18bf2012feb40a6a54024290074700d_medium.jpg" alt="">
                                    </a>
                                    <div class="view-new-pro">
                                        <a href="">3000 từ vựng Tiếng Anh thông dụng nhất</a>
                                        <div>
                                            <span>22500<ins>đ</ins></span>
                                            <del>25000<ins>đ</ins></del>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-new-pro d-flex">
                                    <a href="">
                                        <img src="https://product.hstatic.net/200000290933/product/11641158434846_833cebfcb8a545a788fc6772b09ce861_medium.jpg" alt="">
                                    </a>
                                    <div class="view-new-pro">
                                        <a href="">3000 từ vựng Tiếng Anh thông dụng nhất</a>
                                        <div>
                                            <span>22500<ins>đ</ins></span>
                                            <del>25000<ins>đ</ins></del>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-new-pro d-flex">
                                    <a href="">
                                        <img src="https://product.hstatic.net/200000290933/product/11641158434846_833cebfcb8a545a788fc6772b09ce861_medium.jpg" alt="">
                                    </a>
                                    <div class="view-new-pro">
                                        <a href="">3000 từ vựng Tiếng Anh thông dụng nhất</a>
                                        <div>
                                            <span>22500<ins>đ</ins></span>
                                            <del>25000<ins>đ</ins></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info-new-pro">
                                <!-- các spham trong sản phẩm mới -->
                                <div class="item-new-pro d-flex">
                                    <a href="">
                                        <img src="https://product.hstatic.net/200000290933/product/004.u2377.d20160718.t134151_d18bf2012feb40a6a54024290074700d_medium.jpg" alt="">
                                    </a>
                                    <div class="view-new-pro">
                                        <a href="">3000 từ vựng Tiếng Anh thông dụng nhất</a>
                                        <div>
                                            <span>22500<ins>đ</ins></span>
                                            <del>25000<ins>đ</ins></del>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-new-pro d-flex">
                                    <a href="">
                                        <img src="https://product.hstatic.net/200000290933/product/11641158434846_833cebfcb8a545a788fc6772b09ce861_medium.jpg" alt="">
                                    </a>
                                    <div class="view-new-pro">
                                        <a href="">3000 từ vựng Tiếng Anh thông dụng nhất</a>
                                        <div>
                                            <span>22500<ins>đ</ins></span>
                                            <del>25000<ins>đ</ins></del>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-new-pro d-flex">
                                    <a href="">
                                        <img src="https://product.hstatic.net/200000290933/product/11641158434846_833cebfcb8a545a788fc6772b09ce861_medium.jpg" alt="">
                                    </a>
                                    <div class="view-new-pro">
                                        <a href="">3000 từ vựng Tiếng Anh thông dụng nhất</a>
                                        <div>
                                            <span>22500<ins>đ</ins></span>
                                            <del>25000<ins>đ</ins></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="banner-choiced-pro">
                        <img src="https://theme.hstatic.net/200000290933/1000682082/14/left_image_ad.jpg?v=117" alt="">
                    </a>
                    <a href=""  class="banner-choiced-pro">
                        <img src="https://theme.hstatic.net/200000290933/1000682082/14/left_image_ad_2.jpg?v=117" alt="">
                    </a>
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- Mô tả thông tin sản phẩm  -->
                    <div class="wrapper-deatil">
                        <div class="sp-inro">
                            <span class="wrapper-title">Mô tả sản phẩm</span>
                        </div>
                        <div class="pro-info-decription">
                            @foreach ($products as $product )
                            <p>   {{$product->Description}}</p>  
                            @endforeach
                           
                        </div>
                    </div>
                    <div class="another-pros text-center mt-4">
                        <h5 class="text-uppercase mb-3 title-another-pros">Sản phẩm khác</h5>
                        <div class="lst-another-pros">
                            <div class="container-fluid p-0">
                                <div class="row list-highlight-pro gx-3">
                                    @foreach ($relateproducts as $relateproduct  )
                                    <div class="col-md-3 mb-3 h-auto col-sm-6">
                                        <div class="item-sell" id="1">
                                            <p class="d-flex justify-content-center "><span class="discount ">-10%</span></p>
                                            <div class="btn-custom-action d-flex justify-content-between ">
                                                <button class="btn-quick-view "><i class="far fa-chart-bar "></i><span>Xem nhanh</span></button>
                                                <button class="btn-cart d-flex "><span>+ Thêm vào giỏ</span><i class="bi bi-cart3 ps-1 "></i></button>
                                            </div>
                                            <div class="img-hot-book ">
                                                <img src="{{$relateproduct->Url}}" alt="">
                                            </div>
                                            <div class="pro-infor ">
                                                <a href=" {{ $relateproduct->ID}}" title="{{$relateproduct->ProductName}} " class="pro-name ">
                                                    <p>{{$relateproduct->ProductName}}</p>
                                                </a>
                                                <p class="price d-flex justify-content-center ">
                                                    <span class="sold-price ">{{$relateproduct->PriceProduct}}<span>đ</span></span>
                                                    
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
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
                                <a id="link-detail-pro" data-link="" style="cursor: pointer;text-decoration: none; color: #E05543;font-weight: bold;">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

