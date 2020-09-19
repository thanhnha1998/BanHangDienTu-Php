 <form method="POST">
        Mã ID: <input type="number" name="user"> <br/>
        Tên Sản Phẩm: <input type="text" name="name"><br/>
        Hình Ảnh : <input type="file" name="img"><br/>
        Giá : <input type="text" name="gia"><br/>
        Nội Dung : <textarea rows="5" cols="50" name="noidung">
Ban nhap phan mieu ta tai day...
</textarea> <br/>
      <input type="submit" name="submit" value="Thêm Sản Phẩm"><br/>
  </form>


<?php
  $conn = new PDO("mysql:host=localhost;dbname=databasecasio", "root", "");
  if(!$conn) {
    echo 'Ket noi database bi loi.';
  }
$sql = "INSERT INTO nam VALUES ('".$_POST['user']."','".$_POST['name']."','".$_POST['img']."','".$_POST['gia']."','".$_POST['noidung']."')";
$stmt= $conn->query($sql);
?>