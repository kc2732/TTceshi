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
    $res_Information = mysql_query($getInformation);
    while($row = mysql_fetch_assoc($res_Information)){
?>
<div class="container" style="background-color: rgb(235,214,165); color:black;">
    <form action="../pages/success.php" method="post" class="dataCollection">
        <input type="hidden" name="option" value="dataCollection">
        <h4>姓名</h4>
        <?php $utf8_name = iconv("GBK", 'UTF-8', $row['name']);?>
        <input type="text" name="name" value="<?php echo $utf8_name;?>">
        <h4>性别</h4>
        <input type="radio" name="gender" value="1" <?php if($row['gender']==1) echo "checked"; ?> >男
        <input type="radio" name="gender" value="2" <?php if($row['gender']==2) echo "checked"; ?> >女
        <h4>年龄</h4>
        <input type="number" name="age" max="100" value="<?php echo $row['age']; ?>">
        <h4>联系方式</h4>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>">
        <h4>身高(cm)</h4>
        <input type="number" name="height" max="250" value="<?php echo $row['height']; ?>">
        <h4>体重(kg)</h4>
        <input type="number" name="weight" max="500" value="<?php echo $row['weight']; ?>">
        <h4>腰围(cm)</h4>
        <input type="number" name="waist" max="500" value="<?php echo $row['waist']; ?>">
        <h4>您是否曾经做过任何心血管测试</h4>
        <input type="radio" name="question8" id="question81" value="1" <?php if($row['question8']==1) echo "checked";?> >是
        <input type="radio" name="question8" id="question82" value="2" <?php if($row['question8']==2) echo "checked";?>>否
        <div class="question81">
            <h4>你做完心血管测试后的诊断结果是</h4>
            <input type="text" name="question9" value="<?php echo $row['question9'];?>" >
        </div>
        <div>
            <h4>家族史</h4>
            <h4>家族成员是否有亲属有心脏病突发史</h4>
            <input type="radio" name="question10" id="question101" value="1"  <?php if($row['question10']==1) echo "checked";?>>是
            <input type="radio" name="question10" id="question102" value="2"  <?php if($row['question10']==2) echo "checked";?>>否
            <div class="question101">
                <h4>该患病亲属与你的关系是</h4>
                <input type="checkbox" name="question11" id="question11" value="1"  <?php if($row['question11']==1) echo "checked";?>>父亲，或者亲哥哥、亲弟弟
                <div class="question111">
                    患病年龄<input type="number" name="question0111" max="100" value="<?php echo $row['question0111'];?>">
                </div>
                <input type="checkbox" name="question12" id="question12" value="2"  <?php if($row['question11']==2) echo "checked";?>>母亲，或者亲姐姐、亲妹妹
                <div class="question112">
                    患病年龄<input type="number" name="question0112" max="100" value="<?php echo $row['question0112'];?>">
                </div>
                <input type="checkbox" name="question13" id="question13" value="3"  <?php if($row['question11']==3) echo "checked";?>>其他亲属
            </div>

            <h4>家族成员是否有亲属有先天性心脏病</h4>
            <input type="radio" name="question14" id="question141" value="1"  <?php if($row['question14']==1) echo "checked";?>>是
            <input type="radio" name="question14" id="question142" value="2"  <?php if($row['question14']==2) echo "checked";?>>否
            <div class="question141">
                <h4>该患病亲属与你的关系是</h4>
                <input type="checkbox" name="question15" id="question15" value="1" <?php if($row['question15']==1) echo "checked";?>>父亲，或者亲哥哥、亲弟弟
                <div class="question151">
                    患病年龄<input type="number" name="question151" max="100" value="<?php echo $row['question151'];?>">
                </div>
                <input type="checkbox" name="question16" id="question16" value="2" <?php if($row['question16']==2) echo "checked";?>>母亲，或者亲姐姐、亲妹妹
                <div class="question152">
                    患病年龄<input type="number" name="question152" max="100" value="<?php echo $row['question152'];?>">
                </div>
                <input type="checkbox" name="question17" id="question17" value="3" <?php if($row['question17']==3) echo "checked";?>>其他亲属
            </div>

            <h4>家族成员中是否有亲属做过心脏手术？</h4>
            <input type="radio" name="question18" id="question181" value="1" <?php if($row['question18']==1) echo "checked";?>>是
            <input type="radio" name="question18" id="question182" value="2" <?php if($row['question18']==2) echo "checked";?>>否
            <div class="question181">
                <h4>该患病亲属与你的关系是</h4>
                <input type="checkbox" name="question19" id="question19" value="1" <?php if($row['question19']==1) echo "checked";?>>父亲，或者亲哥哥、亲弟弟
                <div class="question191">
                    患病年龄<input type="number" name="question191" value="<?php echo $row['question191'];?>">
                </div>
                <input type="checkbox" name="question20" id="question20" value="2" <?php if($row['question20']==2) echo "checked";?>>母亲，或者亲姐姐、亲妹妹
                <div class="question192">
                    患病年龄<input type="number" name="question192" value="<?php echo $row['question192'];?>">
                </div>
                <input type="checkbox" name="question21" id="question21" value="3" <?php if($row['question21']==3) echo "checked";?>>其他亲属
            </div>

            <h4>家族成员中是否有亲属冠状动脉支架？</h4>
            <input type="radio" name="question22" id="question221" value="1" <?php if($row['question22']==1) echo "checked";?> >是
            <input type="radio" name="question22" id="question222" value="2" <?php if($row['question22']==2) echo "checked";?>>否
            <div class="question221">
                <h4>该患病亲属与你的关系是</h4>
                <input type="checkbox" name="question23" id="question23" value="1" <?php if($row['question23']==1) echo "checked";?>>父亲，或者亲哥哥、亲弟弟
                <div class="question231">
                    患病年龄<input type="number" name="question231" value="<?php echo $row['question231'];?>">
                </div>
                <input type="checkbox" name="question24" id="question24" value="2" <?php if($row['question24']==2) echo "checked";?>>母亲，或者亲姐姐、亲妹妹
                <div class="question232">
                    患病年龄<input type="number" name="question232" value="<?php echo $row['question232'];?>">
                </div>
                <input type="checkbox" name="question25" id="question25" value="3" <?php if($row['question25']==3) echo "checked";?>>其他亲属
            </div>


            <h4>家族成员中是否有做过心脏导管手术？</h4>
            <input type="radio" name="question26" id="question261" value="1" <?php if($row['question26']==1) echo "checked";?> >是
            <input type="radio" name="question26" id="question262" value="2" <?php if($row['question26']==2) echo "checked";?>>否
            <div class="question261">
                <h4>该患病亲属与你的关系是</h4>
                <input type="checkbox" name="question27" id="question27" value="1" <?php if($row['question27']==1) echo "checked";?>>父亲，或者亲哥哥、亲弟弟
                <div class="question271">
                    患病年龄<input type="number" name="question271" value="<?php echo $row['question271'];?>">
                </div>
                <input type="checkbox" name="question28" id="question28" value="2" <?php if($row['question28']==2) echo "checked";?>>母亲，或者亲姐姐、亲妹妹
                <div class="question272">
                    患病年龄<input type="number" name="question272" value="<?php echo $row['272'];?>">
                </div>
                <input type="checkbox" name="question29" id="question29" value="3" <?php if($row['question29']==3) echo "checked";?>>其他亲属
            </div>

            <h4>家族成员中是否有脑血管意外病史(脑溢血，中风，栓塞)？</h4>
            <input type="radio" name="question30" id="question301" value="1" <?php if($row['question30']==1) echo "checked";?>>是
            <input type="radio" name="question30" id="question302" value="2" <?php if($row['question30']==2) echo "checked";?>>否
            <div class="question301">
                <h4>该患病亲属与你的关系是</h4>
                <input type="checkbox" name="question31" id="question31" value="1" <?php if($row['question31']==1) echo "checked";?>>父亲，或者亲哥哥、亲弟弟
                <div class="question311">
                    患病年龄<input type="number" name="question311" value="<?php echo $row['question311'];?>">
                </div>
                <input type="checkbox" name="question32" id="question32" value="2" <?php if($row['question32']==2) echo "checked";?>>母亲，或者亲姐姐、亲妹妹
                <div class="question312">
                    患病年龄<input type="number" name="question312" value="<?php echo $row['question312'];?>">
                </div>
                <input type="checkbox" name="question33" id="question33" value="3" <?php if($row['question33']==3) echo "checked";?>>其他亲属
            </div>

            <h4>家族成员中是否有人猝死？</h4>
            <input type="radio" name="question34" id="question341" value="1" <?php if($row['question34']==1) echo "checked";?>>是
            <input type="radio" name="question34" id="question342" value="2" <?php if($row['question34']==2) echo "checked";?>>否
            <div class="question341">
                <h4>该患病亲属与你的关系是</h4>
                <input type="checkbox" name="question35" id="question35" value="1" <?php if($row['question35']==1) echo "checked";?>>父亲，或者亲哥哥、亲弟弟
                <div class="question351">
                    患病年龄<input type="number" name="question351" value="<?php echo $row['question351'];?>">
                </div>
                <input type="checkbox" name="question36" id="question36" value="2" <?php if($row['question36']==2) echo "checked";?>>母亲，或者亲姐姐、亲妹妹
                <div class="question352">
                    患病年龄<input type="number" name="question352" value="<?php echo $row['question352'];?>">
                </div>
                <input type="checkbox" name="question37" id="question37" value="3" <?php if($row['question37']==3) echo "checked";?>>其他亲属
            </div>

            <h4>家族成员中是否有亲属有其他慢性疾病？</h4>
            <input type="radio" name="question38" id="question381" value="1" <?php if($row['question38']==1) echo "checked";?>>是
            <input type="radio" name="question38" id="question382" value="2" <?php if($row['question38']==2) echo "checked";?>>否
            <div class="question381">
                <h4>是哪一种慢性病？</h4>
                <input type="text" name="question39" value="<?php echo $row['question39'];?>">
            </div>
        </div>
        <div>
            <h4>个人史</h4>
            <h4>你曾经是否有过高血压？</h4>
            <input type="radio" name="question40" id="question401" value="1" <?php if($row['question40']==1) echo "checked";?>>是
            <input type="radio" name="question40" id="question402" value="2" <?php if($row['question40']==2) echo "checked";?>>否
            <h4>你曾经是否有过高胆固醇</h4>
            <input type="radio" name="question41" id="question411" value="1" <?php if($row['question41']==1) echo "checked";?>>是
            <input type="radio" name="question41" id="question412" value="2" <?php if($row['question14']==2) echo "checked";?>>否

            <h4>你曾经是否有过糖尿病？</h4>
            <input type="radio" name="question42" id="question421" value="1" <?php if($row['question42']==1) echo "checked";?> >是
            <input type="radio" name="question42" id="question422" value="2" <?php if($row['question42']==2) echo "checked";?>>否
            <h4>你曾经是否有过动脉疾病</h4>
            <input type="radio" name="question43" id="question431" value="1" <?php if($row['question43']==1) echo "checked";?>>是
            <input type="radio" name="question43" id="question432" value="2" <?php if($row['question43']==2) echo "checked";?>>否

            <h4>你曾经是否有过甲状腺疾病？</h4>
            <input type="radio" name="question44" id="question441" value="1" <?php if($row['question44']==1) echo "checked";?>>是
            <input type="radio" name="question44" id="question442" value="2" <?php if($row['question44']==2) echo "checked";?>>否
            <h4>你曾经是否有过肺部疾病</h4>
            <input type="radio" name="question45" id="question451" value="1" <?php if($row['question45']==1) echo "checked";?>>是
            <input type="radio" name="question45" id="question452" value="2" <?php if($row['question45']==2) echo "checked";?>>否

            <h4>你曾经是否有过哮喘？</h4>
            <input type="radio" name="question46" id="question461" value="1" <?php if($row['question46']==1) echo "checked";?>>是
            <input type="radio" name="question46" id="question462" value="2" <?php if($row['question46']==2) echo "checked";?>>否
            <h4>你曾经是否有过癌症</h4>
            <input type="radio" name="question47" id="question471" value="1" <?php if($row['question47']==1) echo "checked";?>>是
            <input type="radio" name="question47" id="question472" value="2" <?php if($row['question47']==2) echo "checked";?>>否

            <h4>你曾经是否有过肾脏疾病？</h4>
            <input type="radio" name="question48" id="question481" value="1" <?php if($row['question48']==1) echo "checked";?>>是
            <input type="radio" name="question48" id="question482" value="2" <?php if($row['question48']==2) echo "checked";?>>否
            <h4>你曾经是否有过肝病？</h4>
            <input type="radio" name="question49" id="question491" value="1" <?php if($row['question49']==1) echo "checked";?>>是
            <input type="radio" name="question49" id="question492" value="2" <?php if($row['question49']==2) echo "checked";?>>否

            <h4>你是否有过除以上列出疾病之外的疾病，如果有，请列出</h4>
            <input type="text" name="question050"  value="<?php echo $row['question050'];?>">
        </div>


        <div>
            <h4>症状</h4>
            <h4>你曾经是否有过胸部疼痛？</h4>
            <input type="radio" name="question50" id="question501" value="1" <?php if($row['question50']==1) echo "checked";?>>是
            <input type="radio" name="question50" id="question502" value="2" <?php if($row['question50']==2) echo "checked";?>>否
            <h4>你曾经是否有过呼吸短促</h4>
            <input type="radio" name="question51" id="question511" value="1" <?php if($row['question51']==1) echo "checked";?>>是
            <input type="radio" name="question51" id="question512" value="2" <?php if($row['question51']==2) echo "checked";?>>否
            <h4>你曾经是否有过心悸？</h4>
            <input type="radio" name="question52" id="question521" value="1" <?php if($row['question52']==1) echo "checked";?>>是
            <input type="radio" name="question52" id="question522" value="2" <?php if($row['question52']==2) echo "checked";?>>否
            <h4>你曾经是否有过心律不齐</h4>
            <input type="radio" name="question53" id="question531" value="1" <?php if($row['question53']==1) echo "checked";?>>是
            <input type="radio" name="question53" id="question532" value="2" <?php if($row['question53']==1) echo "checked";?>>否

            <h4>你曾经是否有过心脏杂音？</h4>
            <input type="radio" name="question54" id="question541" value="1" <?php if($row['question54']==1) echo "checked";?>>是
            <input type="radio" name="question54" id="question542" value="2" <?php if($row['question54']==2) echo "checked";?>>否
            <h4>你曾经是否有过间歇性腿部疼痛</h4>
            <input type="radio" name="question55" id="question551" value="1" <?php if($row['question55']==1) echo "checked";?>>是
            <input type="radio" name="question55" id="question552" value="2" <?php if($row['question55']==2) echo "checked";?>>否

            <h4>你曾经是否有过眩晕或者昏倒？</h4>
            <input type="radio" name="question56" id="question561" value="1" <?php if($row['question56']==1) echo "checked";?>>是
            <input type="radio" name="question56" id="question562" value="2" <?php if($row['question56']==2) echo "checked";?>>否
            <h4>你曾经是否在日常生活中易感到疲倦？</h4>
            <input type="radio" name="question57" id="question571" value="1" <?php if($row['question57']==1) echo "checked";?>>是
            <input type="radio" name="question57" id="question572" value="2" <?php if($row['question57']==2) echo "checked";?>>否

            <h4>你曾经是否有过睡眠时打鼾的情况？</h4>
            <input type="radio" name="question58" id="question581" value="1" <?php if($row['question58']==1) echo "checked";?>>是
            <input type="radio" name="question58" id="question582" value="2" <?php if($row['question58']==2) echo "checked";?>>否
            <h4>你曾经是否有过背部疼痛问题</h4>
            <input type="radio" name="question59" id="question591" value="1" <?php if($row['question59']==1) echo "checked";?>>是
            <input type="radio" name="question59" id="question592" value="2" <?php if($row['question59']==2) echo "checked";?>>否

            <h4>你曾经是否有过骨科问题？</h4>
            <input type="radio" name="question60" id="question601" value="1" <?php if($row['question60']==1) echo "checked";?>>是
            <input type="radio" name="question60" id="question602" value="2" <?php if($row['question61']==2) echo "checked";?>>否
            <h4>你曾经是否有过除以上列出症状之外的不适症状，如果有是哪种不适症状？</h4>
            <input type="text" name="question601" value="<?php echo $row['question601'];?>">


        </div>

        <h4>你是否测过你的胆固醇水平</h4>
        <input type="radio" name="question61" id="question611" value="1" <?php if($row['question61']==1) echo "checked";?>>是
        <input type="radio" name="question61" id="question612" value="2" <?php if($row['question61']==2) echo "checked";?>>否
        <div class="question611">
            <h4>测试人的姓名或者测试医院的名称</h4>
            <input type="text" name="question62" value="<?php echo $row['question62'];?>">
            <h4>总胆固醇(TC)水平具体数值（mmol/L）：</h4>
            <input type="text" name="question63" value="<?php echo $row['question63'];?>">
            <h4>甘油三酯(TG)具体数值（mmol/L）</h4>
            <input type="text" name="question64" value="<?php echo $row['question64'];?>">
            <h4>高密度脂蛋白（HDL）具体数值（mmol/L）：</h4>
            <input type="text" name="question65" value="<?php echo $row['question65'];?>">
            <h4>低密度脂蛋白(LDL)具体数值（mmol/L）：</h4>
            <input type="text" name="question66" value="<?php echo $row['question66'];?>">
        </div>

        <h4>你是否测过你的血压水平</h4>
        <input type="radio" name="question67" id="question671" value="1" <?php if($row['question67']==1) echo "checked";?>>是
        <input type="radio" name="question67" id="question672" value="2" <?php if($row['question67']==2) echo "checked";?>>否
        <div class="question671">
            <h4>测试人的姓名或者测试医院的名称</h4>
            <input type="text" name="question68" value="<?php echo $row['question68'];?>">
            <h4>收缩压（高压） mmhg:</h4>
            <input type="text" name="question69" value="<?php echo $row['question69'];?>">
            <h4>舒张压（低压） mmhg</h4>
            <input type="text" name="question70" value="<?php echo $row['question70'];?>">
        </div>

        <h4>你是否测过你的血糖水平</h4>
        <input type="radio" name="question71" id="question711" value="1" <?php if($row['question71']==1) echo "checked";?>>是
        <input type="radio" name="question71" id="question712" value="2"<?php if($row['question71']==2) echo "checked";?>>否
        <div class="question711">
            <h4>餐前30分钟的血糖水平：</h4>
            <input type="text" name="question72" value="<?php echo $row['question72'];?>">
            <h4>餐后两小时的血糖水平：</h4>
            <input type="text" name="question73" value="<?php echo $row['question73'];?>">
            <h4>空腹血糖的血糖水平：</h4>
            <input type="text" name="question74" value="<?php echo $row['question74'];?>">
            <h4>血糖测量地点：</h4>
            <input type="text" name="question75" value="<?php echo $row['question75'];?>">
            <h4>血糖测量人：</h4>
            <input type="text" name="question76" value="<?php echo $row['question76'];?>">
            <h4>糖化血红蛋白（A1C）：</h4>
            <input type="text" name="question77" value="<?php echo $row['question77'];?>">
            <h4>测量糖化血红蛋白（A1C）的测试人的名字或者测试医院的名称</h4>
            <input type="text" name="question78" value="<?php echo $row['question78'];?>">
        </div>

        <h4>你是否正在吃任何处方药或者非处方药？*</h4>
        <input type="radio" name="question79" id="question791" value="1"  <?php if($row['question79']==1) echo "checked";?>>是
        <input type="radio" name="question79" id="question792" value="2"  <?php if($row['question79']==2) echo "checked";?>>否
        <div class="question791">
            <h4>药品名称</h4>
            <input type="text" name="question80"value="<?php echo $row['question80'];?>">
            <h4>药品剂量</h4>
            <input type="text" name="question81" value="<?php echo $row['question81'];?>">
            <h4>使用药品的时间：</h4>
            <input type="text" name="question82" value="<?php echo $row['question82'];?>">
            <h4>为什么要服用该药品？</h4>
            <input type="text" name="question83" value="<?php echo $row['question83'];?>">
        </div>

        <h4>您近3个月是否住过医院？*</h4>
        <input type="radio" name="question84" id="question841" value="1" <?php if($row['question84']==1) echo "checked";?>>是
        <input type="radio" name="question84" id="question842" value="2" <?php if($row['question84']==2) echo "checked";?>>否
        <div class="question841">
            <h4>住院时间</h4>
            <input type="text" name="question85" value="<?php echo $row['question85'];?>">
            <h4>住院地点</h4>
            <input type="text" name="question86" value="<?php echo $row['question86'];?>">
            <h4>住院原因</h4>
            <input type="text" name="question87" value="<?php echo $row['question87'];?>">
        </div>

        <h4>您其他已经确诊的疾病和担心的地方</h4>
        <input type="text" name="question88" value="<?php echo $row['question88'];?>">

        <h4>生活模式和兴趣</h4>

        <h4>你是否曾经在做运动或者在日常活动的时候，有不舒服和呼吸短促的症状？*</h4>
        <input type="radio" name="question89" id="question891" value="1" <?php if($row['question89']==1) echo "checked";?>>是
        <input type="radio" name="question89" id="question892" value="2" <?php if($row['question89']==2) echo "checked";?>>否

        <h4>你是否曾经在做运动或者在日常活动的时候，有不舒服和呼吸短促的症状？*</h4>
        <input type="radio" name="question90" id="question901" value="1" <?php if($row['question90']==1) echo "checked";?>>是
        <input type="radio" name="question90" id="question902" value="2" <?php if($row['question90']==2) echo "checked";?>>否
        <div class="question901">
            <h4>这种不舒服会不会因为运动的停止而消失？*</h4>
            <input type="radio" name="question91" id="question911" value="1" <?php if($row['question91']==1) echo "checked";?>>是
            <input type="radio" name="question91" id="question912" value="2" <?php if($row['question91']==2) echo "checked";?>>否
        </div>


        <h4>你是否有过吸烟史</h4>
        <input type="radio" name="question92" id="question921" value="1" <?php if($row['question92']==1) echo "checked";?>>是
        <input type="radio" name="question92" id="question922" value="2" <?php if($row['question92']==2) echo "checked";?>>否
        <div class="question921">
            <h4>你是否戒烟了</h4>
            <input type="radio" name="question93" id="question931" value="1" <?php if($row['question93']==1) echo "checked";?>>是
            <input type="radio" name="question93" id="question932" value="2" <?php if($row['question93']==2) echo "checked";?>>否
            <div class="question931">
                <h4>你是什么时候戒烟的</h4>
                <input type="radio" name="question94" id="question941" value="1" <?php if($row['question94']==1) echo "checked";?>>六个月之内刚刚戒烟
                <input type="radio" name="question94" id="question942" value="0" <?php if($row['question94']==2) echo "checked";?>>在六个月前戒烟
            </div>
            <div class="question932">
                <h4>你平时吸烟的种类</h4>
                <input type="radio" name="question95" id="question951" value="1" <?php if($row['question95']==1) echo "checked";?>>香烟
                <input type="radio" name="question95" id="question952" value="2" <?php if($row['question95']==2) echo "checked";?>>雪茄
                <input type="radio" name="question95" id="question953" value="3" <?php if($row['question95']==3) echo "checked";?>>烟斗
            </div>

        </div>

        <h4>你平时喝酒吗？</h4>
        <input type="radio" name="question96" id="question961" value="1" <?php if($row['question96']==1) echo "checked";?>>是
        <input type="radio" name="question96" id="question962" value="2" <?php if($row['question96']==2) echo "checked";?>>否
        <div class="question961">
            <h4>一周大约喝多少瓶啤酒</h4>
            <input type="text" name="question97" value="<?php echo $row['question97'];?>">
            <h4>一周大约喝多少斤白酒</h4>
            <input type="text" name="question98" value="<?php echo $row['question98'];?>">
            <h4>一周大约喝多少杯红酒</h4>
            <input type="text" name="question99" value="<?php echo $row['question99'];?>">
        </div>

        <h4>你平时喝含咖啡因的饮品吗？</h4>
        <input type="radio" name="question100" id="question1001" value="1" <?php if($row['question100']==1) echo "checked";?>>是
        <input type="radio" name="question100" id="question1002" value="2" <?php if($row['question100']==2) echo "checked";?>>否
        <div class="question1001">
            <h4>一周大约喝多少杯咖啡</h4>
            <input type="text" name="question101" value="<?php echo $row['question101'];?>">
            <h4>一周大约喝多少杯茶</h4>
            <input type="text" name="question102" value="<?php echo $row['question102'];?>">
            <h4>一周大约喝多少瓶含咖啡因的软饮（可乐、运动饮料等）</h4>
            <input type="text" name="question103" value="<?php echo $row['question103'];?>">
        </div>


        <h4>你最近有在吃减肥餐吗</h4>
        <input type="radio" name="question104" id="question1041" value="1" <?php if($row['question104']==1) echo "checked";?>>是
        <input type="radio" name="question104" id="question1042" value="2" <?php if($row['question104']==2) echo "checked";?>>否
        <div class="question1041">
            <h4>你已经吃了几个月的减肥餐？</h4>
            <input type="text" name="question105" value="<?php echo $row['question105'];?>">
            <h4>这个减肥餐计划是不是你的医生给你开的？</h4>
            <input type="text" name="question106" value="<?php echo $row['question106'];?>">
        </div>
        <div class="question1042">
            你曾经有试过减肥餐吗？
            <input type="radio" name="question107" id="question1071" value="1" <?php if($row['question107']==1) echo "checked";?>>是
            <input type="radio" name="question107" id="question1072" value="2" <?php if($row['question107']==2) echo "checked";?>>否
            <div class="question1071">
                <h4>减肥餐持续了多久，请描述一下减肥餐的类型。</h4>
                <input type="text" name="question1071" value="<?php echo $row['question1071'];?>">
            </div>

        </div>

        <h4> 活动水平调查</h4>
        <h4>大部分情况下，你的运动水平是</h4>
        <input type="radio" name="question108" id="question1081" value="1" <?php if($row['question108']==1) echo "checked";?>>主要是坐着<br>
        <input type="radio" name="question108" id="question1082" value="2" <?php if($row['question108']==2) echo "checked";?>>轻微的运动（散步）<br>
        <input type="radio" name="question108" id="question1083" value="3" <?php if($row['question108']==3) echo "checked";?>>中毒运动（快速上下楼梯，快走）<br>
        <input type="radio" name="question108" id="question1084" value="4" <?php if($row['question108']==4) echo "checked";?>>重体力运动（体力劳动者，每周去三次以上健身房）

        <h4>你最近是否有在日常生活中经常地做一些非常剧烈的运动（频繁的搬重物，快跑，健身等）？*</h4>
        <input type="radio" name="question109" id="question1091" value="1" <?php if($row['question109']==1) echo "checked";?>>是
        <input type="radio" name="question109" id="question1092" value="2" <?php if($row['question109']==2) echo "checked";?>>否

        <div class="question1091">
            <h4>是怎样的剧烈运动？</h4>
            <input type="text" name="question110" value="<?php echo $row['question110'];?>">
            <h4>运动频率为一周几次？</h4>
            <input type="text" name="question111" value="<?php echo $row['question111'];?>">
            <h4>每次运动多长时间</h4>
            <input type="radio" name="question112" id="question1121" value="1" <?php if($row['question112']==1) echo "checked";?>>小于15分钟<br>
            <input type="radio" name="question112" id="question1122" value="2" <?php if($row['question112']==2) echo "checked";?>>15至30分钟<br>
            <input type="radio" name="question112" id="question1123" value="3" <?php if($row['question112']==3) echo "checked";?>>31至60分钟<br>
            <input type="radio" name="question112" id="question1124" value="4" <?php if($row['question112']==4) echo "checked";?>>60分钟以上
            <h4>这项运动你坚持了多久</h4>
            <input type="radio" name="question113" id="question1131" value="1" <?php if($row['question113']==1) echo "checked";?>>小于3个月<br>
            <input type="radio" name="question113" id="question1132" value="2" <?php if($row['question113']==2) echo "checked";?>>3至12个月<br>
            <input type="radio" name="question113" id="question1133" value="3" <?php if($row['question113']==3) echo "checked";?>>大于12个月
        </div>

        <h4>你最近是否有经常地做一些娱乐，休闲运动（太极拳，钓鱼，广场舞，高尔夫等）？</h4>
        <input type="radio" name="question114" id="question1141" value="1" <?php if($row['question114']==1) echo "checked";?>>是
        <input type="radio" name="question114" id="question1142" value="2" <?php if($row['question114']==2) echo "checked";?>>否
        <div class="question1141">
            <h4>是怎样的休闲运动</h4>
            <input type="text" name="question115" value="<?php echo $row['question115'];?>">
            <h4>运动频率为一周几次？</h4>
            <input type="text" name="question116" value="<?php echo $row['question116'];?>">
            <h4>每次运动多长时间</h4>
            <input type="radio" name="question117" id="question1171" value="1" <?php if($row['question117']==1) echo "checked";?>>小于15分钟<br>
            <input type="radio" name="question117" id="question1172" value="2" <?php if($row['question117']==2) echo "checked";?>>15至30分钟<br>
            <input type="radio" name="question117" id="question1173" value="3" <?php if($row['question117']==3) echo "checked";?>>31至60分钟<br>
            <input type="radio" name="question117" id="question1174" value="4" <?php if($row['question117']==4) echo "checked";?>>60分钟以上
            <h4>这项运动你坚持了多久</h4>
            <input type="radio" name="question118" id="question1181" value="1" <?php if($row['question118']==1) echo "checked";?>>小于3个月<br>
            <input type="radio" name="question118" id="question1182" value="2" <?php if($row['question118']==2) echo "checked";?>>3至12个月<br>
            <input type="radio" name="question118" id="question1183" value="3" <?php if($row['question118']==3) echo "checked";?>>大于12个月
        </div>

        <h4>你的康复目标是</h4>
        <input type="text" name="question119" value="<?php echo $row['question119'];?>" ><br>
        <input type="submit" value="提交！">
    </form>
</div>

<?php

    }
} else{
    echo "请先登录";

}

?>