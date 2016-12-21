    <link rel="stylesheet" type="text/css" href="../css/form.css" media="all" />
    <script type="text/javascript" src="../js/jquery.form.js"></script>
    <script type="text/javascript" src="../js/application.js"></script>
    <script type="text/javascript" src="../js/jquery.inputfocus-0.9.min.js"></script>
    <script type="text/javascript" src="../js/jquery.main.js"></script>
<body>

<!--box Start-->
<table border="0" style="margin-top:0px;width:67%; margin-left:auto;" align="center" id="container">
<div>__已有帐号？点击<a href="../pages/signup.php">这里</a>直接登陆！</div>
<tr>
<td>
<form  method="GET" action="" id="online_register">
<div id="first_step">
<table  border="0" align="center">
  <tr>
    <td colspan="3"><h4 class="style1">第一步：请检查您的身体状况</h4></td>
    </tr>
<tr>
<td>
您的医生是否说过，您有心脏方面的问题或者是高血压的问题
</td>
<td>
<select name="question1" id="q1">
	<option value="0">否</option>
	<option value="1">是</option>
	
</select>
</td>
</tr>


<tr>
<td>
您的年龄是否已经超过70岁或者不到14岁
</td>
<td>
<select name="question2" id="q2">
	<option value="0">否</option>
	<option value="1">是</option>
	
</select>
</td>
</tr>

<tr>
<td>
你是否在日常生活中感觉到胸口很疼，或者是在参与运动的时候感觉到胸口会很疼？
</td>
<td>
<select name="question3" id="q3">
	<option value="0">否</option>
	<option value="1">是</option>

</select>
</td>
</tr>

<tr>
<td>
在过去的12个月中,你是否曾经因为头晕而失去平衡，或者失去意识？
</td>
<td>
<select name="question4" id="q4">
	<option value="0">否</option>
	<option value="1">是</option>

</select>
</td>
</tr>

<tr>
<td>
你是否曾今被诊断出来其他的慢性疾病（除了心脏病和高血压）
</td>
<td>
<select name="question5" id="q5">
	<option value="0">否</option>
	<option value="1">是</option>

</select>
</td>
</tr>

<tr>
<td>
你现在是否在因为一些其他慢性疾病而在服用任何药物？
</td>
<td>
<select name="question6" id="q6">
	<option value="0">否</option>
	<option value="1">是</option>

</select>
</td>
</tr>

<tr>
<td>
你现在是否有任何骨头，关节或者软组织的疾病，你担心可能由于多运动会使得情况恶化？注：如果你之前有相关的疾病，但是现在已经康复了，并不影响现在的运动，请选择“否”。
</td>
<td>
<select name="question7" id="q7">
	<option value="0">否</option>
	<option value="1">是</option>

</select>
</td>
</tr>

<tr>
<td>
你的医生有没有叮嘱，你必须在别人的监督下面运动。
</td>
<td>
<select name="question8" id="q8">
	<option value="0">否</option>
	<option value="1">是</option>

</select>
</td>
</tr>


</table>
            <input class="submit" type="submit" name="submit_first" id="submit_first" value="下一步" />
</div>
<!-- #second_step -->
            <div id="second_step">
<table border="0" align="center">
   <tr>
    <td  colspan="4"><h4>第二步：填写注册信息</h4></td>
    </tr>
  <tr>
    <td >用户名：</td>
    <td ><input type="text" name="uname" id="uname"/></td>
  </tr>
<tr>
<td>密码：</td>
<td ><input type="password" name="password" id="password"/></td>
</tr>

<tr>
<td>确认密码：</td>
<td ><input type="password" name="cpassword" id="cpassword"/></td>
</tr>


  <tr>
    <td >手机号：</td>
    <td ><input type="text" name="phone" id="phone"/></td>
  </tr>


</table>
            <input class="back" type="button" value="上一步" />
	        <input class="submit" type="submit" name="submit_second" id="submit_second" value="下一步" />
            </div>

            <!-- #third_step -->
			            <div id="third_step">
<table border="0" align="center">
   <tr>
    <td  colspan="2"><h4>第三步：请确认以下信息</h4></td>
    </tr>
  <tr>
    <td >您每周是否能有三天以上能抽出40～50分钟来跟随教程进行锻炼?</td>
    <td ><select id="require1" name="require1">
                        <option value="Yes">是</option>
                        <option value="No">否</option>
                    </select></td>
  </tr>
  <tr>
    <td>您是否愿意每天更新自己身体的数据来获得最精确的处方信息?</td>
    <td ><select id="require2" name="require2">
                        <option value="Yes">是</option>
                        <option value="No">否</option>
                    </select></td>
    </tr>
  <tr>
    <td >您是否愿意通过短信或者电话跟我们的医师进行沟通？</td>
    <td ><select id="require3" name="require3">
                        <option value="Yes">是</option>
                        <option value="No">否</option>
                    </select></td>
  </tr>

</table>
	        <input class="back" type="button" value="上一步" />
	        <input class="submit" type="submit" name="submit_third" id="submit_third" value="下一步" />
            </div>      
            <!-- #fourth_step -->
            <div id="fourth_step">
              <br>
			  <h4 >Summary</h4>
                <div class="form2">
                    
					
					<table >
                        <tr><td bgcolor="#fff">&nbsp;&nbsp;用户名</td><td bgcolor="#fff" style="padding-left: 5px;"></td></tr>
                        <tr><td  bgcolor="#fff">&nbsp;&nbsp;手机号</td><td bgcolor="#fff" style="padding-left: 5px;"></td></tr>
                        <tr><td  bgcolor="#fff">&nbsp;&nbsp;</td><td bgcolor="#fff" style="padding-left: 5px;"></td></tr>
                        <tr><td  bgcolor="#fff">&nbsp;&nbsp;Coutry & City</td><td bgcolor="#fff" style="padding-left: 5px;"></td></tr>
                        <tr><td  bgcolor="#fff">&nbsp;&nbsp;Enquiry Type</td><td bgcolor="#fff" style="padding-left: 5px;"></td></tr>
                        <tr><td  bgcolor="#fff">&nbsp;&nbsp;Website</td><td bgcolor="#fff" style="padding-left: 5px;"></td></tr>
					<!--	<tr><td  bgcolor="#fff">&nbsp;&nbsp;Selected Type</td><td bgcolor="#fff" style="padding-left: 5px;"></td></tr>-->
                    </table>
                </div>
								
            <input class="back" type="button" value="上一步" />
                       <input class="send submit" type="submit" name="submit_fourth" id="submit_fourth" value="下一步" />
            </div>
        </form>
			<!-- #finish_step -->
            <div id="finish_step">
              <br>
			  <h4>最后一步，确认！</h4>
                <table align="center">
                        <tr><td  align="center">
						<div id="finish_msg"></div>
						</td></tr>
              </table>
            </div>
<!-- 		<div id="progress_bar"> 
          <div id="progress"></div>
          <div id="progress_text">Complete</div>
        </div> -->
        </td>
	</tr>
	</table>
	</div> <!--form box End-->

			</div> <!-- container End -->


</body>
