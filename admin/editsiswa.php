<?php
@session_start();
include "../dbconfig.php";

if(@$_SESSION['admin'] || @$_SESSION['user']){ 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/datepicker.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script> 
</head>
<body style="font-family: fira sans;background-color: #cecdcc;">
	<?php
		include '../dbconfig.php';
		    $id = $_GET['edit_id'];

		$query = mysql_query("select * from tbsiswa where id='$id'") or die(mysql_error());

		$data = mysql_fetch_array($query);
	?>
	<div class="fluid-container">
	<?php include "include/navbar.php"; ?>
	<?php include "include/menu.php"; ?>
  		<div class="col-lg-10" style=" margin-top:55px;">

  			<div class="panel panel-default">
 				<div class="panel-body">
 					<h2><span class="glyphicon glyphicon-user"></span> Edit Data Siswa</h2>
 					<hr>
 						<div class="col-lg-8">
    					<form role="form" action="openlink.php?p=updatesiswa" method="post" enctype="multipart/form-data"">
    						<div class="col-lg-3">
							  <div class="form-group">
							    <label for=""></label>
							    <input type="text" class="form-control" id="" placeholder="Masukan Nomor NIS" name="nis" value="<?php echo $data['nis']; ?>" required/>
							  </div>
							 </div>
							 <div class="col-lg-5">
							  <div class="form-group">
							    <label for=""> </label>
							    <input type="text" class="form-control" id="" placeholder="Nama Lengkap" name="nama_siswa" value="<?php echo $data['nama']; ?>" required/>
							  </div>
							 </div>
							  <div class="col-lg-5">
							  	<br>
							  <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd" >
								     <input class="form-control" type="text" name="tanggal_lahir" readonly="readonly" value="<?php echo $data['tanggal_lahir']; ?>" required/>
								     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								</div>
								</div>
								<div class="col-lg-5">
							   <div class="form-group">
							   	 <label for=""> </label><br>
							    <div class="radio-inline" name="jenis_kelamin">
									  <label>
									    <input type="radio"  value="Laki-laki" name="jenis_kelamin" checked>
									    Laki-laki
									  </label>
									</div>
									<div class="radio-inline">
									  <label>
									    <input type="radio"  value="Perempuan" name="jenis_kelamin">
									    Perempuan
									  </label>
									</div>
							  </div>
							</div>
							<div class="col-lg-8">
							  <div class="form-group">
							  	 <label for=""></label>
							   <textarea class="form-control" rows="3" name="alamat" value="<?php echo $data['alamat']; ?>" required/></textarea>

							  </div>
							</div>
							<div class="col-lg-5">
							   <div class="form-group">
							  	 <label for=""></label>
									<select class="form-control" name="kelas" >
										<option><?php echo $data['kelas']; ?></option>
									  <option>X</option>
									  <option>XI</option>
									  <option>XII</option>
									</select>
							  </div>
							</div>
							<div class="col-lg-3">
							    <div class="form-group">
							  	 <label for=""></label>
									<select class="form-control" name="status">
										 <option><?php echo $data['status']; ?></option>
									  <option>Aktif</option>
									   <option>Tidak Aktif</option>
									  </select>
							  </div>
							</div>	
							<div class="col-lg-8">
							  <button type="submit" class="btn btn-default" name="btn_save">
							  	<span class="glyphicon glyphicon-pencil"></span> Ubah</button>
							</div>
						</form>

  				</div>
  			</div>
			</div>


  		
  	</div>
  </div>
  	</div>

  	<script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>
  	</body>
  </html>
  <?php
}else{
	header("location:../login.php");
}
?>