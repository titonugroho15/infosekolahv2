<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
	
</head>
<body style="background-color: #fff;font-family: fira sans;">
<?php include "include/navbar.php"; ?>
<div style="padding-top: 60px;"></div>
	<div class="container" style="background-color: #ffffff; ">
    	<div class="row">
    
    		
    			<?php include "include/nav.php"; ?>
    		<hr>
    		<div class="col-lg-9">
    			<?php
				include "dbconfig.php";
				$id=$_GET['kd'];
				$sql=mysql_query("select * from ekskul where id='$id'");
				$data=mysql_fetch_array($sql)
				?>
				<h1><?php echo $data['namaeskul'];?> </h1>
				<h5> <?php echo $data["kategori"]; ?></h5>
				<hr>
				<img src="admin/data/<?php echo $data["foto"]; ?>" style="width:800px;" style="height:300px;"/>
				<br><br>
				<p style="text-align: justify;"><?php echo $data["keterangan"]; ?></p>
				<br>
				<br>
    		</div>
				
    	</div>
	</div>	
    	<<div class="footer ">
    	<hr>
    	<?php include "include/footer.php"; ?>
    	</div>
	</div>

		 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>
</html>