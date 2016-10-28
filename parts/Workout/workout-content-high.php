
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
            散步五分钟
        </fieldset>
        <fieldset>
            <legend class="inner-legend">力量训练</legend>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/liliang1.gif" alt="gaoli1">
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
                    <img class="photo" src="../images/training/gaoli2.gif" alt="gaoli2">
                </div>
                <div class="col-lg-7">
                    <p>
                        坐在椅子上，双手不要倚靠椅子。双手环抱在胸前，向前靠的同时站起来。然后慢慢坐回座位上，坐回座位的过程中要控制自己的身体，慢慢的坐下去，此为一次。。
                    </p>
                    <p style="color:red;">做3组，每组10次</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/gaoli3.gif" alt="gaoli3">
                </div>
                <div class="col-lg-7">
                    <p>
                        在站立位，保持双脚打开与肩同宽。将你的体重转移到你的脚后跟上，然后再转移到你的大拇指上。一直保持这种摇摆的状态。如果必要的话，扶着东西来做这个运动。
                    </p>
                    <p style="color:red;">一组8-10次，每天三组 </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/gaoli4.gif" alt="gaoli4">
                </div>
                <div class="col-lg-7">
                    <p>
                        面对楼梯，向前看，右脚脚踏上台阶后，左脚跟上站上台阶。站稳后，左脚先下台阶，右脚跟着下台阶，回到起始位。如果觉得可能会摔倒，扶着东西来做这个运动。
                    </p>
                    <p style="color:red;">每只脚做三组，每组做8次。 </p>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend class="inner-legend">柔韧性训练</legend>
            <div class="row">
                <div class="col-lg-5">
                    <img class="photo" src="../images/training/gaorou1.gif" alt="rourenxing">
                </div>
                <div class="col-lg-7">
                    <p>
                        股四头肌牵拉：俯卧位（脸朝下躺着），将你的两个膝盖都往回弯，这时候用左脚的脚后跟放在右脚脚腕的前面。用左腿使力帮助右腿尽量多弯一些。                    </p>
                    <p style="color:red;">每条腿做拉伸至少3次，一次15秒</p>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend class="inner-legend">平衡训练</legend>
            <div class="row">
                <div class=" col-lg-5">
                    <img class="photo" src="../images/training/gaofangdiejiao.gif" alt="fangdiejiao1">
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
                    <img class="photo" src="../images/training/gaofangdiejiao2.gif" alt="fangdiejiao2">
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
                二选一，RPE控制在11~13：<br>
<!--                二选一，尽量使运动强度保持在轻度到稍稍有些困难之间：<br>-->
                1.快走：两分钟的散步作为热身，然后开始7到8分钟的快走：<br>
                速度判断是否过快的标准是用一个“说话测试”，就是说如果你觉得你呼吸困难，喘不上气来，或者无法说话了，那么就逐渐慢下来。
                结束快走后不要立刻停下来，再慢走2分钟，过程中慢慢调整自己的心跳和呼吸。
                2.在健身房在自行车机（功率自行车，健身车），就是室内自行车上面，骑行，先不加阻力骑行2分钟作为热身，第一次用的话，阻力保持在3~6之间，骑行速度自己把握。<br>
                判断标准仍然用“说话测试”来判断（靶心率维持在60%以上，80%以下。VO2max从40%开始，逐渐进入50%到60%。运动时要观察心率、血压、心电图、血糖变化、自我感受。）

            </p>
        </fieldset>
        <script type="text/javascript">
            //<![CDATA[
            $(document).ready(function(){

                $("#jquery_jplayer_1").jPlayer({
                    ready: function () {
                        $(this).jPlayer("setMedia", {
                            title: "低强度处方",
                            m4v: "../videos/highRisk.mp4",
//				ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
                            webmv: "../videos/highRisk.webm"
//				poster: "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
                        });
                    },
                    play: function() { // To avoid multiple jPlayers playing together.
                        $(this).jPlayer("pauseOthers");
                    },
                    swfPath: "../../dist/jplayer",
                    supplied: "m4v,webmv",
                    globalVolume: true,
                    useStateClassSkin: true,
                    autoBlur: false,
                    smoothPlayBar: true,
                    keyEnabled: true,
                    loop:true
                });

            });
            //]]>
        </script>
    <fieldset>
        <legend class="inner-legend">运动指导（请跟随视频开始运动！）</legend>
        <div id="jp_container_1" class="jp-video jp-video-270p" style="margin:auto" role="application" aria-label="media player">
            <div class="jp-type-playlist">
                <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                <div class="jp-gui">
                    <!--<div class="jp-video-play">-->
                    <!--<button class="jp-video-play-icon" role="button" tabindex="0">play</button>-->
                    <!--</div>-->
                    <div class="jp-interface">
                        <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                        <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                        <div class="jp-details">
                            <div class="jp-title" aria-label="title">&nbsp;</div>
                        </div>
                        <div class="jp-controls-holder">
                            <div class="jp-volume-controls">
                                <button class="jp-mute" role="button" tabindex="0">mute</button>
                                <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                                <div class="jp-volume-bar">
                                    <div class="jp-volume-bar-value"></div>
                                </div>
                            </div>
                            <div class="jp-controls">
                                <button class="jp-play" role="button" tabindex="0">play</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jp-no-solution">
                    <span>Update Required</span>
                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
            </div>
        </div>
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


