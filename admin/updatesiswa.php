<?php
    include '../dbconfig.php';
    $sql = "UPDATE tbsiswa SET 
                                     nama = '$_POST[nama_siswa]',
                                     tanggal_lahir  = '$_POST[tanggal_lahir]',
									  jenis_kelamin  = '$_POST[jenis_kelamin]',
									   alamat  = '$_POST[alamat]',
									   kelas  = '$_POST[kelas]',
                                       status  = '$_POST[status]'
                                       
                                 WHERE nis = '$_POST[nis]' ";
    //$dbh->exec($sql);
    mysql_query($sql) or die(mysql_error());
    header("location:dsiswa.php");
?>