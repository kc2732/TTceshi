<?php
include 'head.php';
?>
<body>

<!--<div id='top'>-->
<!--    Language:-->
<!--    <select id='lang-selector'></select>-->
<!---->
<!--</div>-->

<div id='calendar' class="col-lg-8 col-md-6 col-sm-6 col-xs-4"></div>

<?php
$username = $_POST['username'];
$password = $_POST['password'];
$userId;
$hostname = 'localhost';
$username = 'chenkun';
$password = 'chenkun';
$mysql = mysql_connect($hostname,$username,$password);
mysql_select_db('yundong',$mysql);
$sql = "SELECT * FROM YUNDONG WHERE username = '$username', password = '$password'";
$result = mysql_query($sql);
$num = mysql_num_rows($result);
//if($num == 1){
//    while($row = mysql_fetch_assoc($result)){
//        $userId = $row['Id'];
//    }
//} else{
//    header("signup.php");
//}

include 'footer.php';
?>

