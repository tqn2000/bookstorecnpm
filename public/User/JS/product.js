$(document).ready(function() {
    str=window.location.href
    var pos = str.indexOf('all/');
    var val = str.slice(pos + 4);
    var slide = 0;
    $(".sidebars").find(".sm-nowrap-parent").hide();
    $(".sidebars .sm-nowrap").hide();
    $(".sidebars #target").click(function() {
        slide == 0 ? (slide = 1) : (slide = 0);
        $(this).toggleClass("fa-caret-right");
        $(this).toggleClass("fa-sort-down");
        if (slide == 1) {
            $(".sidebars").find(".sm-nowrap-parent").slideDown();
            $(".sidebars").find(".sm-nowrap-parent").show();
        } else {
            $(".sidebars").find(".sm-nowrap-parent").slideUp();
        }
        return false;
    });
    $(".list-menu .fas").click(function() {
        id = $(this).attr("id");
        console.log(id);
        $("#" + id).toggleClass("fa-caret-right");
        $("#" + id).toggleClass("fa-sort-down");
        $(".list-menu")
            .find(".wrap-" + id)
            .toggle(500);
        return false;
    });

    //phân trang //Dach sach san pham

    var idcat=val;
    var opId=$(".form-select").find(':selected').val();
    var url = `/BookStore/sortproduct/${idcat}/${opId}`;
    $(".cate-left a").click(function() {
        id = $(this).attr('id');
        idcat=id;
        url=`/BookStore/sortproduct/${idcat}/${opId}`
        // key = $(this).attr('key');
        // txt = $(this).text();
        // if (key == "P1")
        //     
        // $(".intruct-pro  h5").text(txt);
        page(url);
    })

    
    function page(url) {
        var txt=''
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function(data) {
                if(idcat==8888)
                    txt = "Tất cả sản phẩm";
                else
                    txt=data[0].Name 

                $(".intruct-pro  h5").text(txt)
                $(".categoryName").text(txt)
                exam(data);
            }
        });
    }
    page(url);
    //sắp xếp 
    $(".sorted-by select").change(function() {
        opId = $(this).children("option:selected").val();
        $.ajax({
            type: "get",
            url: `/BookStore/sortproduct/${idcat}/${opId}`,
            dataType: "json",
            success: function(response) {
                exam(response);
            }
        });

    })

    function exam(data) {
        function printData(data) {
            var html = data.map((item) => {
                return `<div class="col-lg-3 col-sm-4 col-md-4 col-xs-6 mb-3 h-auto pro-col">
                            <div class="item-sell" id=${item.ID} data=${item.CategoryID}>
                                    <p class="d-flex justify-content-center "><span class="discount ">10%</span></p>
                                    <div class="btn-custom-action d-flex justify-content-between ">
                                        <button class="btn-quick-view" onclick="viewModel('${item.ID}')"><i class="far fa-chart-bar "></i><span>Xem nhanh</span></button>
                                        <button class="btn-cart d-flex" onclick="setCart('${item.ID}')"><span>+ Thêm vào giỏ</span><i class="bi bi-cart3 ps-1 "></i></button>
                                    </div>
                                    <div class="img-hot-book ">
                                    <a href="/BookStore/products/${item.CategoryID}/${item.ID}">
                                            <img id="pro-image-${item.ID}" src=${item.Url} alt="">
                                        </a>
                                    </div>
                                    <div class="pro-infor ">
                                        <a href="/BookStore/products/${item.CategoryID}/${item.ID}" title="${item.ProductName}" class="pro-name ">
                                            <p id="pro-name-${item.ID}">${item.ProductName}</p>
                                        </a>
                                        <p class="price d-flex justify-content-center ">
                                            <span class="sold-price"><span id="salprice-pro-${item.ID}">${item.PriceProduct}</span><ins>đ</ins></span>
                                            
                                        </p>
                                    </div>
                            </div>
                    </div>`;
            });
            return html        
        }
        $("#pagination").pagination({
            dataSource: data,
            pageSize: 16,
            autoHidePrevious: true,
            autoHideNext: true,
            callback: function(data, pagination) {
                // template method of yourself
                var html = printData(data);
                $("#pro-auth").html(html.join(""));
            },
        });
    }
});