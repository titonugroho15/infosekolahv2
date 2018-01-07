<?php
    include '../dbconfig.php';
    $sql = "UPDATE berita SET kategori = '$_POST[kategori]',
                                     judul  = '$_POST[judul]',
                                     tanggal  = '$_POST[tanggal]',
									  isi  = '$_POST[isi]',
									  penulis  = '$_POST[penulis]' 
                                 WHERE id = '$_POST[id]' ";
    //$dbh->exec($sql);
    mysql_query($sql) or die(mysql_error());
    header("location:dberita.php");
?>