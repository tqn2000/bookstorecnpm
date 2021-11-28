$(document).ready(function() {
    console.log(1);
    function string(item) {
        return ` <div class="item-sell" id=${item.ID} data=${item.CategoryID}>
              
                      <div class="btn-custom-action d-flex justify-content-between ">
                          <button class="btn-quick-view" onclick="viewModel('${item.ID}')"><i class="far fa-chart-bar "></i><span>Xem nhanh</span></button>
                          <button class="btn-cart d-flex" onclick="setCart('${item.ID}')"><span>+ Thêm vào giỏ</span><i class="bi bi-cart3 ps-1 "></i></button>
                      </div>
                      <div class="img-hot-book ">
                          <a href="/BookStore/products/${item.CategoryID}/${item.ID}">
                          
                              <img id="pro-image-${item.ID}" src=${item.Url} alt="">
                          </a>
                      </div>
                      <div class="pro-infor text-center ">
                          <a href="/BookStore/products/${item.CategoryID}/${item.ID}" title="${item.ProductName}" class="pro-name text-center">
                              <p id="pro-name-${item.ID}">${item.ProductName}</p>
                          </a>
                          <p class="price d-flex justify-content-center ">
                              <span class="sold-price"><span id="salprice-pro-${item.ID}">${item.PriceProduct}</span><ins>đ</ins></span>
                         
                          </p>
                      </div>
                  </div>`
    }
    //Sản phẩm bán chạy
    fetch("/BookStore/producthotsell")
        .then((response) => response.json())
        .then((data) => {
            var html = data.map((item) => {
                return ` <div class="list-hot-selling">
                            ${string(item)}
                       </div>`;
            });
            $(".hot-selling-row").html(html.join(""));
            $(".hot-selling-row").slick({
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 5,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: '<button class="slick-prev slick-arrow " aria-label="Previous " type="button " style=" "><i class="bi bi-chevron-left "></i></button>',
                nextArrow: '<button class="slick-next slick-arrow " aria-label="Next " type="button " style=" "><i class="bi bi-chevron-right "></i></button>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: true,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
            (() => {
                let val = [0, 1, 2, 3, 4];
                $(".list-hot-selling").each(function(index, item) {
                    if (index == val[0] || index == val[0] + 5) {
                        val[0] = index;
                        $(item).addClass("orange-top");
                    }
                    if (index == val[1] || index == val[1] + 5) {
                        val[1] = index;
                        $(item).addClass("green-top");
                    }
                    if (index == val[2] || index == val[2] + 5) {
                        val[2] = index;
                        $(item).addClass("blue-top");
                    }
                    if (index == val[3] || index == val[3] + 5) {
                        val[3] = index;
                        $(item).addClass("orange-top");
                    }
                    if (index == val[4] || index == val[4] + 5) {
                        val[4] = index;
                        $(item).addClass("green-top");
                    }
                });
            })();
        }).catch(err=>console.log(err));

    // $.ajax({
    //     type: "get",
    //     url: "/BookStore/producthotsell",
    //     dataType: "json",
    //     success: function (response) {
    //         console.log(response)
    //     }
    // });

    // sản phẩm nổi bật
    fetch("/BookStore/productnew")
        .then((response) => response.json())
        .then((data) => {
            var html = data.map((item) => {
                return ` <div class="col-md-3 mb-3 h-auto col-sm-6">
                           ${string(item)}
                      </div>`;
            });
            $("#pro-home").html(html.join(""));
        });

    //Tìm kiếm
      $(".search-inp button").click(function() {
        data = $(".search-inp input").val();
        // $.ajax({
        //     type: "get",
        //     url: "http://localhost:3000/listData",
        //     data: {
        //         name: data
        //     },
        //     dataType: "json",
        //     success: function(response) {
        //         console.log(respon);
        //     }
        // });
        window.location.href = `/BookStore/Search/${data}`;
        // console.log(1);
    })
    
    //sản phẩm mới nhất trang chi tiết
    fetch("/BookStore/productnew")
        .then((response) => response.json())
        .then((data) => {
            var acount = 1,
                html = '',
                x = 0;
            (data.length % 3 == 0) ? acount = Math.floor(data.length / 3): acount = Math.floor(data.length / 3) + 1;
            for (var i = 0; i < acount; i++) {
                (i == 0) ? x = 0: x = x + 3;
                html += `<div class="info-new-pro">
                          ${NewDetail(data,x)}
                       </div>`
            }
            $('.view-ld-pro .ls-new-pro').html(html);
            $('.view-ld-pro .ls-new-pro').slick({
                prevArrow: '<button class="slick-prev slick-arrow " aria-label="Previous " type="button " style=" "><i class="bi bi-chevron-left "></i></button>',
                nextArrow: '<button class="slick-next slick-arrow " aria-label="Next " type="button " style=" "><i class="bi bi-chevron-right "></i></button>',
            });
        })
        .catch((err)=>console.log(err));

    function NewDetail(data, i) {
        var str = ''
        for (var j = i; j < i + 3; j++) {
            str += `<!-- các spham trong sản phẩm mới -->
             <div class="item-new-pro d-flex">
                <a href="/BookStore/products/${data[j].CategoryID}/${data[j].ID}">
                    <img src=${data[j].Url} alt="">
                </a>
                <div class="view-new-pro">
                    <a href="/BookStore/products/${data[j].CategoryID}/${data[j].ID}">${data[j].ProductName}</a>
                    <div>
                        <span>${data[j].PriceProduct}<ins>đ</ins></span>
                    </div>
                </div>
            </div>`
        }
        return str;
    }

    
     //sản phẩm khác ở trang chi tiết 
     fetch("/BookStore/relateproduct")
     .then((response) => response.json())
     .then((data) => {
         var html = data.map((item) => {
             return `<div class="col-md-3 mb-3 h-auto col-sm-6">
                    ${string(item)}
               </div>`;
         });
         $(".lst-another-pros").find(".list-highlight-pro").html(html.join(""));
     });
});