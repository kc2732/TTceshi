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
session_start();
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
                                mysql_query("set names utf8");
                                $get_currentId = "SELECT * FROM users WHERE username='$username'";
                                $get_userid = mysql_query($get_currentId);
                                while($row=mysql_fetch_assoc($get_userid)){
                                    $_SESSION['id'] = $row['id'];
                                }
                                echo "您的信息已经成功提交！！！接下来完成我们的问答，专家会根据您的回答来给您带来正确的治疗方案。</br>";
                                ?>
                                <a style="width:30%;margin-right:35%" class="button-submit " href="../pages/data-collection.php">开始问答</a>
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
    mysql_query("set names utf8");
    $login_query = mysql_query($login_check);
    $res_login_query = mysql_num_rows($login_query);
    if($res_login_query == 0){
        echo "您的用户名或密码不正确，请确认后重新输入";
    } else{
        while($row = mysql_fetch_assoc($login_query)){

            $_SESSION['id'] = $row['id'];
        }
        echo "登录成功！</br>(若您已经完成问答，请耐心等待，我们的专家会尽快为您设计出最适合您的方案)</br>";
        echo '<a style="width:30%;margin-right:35%" class="button-submit " href="../pages/data-collection.php">开始问答</a>';
    }
} elseif($option='dataCollection'){

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $waist = $_POST['waist'];
    $question8 = $_POST['question8'];
    $question9 = $_POST['question9'];
    $question10 = $_POST['question10'];
    $question11 = $_POST['question11'];
    $question0111 = $_POST['question0111'];
    $question12 = $_POST['question12'];
    $question0112 = $_POST['question0112'];
    $question13 = $_POST['question13'];
    $question14 = $_POST['question14'];
    $question15 = $_POST['question15'];
    $question151 = $_POST['question151'];
    $question16 = $_POST['question16'];
    $question152 = $_POST['question152'];
    $question17 = $_POST['question17'];
    $question18 = $_POST['question18'];
    $question19 = $_POST['question19'];
    $question191 = $_POST['question191'];
    $question20 = $_POST['question20'];
    $question192 = $_POST['question192'];
    $question21 = $_POST['question21'];
    $question22 = $_POST['question22'];
    $question23 = $_POST['question23'];
    $question231 = $_POST['question231'];
    $question24 = $_POST['question24'];
    $question232 = $_POST['question232'];
    $question25 = $_POST['question25'];
    $question26 = $_POST['question26'];
    $question27 = $_POST['question27'];
    $question271 = $_POST['question271'];
    $question28 = $_POST['question28'];
    $question272 = $_POST['question272'];
    $question29 = $_POST['question29'];
    $question30 = $_POST['question30'];
    $question31 = $_POST['question31'];
    $question311 = $_POST['question311'];
    $question32 = $_POST['question32'];
    $question312 = $_POST['question312'];
    $question33 = $_POST['question33'];
    $question34 = $_POST['question34'];
    $question35 = $_POST['question35'];
    $question351 = $_POST['question351'];
    $question36 = $_POST['question36'];
    $question352 = $_POST['question352'];
    $question37 = $_POST['question37'];
    $question38 = $_POST['question38'];
    $question39 = $_POST['question39'];
    $question40 = $_POST['question40'];
    $question41 = $_POST['question41'];
    $question42 = $_POST['question42'];
    $question43 = $_POST['question43'];
    $question44 = $_POST['question44'];
    $question45 = $_POST['question45'];
    $question46 = $_POST['question46'];
    $question47 = $_POST['question47'];
    $question48 = $_POST['question48'];
    $question49 = $_POST['question49'];
    $question50 = $_POST['question50'];
    $question050 = $_POST['question050'];
    $question51 = $_POST['question51'];
    $question52 = $_POST['question52'];
    $question53 = $_POST['question53'];
    $question54 = $_POST['question54'];
    $question55 = $_POST['question55'];
    $question56 = $_POST['question56'];
    $question57 = $_POST['question57'];
    $question58 = $_POST['question58'];
    $question59 = $_POST['question59'];
    $question60 = $_POST['question60'];
    $question601 = $_POST['question601'];
    $question61 = $_POST['question61'];
    $question62 = $_POST['question62'];
    $question63 = $_POST['question63'];
    $question64 = $_POST['question64'];
    $question65 = $_POST['question65'];
    $question66 = $_POST['question66'];
    $question67 = $_POST['question67'];
    $question68 = $_POST['question68'];
    $question69 = $_POST['question69'];
    $question70 = $_POST['question70'];
    $question71 = $_POST['question71'];
    $question72 = $_POST['question72'];
    $question73 = $_POST['question73'];
    $question74 = $_POST['question74'];
    $question75 = $_POST['question75'];
    $question76 = $_POST['question76'];
    $question77 = $_POST['question77'];
    $question78 = $_POST['question78'];
    $question79 = $_POST['question79'];
    $question80 = $_POST['question80'];
    $question81 = $_POST['question81'];
    $question82 = $_POST['question82'];
    $question83 = $_POST['question83'];
    $question84 = $_POST['question84'];
    $question85 = $_POST['question85'];
    $question86 = $_POST['question86'];
    $question87 = $_POST['question87'];
    $question88 = $_POST['question88'];
    $question89 = $_POST['question89'];
    $question90 = $_POST['question90'];
    $question91 = $_POST['question91'];
    $question92 = $_POST['question92'];
    $question93 = $_POST['question93'];
    $question94 = $_POST['question94'];
    $question95 = $_POST['question95'];
    $question96 = $_POST['question96'];
    $question97 = $_POST['question97'];
    $question98 = $_POST['question98'];
    $question99 = $_POST['question99'];
    $question100 = $_POST['question100'];
    $question101 = $_POST['question101'];
    $question102 = $_POST['question102'];
    $question103 = $_POST['question103'];
    $question104 = $_POST['question104'];
    $question105 = $_POST['question105'];
    $question106 = $_POST['question106'];
    $question107 = $_POST['question107'];
    $question1071 = $_POST['question1071'];
    $question108 = $_POST['question108'];
    $question109 = $_POST['question109'];
    $question110 = $_POST['question110'];
    $question111 = $_POST['question111'];
    $question112 = $_POST['question112'];
    $question113 = $_POST['question113'];
    $question114 = $_POST['question114'];
    $question115 = $_POST['question115'];
    $question116 = $_POST['question116'];
    $question117 = $_POST['question117'];
    $question118 = $_POST['question118'];
    $question119 = $_POST['question119'];

    $check_exist = "SELECT * FROM DataCollection WHERE name='$name'";
    mysql_query("set names utf8");
    $result_check_exist = mysql_query($check_exist);
    $num_check_exist = mysql_num_rows($result_check_exist);
    if($num_check_exist == 0){
        $Insert_Data_Collection = "INSERT INTO DataCollection VALUES ('$username','$name','$gender','$age','$phone','$height','$weight','$waist','$question8','$question9','$question10','$question11','$question0111','$question12','$question0112','$question13','$question14','$question15','$question151','$question16','$question152','$question17','$question18',
'$question19','$question191','$question20','$question192','$question21','$question22','$question23','$question231','$question24','$question232','$question25','$question26','$question27','$question271','$question28','$question272','$question29',
'$question30','$question31','$question311','$question32','$question312','$question33','$question34','$question35','$question351','$question36','$question352','$question37','$question38','$question39','$question40','$question41','$question42','$question43','$question44',
'$question45','$question46','$question47','$question48','$question49','$question50','$question51','$question52','$question53','$question54','$question55','$question56','$question57','$question58','$question59',
'$question60','$question601','$question61','$question62','$question63','$question64','$question65','$question66','$question67','$question68','$question69','$question70','$question71','$question72','$question73','$question74',
'$question75','$question76','$question77','$question78','$question79','$question80','$question81','$question82','$question83','$question84','$question85','$question86','$question87','$question88','$question89','$question90','$question91',
'$question92','$question93','$question94','$question95','$question96','$question97','$question98','$question99','$question100',
'$question101','$question102','$question103','$question104','$question105','$question106','$question107','$question1071','$question108','$question109','$question110','$question111','$question112','$question113','$question114','$question115','$question116','$question117','$question118','$question119','$question050'
)";
        mysql_query("set names utf8");
        mysql_query($Insert_Data_Collection) or die(mysql_error());
        echo "您的数据已经成功保存在我们的系统中！";
    }else{
        $update_Date_Collection = "UPDATE DataCollection Set
gender='$gender',age='$age',phone='$phone',height='$height',weight='$weight',
waist='$waist',question8='$question8',question9='$question9',question10='$question10',
question11='$question11',question0111='$question0111',question12='$question12',question0112='$question0112',
question13='$question13',question14='$question14',question15='$question15',question151='$question151',
question16='$question16',question152='$question152',question17='$question17',question18='$question18',
question19='$question19',question191='$question191',question20='$question20',question192='$question192',
question21='$question21',question22='$question22',question23='$question23',question231='$question231',
question24='$question24',question232='$question232',question25='$question25',question26='$question26',
question27='$question27',question271='$question271',question28='$question28',question272='$question272',
question29='$question29',question30='$question30',question31='$question31',question311='$question311',
question32='$question32',question312='$question312',question33='$question33',question34='$question34',
question35='$question35',question351='$question351',question36='$question36',question352='$question352',
question37='$question37',question38='$question38',question39='$question39',question40='$question40',
question41='$question41',question42='$question42',question43='$question43',question44='$question44',
question45='$question45',question46='$question46',question47='$question47',question48='$question48',
question49='$question49',question50='$question50',question51='$question51',question52='$question52',
question53='$question53',question54='$question54',question55='$question55',question56='$question56',
question57='$question57',question58='$question58',question59='$question59',question60='$question60',
question601='$question601',question61='$question61',question62='$question62',question63='$question63',
question64='$question64',question65='$question65',question66='$question66',question67='$question67',
question68='$question68',question69='$question69',question70='$question70',question71='$question71',
question72='$question72',question73='$question73',question74='$question74',question75='$question75',
question76='$question76',question77='$question77',question78='$question78',question79='$question79',
question80='$question80',question81='$question81',question82='$question82',question83='$question83',
question84='$question84',question85='$question85',question86='$question86',question87='$question87',
question88='$question88',question89='$question89',question90='$question90',question91='$question91',
question92='$question92',question93='$question93',question94='$question94',question95='$question95',
question96='$question96',question97='$question97',question98='$question98',question99='$question99',
question100='$question100',question101='$question101',question102='$question102',question103='$question103',
question104='$question104',question105='$question105',question106='$question106',
question107='$question107',question1071='$question1071',question108='$question108',question109='$question109',
question110='$question110',question111='$question111',question112='$question112',question113='$question113',
question114='$question114',question115='$question115',question116='$question116',question117='$question117',
question118='$question118',question119='$question119',question050='$question050' WHERE name = '$name'";

        mysql_query($update_Date_Collection) or die(mysql_error());
        echo "您的信息已经成功更新";
    }


}
else{
    echo '该站点正在开发中，敬请期待！';
}
?>
</div>