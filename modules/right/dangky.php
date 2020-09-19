<?php
if (isset($_POST['register'])) {
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_pass'];
    $c_country = $_POST['c_country'];
    $c_city = $_POST['c_city'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];
    /*move_uploaded_file($c_image_tmp, "modules/right/customer_images/$c_image");*/
    $insert_c = "insert into customers(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address) values('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address')";
    $run_c = mysqli_query($conn, $insert_c);
    if ($run_c) {
        echo '<script>alert("insert thanh cong")</script>';

    }
}
?>

<div class="content_right" style="width:100%;">
        <h1 align="center"><p class="loai" style="border:1px solid #CCC">Đăng ký tài khoản</p></h1>
    <form action="index.php?xem=dangky" method="post" enctype="multipart/form-data" style="background-color: dimgrey;">
        <table width="500" style="margin:10px 30% 10px 35%; background-color: #ababab; height: 400px ">
            <tr>
                <td style="text-decoration: underline;">Họ và tên: </td>
                <td><input type="text" name="c_name"></td>
            </tr>
            <tr>
                <td style="text-decoration: underline;">Email: </td>
                <td><input type="text" name="c_email"></td>
            </tr>
            <tr>
                <td style="text-decoration: underline;">Số điện thoại: </td>
                <td><input type="text" name="c_contact"></td>
            </tr>
            <tr>
                <td style="text-decoration: underline;">Mật khẩu: </td>
                <td><input type="password" name="c_pass"></td>
            </tr>
            <tr>
                <td style="text-decoration: underline;">Nơi ở: </td>
                <td>
                    <select name="c_country">
                        <option>--Chọn tên nước bạn đang ở--</option>
                        <option>Việt Nam</option>
                        <option>US</option>
                        <option>UK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-decoration: underline;">Tỉnh(thành phố): </td>
                <td><input type="text" name="c_city"></td>
            </tr>
            <tr>
                <td style="text-decoration: underline;">Địa chỉ: </td>
                <td><textarea name="c_address" rows="8" cols="30"></textarea></td>
            </tr>
            <tr>
                <td align="right" style=""><input type="submit" name="register" value="Signup(Đăng ký)" style="margin-left: 10px;margin-top: 20px;font-size: 14px;"></td>
                <td></td>
            </tr>
        </table>
    </form>
    <h2 style="margin:20px"><a href="index.php?xem=thanhtoan" style="background-color: #ababab">Quay lại đăng nhập</a></h2>
</div>