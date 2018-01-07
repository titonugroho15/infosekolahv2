<?php
@session_start();
include "../dbconfig.php";

if(@$_SESSION['admin'] || @$_SESSION['user']){ 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Guru</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/datepicker.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script> 
</head>
<body style="font-family: fira sans;background-color: #cecdcc;">
	<div class="fluid-container">
	<?php include "include/navbar.php"; ?>
	<?php include "include/menu.php"; ?>
  		<div class="col-lg-10" style=" margin-top:55px;">

  			<div class="panel panel-default">
 				<div class="panel-body">
 					<h2><span class="glyphicon glyphicon-user"></span> Tambah Data Guru</h2>
 					<hr>
 						<div class="col-lg-8">
    					<form role="form" action="cekguru.php" method="post" enctype="multipart/form-data"">
    						<div class="col-lg-3">
							  <div class="form-group">
							    <label for=""></label>
							    <input type="text" class="form-control" id="" placeholder="Masukan Nomor NIP" name="nip" required/>
							  </div>
							 </div>
							 <div class="col-lg-5">
							  <div class="form-group">
							    <label for=""> </label>
							    <input type="text" class="form-control" id="" placeholder="Nama Lengkap" name="nama_guru" required/>
							  </div>
							 </div>
							  <div class="col-lg-5">
							  	<br>
							  <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd" >
								     <input class="form-control" type="text" name="tanggal_lahir" readonly="readonly" required/>
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
							   <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat" required/></textarea>

							  </div>
							</div>
							<div class="col-lg-5">
							   <div class="form-group">
							  	 <label for=""></label>
									<select class="form-control" name="mapel">
									  <option>- Pilih Mata Pelajaran- </option>
									  <option>Matematika</option>
									  <option>Bahasa Inggris</option>
									  <option>Seni Rupa</option>
									</select>
							  </div>
							</div>
							<div class="col-lg-3">
							    <div class="form-group">
							  	 <label for=""></label>
									<select class="form-control" name="status">
									  <option>- Pilih Status -</option>
									  <option>PNS</option>
									   <option>Honorer</option>
									  </select>
							  </div>
							</div>	
							<div class="col-lg-3">
							    <div class="form-group">
							  	 <label for=""></label>
									<select class="form-control" name="jabatan">
									  <option>- Pilih Jabatan -</option>
									  <option>Kepala Sekolah</option>
									   <option>Wakil Kepala Sekolah</option>
									    <option>Guru Mata Pelajaran</option>
									     <option>Staf Tata Usaha</option>
									      <option>Staf Laboratorium</option>
									  </select>
							  </div>
							</div>	
							<div class="col-lg-8">
							  <div class="form-group">
							    <label for="exampleInputFile"></label>
							    <input name="foto" type="file" id="foto" value="<?php move_uploaded_file($_FILES['data']['tmp_name'], 'data/'.$_FILES['data']['name']); ?>" required /> 
							    <p class="help-block">Gambar bisa dengan format .jpg, .png dll</p>
							  </div>
							  <button type="submit" class="btn btn-default" name="btn_save">
							  	<span class="glyphicon glyphicon-send"></span> Simpan</button>
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