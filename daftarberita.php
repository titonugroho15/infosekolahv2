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
					<div class="well well-sm" style="text-align: center;"><h4>Berita</h4></div>
				 <?php
					  	 include "dbconfig.php";
								//konfigurasi
								$per_page=5;
								$cur_page=1;
								if(isset($_GET['page']))
								{
								    $cur_page = $_GET['page'];
								    $cur_page > 1 ? $cur_page : 1;
								    
								}
								$total_page = ceil($per_page);
								$offset=($cur_page - 1) *$per_page;
								$sql = mysql_query("SELECT * FROM berita LIMIT $per_page OFFSET $offset");
								while($hard=mysql_fetch_array($sql)){
						?>
				<div class="col-lg-9 ">
								<div class="row">
								  <div class="">
								    <ul class="media-list">
										<li class="media">
				    						<a class="pull-left" href="#">
				    							<img class="media-object" src="admin/data/<?php echo $hard['foto'];?>" alt="..." height="150px" width="150px">
				    						</a>
				    				<div class="media-body">
				      					<h5 class="media-heading"><?php echo $hard['judul'];?></h5>
				    		 				<p><?php // Tampilkan hanya sebagian isi berita
											$isi_berita = htmlentities(strip_tags($hard['isi']));
											// 40 menampilkan jumlah karakter
											$isi = substr($isi_berita,0,150);
											$isi = substr($isi_berita,0,strrpos($isi," ")); ?></p>

										<p><?php
										echo "<td width='357'>$isi...<br> <a href='detailberita.php?id=$hard[id]'>Selengkapnya</a></p></td>";?>
										</p>
				    				</div>
				  						</li>
									</ul>
									
								  </div>
								</div>
					
					</div>
					 <?php
					 }
					 ?>
				
				<?php
    if($cur_page > 1)
    {
        echo "<a href='daftarberita.php?page=" . ($cur_page - 1) . "'>Prev</a>&nbsp;&nbsp;&nbsp;";
    }
    else
    {
        echo "";
    }
    if($cur_page < $total_page)
    {
        echo "<a href='daftarberita.php?page=" . ($cur_page + 1) . "'>Next</a>";
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