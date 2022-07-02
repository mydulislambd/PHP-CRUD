<?php 

include 'class/crud.php';

$db = new Database();

$id = $_GET['id'];

$result = $db->edit_data($id);

$row = mysqli_fetch_assoc($result);




if(isset($_POST['submit'])){

	$update_msg = $db->edit_save_data($_POST);


	header("location: index.php");


}



?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- JS -->
<link rel="stylesheet" type="text/css" href="js/script.js">


</head>
<body>

<div class="row justify-content-center">
	<div class="col-md-4">
		<form action="" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" required>
						<input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>" >
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="address" required><?php echo $row['address'];?></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>" required>
					</div>					
				</div>
				<div class="modal-footer">
					
					<input type="submit" class="btn btn-info" name="submit" value="Save">
				</div>
			</form>
	
	</div>
</div>
			




</body>
</html>
