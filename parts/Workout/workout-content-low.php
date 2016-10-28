
<style>
    fieldset{

    }
    body{
        font-family:微软雅黑;
    }
    .banner { width: 100%;}
    @media only screen and (min-width: 768px){
        .photo { width: 450px;}
    }

    @media only screen and (min-width: 1319px) {
        .container.part1{  width: 1319px; }
    }
    .container.part2 {
        margin-top: 5%;
        line-height: 35px;
        font-size: 135%;
    }
    .container.part2 .row { padding: 20px 0; min-height: 293px;}
    div .col-lg-7 { font-family: 微软雅黑;}
    .col-lg-7 .headers { font-weight: bold;  margin-top: 0; }
    .col-lg-7 p { line-height: 35px;  font-size: 135%;}
    .head-legend{
        font-size: 35px;
        font-weight: 700;
        text-align: center;
        border-bottom:none;
    }
    .inner-legend{
        border-bottom:none;
        font-size: 28px;
        font-weight:600;
        font-family:微软雅黑;
    }

</style>
<div class="container part2">
    <?php
    $w = date('w');
    $spec = $_GET['spec'];
    if($w%2 == 1 || $w == 0 || $spec%2 == 1 || $spec == 0 || 1==1){
        ?>
        <fieldset>
            <legend class="head-legend">运动处方</legend>
        </fieldset>
        <fieldset style="line-height: 68px;font-size:135%; text-align:center;">
            <legend class="head-legend">热身</legend>
            快走伴摆臂五分钟
        </fieldset>
        <fieldset>
            <legend class="inner-legend">力量训练</legend>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/liliang1.gif" alt="neiceji">
                </div>
                <div class="col-lg-7">
                    <p>
                        股四头肌内侧肌训练：站立位，双脚打开与肩同宽，双手叉腰，向下蹲至往下看时膝关节刚刚挡住脚尖，缓慢站起，此为一次
                    </p>
                    <p style="color:red;">一次保持20秒，每天3次</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/dili2.gif" alt="dili2">
                </div>
                <div class="col-lg-7">
                    <p>
                        股四头肌训练-深蹲：双脚分开与肩同宽，双脚脚尖冲外。收腹挺胸，后背挺直，下蹲至大腿与地面平行或膝关节稍小于90度，膝盖不要超过脚尖，上至膝关节微屈，不要过度伸展。
                    </p>
                    <p style="color:red;">一次保持20秒，每天3次</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/dili3.gif" alt="dili3">
                </div>
                <div class="col-lg-7">
                    <p>
                        双桥：仰卧位，弯曲双腿。收紧肚子，用大腿和臀部的肌肉使劲，将你的臀部抬起离开地面，臀部至少离地应该有一拳的距离。然后控制住身体，慢慢回到起始位。
                    </p>
                    <p style="color:red;">一组12次，每天3组 </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/dili4.gif" alt="dili4">
                </div>
                <div class="col-lg-7">
                    <p>
                        侧躺，用一侧的肘关节支撑身体，将下方的腿弯曲，上方的腿则保持伸直。
                        将你的骨盆抬离地面，但是膝关节和小腿保持在地面上。
                        控制住上半身和骨盆，不要前后晃动。慢慢放低骨盆回到起始位为一组。
                    </p>
                    <p style="color:red;">一组12次，每天3组 </p>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/dili5.gif" alt="dili5">
                </div>
                <div class="col-lg-7">
                    <p>
                        股四头肌外展训练： 左侧躺在床上，左手伸直，右手支撑保持平衡，将右腿抬起，过程中身体其他部位保持姿势。<br>
                        左右各从抬起到回到起始位置为一次。
                    </p>
                    <p style="color:red;">一组8次，每天3组</p>
                </div>
            </div>

        </fieldset>
        <fieldset>
            <legend class="inner-legend">柔韧性训练</legend>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/dirou1.gif" alt="rourenxing">
                </div>
                <div class="col-lg-7">
                    <p>
                        仰卧位，用右手向后伸抓住右脚踝，右手用缓慢稳定的力量帮助右腿再多弯一些。保持在末端15秒
                    </p>
                    <p style="color:red;">一次15秒，每天3次</p>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend class="inner-legend">平衡训练</legend>

            <div class="row">
                <div class=" col-lg-5">
                    <img class="photo" src="../images/training/fangdiejiao2.gif" alt="difangdie">
                </div>
                <div class="col-lg-7"><p>
                        站立位，双手外展抬起与肩水平，
                        然后向左旋转至最大极限，同时眼睛看向左侧，
                        维持2s后，缓慢向右转，头跟着向右旋转，
                        看向右侧，维持2秒</p>
                    <p style="color:red;">此为一次，做10次为一组，每天两组</p>
                    <p>*注：如果客户的平衡评分不足，有跌倒风险，
                        做动作时需要有人看护</p>
                </div>
            </div>
            <div class="row">
                <div class=" col-lg-5">
                    <img class="photo" src="../images/training/dikuabu.gif" alt="dikuabu">
                </div>
                <div class="col-lg-7"><p>
                        跨步练习：站立位，像前跨出一大步，双手保持在身体两侧维持平衡。将身体的重量先都转换到前面的脚上，然后再转换回后面的脚上，这样为一次。两条腿轮流在前</p>
                    <p style="color:red;">每条腿做10次交换，此为一组，每天2组</p>
                    <p>*注：如果客户的平衡评分不足，有跌倒风险，
                        做动作时需要有人看护</p>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend class="inner-legend">有氧心肺锻炼</legend>
            <p style="line-height: 48px;font-size:135%;">
                慢跑（RPE 13~16分）：两分钟的快走作为热身至关重要，然后开始10分钟的慢跑：一开始不要过快，判断是否过快的标准是用一个“说话测试”，就是说如果你觉得你呼吸困难，喘不上气来，或者无法说话了，那么就逐渐慢下来。<br>
                结束慢跑后不要立刻停下来，再走2分钟，过程中慢慢调整自己的心跳和呼吸（靶心率维持在60%以上，80%以下。VO2max从40%开始，逐渐进入50%到60%。运动时要观察心率、血压、心电图、血糖变化、自我感受。）
            </p>
        </fieldset>
        <?php
    }else {
        ?>
        <div class="container">
            今天并没有运动训练计划，好的休息也对康复至关重要！
        </div>
        <?php
    }
    ?>
    <fieldset style="line-height: 48px;font-size:135%;">
        <legend class="head-legend">营养指导</legend>
        请完成每日营养收集任务。
    </fieldset>
</div>


