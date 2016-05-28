<?php
$username = $_POST['username'];
$password = $_POST['password'];
$uname = "chenkun";
$pwd = "chenkun";
try{

    $pdo = new PDO('mysql:host=localhost;dbname=tangyisheng',$uname,$pwd);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $data = $pdo -> query('SELECT * FROM ');


} catch (PDOException $e){
    echo 'ERROR:' .$e->getMessage();
}

?>

<?php
/**
 * Created by PhpStorm.
 * User: kunchen
 * Date: 16/5/12
 * Time: PM6:59
 */
?>