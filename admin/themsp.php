<!DOCTYPE html>
<html lang="en">
<?php include("databasead.php"); ?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Charts</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Thêm sản phẩm</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
  

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      
      
    </ul>

    <div id="content-wrapper">
      <div class="cang">

   <form method="POST">
        Mã ID: <input type="number" name="masp"> <br/>
        Giới tính:  <input type="radio" name="gt" value="1"> Nam<br>
                    <input type="radio" name="gt" value="-1"> Nữ<br>
                    <input type="radio" name="gt" value="0"> Couple<br>
                  
        Tên Sản Phẩm: <input type="text" name="tensp"><br/>
        Hình Ảnh : <input type="file" name="hinhanhsp"><br/>
        Giá : <input type="text" name="giasp"><br/>
        Nội Dung : <textarea rows="5" cols="50" name="motosp">
Ban nhap phan mieu ta tai day...
</textarea> <br/>
      <input type="submit" name="submit" value="Thêm Sản Phẩm"><br/>
  </form>


<?php
  
  $db= new connect();
 
  if( isset($_POST['submit'])){
    $db->insert($_POST["masp"],$_POST["tensp"],$_POST["gt"],$_POST["hinhanhsp"],$_POST["giasp"],$_POST["motosp"]);
}
?>
 <style>
   ul {
    list-style: none;
   }
   li {
    float: left;
    padding-left: 30px; 
   }
    .clear {
         clear: both;
    }
 </style>
             <ul>
              <p style="font-size: 50px;">Nam </p>
            <?php
            $nam = $db->getdb("dongho",1);
             foreach ($nam as $value) {
                $hinh = "http://localhost:8888/hangdientu1/hangdientu/dientu/image/".$value['hinhanhsp']; ?>
<li>
               <?php echo "<img src=".$hinh.">"."</br>"; ?>
                <?php  echo $value['tensp']; ?><br/>
                 <?php  echo $value['giasp']; ?><br/>
                  <?php  echo $value['motosp']; ?><br/>
                <form method="post"> 
                <button type="submit" name="xoa" value="<?php echo $value["masp"]; ?>">DELETE</button>
                </form>
                
</li>
            <?php } ?>  
            <?php 

                if (isset($_REQUEST["xoa"])) {
                    $db->delete($_REQUEST["xoa"]); 
                    header("Refresh:0");
                 } ?>     
</ul>
<div class="clear"></div>
<ul>
              <p style="font-size: 50px;">Nữ </p>
            <?php foreach ($db->getdb("dongho",-1) as $value) {
                $hinh = "http://localhost:8888/hangdientu1/hangdientu/dientu/image/".$value['hinhanhsp']; ?>
<li>
              
               <?php echo "<img src=".$hinh.">"."</br>"; ?>
                <?php  echo $value['tensp']; ?>
                <form method="post"> 
                <button type="submit" name="xoa" value="<?php echo $value["masp"]; ?>">DELETE</button>
                </form>
</li>
            <?php } ?>       
</ul>

    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
