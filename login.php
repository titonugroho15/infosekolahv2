<?php
@session_start();
include "dbconfig.php";

if(@$_SESSION['admin'] || @$_SESSION['user']){ 
	header("location:admin/dashboard.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	  <link href="css/bootstrap.css" rel="stylesheet">
	  <style type="text/css">
	  	body {
  -webkit-perspective: 800px;
          perspective: 800px;
  height: 100vh;
  margin: 0;
  overflow: hidden;
  font-family: 'Gudea', sans-serif;
  background: #EA5C54;
  
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, #EA5C54), color-stop(100%, #bb6dec));

  background: -webkit-linear-gradient(-45deg, #EA5C54 0%, #bb6dec 100%);

  background: -webkit-linear-gradient(315deg, #EA5C54 0%, #bb6dec 100%);
  background: linear-gradient(135deg, #EA5C54 0%, #bb6dec 100%);
 
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#EA5C54 ', endColorstr='#bb6dec',GradientType=1 );
 
}
.account-box
{
    border: 2px solid rgba(153, 153, 153, 0.75);
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -o-border-radius: 2px;
    z-index: 3;
    font-size: 13px !important;
    font-family: "Helvetica Neue" ,Helvetica,Arial,sans-serif;
    background-color: #ffffff;
    padding: 50px;

}


	  </style>
</head>
<body>
<div class="Container">
	<div class="col-sm-12"><br><br><br><br><br><br></div>
	
	
	<br>
	<div class="row">
		<div class="col-md-3 col-md-offset-4">
			<div class="account-box">
				<h3 align="center">Log In to your account</h3>
					<br><br>
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<div class="input-group">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-user"></span>
									</span>
									<input type="text" placeholder="Username" name="user" class="form-control" required>
							</div><br>
							<div class="input-group">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-lock"></span>
									</span>
									<input type="password" placeholder="password" name="pass" class="form-control" required>
							</div><br>
							<div class="input-group">
									
									 <input class="btn btn-primary" name="login" type="submit" value="Log In" />
								
							</div>
							<br><br>
							<p>Masukan username dan password  untuk bisa login atau masuk ke halaman utama</p>
							
						</form>
			</div>
		</div>
	</div>

</div>

<?php
$user = @$_POST['user'];
$pass = @$_POST['pass'];
$login = @$_POST['login'];

if($login){
	if($user == "" || $pass == ""){
	?><script type="text/javascript">alert("User dan Password tidak boleh kosong");</script><?php
	}else{
	$sql = mysql_query("select * from login where nis = '$user' and password = '$pass' ") or die (mysql_error());
	$data = mysql_fetch_array($sql);
	$cek = mysql_num_rows($sql);
	if($cek >= 1){
		if($data['level'] == "admin"){
		@$_SESSION['admin'] = $data['kode_user'];
		header("location: admin/dashboard.php");
		}else if($data['level'] == "user"){
		@$_SESSION['user'] = $data['kode_user'];
		header("location: home.php");
		}
		}else{
		echo "login gagal";
		}
	}
}
?>
</body>
</html>

<?php
}
?>