
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
                    <img class="photo" src="../images/training/liliang1.JPG" alt="neiceji">
                </div>
                <div class="col-lg-7">
                    <p>
                        股四头肌内侧肌训练： 最后三十度的屈膝蹲腿，膝关节不超过脚尖
                    </p>
                    <p style="color:red;">保持20秒，每天3组</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/liliang2.JPG" alt="waizhan">
                </div>
                <div class="col-lg-7">
                    <p>
                        股四头肌外展训练： 左侧躺在床上，左手伸直，右手支撑保持平衡，将右腿抬起，过程中身体其他部位保持姿势
                    </p>
                    <p style="color:red;">保持20秒，每天3组</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/wotui.jpg" alt="wotui">
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
                    <img class="photo" src="../images/training/rourenxing.JPG" alt="rourenxing">
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
                    <img class="photo" src="../images/training/fangdiejiao.JPG" alt="fangdiejiao1">
                </div>
                <div class="col-lg-7">
                    <p>
                        防跌跤训练： 1. 站立位，将重心慢慢转移到左腿上 右脚不离地，维持20秒，
                        再缓慢将重心转移回右腿上，左脚不离地，保持20秒
                    </p>
                    <p style="color:red;">左右各20秒为一组，每天三组</p>                    
                </div>
            </div>
            <div class="row">
                <div class=" col-lg-5">
                    <img class="photo" src="../images/training/fangdiejiao2.JPG" alt="fangdiejiao2">
                </div>
                <div class="col-lg-7"><p>
                        2.站立位，双手外展抬起与肩水平，
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
                慢跑：两分钟的快走作为热身至关重要，然后开始8分钟的慢跑：一开始不要过快，判断是否过快的标准是用一个“说话测试”，如果你觉得你呼吸困难，喘不上气来，或者无法说话了，那么就逐渐慢下来。结束慢跑后不要立刻停下来，再走2分钟，过程中慢慢调整自己的心跳和呼吸（靶心率维持在60%以上，80%以下。VO2max从40%开始，逐渐进入50%到60%。运动时要观察心率、血压、心电图、血糖变化、自我感受。）

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

            <span style="color:red;">第一步：</span>目前生活方式的监测，包括空腹、餐前、餐后以及运动前、运动后即刻、运动后2小时、运动后4小时，以及睡前半小时内。每天的饮食，包括时间、吃饭内容、饭量，都拍手机照片记录。每天的心情、工作压力，量化记录。观察一周，了解其生活方式。<br>
            <span style="color:red;">第二步：</span>控制稳定血糖。饮食：尽量减少主食。围绕吃饭进行运动。饭前运动15分钟、饭后一小时的时候运动30分钟，中等强度运动。饭前的运动尽量强度大些，感觉到呼哧带喘最好。在此期间，仍然按照时间点进行血糖的监测，详细记录。每天的运动情况，最好带一个手环，用于监测心率和运动强度、运动量。<span style="color:red;">将主食尽量替换为不加工或粗加工粮食。整粒不加工食物应该占主食的50%以上。鼓励每天食用非加工豆类，不要豆浆之类加工过的食物。这些粮食蒸煮时间也不能长，能吃即可，不能加工过烂。鼓励总量控制下的少量多餐，每天5餐，每次少量。每次七分饱。</span><br>
            <span style="color:red;">膳食指导：</span>按照附表公式，计算所需的热量。一般按照每天1800大卡热量计算。其中，供能比例为：碳水化合物50%，蛋白质25%，脂肪25%。碳水化合物，必须是不加工或粗加工粮食为主。900大卡可以是900/4克碳水化合物，即225克，按照一般主食中碳水化合物的比例是70%计算，大约321克主食。分三顿，每次大约2两主食。蛋白质450大卡，大约112.5克蛋白质。按照一般熟食肉类蛋白质的比例是30%计算，大约375克精瘦肉类。蛋白质建议用乳清蛋白粉，每天30克，运动后凉水冲服。每顿约2两熟肉。建议是鱼虾类。脂肪必须特意供应，脂肪建议用每天半个牛油果、深海鱼油每天2克。<br>
            <span style="color:red;">监测：</span>每周至少称一次体重。希望每月体重下降500克。如果没有下降，或长了，需要调低饮食，减少饮食的摄入。首先减少油脂，其次减少碳水化合物。监测体重的同时，必须每天力量练习、心肺耐力练习。每天记录精神状况、身体状况。如有不适的感觉，要注意运动强度和量的调整。

        </fieldset>
    </div>


