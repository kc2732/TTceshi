<form>
    <h4>姓名：</h4>
    <input type="text" name="username">
    <h4>性别</h4>
    <input type="radio" name="gender" value="1" >男
    <input type="radio" name="gender" value="2">女
    <h4>年龄：</h4>
    <input type="number" name="age">
    <h4>身高(cm)</h4>
    <input type="number" name="height" >
    <h4>体重(kg)</h4>
    <input type="number" name="weight" >
    <h4>腰围(cm)：</h4>
    <input type="number" name="waist">
    <h4>你是否有过吸烟史</h4>
    <input type="radio" name="xiyan" id="xiyan" value="1" >是
    <input type="radio" name="question92" id="question922" value="2">否
    <div class="question921">
        <h4>你是否戒烟了</h4>
        <input type="radio" name="question93" id="question931" value="1" >是
        <input type="radio" name="question93" id="question932" value="2">否
        <div class="question931">
            <h4>你是什么时候戒烟的</h4>
            <input type="radio" name="question94" id="question941" value="1" >六个月之内刚刚戒烟
            <input type="radio" name="question94" id="question942" value="2">在六个月前戒烟
        </div>
        <div class="question932">
            <h4>你平时吸烟的种类</h4>
            <input type="radio" name="question93" id="question951" value="1" >香烟
            <input type="radio" name="question93" id="question952" value="2">雪茄
            <input type="radio" name="question93" id="question953" value="2">烟斗
        </div>
        <div class="question11">
            <h4>您是否经常暴露在二手烟环境下</h4>
            <input type="radio" name="ershouyan" id="ershouyan1" value="1">是
            <input type="radio" name="ershouyan" id="ershouyan2" value="2">否
        </div>
    </div>

        <h4>血糖值</h4>
    <h4>餐前30分钟的血糖水平：</h4>
    <input type="text" name="question72">
    <h4>餐后两小时的血糖水平：</h4>
    <input type="text" name="question73">
    <h4>空腹血糖的血糖水平：</h4>
    <input type="text" name="question74">
    <h4>血糖测量地点：</h4>
    <input type="text" name="question75">
    <h4>血糖测量人：</h4>
    <input type="text" name="question76">
    <h4>糖化血红蛋白（A1C）：</h4>
    <input type="text" name="question77">
    <h4>测量糖化血红蛋白（A1C）的测试人的名字或者测试医院的名称</h4>
    <input type="text" name="question78">

        <h4>血压值</h4>
    <h4>您是否得了高血压</h4>
    <input type="radio" name="question67" id="question671" value="1" <?php if($row['question67']==1) echo "checked";?>>是
    <input type="radio" name="question67" id="question672" value="2" <?php if($row['question67']==2) echo "checked";?>>否
    <h4>你是否测过你的血压水平*</h4>
    <input type="radio" name="question67" id="question671" value="1" <?php if($row['question67']==1) echo "checked";?>>是
    <input type="radio" name="question67" id="question672" value="2" <?php if($row['question67']==2) echo "checked";?>>否
    <div class="question671">
        <h4>测试人的姓名或者测试医院的名称*</h4>
        <input type="text" name="question68" value="<?php echo $row['question68'];?>">
        <h4>收缩压（高压） mmhg：*</h4>
        <input type="text" name="question69" value="<?php echo $row['question69'];?>">
        <h4>舒张压（低压） mmhg：*</h4>
        <input type="text" name="question70" value="<?php echo $row['question70'];?>">
    </div>

    <h4>你是否测过你的胆固醇水平</h4>
    <input type="radio" name="question67" id="question671" value="1" >是
    <input type="radio" name="question67" id="question672" value="2">否
    <div class="question671">
        <h4>测试人的姓名或者测试医院的名称</h4>
        <input type="text" name="question68">
        <h4>收缩压（高压） mmhg:</h4>
        <input type="text" name="question69">
        <h4>舒张压（低压） mmhg</h4>
        <input type="text" name="question70">
    </div>

    <h4>家族成员中是否有亲属发生心肌梗死？</h4>
    <input type="radio" name="question22" id="question221" value="1" >是
    <input type="radio" name="question22" id="question222" value="2">否
    <div class="question221">
        <h4>该患病亲属与你的关系是</h4>
        <input type="checkbox" name="question23" id="question23" value="1">父亲，或者亲哥哥、亲弟弟
        <div class="question231">
            患病年龄<input type="number" name="question231">
        </div>
        <input type="checkbox" name="question24" id="question24" value="2">母亲，或者亲姐姐、亲妹妹
        <div class="question232">
            患病年龄<input type="number" name="question232">
        </div>
        <input type="checkbox" name="question25" id="question25" value="3">其他亲属
    </div>


    <h4>家族成员中是否有亲属患有冠状动脉血管再生？</h4>
    <input type="radio" name="question22" id="question221" value="1" >是
    <input type="radio" name="question22" id="question222" value="2">否
    <div class="question221">
        <h4>该患病亲属与你的关系是</h4>
        <input type="checkbox" name="question23" id="question23" value="1">父亲，或者亲哥哥、亲弟弟
        <div class="question231">
            患病年龄<input type="number" name="question231">
        </div>
        <input type="checkbox" name="question24" id="question24" value="2">母亲，或者亲姐姐、亲妹妹
        <div class="question232">
            患病年龄<input type="number" name="question232">
        </div>
        <input type="checkbox" name="question25" id="question25" value="3">其他亲属
    </div>

    <h4>家族成员中是否有人猝死？</h4>
    <input type="radio" name="question34" id="question341" value="1" >是
    <input type="radio" name="question34" id="question342" value="2">否
    <div class="question341">
        <h4>该患病亲属与你的关系是</h4>
        <input type="checkbox" name="question35" id="question35" value="1">父亲，或者亲哥哥、亲弟弟
        <div class="question351">
            患病年龄<input type="number" name="question351">
        </div>
        <input type="checkbox" name="question36" id="question36" value="2">母亲，或者亲姐姐、亲妹妹
        <div class="question352">
            患病年龄<input type="number" name="question352">
        </div>
        <input type="checkbox" name="question37" id="question37" value="3">其他亲属
    </div>



</form>