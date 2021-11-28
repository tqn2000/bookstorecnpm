@extends('welcome')
@section('pay')
<div class="site-main">
    <div class="link-cart-wrap w-100">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Giỏ hàng</a></li>
              <li class="breadcrumb-item active" aria-current="page">Giao hàng & thanh toán</li>
              <li class="breadcrumb-item active" aria-current="page">Xác nhận</li>
            </ol>
          </nav>
    </div>
    <div class="wrap-content-p">
        <div class="container-fluid">
            <h5>Thông tin thanh toán</h5>
            <div class="row mt-4">
                <div class="col-lg-7 info-user">
                    <form action="post" id="demoForm">
                        <div class="container-fluid p-0">
                            <div class="row gy-3 gx-3">
                                <div class="col-lg-12">
                                    <input class="w-100" type="text" placeholder="Họ và tên" name="user">
                                </div>
                                <div class="col-lg-6">
                                    <input class="w-100" type="email" placeholder="Email" name="email">
                                </div>
                                <div class="col-lg-6">
                                    <input class="w-100" type="text" placeholder="Số điện thoại" name="phone">
                                </div>
                                <div class="col-lg-12">
                                    <input class="w-100" type="text" placeholder="Địa chỉ" name="address"> 
                                </div>
                                <div class="col-4">
                                    <select class="form-select province" aria-label="Default select example"  name="province">
                                      <option selected id="province-title" value="">Chọn tỉnh / thành</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select district" aria-label="Default select example" name="district">
                                      <option selected value="">Chọn quận / huyện</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select ward" aria-label="Default select example" name="ward">
                                      <option selected value="">Chọn phường / xã</option>
                                    </select>
                                </div>
                                <div class="payment-methods">
                                    <h5>Phương thức thanh toán</h5>
                                    <div class="pay-home mt-2 mb-2">
                                        <input type="radio" name="pay-money" onchange="transaction(1)" id="paymoney1" key="1" />
                                        <label for="paymoney1">Thanh toán tại nhà</label>
                                    </div>
                                    <div class="pay-visa">
                                        <input type="radio" name="pay-money" onchange="transaction(2)" id="paymoney2" class="mb-3" key="2"/>
                                        <label for="paymoney2">Chuyển khoản qua ngân hàng</label>
                                        <div class="content-visa">
                                            <div class="text-center ">
                                                <h6>NGÂN HÀNG VIETCOMBANK - Chi nhánh Thành Công</h6>
                                                <h6>Số tài khoản: 0011004240922</h6>
                                                <h6 class="pt-3 pb-3">Chủ tài khoản:NGUYỄN ĐỨC DƯƠNG</h6>
                                            </div>
                                            <p>
                                                Nội dung chuyển khoản quý khách vui lòng điền theo cú pháp: "ID đơn hàng (đã được gửi tới mail) + Họ và tên"
                                            </p>
                                            <p>
                                                Sau khi giao dịch, bạn chụp ảnh màn hình bill thanh toán và liên hệ bộ phận chăm sóc khách hàng để được xác nhận thành công. Trí Đức sẽ liên hệ lại trong giờ hành chính, tối đa không quá 12 tiếng. Quý khách vui lòng để ý điện thoại để xác nhận đơn hàng.
                                            </p>
                                            <p>
                                                Xin chân thành cảm ơn quý khách đã tin tưởng và đặt hàng tại Trí Đức !
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-payment text-end">
                                    <button id="btn-complete-payment">HOÀN TẤT THANH TOÁN</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 receipt">
                    <div class="info-cart-pro">
                        <table class="w-100 tb-pro-add">
                        </table>
                    </div>
                    <div class="discount-user d-flex justify-content-between">
                        <input type="text" placeholder="Mã giảm giá" class="dis-inp">
                        <button class="use-code-dis" onclick="useCode()">Sử dụng</button>
                    </div>
                    <div class="moneys-payer">
                        <div class="provisional d-flex justify-content-between">
                            <span>Tạm tính</span>
                            <p><span id="sp-provis">252,000</span><sup class="sup-ship"><ins>đ</ins></sup></p>
                        </div>
                        <div class="ship d-flex justify-content-between align-items-center">
                            <span>Phí vận chuyển</span>
                            <p><span id="ship-price">0</span><sup class="sup-ship"><ins>đ</ins></sup></p>
                        </div>
                    </div>
                    <div class="total-money d-flex justify-content-between align-items-center">
                        <span>Tổng cộng</span>
                        <p>VND<span class="ps-1 finall-money">252,000</span><sup class="sup-finnal"><ins>đ</ins></sup></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection