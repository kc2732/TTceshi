<div class="slidebar">
    <img src="../images/detect-slide-show.png" >
</div>
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
?>
<div class="container" style="background-color: rgb(235,214,165); color:black;">
    <form action="../pages/success.php" method="post" class="dataCollection">
        <input type="hidden" name="option" value="dataCollection">

        <fieldset>
            <legend>个人基本信息</legend>
            <h4>姓名</h4>*
            <input type="text" name="name" value="<?php echo $row['name'];?>" ng-required="true">
            <h4>性别</h4>*
            <input type="radio" name="gender" value="1" <?php if($row['gender']==1) echo "ng-checked='true'"; ?> ng-required="true">男
            <input type="radio" name="gender" value="2" <?php if($row['gender']==2) echo "ng-checked='true'"; ?> ng-required="true">女
            <h4>年龄</h4>*
            <input type="number" name="age" max="100" value="<?php echo $row['age']; ?>" ng-required="true"  step="any">
            <h4>联系方式</h4>*
            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" ng-required="true">
            <h4>身高(cm)</h4>*
            <input type="number" name="height" max="250" value="<?php echo $row['height']; ?>" ng-required="true"  step="any">
            <h4>体重(kg)</h4>*
            <input type="number" name="weight" max="500" value="<?php echo $row['weight']; ?>" ng-required="true"  step="any">
            <h4>腰围(cm)</h4>*
            <input type="number" name="waist" max="500" value="<?php echo $row['waist']; ?>" ng-required="true"  step="any">

        </fieldset>
        <fieldset>
            <legend>个人历史数据</legend>
            <h4>血糖值(1mmol/L = 18mg/dL)</h4>
            <h4>餐前30分钟的血糖水平(mmol/L)：</h4>
            <input type="number" name="question72" value="<?php echo $row['question72']; ?>" ng-required="true" step="any">
            <h4>餐后两小时的血糖水平(mmol/L)：</h4>
            <input type="number" name="question73" value="<?php echo $row['question73']; ?>" ng-required="true" step="any">
            <h4>空腹血糖的血糖水平(mmol/L)：</h4>
            <input type="number" name="question74" value="<?php echo $row['question74']; ?>" ng-required="true" step="any">
            <h4>血糖测量地点：</h4>
            <input type="text" name="question75" value="<?php echo $row['question75']; ?>" ng-required="true" >
            <h4>血糖测量人：</h4>
            <input type="text" name="question76" value="<?php echo $row['question76']; ?>" ng-required="true">
            <h4>糖化血红蛋白[A1C]（%）：</h4>
            <input type="text" name="question77" value="<?php echo $row['question77']; ?>" ng-required="true">
            <h4>测量糖化血红蛋白[A1C]的测试人的名字或者测试医院的名称</h4>
            <input type="text" name="question78" value="<?php echo $row['question78']; ?>" ng-required="true">

<!--            <h4>运动前血糖值(mmol/L)：</h4>-->
<!--            <input type="number" name="yundongqian" value="--><?php //echo $row['yundongqian'];?><!--" ng-required="true" step="any">-->
<!--            <h4>运动后血糖值(mmol/L)：</h4>-->
<!--            <input type="number" name="yundonghou" value="--><?php //echo $row['yundonghou'];?><!--" ng-required="true" step="any">-->
<!--            <h4>临睡前血糖值(mmol/L)：</h4>-->
<!--            <input type="number" name="linshuiqian" value="--><?php //echo $row['linshuiqian'];?><!--" ng-required="true" step="any">-->
<!--            <h4>凌晨2点血糖值(mmol/L)：</h4>-->
<!--            <input type="number" name="lingchen2dian" value="--><?php //echo $row['lingchen2dian'];?><!--" ng-required="true" step="any">-->

            <h4>您是否做过糖耐量实验</h4>
            <input type="radio" name="TNL" ng-model="tnlyes" value="1" <?php if($row['TNL']==1) echo "ng-checked='true'"; ?> ng-required="true">是
            <input type="radio" name="TNL" ng-model="tnlyes" value="2" <?php if($row['TNL']==2) echo "ng-checked='true'"; ?> ng-required="true">否
            <fieldset ng-if="tnlyes == 1">

                <legend>糖耐量实验</legend>
                <h4>餐前血糖值 (mmol/L)</h4>
                <input type="number" name="TNL1" value="<?php echo $row['TNL1']; ?>" ng-required="tnlyes == 1" step="any">
                <h4>实验一小时后血糖值(mmol/L)</h4>
                <input type="number" name="TNL2" value="<?php echo $row['TNL2']; ?>" ng-required="tnlyes == 1" step="any">
                <h4>实验两小时后血糖值(mmol/L)</h4>
                <input type="number" name="TNL3" value="<?php echo $row['TNL3']; ?>" ng-required="tnlyes == 1" step="any">

            </fieldset>

            <h4>您是否正在使用胰岛素</h4>
            <input type="radio" name="YDS" ng-model="YDS" value="1" <?php if($row['YDS']==1) echo "ng-checked='true'"; ?> ng-required="true">是
            <input type="radio" name="YDS" ng-model="YDS"value="2"  <?php if($row['YDS']==2) echo "ng-checked='true'"; ?> ng-required="true">否

            <div ng-if="YDS==1">
                <h4>名称</h4>
                <input type="text" name="YDS1" value="<?php echo $row['YDS1']; ?>" ng-required="YDS == 1">
                <h4>品牌</h4>
                <input type="text" name="YDS2" value="<?php echo $row['YDS2']; ?>" ng-required="YDS == 1">
                <h4>每日剂量（IU）</h4>
                <input type="number" name="YDS3" value="<?php echo $row['YDS3']; ?>" ng-required="YDS == 1" step="any">
                <h4>每天什么时候使用（比如饭前1小时，饭后两小时，运动前一小时，运动后即刻）</h4>
                <input type="text" name="YDS4" value="<?php echo $row['YDS4']; ?>" ng-required="YDS == 1">
            </div>



            <h4>你是否测过你的血压水平*</h4>
            <input type="radio" ng-model="q67" name="question67" id="question671" value="1" <?php if($row['question67']==1) echo "ng-checked='true'";?> ng-required="true">是
            <input type="radio" ng-model="q67" name="question67" id="question672" value="2" <?php if($row['question67']==2) echo "ng-checked='true'";?> ng-required="true">否
            <div ng-if="q67==1">
                <h4>测试人的姓名或者测试医院的名称*</h4>
                <input type="text" name="question68" value="<?php echo $row['question68'];?>" ng-required="q67==1">
                <h4>收缩压（高压） mmhg：*</h4>
                <input type="number" name="question69" value="<?php echo $row['question69'];?>" ng-required="q67==1" step="any">
                <h4>舒张压（低压） mmhg：*</h4>
                <input type="number" name="question70" value="<?php echo $row['question70'];?>" ng-required="q67==1" step="any">
            </div>

            <h4>你是否测过你的胆固醇水平*</h4>
            <input type="radio" ng-model="q61" name="question61" id="question611" value="1" <?php if($row['question61']==1) echo "ng-checked='true'";?> ng-required="true">是
            <input type="radio" ng-model="q61" name="question61" id="question612" value="2" <?php if($row['question61']==2) echo "ng-checked='true'";?>  ng-required="true">否
            <div ng-if="q61==1">
                <h4>测试人的姓名或者测试医院的名称*</h4>
                <input type="text" name="question62" value="<?php echo $row['question62'];?>" ng-required="q61==1" >
                <h4>总胆固醇(TC)水平具体数值（mmol/L）：*</h4>
                <input type="number" name="question63" value="<?php echo $row['question63'];?>" ng-required="q61==1" step="any">
                <h4>甘油三酯(TG)具体数值（mmol/L）：*</h4>
                <input type="number" name="question64" value="<?php echo $row['question64'];?>" ng-required="q61==1" step="any">
                <h4>高密度脂蛋白（HDL）具体数值（mmol/L）：*</h4>
                <input type="number" name="question65" value="<?php echo $row['question65'];?>" ng-required="q61==1" step="any">
                <h4>低密度脂蛋白(LDL)具体数值（mmol/L）：*</h4>
                <input type="text" name="question66" value="<?php echo $row['question66'];?>" ng-required="q61==1" step="any">
            </div>


            <h4>你是否正在吃任何处方药或者非处方药？*</h4>
            <input type="radio" ng-model="q79"  name="question79" id="question791" value="1"  <?php if($row['question79']==1) echo "ng-checked='true'";?> ng-required="true">是
            <input type="radio" ng-model="q79" name="question79" id="question792" value="2"  <?php if($row['question79']==2) echo "ng-checked='true'";?> ng-required="true">否
            <div ng-if="q79==1">
                <h4>药品名称：*</h4>
                <input type="text" name="question80"value="<?php echo $row['question80'];?>" ng-required="q79==1">
                <h4>药品剂量：*</h4>
                <input type="text" name="question81" value="<?php echo $row['question81'];?>" ng-required="q79==1">
                <h4>使用药品的时间：*</h4>
                <input type="text" name="question82" value="<?php echo $row['question82'];?>" ng-required="q79==1">
                <h4>为什么要服用该药品？*</h4>
                <input type="text" name="question83" value="<?php echo $row['question83'];?>" ng-required="q79==1">
            </div>

            <h4>您近3个月是否住过医院？*</h4>
            <input type="radio" ng-model="q84"  name="question84" id="question841" value="1" <?php if($row['question84']==1) echo "ng-checked='true'";?> ng-required="true">是
            <input type="radio" ng-model="q84" name="question84" id="question842" value="2" <?php if($row['question84']==2) echo "ng-checked='true'";?> ng-required="true">否
            <div ng-if="q84==1">
                <h4>住院时间*</h4>
                <input type="text" name="question85" value="<?php echo $row['question85'];?>" ng-required="q84==1">
                <h4>住院地点*</h4>
                <input type="text" name="question86" value="<?php echo $row['question86'];?>" ng-required="q84==1">
                <h4>住院原因*</h4>
                <input type="text" name="question87" value="<?php echo $row['question87'];?>" ng-required="q84==1">
            </div>

            <h4>您是否曾经做过任何心血管测试*</h4>
            <input type="radio" ng-model="q8" name="question8" id="question81" value="1" <?php if($row['question8']==1) echo "ng-checked='true'";?> ng-required="true" >是
            <input type="radio" ng-model="q8" name="question8" id="question82" value="2" <?php if($row['question8']==2) echo "ng-checked='true'";?> ng-required="true">否
            <div ng-if="q8=='1'">
                <h4>你做完心血管测试后的诊断结果是</h4>*
                <input type="text" name="question9" value="<?php echo $row['question9'];?>" ng-required="q8==1">
            </div>
            <h4>您其他已经确诊的疾病和担心的地方</h4>
            <input type="text" name="question88" value="<?php echo $row['question88'];?>">
        </fieldset>
        <h4 ng-if="part2!=1">个人史，开始作答！</h4>
        <h4 ng-if="part2==1">个人史，放弃作答！（只有当您完成了所有问题，我们的专家才能够给您得出精确的诊断结果和治疗方案）</h4>
        <input type="checkbox" name="part2" ng-model="part2" value="1" <?php if($row['part2']==1) echo "ng-checked='true'";?>>
        <?php
            if($row['part2']==1){
                echo '<fieldset>';
            }else{
        ?>
        <fieldset ng-if="part2==1">
            <?php
            }
            ?>
            <legend>个人史</legend>
            <h4>你曾经是否有过高血压？*</h4>
            <input type="radio" name="question40" id="question401" value="1" <?php if($row['question40']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="question40" id="question402" value="2" <?php if($row['question40']==2) echo "ng-checked='true'";?> ng-required="part2==1">否
            <h4>你曾经是否有过高胆固醇*</h4>
            <input type="radio" name="question41" id="question411" value="1" <?php if($row['question41']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="question41" id="question412" value="2" <?php if($row['question41']==2) echo "ng-checked='true'";?> ng-required="part2==1">否
            <h4>你曾经是否有过动脉疾病?*</h4>
            <input type="radio" name="question43" id="question431" value="1" <?php if($row['question43']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="question43" id="question432" value="2" <?php if($row['question43']==2) echo "ng-checked='true'";?> ng-required="part2==1">否
            <h4>你曾经是否有过甲状腺疾病？*</h4>
            <input type="radio" name="question44" id="question441" value="1" <?php if($row['question44']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="question44" id="question442" value="2" <?php if($row['question44']==2) echo "ng-checked='true'";?> ng-required="part2==1">否
            <h4>你曾经是否有过肺部疾病?*</h4>
            <input type="radio" name="question45" id="question451" value="1" <?php if($row['question45']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="question45" id="question452" value="2" <?php if($row['question45']==2) echo "ng-checked='true'";?> ng-required="part2==1">否
            <h4>你曾经是否有过哮喘？*</h4>
            <input type="radio" name="question46" id="question461" value="1" <?php if($row['question46']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="question46" id="question462" value="2" <?php if($row['question46']==2) echo "ng-checked='true'";?> ng-required="part2==1">否
            <h4>你曾经是否有过癌症?*</h4>
            <input type="radio" name="question47" id="question471" value="1" <?php if($row['question47']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="question47" id="question472" value="2" <?php if($row['question47']==2) echo "ng-checked='true'";?> ng-required="part2==1">否
            <h4>你曾经是否有过肾脏疾病？*</h4>
            <input type="radio" name="question48" id="question481" value="1" <?php if($row['question48']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="question48" id="question482" value="2" <?php if($row['question48']==2) echo "ng-checked='true'";?> ng-required="part2==1">否
            <h4>你曾经是否有过肝病？*</h4>
            <input type="radio" name="question49" id="question491" value="1" <?php if($row['question49']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="question49" id="question492" value="2" <?php if($row['question49']==2) echo "ng-checked='true'";?> ng-required="part2==1">否

            <h4>你曾经是否有过骨质疏松和关节炎</h4>
            <input type="radio" name="GZSS" value="1" <?php if($row['GZSS']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="GZSS" value="2" <?php if($row['GZSS']==2) echo "ng-checked='true'";?> ng-required="part2==1">否

            <h4>周围神经病变</h4>
            <input type="radio" name="ZWSJBB" value="1" <?php if($row['ZWSJBB']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="ZWSJBB" value="2" <?php if($row['ZWSJBB']==2) echo "ng-checked='true'";?> ng-required="part2==1">否

            <h4>自主神经病变</h4>
            <input type="radio" name="ZZSJBB" value="1" <?php if($row['ZZSJBB']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="ZZSJBB" value="2" <?php if($row['ZZSJBB']==2) echo "ng-checked='true'";?> ng-required="part2==1">否

            <h4>视网膜病变</h4>
            <input type="radio" name="SWMBB" value="1" <?php if($row['SWMBB']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
            <input type="radio" name="SWMBB" value="2" <?php if($row['SWMBB']==2) echo "ng-checked='true'";?> ng-required="part2==1">否


            <h4>你是否有过除以上列出疾病之外的疾病，如果有，请列出</h4>
            <input type="text" name="question050"  value="<?php echo $row['question050'];?>">

            <fieldset>
                <legend>症状</legend>
                <h4>可能是由于局部缺血造成的疼痛（感觉闷）或不适在胸部，颈部，下颌，手臂或其他地区？*</h4>
                <input type="radio" name="question50" id="question501" value="1" <?php if($row['question50']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question50" id="question502" value="0" <?php if($row['question50']==0) echo "ng-checked='true'";?> ng-required="part2==1">否
                <h4>呼吸急促或呼吸困难在休息或轻度用力（或是端坐呼吸困难）*</h4>
                <input type="radio" name="question51" id="question511" value="1" <?php if($row['question51']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question51" id="question512" value="0" <?php if($row['question51']==0) echo "ng-checked='true'";?> ng-required="part2==1">否
                <h4>你曾经是否有过心悸或心动过速？*</h4>
                <input type="radio" name="question52" id="question521" value="1" <?php if($row['question52']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question52" id="question522" value="0" <?php if($row['question52']==0) echo "ng-checked='true'";?> ng-required="part2==1">否
                <h4>你曾经是否有过心律不齐?*</h4>
                <input type="radio" name="question53" id="question531" value="1" <?php if($row['question53']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question53" id="question532" value="0" <?php if($row['question53']==0) echo "ng-checked='true'";?> ng-required="part2==1">否

                <h4>你曾经是否有过心脏杂音？*</h4>
                <input type="radio" name="question54" id="question541" value="1" <?php if($row['question54']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question54" id="question542" value="0" <?php if($row['question54']==0) echo "ng-checked='true'";?> ng-required="part2==1">否
                <h4>你曾经是否有过间歇性跛行（疼痛感，或与功血不足有关的下肢痉挛）？*</h4>
                <input type="radio" name="question55" id="question551" value="1" <?php if($row['question55']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question55" id="question552" value="0" <?php if($row['question55']==0) echo "ng-checked='true'";?> ng-required="part2==1">否

                <h4>你曾经是否有过由大脑供血不足引起头晕或晕厥？*</h4>
                <input type="radio" name="question56" id="question561" value="1" <?php if($row['question56']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question56" id="question562" value="0" <?php if($row['question56']==0) echo "ng-checked='true'";?> ng-required="part2==1">否
                <h4>你曾经是否在日常生活中易感到异常疲倦或者呼吸困难？*</h4>
                <input type="radio" name="question57" id="question571" value="1" <?php if($row['question57']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question57" id="question572" value="0" <?php if($row['question57']==0) echo "ng-checked='true'";?> ng-required="part2==1">否

                <h4>你曾经是否有过睡眠时打鼾的情况？*</h4>
                <input type="radio" name="question58" id="question581" value="1" <?php if($row['question58']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question58" id="question582" value="0" <?php if($row['question58']==0) echo "ng-checked='true'";?> ng-required="part2==1">否
                <h4>你曾经是否有过背部疼痛问题？*</h4>
                <input type="radio" name="question59" id="question591" value="1" <?php if($row['question59']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question59" id="question592" value="0" <?php if($row['question59']==0) echo "ng-checked='true'";?> ng-required="part2==1">否

                <h4>你曾经是否有过骨科问题？*</h4>
                <input type="radio" name="question60" id="question601" value="1" <?php if($row['question60']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question60" id="question602" value="0" <?php if($row['question60']==0) echo "ng-checked='true'";?> ng-required="part2==1">否

                <h4>你是否有过踝部水肿？*</h4>
                <input type="radio" name="question89" id="question891" value="1" <?php if($row['question89']==1) echo "ng-checked='true'";?> ng-required="part2==1">是
                <input type="radio" name="question89" id="question892" value="0" <?php if($row['question89']==0) echo "ng-checked='true'";?> ng-required="part2==1">否

                <h4>你曾经是否有过除以上列出症状之外的不适症状，如果有是哪种不适症状？</h4>
                <input type="text" name="question601" value="<?php echo $row['question601'];?>">
            </fieldset>

        </fieldset>

        <h4 ng-if="part3!=1">家族史，开始作答！</h4>
        <h4 ng-if="part3==1">家族史，放弃作答！（只有当您完成了所有问题，我们的专家才能够给您得出精确的诊断结果和治疗方案）</h4>
        <input type="checkbox" name="part3" ng-model="part3" value="1"  <?php if($row['part3']==1) echo "ng-checked='true'";?>>
        <?php
        if($row['part3']==1){
            echo '<fieldset>';
        }else{
        ?>
        <fieldset ng-if="part3==1">
            <?php
            }
            ?>
                <legend>家族史</legend>
                <h4>家族成员是否有亲属有心脏病突发史*</h4>
                <input type="radio" ng-model="q10" name="question10" id="question101" value="1"  <?php if($row['question10']==1) echo "ng-checked='true'";?> ng-required="part3==1">是
                <input type="radio" ng-model="q10" name="question10" id="question102" value="2"  <?php if($row['question10']==2) echo "ng-checked='true'";?> ng-required="part3==1">否
                <div ng-if="q10==1">
                    <h4>该患病亲属与你的关系是</h4>*
                    <input type="checkbox" ng-model="q11" name="question11" id="question11" value="1"  <?php if($row['question11']==1) echo "ng-checked='true'";?>>父亲，或者亲哥哥、亲弟弟
                    <div ng-if="q11==1">
                        患病年龄*<input type="number" name="question0111" max="100" value="<?php echo $row['question0111'];?>" ng-required="q11==1">
                    </div>
                    <input type="checkbox" ng-model="q12" name="question12" id="question12" value="2" <?php if($row['question12']==2) echo "ng-checked='true'";?>>母亲，或者亲姐姐、亲妹妹
                    <div ng-if="q12==1">
                        患病年龄*<input type="number" name="question0112" max="100" value="<?php echo $row['question0112'];?>" ng-required="q12==2">
                    </div>
                    <input type="checkbox" name="question13" id="question13" value="3" <?php if($row['question13']==3) echo "ng-checked='true'";?>>其他亲属
                </div>

                <h4>家族成员是否有亲属有先天性心脏病*</h4>
                <input type="radio" ng-model="q14" name="question14" id="question141" value="1"  <?php if($row['question14']==1) echo "ng-checked='true'";?>  ng-required="part3==1">是
                <input type="radio" ng-model="q14" name="question14" id="question142" value="2"  <?php if($row['question14']==2) echo "ng-checked='true'";?> ng-required="part3==1">否
                <div ng-if="q14==1">
                    <h4>该患病亲属与你的关系是*</h4>
                    <input type="checkbox" ng-model="q15" name="question15" id="question15" value="1" <?php if($row['question15']==1) echo "ng-checked='true'";?>>父亲，或者亲哥哥、亲弟弟
                    <div ng-if="q15==1">
                        患病年龄*<input type="number" name="question151" max="100" value="<?php echo $row['question151'];?>" ng-required="q15==1">
                    </div>
                    <input type="checkbox" ng-model="q16" name="question16" id="question16" value="2" <?php if($row['question16']==2) echo "ng-checked='true'";?>>母亲，或者亲姐姐、亲妹妹
                    <div ng-if="q16==1">
                        患病年龄*<input type="number" name="question152" max="100" value="<?php echo $row['question152'];?>" ng-required="q16==2">
                    </div>
                    <input type="checkbox" name="question17" id="question17" value="3" <?php if($row['question17']==3) echo "ng-checked='true'";?>>其他亲属
                </div>


                <h4>家族成员中是否有亲属做过心脏手术？*</h4>
                <input type="radio" ng-model="q18" name="question18" id="question181" value="1" <?php if($row['question18']==1) echo "ng-checked='true'";?> ng-required="part3==1" >是
                <input type="radio" ng-model="q18" name="question18" id="question182" value="2" <?php if($row['question18']==2) echo "ng-checked='true'";?> ng-required="part3==1">否
                <div ng-if="q18 == 1">
                    <h4>该患病亲属与你的关系是*</h4>
                    <input type="checkbox" ng-model="q19" name="question19" id="question19" value="1" <?php if($row['question19']==1) echo "ng-checked='true'";?> >父亲，或者亲哥哥、亲弟弟
                    <div ng-if="q19==1">
                        患病年龄*<input type="number" name="question191" value="<?php echo $row['question191'];?>" ng-required="q19==1">
                    </div>
                    <input type="checkbox" ng-model="q20"name="question20" id="question20" value="2" <?php if($row['question20']==2) echo "ng-checked='true'";?>>母亲，或者亲姐姐、亲妹妹
                    <div ng-if="q20==2">
                        患病年龄*<input type="number" name="question192" value="<?php echo $row['question192'];?>" ng-required="q20==2">
                    </div>
                    <input type="checkbox" name="question21" id="question21" value="3" <?php if($row['question21']==3) echo "ng-checked='true'";?>>其他亲属
                </div>



                <h4>家族成员中是否有亲属冠状动脉支架？*</h4>
                <input type="radio" ng-model="q22" name="question22" id="question221" value="1" <?php if($row['question22']==1) echo "ng-checked='true'";?> ng-required="part3==1" >是
                <input type="radio" ng-model="q22" name="question22" id="question222" value="2" <?php if($row['question22']==2) echo "ng-checked='true'";?> ng-required="part3==1">否
                <div ng-if="q22 == 1">
                    <h4>该患病亲属与你的关系是*</h4>
                    <input type="checkbox" ng-model="q23" name="question23" id="question23" value="1" <?php if($row['question23']==1) echo "ng-checked='true'";?> >父亲，或者亲哥哥、亲弟弟
                    <div ng-if="q23==1">
                        患病年龄*<input type="number" name="question231" value="<?php echo $row['question231'];?>" ng-required="q23==1">
                    </div>
                    <input type="checkbox" ng-model="q24"name="question24" id="question24" value="2" <?php if($row['question24']==2) echo "ng-checked='true'";?>>母亲，或者亲姐姐、亲妹妹
                    <div ng-if="q24==2">
                        患病年龄*<input type="number" name="question232" value="<?php echo $row['question232'];?>" ng-required="q24==2">
                    </div>
                    <input type="checkbox" name="question25" id="question25" value="3" <?php if($row['question25']==3) echo "ng-checked='true'";?>>其他亲属
                </div>


                <h4>家族成员中是否有做过心脏导管手术？*</h4>
                <input type="radio" ng-model="q26" name="question26" id="question261" value="1" <?php if($row['question26']==1) echo "ng-checked='true'";?> ng-required="part3==1">是
                <input type="radio" ng-model="q26" name="question26" id="question262" value="2" <?php if($row['question26']==2) echo "ng-checked='true'";?> ng-required="part3==1">否
                <div ng-if="q26 == 1">
                    <h4>该患病亲属与你的关系是*</h4>
                    <input type="checkbox" ng-model="q27" name="question27" id="question27" value="1" <?php if($row['question27']==1) echo "ng-checked='true'";?> >父亲，或者亲哥哥、亲弟弟
                    <div ng-if="q27==1">
                        患病年龄*<input type="number" name="question271" value="<?php echo $row['question271'];?>" ng-required="q27==1">
                    </div>
                    <input type="checkbox" ng-model="q28"name="question28" id="question28" value="2" <?php if($row['question28']==2) echo "ng-checked='true'";?>>母亲，或者亲姐姐、亲妹妹
                    <div ng-if="q28==2">
                        患病年龄*<input type="number" name="question272" value="<?php echo $row['question272'];?>" ng-required="q28==2">
                    </div>
                    <input type="checkbox" name="question29" id="question29" value="3" <?php if($row['question29']==3) echo "ng-checked='true'";?>>其他亲属
                </div>

                <h4>家族成员中是否有脑血管意外病史(脑溢血，中风，栓塞)？*</h4>
                <input type="radio" ng-model="q30" name="question30" id="question301" value="1" <?php if($row['question30']==1) echo "ng-checked='true'";?> ng-required="part3==1" >是
                <input type="radio" ng-model="q30" name="question30" id="question302" value="2" <?php if($row['question30']==2) echo "ng-checked='true'";?> ng-required="part3==1">否
                <div ng-if="q30 == 1">
                    <h4>该患病亲属与你的关系是*</h4>
                    <input type="checkbox" ng-model="q31" name="question31" id="question31" value="1" <?php if($row['question31']==1) echo "ng-checked='true'";?> >父亲，或者亲哥哥、亲弟弟
                    <div ng-if="q31==1">
                        患病年龄*<input type="number" name="question311" value="<?php echo $row['question311'];?>" ng-required="q31==1">
                    </div>
                    <input type="checkbox" ng-model="q32"name="question32" id="question32" value="2" <?php if($row['question32']==2) echo "ng-checked='true'";?>>母亲，或者亲姐姐、亲妹妹
                    <div ng-if="q32==2">
                        患病年龄*<input type="number" name="question312" value="<?php echo $row['question312'];?>" ng-required="q32==2">
                    </div>
                    <input type="checkbox" name="question33" id="question33" value="3" <?php if($row['question33']==3) echo "ng-checked='true'";?>>其他亲属
                </div>

                <h4>家族成员中是否有人猝死？*</h4>
                <input type="radio" ng-model="q34" name="question34" id="question341" value="1" <?php if($row['question34']==1) echo "ng-checked='true'";?> ng-required="part3==1" >是
                <input type="radio" ng-model="q34" name="question34" id="question342" value="2" <?php if($row['question34']==2) echo "ng-checked='true'";?> ng-required="part3==1">否
                <div ng-if="q34 == 1">
                    <h4>该患病亲属与你的关系是*</h4>
                    <input type="checkbox" ng-model="q35" name="question35" id="question35" value="1" <?php if($row['question35']==1) echo "ng-checked='true'";?> >父亲，或者亲哥哥、亲弟弟
                    <div ng-if="q35==1">
                        患病年龄*<input type="number" name="question351" value="<?php echo $row['question351'];?>" ng-required="q35==1">
                    </div>
                    <input type="checkbox" ng-model="q36"name="question36" id="question36" value="2" <?php if($row['question36']==2) echo "ng-checked='true'";?>>母亲，或者亲姐姐、亲妹妹
                    <div ng-if="q36==2">
                        患病年龄*<input type="number" name="question352" value="<?php echo $row['question352'];?>" ng-required="q36==2">
                    </div>
                    <input type="checkbox" name="question37" id="question37" value="3" <?php if($row['question37']==3) echo "ng-checked='true'";?>>其他亲属
                </div>

                <h4>家族成员中是否有亲属有其他慢性疾病？*</h4>
                <input type="radio" ng-model="q38" name="question38" id="question381" value="1" <?php if($row['question38']==1) echo "ng-checked='true'";?> ng-required="part3==1">是
                <input type="radio" ng-model="q38" name="question38" id="question382" value="2" <?php if($row['question38']==2) echo "ng-checked='true'";?> ng-required="part3==1">否
                <div ng-if="q38==1">
                    <h4>是哪一种慢性病？*</h4>
                    <input type="text" name="question39" value="<?php echo $row['question39'];?>" ng-required="q38==1">
                </div>

        </fieldset>



        <h4 ng-if="part4!=1">生活模式和兴趣，开始作答！</h4>
        <h4 ng-if="part4==1">生活模式和兴趣，放弃作答！（只有当您完成了所有问题，我们的专家才能够给您得出精确的诊断结果和治疗方案）</h4>
        <input type="checkbox" name="part4" ng-model="part4" value="1"  <?php if($row['part4']==1) echo "ng-checked='true'";?>>
        <?php
        if($row['part4']==1){
            echo '<fieldset>';
        }else{
        ?>
        <fieldset ng-if="part4==1">
            <?php
            }
            ?>

<!--       <h4>运动吃饭的时间差</h4>-->
<!--            <input type="text" name="shijiancha" value="--><?php //echo $row['shijiancha'];?><!--" ng-required="part4==1">-->
<!--       <h4>饮食模式</h4>-->
<!--            <input type="radio" name="roushiweizhu" value="1" --><?php //if($row['roushiweizhu']==1) echo "ng-checked='true'";?><!-- ng-required="part4==1">肉食为主模式-->
<!--            <input type="radio" name="roushiweizhu" value="2" --><?php //if($row['roushiweizhu']==2) echo "ng-checked='true'";?><!-- ng-required="part4==1">主食为主模式-->
<!--       <h4>饮食结构</h4>-->
<!--            <h5>高碳水化合物（如：葡萄糖，白面包，蜂蜜）</h5>-->
<!--            <input type="text" name="gaotanshuihuahewu" value="--><?php //echo $row['gaotanshuihuahewu'];?><!--" ng-required="part4==1">-->
<!--            <h5>中碳水化合物（如：全麦面包，黑、白米）</h5>-->
<!--            <input type="text" name="zhongtanshuihuahewu" value="--><?php //echo $row['zhongtanshuihuahewu'];?><!--"ng-required="part4==1">-->
<!--            <h5>低碳水化合物（如：牛奶，酸奶，苹果，菜豆）</h5>-->
<!--            <input type="text" name="ditanshuihuahewu" value="--><?php //echo $row['ditanshuihuahewu'];?><!--"ng-required="part4==1">-->

            <h4>你是否曾经在做运动或者在日常活动的时候，有不舒服和呼吸短促的症状？*</h4>
        <input type="radio" ng-model="q90" name="question90" id="question901" value="1" <?php if($row['question90']==1) echo "ng-checked='true'";?> ng-required="part4==1">是
        <input type="radio" ng-model="q90" name="question90" id="question902" value="2" <?php if($row['question90']==2) echo "ng-checked='true'";?> ng-required="part4==1">否
        <div ng-if="q90==1">
            <h4>这种不舒服会不会因为运动的停止而消失？*</h4>
            <input type="radio" name="question91" id="question911" value="1" <?php if($row['question91']==1) echo "ng-checked='true'";?> ng-required="part4==1">是
            <input type="radio" name="question91" id="question912" value="2" <?php if($row['question91']==2) echo "ng-checked='true'";?> ng-required="q90==1">否
        </div>


        <h4>你是否有过吸烟史*</h4>
        <input type="radio" ng-model="q92" name="question92" id="question921" value="1" <?php if($row['question92']==1) echo "ng-checked='true'";?> ng-required="part4==1">是
        <input type="radio" ng-model="q92" name="question92" id="question922" value="2" <?php if($row['question92']==2) echo "ng-checked='true'";?> ng-required="part4==1">否
        <div ng-if="q92==1">
            <h4>你是否戒烟了*</h4>
            <input type="radio" ng-model="q93" name="question93" id="question931" value="1" <?php if($row['question93']==1) echo "ng-checked='true'";?>  ng-required="q92==1">是
            <input type="radio" ng-model="q93" name="question93" id="question932" value="2" <?php if($row['question93']==2) echo "ng-checked='true'";?> ng-required="q92==1">否
            <div ng-if="q93==1">
                <h4>你是什么时候戒烟的*</h4>
                <input type="radio" name="question94" id="question941" value="1" <?php if($row['question94']==1) echo "ng-checked='true'";?> ng-required="q93==1">六个月之内刚刚戒烟
                <input type="radio" name="question94" id="question942" value="2" <?php if($row['question94']==2) echo "ng-checked='true'";?> ng-required="q93==1">在六个月前戒烟
            </div>
            <div ng-if="q93==1">
                <h4>你平时吸烟的种类*</h4>
                <input type="radio" name="question95" id="question951" value="1" <?php if($row['question95']==1) echo "ng-checked='true'";?> ng-required="q93==1">香烟
                <input type="radio" name="question95" id="question952" value="2" <?php if($row['question95']==2) echo "ng-checked='true'";?>  ng-required="q93==1">雪茄
                <input type="radio" name="question95" id="question953" value="3" <?php if($row['question95']==3) echo "ng-checked='true'";?> ng-required="q93==1">烟斗
            </div>

        </div>
        <div class="question922">
            <h4>您是否经常会暴露在二手烟环境中？</h4>
            <input type="radio" name="ershouyan" id="ershouyan" value="1" <?php if($row['ershouyan'] == 1) echo "ng-checked='true'";?> ng-required="part4==1" >是
            <input type="radio" name="ershouyan" id="ershouyan1" value="2" <?php if($row['ershouyan'] ==2) echo "ng-checked='true'";?> ng-required="part4==1"> 否
        </div>

        <h4>你平时喝酒吗？*</h4>
        <input type="radio" ng-model="q96" name="question96" id="question961" value="1" <?php if($row['question96']==1) echo "ng-checked='true'";?> ng-required="part4==1">是
        <input type="radio" ng-model="q96" name="question96" id="question962" value="2" <?php if($row['question96']==2) echo "ng-checked='true'";?> ng-required="part4==1">否
        <div ng-if="q96==1">
            <h4>一周大约喝多少瓶啤酒*</h4>
            <input type="text" name="question97" value="<?php echo $row['question97'];?>" ng-required="q96==1">
            <h4>一周大约喝多少斤白酒*</h4>
            <input type="text" name="question98" value="<?php echo $row['question98'];?>" ng-required="q96==1">
            <h4>一周大约喝多少杯红酒*</h4>
            <input type="text" name="question99" value="<?php echo $row['question99'];?>" ng-required="q96==1">
        </div>

        <h4>你平时喝含咖啡因的饮品吗？*</h4>
        <input type="radio" ng-model="q100" name="question100" id="question1001" value="1" <?php if($row['question100']==1) echo "ng-checked='true'";?> ng-required="part4==1">是
        <input type="radio" ng-model="q100" name="question100" id="question1002" value="2" <?php if($row['question100']==2) echo "ng-checked='true'";?> ng-required="part4==1">否
        <div ng-if="q100==1">
            <h4>一周大约喝多少杯咖啡*</h4>
            <input type="text" name="question101" value="<?php echo $row['question101'];?>" ng-required="q100==1">
            <h4>一周大约喝多少杯茶*</h4>
            <input type="text" name="question102" value="<?php echo $row['question102'];?>" ng-required="q100==1">
            <h4>一周大约喝多少瓶含咖啡因的软饮（可乐、运动饮料等）*</h4>
            <input type="text" name="question103" value="<?php echo $row['question103'];?>" ng-required="q100==1">
        </div>


        <h4>你最近有在吃减肥餐吗*</h4>
        <input type="radio" ng-model="q104" name="question104" id="question1041" value="1" <?php if($row['question104']==1) echo "ng-checked='true'";?> ng-required="part4==1">是
        <input type="radio" ng-model="q104" name="question104" id="question1042" value="2" <?php if($row['question104']==2) echo "ng-checked='true'";?> ng-required="part4==1">否
        <div ng-if="q104==1">
            <h4>你已经吃了几个月的减肥餐？*</h4>
            <input type="text" name="question105" value="<?php echo $row['question105'];?>" ng-required="q104==1">
            <h4>这个减肥餐计划是否你的医生给你开的？*</h4>
            <input type="text" name="question106" value="<?php echo $row['question106'];?>" ng-required="q104==1">
        </div>
        <div ng-if="q104==2">
            你曾经有试过减肥餐吗？*
            <input type="radio" ng-model="q107" name="question107" id="question1071" value="1" <?php if($row['question107']==1) echo "ng-checked='true'";?> ng-required="q104==2">是
            <input type="radio" ng-model="q107" name="question107" id="question1072" value="2" <?php if($row['question107']==2) echo "ng-checked='true'";?> ng-required="q104==2">否
            <div ng-if="q107==1">
                <h4>减肥餐持续了多久，请描述一下减肥餐的类型*</h4>
                <input type="text" name="question1071" value="<?php echo $row['question1071'];?>"  ng-required="q107==1">
            </div>

        </div>

        <h4> 活动水平调查</h4>
        <h4>大部分情况下，你的运动水平是*</h4>
        <input type="radio" name="question108" id="question1081" value="1" <?php if($row['question108']==1) echo "ng-checked='true'";?> ng-required="part4==1">主要是坐着<br>
        <input type="radio" name="question108" id="question1082" value="2" <?php if($row['question108']==2) echo "ng-checked='true'";?> ng-required="part4==1">轻微的运动（散步）<br>
        <input type="radio" name="question108" id="question1083" value="3" <?php if($row['question108']==3) echo "ng-checked='true'";?> ng-required="part4==1">中度运动（快速上下楼梯，快走）<br>
        <input type="radio" name="question108" id="question1084" value="4" <?php if($row['question108']==4) echo "ng-checked='true'";?> ng-required="part4==1">重体力运动（体力劳动者，每周去三次以上健身房）

        <h4>你最近是否有在日常生活中经常地做一些非常剧烈的运动（频繁的搬重物，快跑，健身等）？*</h4>
        <input type="radio" ng-model="q109" name="question109" id="question1091" value="1" <?php if($row['question109']==1) echo "ng-checked='true'";?> ng-required="part4==1">是
        <input type="radio" ng-model="q109" name="question109" id="question1092" value="2" <?php if($row['question109']==2) echo "ng-checked='true'";?> ng-required="part4==1">否

        <div  ng-if="q109==1">
            <h4>是怎样的剧烈运动？*</h4>
            <input type="text" name="question110" value="<?php echo $row['question110'];?>" ng-required="q109==1">
            <h4>运动频率为一周几次？*</h4>
            <input type="text" name="question111" value="<?php echo $row['question111'];?>" ng-required="q109==1">
            <h4>每次运动多长时间*</h4>
            <input type="radio" name="question112" id="question1121" value="1" <?php if($row['question112']==1) echo "ng-checked='true'";?> ng-required="q109==1">小于15分钟<br>
            <input type="radio" name="question112" id="question1122" value="2" <?php if($row['question112']==2) echo "ng-checked='true'";?> ng-required="q109==1">15至30分钟<br>
            <input type="radio" name="question112" id="question1123" value="3" <?php if($row['question112']==3) echo "ng-checked='true'";?> ng-required="q109==1">31至60分钟<br>
            <input type="radio" name="question112" id="question1124" value="4" <?php if($row['question112']==4) echo "ng-checked='true'";?> ng-required="q109==1">60分钟以上
            <h4>这项运动你坚持了多久*</h4>
            <input type="radio" name="question113" id="question1131" value="1" <?php if($row['question113']==1) echo "ng-checked='true'";?> ng-required="q109==1">小于3个月<br>
            <input type="radio" name="question113" id="question1132" value="2" <?php if($row['question113']==2) echo "ng-checked='true'";?> ng-required="q109==1">3至12个月<br>
            <input type="radio" name="question113" id="question1133" value="3" <?php if($row['question113']==3) echo "ng-checked='true'";?> ng-required="q109==1">大于12个月
        </div>

        <h4>你最近是否有经常地做一些娱乐，休闲运动（太极拳，钓鱼，广场舞，高尔夫等）？*</h4>
        <input type="radio" ng-model="q114" name="question114" id="question1141" value="1" <?php if($row['question114']==1) echo "ng-checked='true'";?> ng-required="part4==1">是
        <input type="radio" ng-model="q114" name="question114" id="question1142" value="2" <?php if($row['question114']==2) echo "ng-checked='true'";?> ng-required="part4==1">否
        <div  ng-if="q114==1">
            <h4>是怎样的休闲运动*</h4>
            <input type="text" name="question115" value="<?php echo $row['question115'];?>" ng-required="q114==1">
            <h4>运动频率为一周几次？*</h4>
            <input type="text" name="question116" value="<?php echo $row['question116'];?>" ng-required="q114==1">
            <h4>每次运动多长时间*</h4>
            <input type="radio" name="question117" id="question1171" value="1" <?php if($row['question117']==1) echo "ng-checked='true'";?> ng-required="q114==1">小于15分钟<br>
            <input type="radio" name="question117" id="question1172" value="2" <?php if($row['question117']==2) echo "ng-checked='true'";?> ng-required="q114==1">15至30分钟<br>
            <input type="radio" name="question117" id="question1173" value="3" <?php if($row['question117']==3) echo "ng-checked='true'";?> ng-required="q114==1">31至60分钟<br>
            <input type="radio" name="question117" id="question1174" value="4" <?php if($row['question117']==4) echo "ng-checked='true'";?> ng-required="q114==1">60分钟以上
            <h4>这项运动你坚持了多久*</h4>
            <input type="radio" name="question118" id="question1181" value="1" <?php if($row['question118']==1) echo "ng-checked='true'";?> ng-required="q114==1">小于3个月<br>
            <input type="radio" name="question118" id="question1182" value="2" <?php if($row['question118']==2) echo "ng-checked='true'";?> ng-required="q114==1">3至12个月<br>
            <input type="radio" name="question118" id="question1183" value="3" <?php if($row['question118']==3) echo "ng-checked='true'";?> ng-required="q114==1">大于12个月
        </div>
</fieldset>
        <h4>你的康复目标是</h4>
        <input type="text" name="question119" value="<?php echo $row['question119'];?>" ><br>
        <input type="submit" value="提交！">
    </form>
</div>

<?php

    }
} else{
    ?>
    <h2 style="text-align: center;">请您先登录！</h2>
    <?php

}

?>