<?php include("database.php"); ?>
 <?php
    $db=new connect();
    $nam = $db->getdb("dongho",1);
    $nu = $db->getdb("dongho",-1);

?>
<div class="loai"><h2>TẤT CẢ SẢN PHẨM</h2></div>

<div class="CASIOEASY" id="dongiantinhte">
        <h3>CASIO: ĐƠN GIẢN TINH TẾ</h3>  
    </div>
<div class="loai1">
<ul>



<div>
   
 
             
            <?php foreach ($nam as $value) {
                $hinh = "http://localhost:8888/hangdientu1/hangdientu/dientu/image/".$value['hinhanhsp']; ?>
<li>
              
               <?php echo "<img src=".$hinh.">"."</br>"; ?>
                <?php  echo $value['tensp']; ?><br/>
                 <?php  echo $value['giasp']; ?><br/>
                  <?php  echo $value['motosp']; ?><br/>
</li>
            <?php } ?>        
                 
            
               
          
</div>
</div>
<!-- aaa -->
            <div class="clear"></div>
            </ul>


<div class="CASIOGSHOCK" id="GShock">
        <h3>G-SHOCK: PHONG CÁCH VÀ CÁ TÍNH</h3>  
    </div>

<div class="CASIOBABYG" id="BabyG">
        <h3>BABY-G: NĂNG ĐỘNG, ĐẦY MÀU SẮC</h3>  
    </div>

            <?php foreach ($nu as $value) {
                $hinh = "http://localhost:8888/hangdientu1/hangdientu/dientu/image/".$value['hinhanhsp']; ?>
<li>
              
               <?php echo "<img src=".$hinh.">"."</br>"; ?>
                <?php  echo $value['tensp']; ?>
</li>
            <?php } ?>        
    
