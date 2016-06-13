<?php
$w = date('w');
if($w%2 == 1 || $w == 0 || $w == 2){
    ?>
    <div class="slidebar">
        <img src="../images/video.png">
    </div>
    <div class="container">
        <div class="workout-content">
            <h3>
                <b>力量训练：</b>
            </h3>

            <div class="workout-content-details">
                <h4>
                    股四头肌内侧肌训练
                </h4>

                <p>最后三十度的屈膝蹲腿，膝关节不超过脚尖 保持20秒*3组</p>
                <h4>股四头肌外展训练</h4>

                <p>右侧躺在床上，将左腿抬起保持20秒*3组，过程中躯干保持姿势，左手叉腰。</p>
            </div>
        </div>
        <div class="workout-content">
            <h3>
                <b>柔韧性训练：</b>
            </h3>

            <div class="workout-content-details">
                <p>股四头肌的牵拉 20秒* 3组</p>
            </div>

        </div>
        <div class="workout-content">
            <h3>
                <b>平衡性训练;</b>
            </h3>

            <div class="workout-content-details">
                <h4>
                    防跌跤训练：
                </h4>

                <p>1.站立位，将重心慢慢转移到左腿上，右脚不离地，维持20秒，再缓慢将重心转
                    移回右腿上，左脚不离地，维持20秒。做3组。</p>

                <p>2.站立位，双手外展抬起与肩水平，然后向左旋转至最大极限，同时眼睛看向左
                    侧，维持2秒后，缓慢向右转，头跟着向右旋转，看向右侧，维持2秒。
                    1和2为一次，做10次为一组，每天两组。</p>

                <p>注：如果客户的平衡评分不足，有跌倒风险，做动作时需要有人看护</p>

            </div>
        </div>
        <div class="workout-content">
            <h3>
                <b>有氧心肺训练:</b>
            </h3>

            <div class="workout-content-details">

                <p>慢跑10分钟，靶心率维持在60%以上，80%以下。VO2max从40%开始，逐渐进入50%到60%。</p>

            </div>
        </div>

    </div>

<?php
}else {
    ?>
        <div class="container">
            今天并没有运动训练计划，好的休息也对康复至关重要！
        </div>
<?php
}
?>