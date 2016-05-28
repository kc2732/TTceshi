<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 2016/5/11
 * Time: 22:11
 */
include 'head.php';
$id = $_POST['Id'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
if($username!=null and $id!=null and password!=null and $phone!=null) {
    $hostname = 'localhost';
    $username = 'chenkun';
    $password = 'chenkun';
    $mysql = mysql_connect($hostname, $username, $password);
    mysql_select_db('yundong', $mysql);
    $sql = "INSERT INTO YUNDONG VALUES('$Id','$username','$password','$phone')";
    mysql_query($sql) or die(mysql_error());
}
?>


<form action="../parts/update.php" method="post">
    userId: <input type="text" name="Id" required>
    username:<input type="text" name="username" required>
    password<input type="text" name="password" required>
    phone number<input type="text" name="phone">
    <input type="hidden" name="option" value="insert">
    <input type="submit" name="submit">
</form>


