<?php

class Database
{
	
	Public function __construct()
	{
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "crud";
	$this->link = mysqli_connect($host, $user, $pass, $db);
	
	}


/*Data Add*/
public function add_data($data){

	$name = $data['name'];
	$email = $data['email'];
	$address = $data['address'];
	$phone = $data['phone'];

	$query = "INSERT INTO `user`(`name`, `email`, `address`, `phone`) VALUES ('$name', '$email', '$address', '$phone')";

	$result = mysqli_query($this->link, $query)or die("query faild");

	if($result){
		$msg = "Data Add Success";
		return $msg;
	}else{
		$msg = "Data Add Faild";
		return $msg;
	}
	header("location: index.php");


}


/*Data Show*/
public function data_show(){
	$limit = 3;

	$query = "SELECT * FROM `user` ORDER BY id DESC";

	$result = mysqli_query($this->link, $query);
	return $result;
}


/*Data Delete*/

public function delete_data($id){

	$query = "DELETE FROM `user` WHERE id = $id";

	$result = mysqli_query($this->link, $query);

	if($result){

		$delete_msg = "Delete Success";
		return $delete_msg;

	}else{

		$delete_msg = "Delete Success";
		return $delete_msg;

	}


}



/*Edit Data*/

public function edit_data($id){

	$query = "SELECT * FROM `user` WHERE id = $id";

	$result = mysqli_query($this->link, $query);

	return $result;
}


public function edit_save_data($data){

	print_r($data);

		$id = $data['id'];
		$name = $data['name'];
		$email = $data['email'];
		$address = $data['address'];
		$phone = $data['phone'];

		$query = "UPDATE `user` SET `name`='$name', `email`='$email', `address`='$address', `phone`='$phone' WHERE id= $id";

		$result = mysqli_query($this->link, $query);

		if($result){

				$update_msg = "Update Successfully";
				return $update_msg;
		}else{

			$update_msg = "Update Faild";
				return $update_msg;
		}
}








}
 


?>