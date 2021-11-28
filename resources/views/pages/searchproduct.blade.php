@extends('welcome')
@section('searchproduct')
 <div class="search-page">
                <div class="bann-search">
                    <h4>Tìm Kiếm</h4>
                    <p><span>Kết quả tìm kiếm cho </span><span>"{{$s}}"</span></p>
                </div>
                <div class="container-fluid p-0">
                    <div class="row search-product">
                    @foreach($search as $ser)
                        <div class="col-md-3 mb-3 h-auto col-sm-6">
                            <div class="item-sell" id="{{$ser -> ID}}" data="{{$ser -> ID}}" >
                                <p class="d-flex justify-content-center "><span class="discount ">-10%</span></p>
                                <div class="btn-custom-action d-flex justify-content-between ">
                                    <button class="btn-quick-view" onclick="viewModel('{{$ser -> ID}}')"><i class="far fa-chart-bar "></i><span>Xem nhanh</span></button>
                                    <button class="btn-cart d-flex" onclick="setCart('{{$ser -> ID}}')"><span>+ Thêm vào giỏ</span><i class="bi bi-cart3 ps-1 "></i></button>
                                </div>
                                <div class="img-hot-book ">
                                    <a href="">
                                        <img id="pro-image-{{$ser -> ID}}" src="{{$ser -> Url}}" alt="">
                                    </a>
                                </div>
                                <div class="pro-infor ">
                                    <a href=" " title="{{$ser -> ProductName}} " class="pro-name ">
                                        <p id="pro-name-{{$ser -> ID}}">{{$ser -> ProductName}}</p>
                                    </a>
                                    <p class="price d-flex justify-content-center ">
                                        <span class="sold-price"><span id="salprice-pro-{{$ser -> ID}}">{{$ser->PriceProduct}}</span><ins>đ</ins></span>
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
                    </div>
                     {{-- {{ $search->links() }} --}}
                </div>
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
                                            <a id="link-detail-pro" data-link="" style="text-decoration: none; color: #E05543;font-weight: bold;">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pagination">
                </div>
            </div>
@endsection
@section('searchproductjs')
<script>
    var app = @json($search);
</script>
@endsection