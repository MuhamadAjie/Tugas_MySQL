<?php
	$conn=mysql_connect("localhost", "root", "");
	mysql_select_db("latihan_mysql");
	$name=$_POST['username'];
	$Email=$_POST['email'];
	$Website=$_POST['web'];
	$Class=$_POST['class'];
	$Address=$_POST['alamat'];

	$conn=mysql_connect("localhost", "root", "");
		mysql_select_db("latihan_mysql",$conn);
		if(!empty($name) AND !empty($Email) AND !empty($Website) AND !empty($Class) AND !empty($Address)){
			$sqlstr=mysql_query("insert into latihan_koneksi(Name, Email, Website, Class, Address) values ('$name','$Email','$Website','$Class','$Address')");
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap2.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>
	<form action="" method="POST">
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">No</th>
								<th class="column2">Name</th>
								<th class="column3">Email</th>
								<th class="column4">Website</th>
								<th class="column5">Class</th>
								<th class="column6">Address</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">1</td>
									<td class="column2"><?php echo $name ?></td>
									<td class="column3"><?php echo $Email ?></td>
									<td class="column4"><?php echo $Website ?></td>
									<td class="column5"><?php echo $Class ?></td>
									<td class="column6"><?php echo $Address ?></td>
								</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</form>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main2.js"></script>

</body>
</html>