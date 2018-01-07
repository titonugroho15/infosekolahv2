<?php
include_once'../dbconfig.php';
if(isset($_POST['btn_save']));
{
$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$mapel = $_POST['mapel'];
$status = $_POST['status'];
$jabatan = $_POST['jabatan'];
$foto = $_FILES['foto']['tmp_name'];
$name = $_FILES['foto']['name'];
$direktori="data/$name";
	if (strlen($foto)>0) {
		//upload
		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			 move_uploaded_file($foto, $direktori);
			}
	}
$sql = "INSERT INTO tbguru(nip,nama_guru,tanggal_lahir,jenis_kelamin,alamat,mapel,status,jabatan,foto) VALUES('$nip','$nama_guru','$tanggal_lahir','$jenis_kelamin','$alamat','$mapel','$status','$jabatan','$name')";
if(mysql_query($sql))
{
?>
	echo"<script type="text/javascript">
	alert('Data Tersimpan');
	window.location.href='dguru.php';
	</script>
<?php
}
else
{
	echo mysql_error();
	?>
	<script type="text/javascript">
	alert('Data Gagal Tersimpan');
	</script>
	<?php
 }
}
?>

