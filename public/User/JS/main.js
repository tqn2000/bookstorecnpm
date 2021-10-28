var data = JSON.parse(localStorage.getItem("items"));
var t = 0;
var paymoney = data.map((item) => {
  return (t += Number(item.total.replace(",", ""))).toLocaleString("en-US");
});
var html = data.map((item, index) => {
  return `<tr>
            <th scope="row">
                <img src="https://product.hstatic.net/200000290933/product/z2539880070382_da52894a5ee431f7217caab2b078b3d0_067327ff13614828972efe780b904caa_small.jpg" alt="">
            </th>
            <td>
                <span class="items-center">${item.proname}</span>
            </td>
            <td>
                <input class="items-center" type="number" value="${item.number}">
            </td>
            <td>
                <span class="items-center">${item.total}<ins>đ</ins></span>
            </td>
            <td>
                <button class="items-center"  onclick="removeItem(${index})"><i class="fas fa-trash"></i></button>
            </td>
        </tr>`;
});
var html1 = ` <tr>
                <th scope="row">
                </th>
                <td>
                </td>
                <td>
                    <span>Tổng cộng:</span>
                </td>
                <td>
                    <span class="items-center">${paymoney}<ins>đ</ins></span>
                </td>
                <td>
                </td>
          </tr>`;
$(".tbody-pro-cart").append(html + html1);
function removeItem(index) {
  data.splice(index, 1);
  localStorage.setItem("items", JSON.stringify(data));
}
$("#tbUser").on("click", ".items-center", function () {
  $(this).closest("tr").remove();
});
