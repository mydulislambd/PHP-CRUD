<?php

include 'class/crud.php';

$db = new Database();

if (isset($_POST['submit'])) {

	$db->add_data($_POST);

}

?>


