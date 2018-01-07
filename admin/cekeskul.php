<?php
include_once'../dbconfig.php';
if(isset($_POST['btn_save']));
{
$kategori = $_POST['kategori'];
$namaeskul = $_POST['namaeskul'];
$keterangan = $_POST['keterangan'];
$foto = $_FILES['foto']['tmp_name'];
$name = $_FILES['foto']['name'];
$direktori="data/$name";
	if (strlen($foto)>0) {
		//upload
		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			 move_uploaded_file($foto, $direktori);
			}
	}

$sql ="INSERT INTO ekskul(kategori,namaeskul,keterangan,foto) VALUES('$kategori','$namaeskul','$keterangan','$name')";
if(mysql_query($sql))
{
?>
	echo"<script type="text/javascript">
	alert('Data Tersimpan');
	window.location.href='deskul.php';
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

