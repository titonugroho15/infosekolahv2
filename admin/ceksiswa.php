<?php
include_once'../dbconfig.php';
if(isset($_POST['btn_save']));
{
//$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$status = $_POST['status'];
$today = date("Ymd");
$foto = $_FILES['foto']['tmp_name'];
$name = $_FILES['foto']['name'];
$direktori="data/$name";
	if (strlen($foto)>0) {
		//upload
		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			 move_uploaded_file($foto, $direktori);
			}
	}

		 
/*pertama kita panggil colom yang akan kita gunakan untuk ID kita dengan menyaring nilai maksimum */
$sql ="SELECT max(nis) as terakhir from tbsiswa";
//mengecek hasil atau value yang dihasilkan dari query yang disimpan pada variable sql
  $hasil = mysql_query($sql);
//memecah table hasil query
  $data = mysql_fetch_array($hasil);
//mengambil cell atau 1 kotak bagian dari table yaitu cell id_anggota yang dialiaskan terakhir
  $lastID = $data['terakhir'];
  // baca nomor urut  id transaksi terakhir
 $lastNoUrut = substr($lastID, 3, 9);
  // nomor urut ditambah 1
  $nextNoUrut = $lastNoUrut + 1;
  // membuat format nomor berikutnya
  $nextID = "333" .sprintf("%03s",$nextNoUrut);
// selesai,,, untuk memanggil ID otomatis ini  bisa memasangkan cara

 


$sql = "INSERT INTO tbsiswa(nis,nama,tanggal_lahir,jenis_kelamin,alamat,kelas,status,foto) VALUES('$nextID','$nama_siswa','$tanggal_lahir','$jenis_kelamin','$alamat','$kelas','$status','$name')";
if(mysql_query($sql))
{
?>
	echo"<script type="text/javascript">
	alert('Data Tersimpan');
	window.location.href='dsiswa.php';
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

