<?php
include_once '../dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM tbguru WHERE id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<?php
@session_start();
include "../dbconfig.php";

if(@$_SESSION['admin'] || @$_SESSION['user']){ 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript">
		function edt_id(id)
		{
		 if(confirm('Yakin Ingin Mengedit ?'))
		 {
		  window.location.href='editguru.php?edit_id='+id;
		 }
		}
		function delete_id(id)
		{
		 if(confirm('Yakin Ingin Menghapus ?'))
		 {
		  window.location.href='dguru.php?delete_id='+id;
		 }
		}
	</script>
</head>
<body style="font-family: fira sans;background-color: #cecdcc;">
	<div class="fluid-container">
	<?php include "include/navbar.php"; ?>
	<?php include "include/menu.php"; ?>
  		<div class="col-lg-10" style=" margin-top:55px;">
  			<h2> >> Data Guru</h2>
  			<br><br>
  			<form class="form-horizontal" role="form">
			  <div class="form-group">
			    <div class="col-lg-5">
			      <input style="border-bottom: 3px grey solid" type="text" class="form-control" id="cari" placeholder="pencarian">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-lg-3">
			      <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> &nbsp;Cari</button>
			    </div>
			  </div>
			   <div class="form-group">
			    <div class="col-lg-3">
			     <a href="openlink.php?p=inputguru" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data Guru</a>
			    </div>
			  </div>
			 </form>
  			<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Data Guru</div>
					  <div class="panel-body">
					  	 <?php
					  	 include "../dbconfig.php";
								//konfigurasi
								$per_page=5;
								$cur_page=1;
								if(isset($_GET['page']))
								{
								    $cur_page = $_GET['page'];
								    $cur_page > 1 ? $cur_page : 1;
								    
								}
								$total_page = ceil($per_page);
								$offset=($cur_page - 1) *$per_page;
								$sql = mysql_query("SELECT * FROM tbguru LIMIT $per_page OFFSET $offset")
						?>
					    <table class="table table-hover table-bordered" >
				  <thead>
				     <tr >
					    <th>NIP</th>
					    <th>Nama </th>
					    <th>Tanggal Lahir</th>
					    <th>Jenis Kelamin</th>
					    <th>Alamat</th>
					    <th>Mata Pelajaran</th>
					    <th>Status</th>
					    <th>Jabatan</th>
					    <th>Foto</th>
					    <th colspan="2">Operations</th>
				    </tr>
				   </thead>
				    <?php while($row = mysql_fetch_array($sql)){ ?>
				<tbody>
				    <tr>
				        <td><?php echo $row['nip']; ?></td>
				        <td><?php echo $row['nama_guru']; ?></td>
				        <td><?php echo $row['tanggal_lahir']; ?></td>
				         <td><?php echo $row['jenis_kelamin']; ?></td>
				        <td><?php echo $row['alamat']; ?></td>
				        <td><?php echo $row['mapel']; ?></td>
				        <td><?php echo $row['status']; ?></td>
				        <td><?php echo $row['jabatan']; ?></td> 
				        <td><img src="data/<?php echo $row['foto']; ?>" class="img-circle" alt="Foto tidak tersedia" height="100px" width="100px" /></td> 
				  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> </button></a></td>
				        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> </button></a></td>
        			</tr>
        		</tbody>
        		 <?php
					 }
					 ?>
				  </table>
				   <?php
    if($cur_page > 1)
    {
        echo "<a href='dguru.php?page=" . ($cur_page - 1) . "'>Prev</a>&nbsp;&nbsp;&nbsp;";
    }
    else
    {
        echo "";
    }
    if($cur_page < $total_page)
    {
        echo "<a href='dguru.php?page=" . ($cur_page + 1) . "'>Next</a>";
    }
    else
	{
		echo "";
	}
    ?>
					  </div>				
			</div>

  		</div>
  	</div>
</body>
</html>
<?php
}else{
	header("location:../login.php");
}
?>