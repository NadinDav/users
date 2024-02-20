<?php
$id = $_GET['id'];
$connect = mysqli_connect(  'localhost',  'root', '', 'box');

$query = 'select * from users where id =' .$id;

$result = mysqli_query($connect, $query);

mysqli_close($connect);

$fetch = mysqli_fetch_row($result);
//print_r($fetch);
?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>пример</title>
</head>
<body>
<h1>
<?php

echo "$fetch[1] $fetch[2]";

?>
</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $fetch[0]?>">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <input type="submit" value="Обновить">
</form>
</body>
</html>
