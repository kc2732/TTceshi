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

</form>