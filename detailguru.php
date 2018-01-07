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
					<div class="row" >
            <?php include "dbconfig.php"; ?>
            <?php                  
                        $query = mysql_query( "SELECT * FROM tbguru WHERE id='".$_GET['kd']."'") or die(mysql_error());
                        $data  = mysql_fetch_array($query);
                     ?>
             <ol class="breadcrumb">
                          <li><a href="../home.php">Home</a></li>
                          <li class="active"></li>
                          <li class="active"></li>
                    </ol>
            <div class="col-lg-5">
                         
                        <td rowspan="7" class="thumbnail" ><img style="height:500px; width:380px; " src="admin/data/<?php echo $data['foto']; ?>" /></td>
                    
                    </div>
            <div class="col-sm-5" style="padding-left:70px;">
                                         
                
                    <div class="title"><h1><b><?php echo $data['nama_guru']; ?></b></h1></div>
                    <div class=""><h4><b><?php echo $data['nip']; ?></b></h4></div>
                    <div><h5><span class="glyphicon glyphicon-calendar"></span> <i><?php echo $data['tanggal_lahir']; ?></i></h5></div>
                    <hr>
                    
                    <div><h4>Jenis Kelamin :<?php echo $data['jenis_kelamin']; ?></h4></div>
                    <div><h4>Mata Pelajaran :<?php echo $data['mapel']; ?></h4></div>
                     <div><h4>Status :<?php echo $data['status']; ?></h4></div>
                    <hr>
                    <div style="float:left; padding-right:10px;"><h3><?php echo $data['alamat']; ?></h3><br>

                   <a href="dataguru.php" class="btn btn-lg btn-default">Kembali</a></div>

                    
                       
                    </div>
                    
                    <!--</div> -->
                <!--</div> -->
<!---->
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