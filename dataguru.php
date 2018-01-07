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
				<div class="col-lg-3 " style="padding-top: 10px;font-family: fira sans;">
				<?php include "include/biodata.php"; ?>
			</div>
				<div class="col-lg-9 ">
					<div class="well well-sm" style="text-align: center;"><h4>Data Siswa</h4></div>
				 <?php
					  	 include "dbconfig.php";
								//konfigurasi
								$per_page=8;
								$cur_page=1;
								if(isset($_GET['page']))
								{
								    $cur_page = $_GET['page'];
								    $cur_page > 1 ? $cur_page : 1;
								    
								}
								$total_page = ceil($per_page);
								$offset=($cur_page - 1) *$per_page;
								$sql = mysql_query("SELECT * FROM tbguru LIMIT $per_page OFFSET $offset");
								while($row=mysql_fetch_array($sql)){
						?>
				<div class="col-lg-3 ">
								<div class="row">
								  <div class="">
								    <div class="thumbnail" style="border: 1px;">
								      <img style="height: 200px; width: 140px;" src="admin/data/<?php echo $row['foto'];?>" alt="No Images">
								      <div class="caption" style="text-align: center;">
								        <h5><?php echo $row['nama_guru']; ?></h5>
								        <p><?php echo $row['nip']; ?></p>
								        <p><?php echo $row['status']; ?></p>
								        <p><a href="detailguru.php?kd=<?php echo $row['id'];?>" class="btn btn-primary">Detail</a> </p>
								      </div>
								    </div>
								  </div>
								</div>
					
					</div>
					 <?php
					 }
					 ?>
				
				<?php
    if($cur_page > 1)
    {
        echo "<a href='datasiswa.php?page=" . ($cur_page - 1) . "'>Prev</a>&nbsp;&nbsp;&nbsp;";
    }
    else
    {
        echo "";
    }
    if($cur_page < $total_page)
    {
        echo "<a href='datasiswa.php?page=" . ($cur_page + 1) . "'>Next</a>";
    }
    else
	{
		echo "";
	}
    ?>
				</div>
			</div>
    	</div>
    	<div class="footer ">
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