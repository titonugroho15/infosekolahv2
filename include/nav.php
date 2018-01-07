
<ul class="nav nav nav-pills nav-justified"  style="
												background-color: transparent;
												
												padding-top: 0px;
												padding-bottom: 0px;
												
												
												">
  <li><a href="home.php" style="color: #000;">Home</a></li>
  <li><a href="daftarberita.php" style="color: #000;">Berita</a></li>
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akademik <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Sejarah Singkat</a></li>
          <li><a href="#">Visi Misi</a></li>
          <li><a href="#">Sambutan Kepala Sekolah</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dokumen <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="datasiswa.php">Data Siswa</a></li>
          <li><a href="dataguru.php">Data Guru</a></li>
          <li><a href="#">OSIS</a></li>
          <li><a href="#">MPK</a></li>
        </ul>
      </li>

    

   <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Extrakulikuler <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <?php
        include "dbconfig.php";
          $sql = mysql_query("SELECT * FROM ekskul ");
         while($row=mysql_fetch_array($sql)){
       ?>   
          <li><a href="detaileskul.php?kd=<?php echo $row['id'];?>"><?php echo $row ['namaeskul'];?></a></li>
        <!--   <li><a href="#">Palang Merah Remaja (PMR)</a></li>
          <li><a href="#">Paskibra</a></li>
          <li><a href="#">Musik dan tari</a></li>
          <li><a href="#">Basket</a></li>
          <li><a href="#">Voli</a></li>
          <li><a href="#">Sepak Bola</a></li>
          <li><a href="#">Karate</a></li> -->
          <?php } ?>
        </ul>
      </li>

</ul>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

