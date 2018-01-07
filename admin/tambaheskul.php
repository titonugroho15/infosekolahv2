<?php
@session_start();
include "../dbconfig.php";

if(@$_SESSION['admin'] || @$_SESSION['user']){ 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Ekstrakulikuler</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/datepicker.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script> 
    <script src="../js/tinymce/tinymce.min.js"></script>
     <!-- <script type="text/javascript"> 
     	tinymce.init({     selector: "textarea",
     	     plugins: [         "advlist autolink lists link image charmap print preview anchor",
     	              "searchreplace visualblocks code fullscreen", 
     	                      "insertdatetime media table contextmenu paste"     ],
     	                           toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image" }); </script> -->
</head>
<body style="font-family: fira sans;background-color: #cecdcc;">
	<div class="fluid-container">
	<?php include "include/navbar.php"; ?>
	<?php include "include/menu.php"; ?>
  		<div class="col-lg-10" style=" margin-top:55px;">

  			<div class="panel panel-default">
 				<div class="panel-body">
 					<h2><span class="glyphicon glyphicon-user"></span> Tambah Data Ekstrakulikuler</h2>
 					<hr>
 						<div class="col-lg-10">
    					<form role="form" action="cekeskul.php" method="post" enctype="multipart/form-data"">
    						<div class="col-lg-3">
							   <div class="form-group">
							  	 <label for=""></label>
									<select class="form-control" name="kategori">
									  <option>- Pilih kategori- </option>
									  <option>Seni</option>
									  <option>Olahraga</option>
									  <option>Bela Diri</option>
									  <option>Pendidikan</option>
									</select>
							  </div>
							</div>
    						<div class="col-lg-7">
							  <div class="form-group">
							    <label for=""></label>
							    <input type="text" class="form-control" id="" placeholder="Masukan Nama Ekstrakulikuler" name="namaeskul" required/>
							  </div>
							 </div>
								
							<div class="col-lg-10">
							  <div class="form-group">
							  	 <label for=""></label>
							   <textarea class="form-control" rows="3" name="keterangan" required/></textarea>

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