<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<style type="text/css">
	body{
		background-color: #f6f4f4;
	}
</style>
	
</head>
<body style="font-family: fira sans;">
<?php include "include/navbar.php"; ?>
<div style="padding-top: 60px;"></div>
	<div class="container" style="background-color: #ffffff; ">
    	<div class="row">

    		
    	
    	<hr>
    		
    			<?php include "include/nav.php"; ?>
        	
			
			<div class="col-lg-12 " style="padding-top: 10px;font-family: fira sans;">
				<?php include "include/carosel.php"; ?>
			
				<hr>
				<div class="col-lg-3 " style="padding-top: 10px;font-family: fira sans;">
				<?php include "include/biodata.php"; ?>
			</div>
				<div class="col-lg-9 ">
					<div class="well well-sm"><h4>Kegiatan Sekolah</h4></div>
				</div>

				<?php
include "dbconfig.php";
$miez=mysql_query("SELECT * FROM berita LIMIT 7");
while($hard=mysql_fetch_array($miez))
{

?>
				<div class="col-lg-4 ">
					<ul class="media-list">
					  <li class="media">
					    <a class="pull-left" href="#">
					      <img class="media-object" src="admin/data/<?php echo $hard['foto'];?>" alt="..." height="100px" width="100px">
					    </a>
					    <div class="media-body">
					      <h4 class="media-heading"><?php echo $hard['judul'];?></h4>
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
	<div class="footer ">
    	<hr>
    	<?php include "include/footer.php"; ?>
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