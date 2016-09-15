<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Info Record</title>
    <style>
        table {
position: absolute; top:10px;
            border-collapse: collapse;
        }
        thead {
            font-size: 20px;
        }
        thead th {
            text-align: center;
        }
        th, td {
            padding: 2px;
            text-align: left;
        }
        #info_table {
            position: absolute; left:100px;
            width: 90%;
border: solid blue 1px;
        }
        .title {
            background-color: cornflowerblue;
        }
        #name_table tr:nth-child(odd) {
            background-color: mediumpurple;
        }
        #info_table tr:nth-child(odd){
            background-color: lightblue;
        }
    </style>
</head>


<?php
header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "chenkun";
$password = "chenkun";
$dbname = "tangyisheng";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully! <br>";

// Change the charset
$conn->set_charset("utf8");

// Run query
$sql = "SELECT name, userId FROM DataCollection WHERE name IS NOT NULL ORDER BY name DESC";
$result = mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);

// Name list
if ($num > 0) {
    echo "<table id='name_table' border='1'> <tr><th>病人姓名</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td><a href='http://www.unexpectedname.com/TTceshi/pages/info-record.php?".
            "id=".$row['userId']."'>{$row['name']}</a></td></tr>";
    }
    echo "</table>";
}

// <!--get info from id-->
$user_id = $_GET["id"];
if ($user_id != null) {
    $sql_id = "SELECT * FROM DataCollection WHERE userId =" . $user_id;
    $result_id = mysqli_query($conn, $sql_id);
    $row_id = mysqli_fetch_assoc($result_id);
}

?>

<body>
<div style="overflow: scroll">
    <table id="info_table">
        <thead><tr><th class="title" colspan=8>个人基本信息</th></tr></thead>
        <tr><th>姓名</th><td><?php echo $row_id['name'] ?></td> <th>性别</th><td><?php echo $row_id['gender'] ?></td>
            <th>年龄</th><td><?php echo $row_id['age'] ?></td> <th>联系方式</th><td><?php echo $row_id['phone'] ?></td></tr>

        <tr><th>身高</th><td><?php echo $row_id['height'] ?></td> <th>体重</th><td><?php echo $row_id['weight'] ?></td>
            <th>腰围</th><td><?php echo $row_id['waist'] ?></td> <td colspan="2"></td></tr>

        <thead><tr><th class="title" colspan=8>个人历史数据</th></tr></thead>
        <tr><th>餐前30分钟的血糖水平(mmol/L)</th><td><?php echo $row_id['question72'] ?></td>
            <th>餐后两小时的血糖水平(mmol/L)</th><td><?php echo $row_id['question73'] ?></td>
            <th>空腹血糖的血糖水平(mmol/L)</th><td><?php echo $row_id['question74'] ?></td> <td colspan="2"></td></tr>

        <tr><th>血糖测量地点</th><td><?php echo $row_id['question75'] ?></td>
            <th>血糖测量人</th><td><?php echo $row_id['question76'] ?></td>
            <th>糖化血红蛋白[A1C]（%）</th><td><?php echo $row_id['question77'] ?></td>
            <th>测试人的名字或者<br>测试医院的名称</th><td><?php echo $row_id['question78'] ?></td></tr>

        <tr><th>运动前血糖值(mmol/L)</th><td><?php echo $row_id['yundongqian'] ?></td>
            <th>运动后血糖值(mmol/L)</th><td><?php echo $row_id['yundonghou'] ?></td>
            <th>临睡前血糖值(mmol/L)</th><td><?php echo $row_id['linshuiqian'] ?></td>
            <th>凌晨2点血糖值(mmol/L)</th><td><?php echo $row_id['lingchen2dian'] ?></td></tr>

        <tr><th>是否做过糖耐量实验</th><td><?php echo $row_id['TNL'] ?></td>
            <th>糖耐量实验餐前血糖值</th><td><?php echo $row_id['TNL1'] ?></td>
            <th>实验一小时后血糖值(mmol/L)</th><td><?php echo $row_id['TNL2'] ?></td>
            <th>实验两小时后血糖值(mmol/L)</th><td><?php echo $row_id['TNL3'] ?></td></tr>

        <tr><th>是否正在使用胰岛素</th><td><?php echo $row_id['YDS'] ?></td>
            <th>名称</th><td><?php echo $row_id['YDS1'] ?></td>
            <th>品牌</th><td><?php echo $row_id['YDS2'] ?></td>
            <th>每日剂量（IU）</th><td><?php echo $row_id['YDS3'] ?></td></tr>

        <tr><th colspan=6>每天什么时候使用（比如饭前1小时，饭后两小时，运动前一小时，运动后即刻）</th>
            <td colspan=2><?php echo $row_id['YDS4'] ?></td></tr>

        <tr><th>是否测过血压水平</th><td><?php echo $row_id['question67'] ?></td>
            <th>测试人的姓名或者<br>测试医院的名称</th><td><?php echo $row_id['question68'] ?></td>
            <th>收缩压（高压） mmhg</th><td><?php echo $row_id['question69'] ?></td>
            <th>舒张压（低压） mmhg</th><td><?php echo $row_id['question70'] ?></td></tr>

        <tr><th>是否测过胆固醇水平</th><td><?php echo $row_id['question61'] ?></td>
            <th>测试人的姓名或者<br>测试医院的名称</th><td><?php echo $row_id['question62'] ?></td>
            <th>总胆固醇(TC)水平具体数值（mmol/L)</th><td><?php echo $row_id['question63'] ?></td>
            <th>甘油三酯(TG)具体数值（mmol/L）</th><td><?php echo $row_id['question64'] ?></td></tr>

        <tr><th>高密度脂蛋白(HDL)具体数值(mmol/L)</th><td><?php echo $row_id['question65'] ?></td>
            <th>低密度脂蛋白(LDL)具体数值(mmol/L)</th><td><?php echo $row_id['question66'] ?> </td><td colspan="4"></td></tr>

        <tr><th>是否正在吃任何处方药<br>或者非处方药</th><td><?php echo $row_id['question79'] ?></td>
            <th>药品名称</th><td><?php echo $row_id['question80'] ?></td>
            <th>药品剂量</th><td><?php echo $row_id['question81'] ?></td>
            <th>使用药品的时间</th><td><?php echo $row_id['question82'] ?></td></tr>

        <tr><th>为什么要服用该药品</th><td colspan=7><?php echo $row_id['question83'] ?></td></tr>

        <tr><th>您近3个月是否住过医院</th><td><?php echo $row_id['question84'] ?></td>
            <th>住院时间</th><td><?php echo $row_id['question85'] ?></td>
            <th>住院地点</th><td colspan="3"><?php echo $row_id['question86'] ?></td></tr>

        <tr><th>住院原因</th><td colspan=7><?php echo $row_id['question87'] ?></td></tr>

        <tr><th>是否曾经做过任何心血管测试</th><td><?php echo $row_id['question8'] ?></td>
            <th>心血管测试后的诊断结果</th><td colspan="5"><?php echo $row_id['question9'] ?></td></tr>

        <tr><th colspan="2">其他已经确诊的疾病和担心的地方</th><td colspan="6"><?php echo $row_id['question88'] ?></td></tr>

        <thead><tr><th class="title" colspan=8>个人史</th></tr></thead>
        <tr><th>曾经是否有过高血压</th><td><?php echo $row_id['question40'] ?></td>
            <th>曾经是否有过高胆固醇</th><td><?php echo $row_id['question41'] ?></td>
            <th>曾经是否有过动脉疾病</th><td><?php echo $row_id['question43'] ?></td>
            <th>曾经是否有过甲状腺疾病</th><td><?php echo $row_id['question44'] ?></td></tr>

        <tr><th>曾经是否有过肺部疾病</th><td><?php echo $row_id['question45'] ?></td>
            <th>曾经是否有过哮喘</th><td><?php echo $row_id['question46'] ?></td>
            <th>曾经是否有过癌症</th><td><?php echo $row_id['question47'] ?></td>
            <th>曾经是否有过肾脏疾病</th><td><?php echo $row_id['question48'] ?></td></tr>

        <tr><th>曾经是否有过肝病</th><td><?php echo $row_id['question49'] ?></td>
            <th>曾经是否有过骨质疏松和关节炎</th><td><?php echo $row_id['GZSS'] ?></td>
            <th>周围神经病变</th><td><?php echo $row_id['ZWSJBB'] ?></td>
            <th>自主神经病变</th><td><?php echo $row_id['ZZSJBB'] ?></td></tr>

        <tr><th>视网膜病变</th><td><?php echo $row_id['SWMBB'] ?></td>
            <th colspan="3">是否有过除以上列出疾病之外的疾病，如果有，请列出</th>
            <td colspan="3"><?php echo $row_id['question050'] ?></td></tr>

        <thead><tr><th class="title" colspan=8>症状</th></tr></thead>
        <tr><th>曾经是否有过胸部疼痛</th><td><?php echo $row_id['question50'] ?></td>
            <th>曾经是否有过心悸</th><td><?php echo $row_id['question52'] ?></td>
            <th>曾经是否有过心律不齐</th><td><?php echo $row_id['question53'] ?></td>
            <th>曾经是否有过心脏杂音</th><td><?php echo $row_id['question54'] ?></td></tr>

        <tr><th>曾经是否有过间歇性腿部疼痛</th><td><?php echo $row_id['question55'] ?></td>
            <th>曾经是否有过眩晕或者昏倒</th><td><?php echo $row_id['question56'] ?></td>
            <th>曾经是否在日常生活中易感到疲倦</th><td><?php echo $row_id['question57'] ?></td>
            <th>曾经是否有过睡眠时打鼾的情况</th><td><?php echo $row_id['question58'] ?></td></tr>

        <tr><th>曾经是否有过背部疼痛问题</th><td><?php echo $row_id['question59'] ?></td>
            <th>曾经是否有过骨科问题</th><td><?php echo $row_id['question60'] ?></td> <td colspan="4"></td></tr>

        <tr><th colspan="4">曾经是否有过除以上列出症状之外的不适症状，如果有是哪种不适症状？</th>
            <td colspan="4"><?php echo $row_id['question601'] ?></td></tr>

        <thead><tr><th class="title" colspan=8>家族史</th></tr></thead>
        <tr><th colspan="3">家族成员是否有亲属有心脏病突发史</th><td><?php echo $row_id['question10'] ?></td>
            <th colspan="2">与患病亲属关系</th> <th>其他亲属</th><td><?php echo $row_id['question13'] ?></td></tr>
        <tr><th>父亲，或者亲哥哥、亲弟弟</th><td><?php echo $row_id['question11'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question0111'] ?></td>
            <th>母亲，或者亲姐姐、亲妹妹</th><td><?php echo $row_id['question12'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question0112'] ?></td></tr>

        <tr><th colspan="3">家族成员是否有亲属有先天性心脏病<td><?php echo $row_id['question14'] ?></td>
            <th colspan="2">与患病亲属关系</th>
            <th>其他亲属</th><td><?php echo $row_id['question17'] ?></td></tr>
        <tr><th>父亲，或者亲哥哥、亲弟弟</th><td><?php echo $row_id['question15'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question151'] ?></td>
            <th>母亲，或者亲姐姐、亲妹妹</th><td><?php echo $row_id['question16'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question152'] ?></td></tr>

        <tr><th colspan="3">家族成员中是否有亲属做过心脏手术<td><?php echo $row_id['question18'] ?></td>
            <th colspan="2">与患病亲属关系</th> <th>其他亲属</th><td><?php echo $row_id['question21'] ?></td></tr>
        <tr><th>父亲，或者亲哥哥、亲弟弟</th><td><?php echo $row_id['question19'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question191'] ?></td>
            <th>母亲，或者亲姐姐、亲妹妹</th><td><?php echo $row_id['question20'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question192'] ?></td></tr>

        <tr><th colspan="3">家族成员中是否有亲属冠状动脉支架<td><?php echo $row_id['question22'] ?></td>
            <th colspan="2">与患病亲属关系</th> <th>其他亲属</th><td><?php echo $row_id['question25'] ?></td></tr>
        <tr><th>父亲，或者亲哥哥、亲弟弟</th><td><?php echo $row_id['question23'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question231'] ?></td>
            <th>母亲，或者亲姐姐、亲妹妹</th><td><?php echo $row_id['question24'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question232'] ?></td></tr>

        <tr><th colspan="3">家族成员中是否有做过心脏导管手术<td><?php echo $row_id['question26'] ?></td>
            <th colspan="2">与患病亲属关系</th> <th>其他亲属</th><td><?php echo $row_id['question29'] ?></td></tr>
        <tr><th>父亲，或者亲哥哥、亲弟弟</th><td><?php echo $row_id['question27'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question271'] ?></td>
            <th>母亲，或者亲姐姐、亲妹妹</th><td><?php echo $row_id['question28'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question272'] ?></td></tr>

        <tr><th colspan="3">家族成员中是否有脑血管意外病史(脑溢血，中风，栓塞)<td><?php echo $row_id['question30'] ?></td>
            <th colspan="2">与患病亲属关系</th> <th>其他亲属</th><td><?php echo $row_id['question33'] ?></td></tr>
        <tr><th>父亲，或者亲哥哥、亲弟弟</th><td><?php echo $row_id['question31'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question311'] ?></td>
            <th>母亲，或者亲姐姐、亲妹妹</th><td><?php echo $row_id['question32'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question312'] ?></td></tr>

        <tr><th colspan="3">家族成员中是否有人猝死<td><?php echo $row_id['question34'] ?></td>
            <th colspan="2">与患病亲属关系</th> <th>其他亲属</th><td><?php echo $row_id['question37'] ?></td></tr>
        <tr><th>父亲，或者亲哥哥、亲弟弟</th><td><?php echo $row_id['question35'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question351'] ?></td>
            <th>母亲，或者亲姐姐、亲妹妹</th><td><?php echo $row_id['question36'] ?></td>
            <th>患病年龄</th><td><?php echo $row_id['question352'] ?></td></tr>

        <tr><th colspan="3">家族成员中是否有亲属有其他慢性疾病<td><?php echo $row_id['question38'] ?></td>
            <th>是哪一种慢性病</th> <td colspan="3"><?php echo $row_id['question39'] ?></td></tr>

        <thead><tr><th class="title" colspan=8>生活模式和兴趣</th></tr></thead>
        <tr><th>运动吃饭的时间差</th><td colspan="3"><?php echo $row_id['shijiancha'] ?></td>
            <th>饮食模式</th><td colspan="3"><?php if ($row['roushiweizhu']==1) echo "肉食为主模式"; else echo "主食为主模式"; ?></td></tr>

        <tr><th>饮食结构</th><td colspan="3"></td> <th>高碳水化合物</th><td colspan="3"><?php echo $row_id['gaotanshuihuahewu'] ?></td></tr>
        <tr><th>中碳水化合物</th><td colspan="3"><?php echo $row_id['gaotanshuihuahewu'] ?></td>
            <th>低碳水化合物</th><td colspan="3"><?php echo $row_id['gaotanshuihuahewu'] ?></td></tr>

        <tr><th colspan="3">是否曾经在做运动或者在日常活动的时候，<br>有不舒服和呼吸短促的症状</th><td><?php echo $row_id['question90'] ?></td>
            <th colspan="3">这种不舒服会不会因为运动的停止而消失</th><td><?php $row['question91'] ?></td></tr>

        <tr><th>是否有过吸烟史</th><td><?php echo $row_id['question92'] ?></td>
            <th>是否戒烟了</th><td><?php echo $row_id['question93'] ?></td>
            <th>是什么时候戒烟的</th><td><?php if ($row['question94']==1) echo "六个月之内刚刚戒烟";
                                            else if($row['question94']==2) echo "在六个月前戒烟"; else echo "--"; ?></td>
            <th>平时吸烟的种类</th><td><?php if ($row_id['question95']==1) echo "香烟"; else if ($row_id['question95']==2) echo"雪茄";
                                            else if ($row_id['question95']==3) echo"烟斗"; else echo "--"; ?></tr>

        <tr><th colspan="3">是否经常会暴露在二手烟环境中</th><td colspan="5"><?php echo $row_id['ershouyan'] ?></td></tr>

        <tr><th>平时喝酒吗</th><td><?php echo $row_id['question96'] ?></td>
            <th>一周大约喝多少瓶啤酒</th><td><?php echo $row_id['question97'] ?></td>
            <th>一周大约喝多少斤白酒</th><td><?php echo $row_id['question98'] ?></td>
            <th>一周大约喝多少杯红酒</th><td><?php echo $row_id['question99'] ?></td></tr>

        <tr><th>平时喝含咖啡因的饮品</th><td><?php echo $row_id['question100'] ?></td>
            <th>一周大约喝多少杯咖啡</th><td><?php echo $row_id['question101'] ?></td>
            <th>一周大约喝多少杯茶</th><td><?php echo $row_id['question102'] ?></td>
            <th>一周大约喝多少瓶含咖啡因的软饮<br>（可乐、运动饮料等）</th><td><?php echo $row_id['question103'] ?></td></tr>

        <tr><th>最近有在吃减肥餐吗</th><td><?php echo $row_id['question104'] ?></td>
            <th>已经吃了几个月的减肥餐</th><td><?php echo $row_id['question105'] ?></td>
            <th colspan="2">这个减肥餐计划是否你的医生给你开的</th><td><?php echo $row_id['question106'] ?></td> <td colspan="2"></td></tr>
        <tr><th>曾经有试过减肥餐吗</th><td><?php echo $row_id['question107'] ?></td>
            <th colspan="3">减肥餐持续了多久，请描述一下减肥餐的类型</th><td colspan="3"><?php echo $row_id['question1071'] ?></td></tr>

        <tr><th colspan="2">大部分情况下，运动水平是</th><td colspan="6">
                <?php switch ($row_id['question108']) {case 1: echo "主要是坐着"; break;  case 2: echo "轻微的运动（散步）"; break;
                    case 3: echo "中度运动（快速上下楼梯，快走）";break;  default: echo "重体力运动（体力劳动者，每周去三次以上健身房）";} ?></td></tr>

        <tr><th colspan="6">最近是否有在日常生活中经常地做一些非常剧烈的运动（频繁的搬重物，快跑，健身等）</th>
            <td colspan="2"><?php echo $row_id['question109'] ?></td></tr>

        <tr><th>是怎样的剧烈运动</th><td><?php echo $row_id['question110'] ?></td>
            <th>运动频率为一周几次</th><td><?php echo $row_id['question111'] ?></td>
            <th>每次运动多长时间</th><td><?php switch ($row_id['question112'])
                {case 1: echo "小于15分钟"; break;  case 2: echo "15至30分钟"; break;
                    case 3: echo "31至60分钟";break;  default: echo "60分钟以上";} ?></td>
            <th>这项运动坚持了多久</th><td><?php switch ($row_id['question113']) 
                {case 1: echo "小于3个月"; break;
                    case 2: echo "3至12个月"; break;  default: echo "大于12个月";} ?></td></tr>

        <tr><th colspan="6">最近是否有经常地做一些娱乐，休闲运动（太极拳，钓鱼，广场舞，高尔夫等）</th>
            <td colspan="2"><?php echo $row_id['question114'] ?></td></tr>
        <tr><th>是怎样的休闲运动</th><td><?php echo $row_id['question115'] ?></td> 
            <th>运动频率为一周几次</th><td><?php echo $row_id['question116'] ?></td>
            <th>每次运动多长时间</th><td><?php switch ($row_id['question117']) 
                {case 1: echo "小于15分钟"; break;
                    case 2: echo "15至30分钟"; break;  case 3: echo "31至60分钟";break;  default: echo "60分钟以上";} ?></td>
            <th>这项运动坚持了多久</th><td><?php switch ($row_id['question118']) 
                {case 1: echo "小于3个月"; break;
                    case 2: echo "3至12个月"; break;  default: echo "大于12个月";} ?></td></tr>

        <tr><th>康复目标是</th><td colspan="7"><?php echo $row_id['question119'] ?></td></tr>
    </table>
</div>

<?php mysqli_close($conn); ?>

</body>
</html>