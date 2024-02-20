<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$connect = mysqli_connect(  'localhost',  'root', '', 'box');

$query = "INSERT INTO users (firstname, lastname) VALUES ('$firstname', '$lastname')";

$result = mysqli_query($connect, $query);

mysqli_close($connect);

?>

<meta http-equiv="refresh" content="1; url=index.php">
