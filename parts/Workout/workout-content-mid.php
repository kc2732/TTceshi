
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
        if($w%2 == 1 || 1==1){
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
                    <img class="photo" src="../images/training/liliang2.gif" alt="waizhan">
                </div>
                <div class="col-lg-7">
                    <p>
                        股四头肌外展训练：左侧躺在床上，左手伸直，右手支撑保持平衡，将右腿抬起，过程中身体其他部位保持姿势。从抬起到回到起始位置为一次。（左侧做完换边再来一次）
                    </p>
                    <p style="color:red;">一次保持20秒，每天3次</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/wotui.gif" alt="wotui">
                </div>
                <div class="col-lg-7">
                    <p>
                        卧推训练： 仰卧躺在床上或者椅子上，背部要有很好的支撑 双手举重物弯曲收回，再推送出去为一次

                    </p>
                    <p style="color:red;">一组8-10次，每天三组 </p>
                    <p>*重量的挑选标准：可以相对轻松地做完8~10次 或 60%的最大力量（用该重物做任意动作15次左右力竭时，这个重物的重量大概是你最大力量的60%）</p>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend class="inner-legend">柔韧性训练</legend>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/rourenxing.gif" alt="rourenxing">
                </div>
                <div class="col-lg-7">
                    <p>
                        股四头肌的牵拉 ：站立位面对椅子。一只手扶住椅子，另一只手握住脚踝向前拉。挺直躯干，感受大腿前部的拉伸
                    </p>
                    <p style="color:red;">一次20秒，每天3组</p>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend class="inner-legend">平衡训练</legend>
            <div class="row">
                <div class=" col-lg-5">
                    <img class="photo" src="../images/training/fangdiejiao.gif" alt="fangdiejiao1">
                </div>
                <div class="col-lg-7">
                    <p>
                        站立位，将重心慢慢转移到左腿上 右脚不离地，维持20秒，
                        再缓慢将重心转移回右腿上，左脚不离地，保持20秒
                    </p>
                    <p style="color:red;">左右各20秒为一组，每天三组</p>                    
                </div>
            </div>
            <div class="row">
                <div class=" col-lg-5">
                    <img class="photo" src="../images/training/fangdiejiao2.gif" alt="fangdiejiao2">
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
        </fieldset>
        <fieldset>
            <legend class="inner-legend">有氧心肺锻炼</legend>
            <p style="line-height: 48px;font-size:135%;">
                慢跑 （RPE控制在11~13）：两分钟的快走作为热身至关重要，然后开始8分钟的慢跑：一开始不要过快，判断是否过快的标准是用一个“说话测试”，如果你觉得你呼吸困难，喘不上气来，或者无法说话了，那么就逐渐慢下来。结束慢跑后不要立刻停下来，再走2分钟，过程中慢慢调整自己的心跳和呼吸（靶心率维持在60%以上，80%以下。VO2max从40%开始，逐渐进入50%到60%。运动时要观察心率、血压、心电图、血糖变化、自我感受。）

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


