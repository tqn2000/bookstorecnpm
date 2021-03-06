var op;
var op1;
var arr = JSON.parse(localStorage.getItem("items"));
var provis = JSON.parse(localStorage.getItem("paymon"));
var codep = -1;
var type = "";
var nameDistrict = "";
var codeName = ["quan_hoang_mai", "quan_bac_tu_liem", "quan_nam_tu_niem"];
var codeDiscord = [
    { code: "code123", value: 75 },
    { code: "SHP89", value: 10 },
];
var discord = 0;
var ship = 0;
var data = [];
data.push(
    arr.map((item) => {
        return { id: item.id, number: item.number, money: item.total };
    })
);
var check = 0;
var stus = false;

//call api provice,district,ward  
fetch("https://provinces.open-api.vn/api/p")
    .then((response) => response.json())
    .then((json) => {
        html = json.map((item) => {
            return `<option value="${item.code}">${item.name}</option>`;
        });
        $(".province").append(html);
    });
$(".province").change(function() {
    var val = $(this).children("option:selected").val();
    if (val != "") {
        fetch(`https://provinces.open-api.vn/api/p/${val}?depth=2`)
            .then((response) => response.json())
            .then((json) => {
                html = json.districts.map((item) => {
                    return `<option value="${item.code}" dataType="${item.division_type}" dataName="${item.codename}">${item.name}</option>`;
                });
                changDistrict();
                $(".district").html(op + html);
                changWard();
            });
        codep = val;
    } else {
        changDistrict();
        changWard();
    }
});
$(".district").change(function() {
    var val = $(this).children("option:selected").val();
    type = $(this).children("option:selected").attr("dataType");
    nameDistrict = $(this).children("option:selected").attr("dataName");
    if (val != "") {
        fetch(`https://provinces.open-api.vn/api/d/${val}?depth=2`)
            .then((response) => response.json())
            .then((json) => {
                html = json.wards.map((item) => {
                    return `<option value="${item.code}">${item.name}</option>`;
                });
                changWard();
                $(".ward").html(op1 + html);
            });
        if (codep == 1 && type == "qu???n" && codeName.includes(nameDistrict))
            ship = "16,500";
        if (codep == 1 && type == "qu???n" && !codeName.includes(nameDistrict))
            ship = "15,900";
        if (codep == 1 && type != "qu???n") ship = "18,000";
        if (codep != 1) ship = "25,000";
        //thay ?????i ti???n ship khi thay thay ?????i huy???n
        $("#ship-price").text(ship);
        $(".finall-money").text(
            (
                Number($("#sp-provis").text().replaceAll(",", "")) +
                Number(ship.replaceAll(",", ""))
            ).toLocaleString("en-US")
        );
    } else changWard();
});

function changDistrict() {
    op = `<option selected value="">Ch???n qu???n / huy???n</option>`;
    $(".district").html(op);
}

function changWard() {
    op1 = `<option selected value="">Ch???n ph?????ng / x??</option>`;
    $(".ward").html(op1);
}

//hide and show method pay
$("#paymoney1").prop("checked", true);
$(".content-visa").hide();

function transaction(obj) {
    obj == 2 ? $(".content-visa").slideDown() : $(".content-visa").slideUp();
}

//show list product
function showPro() {
    html = arr.map((item) => {
        return ` <tr class="d-flex justify-content-between align-items-center pb-3">
                <td class="image-items-pr">
                    <img src="${item.proImage}" alt="">
                    <span class="numeral">${item.number}</span>
                </td>
                <td class="name-pro-local">
                    <span>${item.proName}</span>
                </td>
                <td class="proce-pro-local">
                    <span>${item.total}</span><ins>??</ins>
                </td>
         </tr>`;
    });
    $(".tb-pro-add").append(html);
}
showPro();

//s??? d???ng m?? gi???m gi??
function useCode() {
    var codeName;
    if (stus == true) {
        alert("M???i ????n h??ng ch??? s??? d???ng 1 m?? gi???m gi?? duy nh???t!");
    }
    codeDiscord.forEach((item) => {
        if (item.code == $(".dis-inp").val()) {
            check = 1;
            discord = item.value;
            codeName = item.code;
        }
    });
    if (check == 0) alert("M?? gi???m gi?? kh??ng t???n t???i");
    if (check == 1 && stus == false) {
        var r = confirm(
            `M?? ${codeName} gi???m ${discord}% ????n h??ng.B???n c?? mu???n s??? d???ng m?? n??y kh??ng?`
        );
        if (r == true) {
            var tt = (Number(provis.replaceAll(",", "")) * (100 - discord)) / 100;
            $("#sp-provis").text(tt.toLocaleString("en-US"));
            $(".finall-money").text(
                (
                    tt + Number(ship == 0 ? ship : ship.replaceAll(",", ""))
                ).toLocaleString("en-US")
            );
            stus = true;
        } else check = 0;
    }
}
//g??n gi?? tr??? cho tam tinh
$("#sp-provis").text(provis);
//gan gia tri cho tong tien
$(".finall-money").text(provis);

//validate form

$("#demoForm").validate({
    rules: {
        user: "required",
        email: {
            required: true,
            email: true,
        },
        phone: {
            required: true,
            minlength: 8,
        },
        address: "required",
        province: { required: true },
        district: "required",
        ward: "required",
    },
    messages: {
        user: "Vui l??ng nh???p h??? t??n",
        email: {
            required: "?????a ch??? email kh??ng ???????c b??? tr???ng",
            email: "?????a ch??? email kh??ng h???p l???",
        },
        phone: {
            required: "Vui l??ng nh???p s??? ??i???n tho???i",
            minlength: "S??? ??i???n tho???i kh??ng h???p l???",
        },
        address: "Vui l??ng nh???p ?????a ch???",
        province: "Vui l??ng nh???p ?????a ch???",
        district: "Vui l??ng ch???n qu???n huy???n",
        ward: "Vui l??ng nh???p ph?????ng x??",
    },
    submitHandler: function(form) {
        var username = $("input[name=user]").val(),
            email = $("input[name=email]").val(),
            phone = $("input[name=phone]").val(),
            address = $("input[name=address]").val(),
            province = $("select.province").children("option:selected").text(),
            district = $("select.district").children("option:selected").text(),
            ward = $("select.ward").children("option:selected").text(),
            local = address + "-" + ward + "-" + district + "-" + province,
            bTotal = $("#sp-provis").text(),
            finalTotal = $(".finall-money").text(),
            ship = $("#ship-price").text(),
            payment = $("input[type='radio']:checked").attr("key");
        obj = {
            username,
            email,
            phone,
            local,
            finalTotal,
            bTotal,
            ship,
            data,
            discord,
            payment,
        };
        window.location.replace(
            "https://viblo.asia/p/hieu-ro-hon-ve-windowlocation-QpmlejEM5rd"
        );
        // $.ajax({
        //   type: form.method,
        //   url: "url",
        //   data: obj,
        //   dataType: "json",
        //   success: function (response) {

        //   }
        // });
    },
});