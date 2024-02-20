<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$id = $_POST['id'];

$connect = mysqli_connect(  'localhost',  'root', '', 'box');

$query = 'update users set firstname = "'.$firstname.'", lastname = "'.$lastname.'" where id =' .$id;

$result = mysqli_query($connect, $query);

mysqli_close($connect);

?>
<meta http-equiv="refresh" content="1; url=index.php">
