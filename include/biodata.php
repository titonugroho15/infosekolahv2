<div class="panel panel-default">
					 <div class="panel-heading">Sambutan Kepala Sekolah</div>
					  <div class="panel-body">
					   <center>
					   		<img src="admin/data/g10.jpg" alt="" class="img-rounded"  height="300px" width="200px">
					   	</center>
					   <h5>Sambutan</h5>
					   						   	<hr>
					   	<p>Selengkapnya...</p>
				
					  </div>
					 
				</div>

				<div class="panel panel-default">
					  <div class="panel-heading">Ekstrakulikuler</div>
					  <div class="panel-body">
					  	<?php
					        include "dbconfig.php";
					          $sql = mysql_query("SELECT * FROM ekskul ");
					         while($row=mysql_fetch_array($sql)){
      					?>   
					   <ul>
					   		<li> <a href="detaileskul.php?kd=<?php echo $row['id'];?>"><?php echo $row ['namaeskul'];?></a></li>
					   </ul>
					     <?php } ?>
					  </div>
				</div>

	<div class="panel panel-default">
	  <div class="panel-heading">Daftar Prestasi</div>
	  <div class="panel-body">
	    <a href="">Lihat Daftar Prestasi</a>
	  </div>
	</div>