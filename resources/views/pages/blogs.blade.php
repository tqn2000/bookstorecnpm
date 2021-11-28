@extends('welcome')
@section('blogs')

<div class="site-main">
    <!-- dẫn trang -->
    <div class="link-page">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/BookStore/home">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog-Tin tức</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid blogs-war">
        <div class="row">
            <div class="col-md-9 list-blogs">
                @foreach ($news as $new)
                    
            
                 <div class="item-blog d-flex">
                    <a href="/BookStore/blogs/{{$new->ID}}">
                        <img class="image-item-blog" src="{{$new->Img}}" alt="">
                    </a>
                    <div class="info-blog ps-md-4 ps-0">
                        <a href="/BookStore/blogs/{{$new->ID}}">
                            <h5>{{$new->Title}}</h5>
                        </a>
                        <p class="date-poster">
                            <span>Ngày đăng: {{$new->DatePost}}</span>
                           
                            
                        </p>
                        <p class="content-item-blog">
                            {{$new->Summarycontent}}
                        </p>
                        <a href="/BookStore/blogs/{{$new->ID}}" class="see-blog"><span>Xem thêm</span><i class="fas fa-arrow-right ps-1"></i></a>
                    </div>
                </div> 
                @endforeach
            </div>
            <div class="col-md-3 pro-right-contact d-none d-lg-block list-new-blogs">
                <!-- Sản phẩm mới  -->
                <div class="new-products">
                    <div class="title-new-pro">
                        <h6>Bài viết mới nhất</h6>
                    </div>
                    <div class="ls-new-pro">
                        <div class="info-new-pro">
                            <!-- các spham trong sản phẩm mới -->
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