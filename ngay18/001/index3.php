<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table align="center" border="1" cellpadding="0" cellspacing="1" style="width:600px">
    <thead>
    <tr>
        <th>
            <p><strong>TT</strong></p>
        </th>
        <th>
            <p><strong>Nhóm đối tượng khách hàng</strong></p>
        </th>
        <th>
            <p><strong>Giá bán điện</strong></p>

            <p><strong>(đồng/kWh)</strong></p>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <p>1</p>
        </td>
        <td>
            <p>Giá bán lẻ điện sinh hoạt</p>
        </td>
        <td>
            <p>&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 1: Cho kWh từ 0 - 50</p>
        </td>
        <td>
            <p>1.678</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 2: Cho kWh từ 51 - 100</p>
        </td>
        <td>
            <p>1.734</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 3: Cho kWh từ 101 - 200</p>
        </td>
        <td>
            <p>2.014</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 4: Cho kWh từ 201 - 300</p>
        </td>
        <td>
            <p>2.536</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 5: Cho kWh từ 301 - 400</p>
        </td>
        <td>
            <p>2.834</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 6: Cho kWh từ 401 trở lên</p>
        </td>
        <td>
            <p>2.927</p>
        </td>
    </tr>
    </tbody>
</table>



<form name="tiendien" method="post" action="tinhketqua.php">
    <p>
        <label>Tổng số điện tiêu thụ ( nhập từ 1 đến 2000 )</label>
        <input name="sodien" type="text" value="">
    </p>
    <p>
        <input type="submit" name="submit" value="Tính số tiền phải trả">
    </p>
</form>

</body>
</html>
