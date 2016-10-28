<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 2016/6/4
 * Time: 3:34
 */
include '../parts/head.php';
include '../parts/top-bar.php';
/**
*Value Point
**/
$hostname = 'localhost';
$uname = 'chenkun';
$pwd = 'chenkun';
$mysql = mysql_connect($hostname,$uname,$pwd);
mysql_select_db('tangyisheng',$mysql);
session_start();
$high;
$status;
if($_SESSION['id']!=null) {
    $uid = $_SESSION['id'];
    $getInformation = "SELECT * FROM users LEFT JOIN DataCollection ON users.id = DataCollection.userId WHERE userId = '$uid'";
    mysql_query("set names utf8");
    $res_Information = mysql_query($getInformation) or die(mysql_error());
    $Totalpoint = 0;
    while ($row = mysql_fetch_assoc($res_Information)) {
#NianLing Q1 #Feipang Q5
        $high = $row["question50"]+$row["question51"]+$row["question52"]+$row["question54"]+$row["question55"]+$row["question56"]+$row["question57"]+$row["question89"];
        $status = $row['status'];
        $age = $row['age'];//gender = 2 and age<45 & gender = 1 and age > 55 them 1
        $gender = $row['gender'];
        $weight = $row['weight'];
        $height = $row['height'];
        $heightm = $height / 100;
        $BMI = $weight / ($heightm * $heightm);
//    echo 'Your BMI is '.$BMI;
        if ($gender == 1 and $age >= 45) {
            $Totalpoint += 1;
        }
        if ($gender == 2 and $age >= 55) {
            $Totalpoint += 1;
        }
        $waist = $row['waist'];

        if ($BMI >= 30) {
            $Totalpoint += 1;
        } else {
            if ($gender == 1) {
                if ($waist > 102) {
                    $Totalpoint += 1;
                echo "腰围不合格";
                }
            }
            if ($gender == 2) {
                if ($waist > 88) {
                    $Totalpoint += 1;
                echo "腰围不合格";
                }
            }
        }
        #XiyanShi Q3
        $ershouyan = $row['ershouyan'];// 1   yan or
        $jieyan = $row['question93'];// 1     yan or
        $liugeyue = $row['question941']; // 1 yan or
        if ($ershouyan == 1 or $jieyan == 1 or $liugeyue == 1) {
            $Totalpoint += 1;
        echo "烟";
        }
        #Gaoxueya Q6
        $weicexueya = $row['question67'];
        $gaoya = $row['question69'];
        $diya = $row['question70'];

        if ($weicexueya == 2 or $gaoya >= 140 or $diya <= 90) {
            $Totalpoint += 1;
        echo "血压";
        }
        #JiazuShi Q2
        $FCS = $row['question351']; // 55
        $MCS = $row['question352']; // 65
        $FXZB = $row['question0111'];
        $MXZB = $row['question0112'];
        $FGZ = $row['question231'];
        $MGZ = $row['question232'];

        if (($FCS != 0 and $FCS <= 55)
            or ($FXZB != 0 and $FXZB <= 55)
            or ($FGZ != 0 and $FGZ <= 55)
            or ($MCS <= 65 and $MCS != 0)
            or ($MXZB <= 65 and $MXZB != 0)
            or ($MGZ != 0 and $MGZ <= 65)
        ) {
            $Totalpoint += 1;
        echo "家族史";
        }

        #Q3 yundongxiguan
        $zuozhe = $row['question108']; //1
        $jvlie = $row['question109']; //2
        $jvliepinlv = $row['question111']; // <3
        $jvlieshijian = $row['question112']; // 1 or 2

        $xiuxian = $row['question114']; //2
        $xiuxianpinlv = $row['question116']; // <3
        $xiuxianshijian = $row['question1131']; // 1 or 2

        $addedsign = 0;
        if ($zuozhe == 1) {
            $Totalpoint += 1;
            $addedsign = 1;
        echo "习惯1";
        }
        if ($jvlie == 2 and $addedsign == 0) {
            $Totalpoint += 1;
            $addedsign = 1;
        echo "习惯2";
        }
        if (($jvliepinlv < 3 or $jvlieshijian == 1 or $jvlieshijian == 2)
            and $addedsign == 0
        ) {
            $Totalpoint += 1;
            $addedsign = 1;
        echo "习惯3";
        }
        if ($xiuxian == 2 and $addedsign == 0) {
            $Totalpoint += 1;
            $addedsign = 1;
        echo "习惯4";
        }
        if (($xiuxianpinlv < 3 or $xiuxianshijian == 1 or $xiuxianshijian == 2)
            and $addedsign == 0
        ) {
            $Totalpoint += 1;
            $addedsign = 1;
        echo "习惯5";
        }
        #Xuezhi Q7
        $dimidu = $row['question66'];
        $gaomidu = $row['question65'];// if >=1.55 mmol/L good sign
        $zongduanguchun = $row['question63'];

        if ($dimidu >= 3.37 or $gaomidu <= 1.04 or $zongduanguchun >= 5.18) {
            $Totalpoint += 1;
        echo "血脂";
        }
        #Qianqu Q8
        $qianqusign = 0;
        $kongfu = $row['question74'];
        if ($kongfu >= 5.55 and $kongfu <= 6.94) {
            $Totalpoint += 1;
            $qianqusign = 1;
        echo "前驱";
        }
        $tangnailiang = $row['TNL'];
        if ($tangnailiang == 2 and $qianqusign == 0) {
            $Totalpoint += 1;
            $qianqusign = 1;
        echo "糖耐量";
        }
        $liangxiaoshi = $row['TNL3'];
        if ($liangxiaoshi >= 7.77 and $liangxiaoshi <= 11.04 and $qianqusign == 0) {
            $Totalpoint += 1;
            $qianqusign = 1;
        echo "糖耐量";
        }
    echo $Totalpoint;
    }
    if ($status == 0) {
        if($high == 0){
            if ($Totalpoint < 2) {
                include '../parts/Workout/workout-content-low.php';
            } else if ($Totalpoint >= 2) {
                include '../parts/Workout/workout-content-mid.php';
            }
        }else{
            include '../parts/Workout/workout-content-high.php';
        }



    } else{
        echo "很抱歉，您所在的用户群并不能生成对应的处方，请与我们的医师联系：support@tangtangyundong.com";
    }
}else {
        ?>
        <h2 style="text-align: center;">请您先登录！</h2>
        <?php
}
include '../parts/footer.php';
?>