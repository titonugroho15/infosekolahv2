<?php
    include '../dbconfig.php';
    $sql = "UPDATE tbguru SET       
                                     nama_guru = '$_POST[nama_guru]',
                                     tanggal_lahir  = '$_POST[tanggal_lahir]',
									  jenis_kelamin  = '$_POST[jenis_kelamin]',
									   alamat  = '$_POST[alamat]',
									   mapel  = '$_POST[mapel]',
                                       status  = '$_POST[status]',
                                        jabatan  = '$_POST[jabatan]'
                                       
                                 WHERE id = '$_POST[id]' ";
    //$dbh->exec($sql);
    mysql_query($sql) or die(mysql_error());
    header("location:dguru.php");
?>