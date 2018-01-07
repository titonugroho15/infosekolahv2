<?php
include "dbconfig.php";
$miez=mysql_query("SELECT * FROM berita");
while($hard=mysql_fetch_array($miez))
{

?>

<ul class="media-list">
  <li class="media">
    <a class="pull-left" href="#">
      <img class="media-object" src="admin/data/<?php echo $hard['foto'];?>" alt="..." height="100px" width="100px">
    </a>
    <div class="media-body">
      <h4 class="media-heading"><?php echo $hard['judul'];?></h4>
     <p><?php // Tampilkan hanya sebagian isi berita
$isi_berita = htmlentities(strip_tags($hard['isi']));
// 40 menampilkan jumlah karakter
$isi = substr($isi_berita,0,80);
$isi = substr($isi_berita,0,strrpos($isi," ")); ?></p>
<p><?php
echo "<td width='357'>$isi...<br> <a href='lengkap.php?id=$hard[id]'>Selengkapnya</a></p></td>";?>
</p>
    </div>
  </li>
</ul>
<?php } ?>

