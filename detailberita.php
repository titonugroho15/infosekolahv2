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
    		<div class="col-lg-8">
    			<?php
				include "dbconfig.php";
				$id=$_GET['id'];
				$sql=mysql_query("select * from berita where id='$id'");
				$data=mysql_fetch_array($sql)
				?>
				<h1><?php echo $data['judul'];?> </h1>
				<p><span class="glyphicon glyphicon-calendar"></span> <?php echo $data['tanggal'];?> </p>
				<h5>Penulis : <?php echo $data["penulis"]; ?></h5>
				<hr>
				<img src="admin/data/<?php echo $data["foto"]; ?>" style="width:750px;" style="height:300px;"/>
				<br><br>
				<p style="text-align: justify;"><?php echo $data["isi"]; ?></p>
				<br>
				<br>
    		</div>
    		
    		<div class="col-lg-4" style="padding-top: 160px;">
    			<div class="panel panel-default">
    				 <div class="panel-heading">Berita Lainnya</div>
	  					<div class="panel-body">
	  						<?php
								include "dbconfig.php";
								$miez=mysql_query("SELECT * FROM berita LIMIT 5");
								while($hard=mysql_fetch_array($miez))
								{

							?>	

				<div class=" ">
					<ul class="media-list">
						<li class="media">
    						<a class="pull-left" href="#">
    							<img class="media-object" src="admin/data/<?php echo $hard['foto'];?>" alt="..." height="50px" width="50px">
    						</a>
    				<div class="media-body">
      			<h5 class="media-heading"><?php echo $hard['judul'];?></h5>
    		 <p><?php // Tampilkan hanya sebagian isi berita
					$isi_berita = htmlentities(strip_tags($hard['isi']));
					// 40 menampilkan jumlah karakter
					$isi = substr($isi_berita,0,80);
					$isi = substr($isi_berita,0,strrpos($isi," ")); ?></p>
						<p><?php
						echo "<td width='357'>$isi...<br> <a href='detailberita.php?id=$hard[id]'>Selengkapnya</a></p></td>";?>
						</p>
    				</div>
  						</li>
					</ul>
				</div>
	<?php } ?>
	  					</div>

    			</div>
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