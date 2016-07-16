


<?php
$hostname = 'localhost';
$uname = 'chenkun';
$pwd = 'chenkun';
$mysql = mysql_connect($hostname,$uname,$pwd);
mysql_select_db('tangyisheng',$mysql);
session_start();
if($_SESSION['id']!=null){
$uid = $_SESSION['id'];
$getInformation = "SELECT * FROM DataCollection WHERE userId = '$uid'";
mysql_query("set names utf8");
$res_Information = mysql_query($getInformation) or die(mysql_error());
while($row = mysql_fetch_assoc($res_Information)){
    $part2 = $row['part2'];
    $part3 = $row['part3'];
    $part4 = $row['part4'];
    $check_num = $part2+$part3+$part4;
    if($check_num ==3){

?>

<div class="slidebar">
            <img src="../images/fit-im.png" >
            <div class="a_plan_div">
                <a class="a_plan" href="../pages/ready.php">开始运动！</a>
            </div>

        </div>
<div class="container" style="margin-top:20px;">
    <div class="panel-group" id="accordion">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">星期一</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                            力量训练<br>
                            10 分钟<br>
                            <img src="../images/strength.png">
                        </div>
                        <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                            柔韧训练<br>
                            20 分钟<br>
                            <img src="../images/flexibility.png">
                        </div>
                        <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                            平衡训练<br>
                            15 分钟<br>
                            <img src="../images/balance.png">
                        </div>
                        <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0" >
                            有氧训练<br>
                            20 分钟<br>
                            <img src="../images/aerobic.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">星期二</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
<!--                        今天并没有运动训练计划，好的休息也对康复至关重要！-->
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                                力量训练<br>
                                10 分钟<br>
                                <img src="../images/strength.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                                柔韧训练<br>
                                20 分钟<br>
                                <img src="../images/flexibility.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                                平衡训练<br>
                                15 分钟<br>
                                <img src="../images/balance.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0" >
                                有氧训练<br>
                                20 分钟<br>
                                <img src="../images/aerobic.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">星期三</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                                力量训练<br>
                                10 分钟<br>
                                <img src="../images/strength.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                                柔韧训练<br>
                                20 分钟<br>
                                <img src="../images/flexibility.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                                平衡训练<br>
                                15 分钟<br>
                                <img src="../images/balance.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0" >
                                有氧训练<br>
                                20 分钟<br>
                                <img src="../images/aerobic.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">星期四</a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        今天并没有运动训练计划，好的休息也对康复至关重要！
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">星期五</a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                                力量训练<br>
                                10 分钟<br>
                                <img src="../images/strength.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                                柔韧训练<br>
                                20 分钟<br>
                                <img src="../images/flexibility.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">
                                平衡训练<br>
                                15 分钟<br>
                                <img src="../images/balance.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0" >
                                有氧训练<br>
                                20 分钟<br>
                                <img src="../images/aerobic.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">星期六</a>
                    </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">
                        今天并没有运动训练计划，好的休息也对康复至关重要！
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">星期日</a>
                    </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                    <div class="panel-body">
<!--                        <div class="row">-->
<!--                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">-->
<!--                                力量训练<br>-->
<!--                                10 分钟<br>-->
<!--                                <img src="../images/strength.png">-->
<!--                            </div>-->
<!--                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">-->
<!--                                柔韧训练<br>-->
<!--                                20 分钟<br>-->
<!--                                <img src="../images/flexibility.png">-->
<!--                            </div>-->
<!--                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0">-->
<!--                                平衡训练<br>-->
<!--                                15 分钟<br>-->
<!--                                <img src="../images/balance.png">-->
<!--                            </div>-->
<!--                            <div class="col-xs-12 col-sm-5 col-sm-push-1 col-md-3 col-md-push-0 col-lg-3 col-lg-push-0" >-->
<!--                                有氧训练<br>-->
<!--                                20 分钟<br>-->
<!--                                <img src="../images/aerobic.png">-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>


    </div>
</div>
    <?php

    }
    else{
        echo "<h2 style='text-align: center;'>很抱歉，您的病例问答还未全部完成，我们的系统会根据您的病例来生成精确的运动处方。</h2>";
    }
}
} else{
    ?>
    <h2 style="text-align: center;">请您先登录！</h2>
    <?php

}

?>