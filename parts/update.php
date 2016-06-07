<?php
/**
 * Created by PhpStorm.-+*
 * User: PC
 * Date: 2016/5/11
 * Time: 22:11
 */
$username = $_POST['username'];
$password = $_POST['password'];
$password1 = $_POST['password1'];
$phone = $_POST['phone'];
$option = $_POST['option'];
$checkbox = $_POST['check'];
$hostname = 'localhost';
$uname = 'chenkun';
$pwd = 'chenkun';
$mysql = mysql_connect($hostname,$uname,$pwd);
mysql_select_db('tangyisheng',$mysql);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$phone = mysql_real_escape_string($phone);

?>
<div style="width:60%; margin-top:10%; margin-left: auto; margin-right: auto; text-align: center; font-size: 32px;">
<?php
if($option == 'insert'){
    $check = "SELECT * FROM users WHERE username = '$username'";
    $check_res = mysql_query($check);
    $num_row = mysql_num_rows($check_res);
    if($num_row == 0){
        if($username!="") {
            if ($password!="") {
                if ($password1!="") {
                    if($password == $password1) {
                        if ($phone!="") {
                            if($checkbox!=""){
                                mysql_query("set names utf8");
                                $sql = "INSERT INTO users (username,password,phone) VALUES('$username','$password','$phone')";
                                mysql_query($sql) or die(mysql_error());
                                echo "您的信息已经成功提交！！！接下来完成我们的问答，专家会根据您的回答来给您带来正确的治疗方案。</br>";
                                ?>
                                <a style="width:30%;margin-right:35%" class="button-submit " href="https://guowei.typeform.com/to/aovyxK">开始问答</a>
                            <?php
                            }else echo "您还未同意我们的服务条款，请确认后重新提交";
                        } else echo "请输入您的联系方式";
                    }else echo "您的密码两次输入不一致，请核实后重新提交";
                } else echo "请确认密码";
            } else echo "请输入您的密码";
        }else echo "请输入您的用户名";
    } else{
        echo "您的用户名已经被注册，请登录！";
    }

} elseif($option == 'update'){
    echo '该站点正在开发中，敬请期待！';
} elseif($option == 'login'){
    $login_check = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $login_query = mysql_query($login_check);
    $res_login_query = mysql_num_rows($login_query);
    if($res_login_query == 0){
        echo "您的用户名或密码不正确，请确认后重新输入";
    } else{
        echo "登录成功！</br>(若您已经完成问答，请耐心等待，我们的专家会尽快为您设计出最适合您的方案)</br>";
        echo '<a style="width:30%;margin-right:35%" class="button-submit " href="https://guowei.typeform.com/to/aovyxK">开始问答</a>';
    }
} else{
    echo '该站点正在开发中，敬请期待！';
}
?>
</div>