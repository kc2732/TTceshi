<div class="content-top">

   创建您的运动医生账户

</div>

<div class="body-container">
    <div class="col-sm-7 col-md-7 col-lg-8 content-left">


        <img src="../images/content_left.jpg"style="width: 80%; margin:0 10% 5% 10%;">

        个性化生活调优计划从现在开始

    </div>
    <div class="col-sm-5 col-md-5 col-lg-4 content-right" style="">
        <div class="sign_up_form">

            <form action="../pages/success.php" method="post" class="ws-validate"  id="sign-up-main">
                <fieldset>

                    已有账号？点击<a id="show-sign-in" href="#" style="color:firebrick">这里</a>登录

                </fieldset>
                <div id="wizard">
                    <ul id="status">
                        <li class="active"><strong>1.</strong>创建账户</li>
                        <li><strong>2.</strong>身体情况确认</li>
                        <li><strong>3.</strong>完成</li>
                    </ul>
                    <input type="hidden" name="option" value="insert">
                    <div class="items">
                        <div class="page">
                            <h3>创建一个账户<br/><em>请填写您的注册账户信息，用于登录。</em></h3>
                            <p><label>用户名：</label><input type="text" class="input" id="user" name="username" required="required"/></p>
                            <p><label>密码：</label><input type="password" class="input" id="password" name="password" required="required"/></p>
                            <p><label>确认密码：</label><input type="password" class="input" data-dependent-validation="password" id="pass1" name="password1" required="required"/></p>
                            <p><label>联系方式</label><input type="text" class="input" name="phone" required="required"></p>
                            <div class="btn_nav">
                                <input type="button" class="next right" value="下一步&raquo;" />
                            </div>
                        </div>
                        <div class="page">
                            <h3>身体情况确认<br/><em>请告诉我们您现在的身体情况。</em></h3>
                            <p><label>您的医生是否说过，您有心脏方面的问题或者是高血压的问题</label>
                                <input type="radio" class="input" name="question1" value="1" required="required"/>是
                                <input type="radio" class="input" name="question1" value="0" required="required"/>否
                            </p>
                            <p><label>你的年龄是否在14到70岁。</label>
                                <input type="radio" class="input" name="question2" value="0" required="required"/>是
                                <input type="radio" class="input" name="question2" value="1" required="required"/>否
                            </p>
                            <p><label>你是否在日常生活中感觉到胸口很疼，或者是在参与运动的时候感觉到胸口会很疼？</label>
                                <input type="radio" class="input" name="question3" value="1" required="required"/>是
                                <input type="radio" class="input" name="question3" value="0" required="required"/>否
                            </p>
                            <p><label>你是否曾经因为头晕而失去平衡，或者失去意识在过去的12个月中？</label>
                                <input type="radio" class="input" name="question4" value="1" required="required"/>是
                                <input type="radio" class="input" name="question4" value="0" required="required"/>否
                            </p>
                            <div class="btn_nav">
                                <input type="button" class="prev" style="float:left" value="&laquo;上一步" />
                                <input type="button" class="next right" value="下一步&raquo;" />
                            </div>
                            </div>
                        <div class="page">
                            <p><label>你是否曾今被诊断出来其他的慢性疾病（除了心脏病和高血压）</label>
                                <input type="radio" class="input" name="question5" value="1" required="required"/>是
                                <input type="radio" class="input" name="question5" value="0" required="required"/>否
                            </p>
                            <p><label>你现在是否在因为一些慢性疾病而在服用任何药物？</label>
                                <input type="radio" class="input" name="question6" value="1" required="required"/>是
                                <input type="radio" class="input" name="question6" value="0" required="required"/>否
                            </p>
                            <p><label>你现在是否有任何骨头，关节或者软组织的疾病，你担心可能由于多运动会使得情况恶化？注：如果你之前有相关的疾病，但是现在已经康复了，并不影响现在的运动，请填“否”。</label>
                                <input type="radio" class="input" name="question7" value="1" required="required"/>是
                                <input type="radio" class="input" name="question7" value="0" required="required"/>否
                            </p>
                            <p><label>你的医生有没有讲过，你必须在别人的监督下面运动。</label>
                                <input type="radio" class="input" name="question8" value="1" required="required"/>是
                                <input type="radio" class="input" name="question8" value="0" required="required"/>否
                            </p>
                            <fieldset>

                                <input type="checkbox" name="check" required style="margin-left: 15px;">我已阅读并同意<a href="../termsandconditions.pdf" >运动处方试用协议</a>.

                            </fieldset>
                            <div class="btn_nav">
                                <input type="button" class="prev" style="float:left" value="&laquo;上一步" />
                                <input type="submit" class="next right" id="sub" value="确定" />
                            </div>

                        </div>

                    </div>
                </div>

            </form>


            <form action="../pages/success.php" method="post" class="ws-validate" id="sign-in-main">
                <fieldset>

                    还没有帐号？点击<a id="show-sign-up" href="#" style="color:firebrick">这里</a>登录

                </fieldset>
                <fieldset>
                    <legend>
                        <strong>用户名</strong>
                    </legend>
                    <input type="text" name="username" required>
                </fieldset>

                <fieldset>

                    <legend><strong>密码</strong></legend>
                    <input type="password" id="password" name="password" required>

                </fieldset>

                <input type="hidden" name="option" value="login">
                <fieldset>
                    <input class="button-submit button-register" type="submit" name="submit" value="登录">
                </fieldset>

            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("#wizard").scrollable({
            onSeek: function(event,i){
                $("#status li").removeClass("active").eq(i).addClass("active");
            }
        });
    });
</script>
<script>

    webshim.setOptions('forms', {
        lazyCustomMessages: true
    });

    //start polyfilling
    webshim.polyfill('forms');


</script>



</div>