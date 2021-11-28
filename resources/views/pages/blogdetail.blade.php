@extends('welcome')
@section('blogdetail')

<div class="site-main">
    <!-- dẫn trang -->
    <div class="link-page">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/BookStore/home">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="/BookStore/blogs">Blog-Tin tức</a></li>
                <li style="color: rgb(168, 149, 149)" class="breadcrumb-item active" aria-current="page"> {{$newbyid->Title}}</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid blogs-war">
        <div class="row">
            <div class="col-md-9 detail-content-blogs">
                <h5>
                    {{$newbyid->Title}}
                </h5>
                <div class="body-content">
                {{-- <div class="container-fluid p-0 mt-3">
                    <div class="row gx-3">
                        <div class="col-md-2 ">
                            <div class="time-convert">
                                <i class="far fa-clock d-block"></i>
                                <span>23/02/2021</span>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="body-content">
                                <p><strong>“House of Knowledge” ( Ngôi nhà tri thức) – một không gian văn hóa đọc thông minh tích hợp “3 trong 1” vừa được khai trương tại Hà Nội hứa hẹn mang đến cho khách hàng nhiều trải nghiệm mới mẻ, đặc biệt đối với trẻ em.&nbsp;</strong></p>
                                <p>Được khai trương ngày 16.11, tại 524 Đường Láng, Nhà sách gồm ba khu vực riêng biệt: Khu vực 1 &nbsp;là hệ thống nhà sách, cung cấp hơn 20 ngàn đầu sách đa dạng về thể loại. Khu vực 2 là khu vực văn phòng phẩm,
                                    đồ dùng học tâp, đồ chơi… cho học sinh, sinh viên, dân văn phòng. Khu vực 3 là khu vui chơi thiếu nhi dành có các bé có độ tuổi từ 3 -15 tuổi với những trò chơi thú vị như: Đường đua mạo hiểm, Đại dương
                                    bóng, Hồ hạt gỗ, Sàn nhún, Hockey, &nbsp;Khu đồ chơi thông minh, Khu thử tài đầu bếp, học làm bác sĩ, phục trang cứu hoả, kĩ sư… Không gian mới mẻ, tích hợp phục vụ đồ ăn nhanh và nước uống tiện lợi cho
                                    trẻ nhỏ.</p>
                                <p style="text-align: center"><img src="//file.hstatic.net/200000290933/file/unknown_03a8a9b425a141c1afc2db8c98754d1f_grande.png"></p>
                                <p style="text-align: center;"><strong>Khu vực nhà sách</strong></p>
                                <p>Bà Lê Thị Hà Thanh, giám đốc kinh doanh hệ thống Trí Đức Bookstore cho biết,ý &nbsp;tưởng của việc xây dựng hệ thống nhà sách Trí Đức tích hợp khu vui chơi và hệ thống đồ dùng tiện ích nhằm tạo&nbsp;ra một không
                                    gian mở về văn hoá và giải trí cho mọi lứa tuổi. Có thể tiết kiệm tối đa thời gian mua sắm cho những bậc phụ huynh bận rộn, lại vẫn đảm bảo không gian để giải trí, vui chơi và khám phá tri thức cho những
                                    đứa trẻ. Hy vọng Trí Đức Books- House of Knowledge sẽ là điểm đến ưa thích của các gia đình.</p>
                                <p>Tại buổi lễ khai trương, ông Nguyễn Trung Kiên, phó giám đốc Nhà sách Trí Đức chia sẻ: “Nhà sách Trí Đức 524 Đường Láng ra đời là tâm huyết và là niềm tự hào của toàn thể công ty Trí Đức. Chúng tôi mong muốn,
                                    khách hàng sẽ không chỉ biết về Trí Đức như một thương hiệu in ấn và sản xuất lịch hàng đầu Việt Nam mà còn là một trong những hệ thống nhà sách tốt nhất Việt Nam”.</p>
                                <p style="text-align: center"><img src="//file.hstatic.net/200000290933/file/khu_vui_choi_-_t3_cc07d1285efd4350b4d59ac298558a05_grande.jpg"></p>
                                <p style="text-align: center;"><strong>Khu vui chơi cho trẻ em</strong></p>
                                <p>Dự kiến, sắp tới, Trí Đức sẽ mở rộng thêm quy mô với khu cà phê ngoài trời, dự kiến sẽ được khai trương vào, phục vụ cho khách hàng thanh thiếu niên, dân văn phòng, những người yêu thích không gian mở…v.v hứa
                                    hẹn sẽ có rất nhiều loại đồ uống đặc biệt, phù hợp với xu hướng trẻ trung, hiện đại.&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                 
                 {!! html_entity_decode($newbyid->Content) !!}
                </div>
              
            </div>
            <div class="col-md-3 pro-right-contact d-none d-lg-block list-new-blogs">
                <!-- Sản phẩm mới  -->
                <div class="new-products">
                    <div class="title-new-pro">
                        <h6>Bài viết mới nhất</h6>
                    </div>
                    <div class="ls-new-pro">
                        <div class="info-new-pro">
                            @foreach ($news2 as $new2 )
                            <div class="item-new-pro d-flex">
                                <a href="/BookStore/blogs/{{$new2->ID}}">
                                    <img src="{{$new2->Img}}" alt="">
                                </a>
                                <div class="view-new-pro">
                                    <a href="/BookStore/blogs/{{$new2->ID}}">{{$new2->Title}}</a>
                                    <div>
                                        <span>Ngày đăng<ins>{{$new2->DatePost}}</ins></span>
                                        
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

@endsection