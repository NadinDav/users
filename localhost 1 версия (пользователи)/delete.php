<?php

$id = $_POST['id'];

$connect = mysqli_connect(  'localhost',  'root', '', 'box');

$query = 'delete from users where id=' .$id;

$result = mysqli_query($connect, $query);

mysqli_close($connect);
?>
<meta http-equiv="refresh" content="1; url=index.php">
