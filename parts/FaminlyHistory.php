<?php
session_start();
$Id = $_SESSION['id'];
?>

<form>
    <h4>姓名</h4>
    <input type="text" name="name" >
    <h4>性别</h4>
    <input type="radio" name="gender" value="Male" >男
    <input type="radio" name="gender" value="Female">女
    <h4>年龄</h4>
    <input type="number" name="age" >
    <h4>联系方式</h4>
    <input type="text" name="phone">
    <h4>身高(cm)</h4>
    <input type="number" name="height" >
    <h4>体重(kg)</h4>
    <input type="number" name="weight" >
    <h4>腰围(cm)</h4>
    <input type="number" name="waist">
    <h4>您是否曾经做过任何心血管测试</h4>
    <input type="radio" name="question8" id="question81" value="yes" >是
    <input type="radio" name="question8" id="question82" value="no">否
    <div class="question81">
        <h4>你做完心血管测试后的诊断结果是</h4>
        <input type="text" name="question9" >
    </div>
    <div>
        <h4>家族史</h4>
        <h4>家族成员是否有亲属有心脏病突发史</h4>
        <input type="radio" name="question10" id="question101" value="yes" >是
        <input type="radio" name="question10" id="question102" value="no">否
        <div class="question101">
            <h4>该患病亲属与你的关系是</h4>
            <input type="checkbox" name="question11" id="question11" value="1">父亲，或者亲哥哥、亲弟弟
            <div class="question111">
                患病年龄<input type="number" name="question111">
            </div>
            <input type="checkbox" name="question12" id="question12" value="2">母亲，或者亲姐姐、亲妹妹
            <div class="question112">
                患病年龄<input type="number" name="question112">
            </div>
            <input type="checkbox" name="question13" id="question13" value="3">其他亲属
        </div>

        <h4>家族成员是否有亲属有先天性心脏病</h4>
        <input type="radio" name="question14" id="question141" value="yes" >是
        <input type="radio" name="question14" id="question142" value="no">否
        <div class="question141">
            <h4>该患病亲属与你的关系是</h4>
            <input type="checkbox" name="question15" id="question15" value="1">父亲，或者亲哥哥、亲弟弟
            <div class="question151">
                患病年龄<input type="number" name="question151">
            </div>
            <input type="checkbox" name="question16" id="question16" value="2">母亲，或者亲姐姐、亲妹妹
            <div class="question152">
                患病年龄<input type="number" name="question152">
            </div>
            <input type="checkbox" name="question17" id="question17" value="3">其他亲属
        </div>

        <h4>家族成员中是否有亲属做过心脏手术？</h4>
        <input type="radio" name="question18" id="question181" value="yes" >是
        <input type="radio" name="question18" id="question182" value="no">否
        <div class="question181">
            <h4>该患病亲属与你的关系是</h4>
            <input type="checkbox" name="question19" id="question19" value="1">父亲，或者亲哥哥、亲弟弟
            <div class="question191">
                患病年龄<input type="number" name="question191">
            </div>
            <input type="checkbox" name="question20" id="question20" value="2">母亲，或者亲姐姐、亲妹妹
            <div class="question192">
                患病年龄<input type="number" name="question192">
            </div>
            <input type="checkbox" name="question21" id="question21" value="3">其他亲属
        </div>

        <h4>家族成员中是否有亲属冠状动脉支架？</h4>
        <input type="radio" name="question22" id="question221" value="yes" >是
        <input type="radio" name="question22" id="question222" value="no">否
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


        <h4>家族成员中是否有做过心脏导管手术？</h4>
        <input type="radio" name="question26" id="question261" value="yes" >是
        <input type="radio" name="question26" id="question262" value="no">否
        <div class="question261">
            <h4>该患病亲属与你的关系是</h4>
            <input type="checkbox" name="question27" id="question27" value="1">父亲，或者亲哥哥、亲弟弟
            <div class="question271">
                患病年龄<input type="number" name="question271">
            </div>
            <input type="checkbox" name="question28" id="question28" value="2">母亲，或者亲姐姐、亲妹妹
            <div class="question272">
                患病年龄<input type="number" name="question272">
            </div>
            <input type="checkbox" name="question29" id="question29" value="3">其他亲属
        </div>

        <h4>家族成员中是否有脑血管意外病史(脑溢血，中风，栓塞)？</h4>
        <input type="radio" name="question30" id="question301" value="yes" >是
        <input type="radio" name="question30" id="question302" value="no">否
        <div class="question301">
            <h4>该患病亲属与你的关系是</h4>
            <input type="checkbox" name="question31" id="question31" value="1">父亲，或者亲哥哥、亲弟弟
            <div class="question311">
                患病年龄<input type="number" name="question311">
            </div>
            <input type="checkbox" name="question32" id="question32" value="2">母亲，或者亲姐姐、亲妹妹
            <div class="question312">
                患病年龄<input type="number" name="question312">
            </div>
            <input type="checkbox" name="question33" id="question33" value="3">其他亲属
        </div>

        <h4>家族成员中是否有人猝死？</h4>
        <input type="radio" name="question34" id="question341" value="yes" >是
        <input type="radio" name="question34" id="question342" value="no">否
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

        <h4>家族成员中是否有亲属有其他慢性疾病？</h4>
        <input type="radio" name="question38" id="question381" value="yes" >是
        <input type="radio" name="question38" id="question382" value="no">否
        <div class="question381">
            <h4>是哪一种慢性病？</h4>
            <input type="text" name="question39" >
        </div>
    </div>



</form>