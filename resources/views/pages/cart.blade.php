@extends('welcome')
@section('cart')
<div class="site-main main-grid">
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
    <div id="myGrid">
        <h5>GIỎ HÀNG</h5>
         <div class="text-center header-page">
             <p>Không có sản phẩm nào trong giỏ hàng!</p>
             <div class="col-12 pb-lg-4">
                <a href="/BookStore/all/8888" class="text-decoration-none link-reply-pro">
                    <i class="fas fa-reply"></i>
                    <span>Tiếp tục mua hàng</span>
                </a>
            </div>
         </div>
        <table class="table mb-0 tb-page-ble" id="tbUser">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá tiền</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="tbody-pro-cart">
            </tbody>
          </table>
          <div class="row w-100 m-0 gy-2 cd-page-ble">
              <div class="col-lg-6 col-sm-12">
                <p class="mb-1 text-note">Ghi chú</p>
                <textarea name="note" id="note-user" cols="50" rows="4"></textarea>
              </div>
              <div class="col-lg-6 col-sm-12 btn-act d-flex justify-content-end align-items-end">
                <button class="btn-update-cart" onclick="updateCart()">
                    <span>Cập nhật</span>
                    <i class="fas fa-chevron-right"></i>
                </button>
                <a href="/BookStore/pay">
                  <button class="btn-checkout">
                      <span>Thanh toán</span>
                      <i class="fas fa-chevron-right"></i>
                  </button>
               </a>
            </div>
            <div class="col-12 pb-lg-4">
                <a href="" class="text-decoration-none link-reply-pro">
                    <i class="fas fa-reply"></i>
                    <span>Tiếp tục mua hàng</span>
                </a>
            </div>
          </div>
    </div>
</div>
@endsection