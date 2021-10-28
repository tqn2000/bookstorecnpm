function amount() {
    let id = 0;
    $("#btn-decrease").click(function (e) {
      id = $(".number-guest-book").children("input").val();
      e.preventDefault();
      id == 1
        ? $(".number-guest-book").children("input").val(1)
        : $(".number-guest-book")
            .children("input")
            .val(id - 1);
    });
    $("#btn-increase").click(function (e) {
      e.preventDefault();
      id = $(".number-guest-book").children("input").val();
      $(".number-guest-book")
        .children("input")
        .val(Number(id) + 1);
    });
  }
  amount();
  
  //đặt hàng
  var cart = [];
  var arr = [];
  check = true;
  var obj = new Object();
  var proname, price, number, total, id;
  function setCart() {
    id = $(".set-cart").attr("id");
    proname = $(".content-info-detail").children("h3").text();
    price = $(".saled-price").children("span").text();
    number = Number($(".number-guest-book").children("input").val());
    total = (Number(price.replace(",", "")) * number).toLocaleString("en-US");
    obj = { proname, price, number, total, id };
    if (check) {
      cart.push(obj);
      check = false;
    } else {
      cart.map((item) => {
        if (item.id == id) {
          item.number += number;
          item.total = (
            Number(item.price.replace(",", "")) * item.number
          ).toLocaleString("en-US");
        } else cart.push(obj);
      });
    }
    localStorage.setItem("items", JSON.stringify(cart));
  }

  $(".ls-new-pro").slick({
    prevArrow:
      '<button class="slick-prev slick-arrow " aria-label="Previous " type="button " style=" "><i class="bi bi-chevron-left "></i></button>',
    nextArrow:
      '<button class="slick-next slick-arrow " aria-label="Next " type="button " style=" "><i class="bi bi-chevron-right "></i></button>',
  });
  (() => {
    let val = [0, 1, 2, 3, 4];
    $(".list-hot-selling").each(function (index, item) {
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
  