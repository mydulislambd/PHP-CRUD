<?php 
include 'class/crud.php';

$db = new Database();

$id = $_GET['id'];

$db->delete_data($id);

header("location: index.php");

?>