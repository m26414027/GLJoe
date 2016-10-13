<?php session_start();
	$_SESSION['status']="pizza";
?>
<!DOCTYPE html>
<html>
<head>
	<?php include("include/header.php");?>
	<title>Add Pizza Form</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1 class="page-header" style="color: black;" align="center">New Pizza</h1>
        </div>
    </div>
    <div class="row">
		<div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="controller/addpizza-admin.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama">Pizza Name</label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Pizza name" required>
					</div>

					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="text" class="form-control" id="harga" name="harga" placeholder="Rp0000" required>
					</div>

					<div class="form-group">
						<label for="image">Image</label>
						<input type="file" id="fileToUpload" name="fileToUpload" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" id="description" name="description" placeholder="This is a pizza" required></textarea>
					</div>
					<div class="form-group">
						<button name="submit" class="btn btn-primary btn-block" type="submit">Submit</button>
						<button class="btn btn-primary btn-block" type="button" onclick="window.location='menus.php'">Cancel</button>
						</table>
                    </div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>