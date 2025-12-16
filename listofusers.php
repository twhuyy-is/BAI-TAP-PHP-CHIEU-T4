<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nhập dữ liệu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php
	require_once "db.php";
	$db = new DbHelper();
	$sql = "select * from users";
	$st = $db->select($sql);
	?>
	<div class="container p-3">
		<div class="card">
			<div class = "card-header text-center text-primary">
				<h3>Danh sách users </h3>
			</div>
			<div class="card-body">			
				<div class="row">
					<table class="table table-bordered table-striped col-sm-3">
						<tr> 
							<th>Name</th>
							<th>Email</th>
							<th>Data created</th>
							<th>Action</th>
						</tr>
						<?php
						foreach ($st as $k)
						{
						?>

						<tr> 
							<td><?php { echo $k->name; }?></td>
							<td><?php { echo $k->email; }?></td>
							<td><?php { echo $k->date_created; }?></td>
							
						</tr>

						<?php 
						}				
						?>
					</table>
					
				</div>
			
			</div>
			<div class="card-footer">
				<a href="newuserinput.php" class="btn btn-primary"> New user</a>
			<div>
		</div>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>