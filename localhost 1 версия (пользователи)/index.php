<?php
$connect = mysqli_connect(  'localhost',  'root', '', 'box');

$query = "SELECT * FROM users";

$result = mysqli_query($connect, $query);

$users = mysqli_fetch_all($result);

mysqli_close($connect);

//print_r($users);

?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>пример</title>
</head>
<body>
<h1>Имена</h1>

<?php

foreach ($users as $key => $value) {
    //print_r($value);
   echo '<a href="edit.php?id='.$value[0].'"> '.$value[1]. ' ' .$value[2]. '</a>
    <form action = "delete.php" method="post">
    <input type="hidden" name="id" value="'.$value[0].'">
    <input type="submit" value="Удалить">
    </form>
<br>';

}

?>
<form action="insert.php" method="post">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <input type="submit" value="Создать">
</form>
</body>
</html>



