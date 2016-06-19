<?php
$hostname = 'localhost';
$uname = 'chenkun';
$pwd = 'chenkun';
$mysql = mysql_connect($hostname,$uname,$pwd);
mysql_select_db('tangyisheng',$mysql);

$query_usertable = "select * from users";
$usertable = mysql_query($query_usertable);
echo " <table>
        <tr>
        <td>用户名</td>
        <td>电话</td>
        </tr>";

while($row = mysql_fetch_assoc($usertable)){
    ?>
        <tr>

        </tr>

    </table>
<?php
}
?>