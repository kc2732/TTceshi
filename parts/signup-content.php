<div class="content-top">

   创建您的运动医生账户

</div>

<div class="body-container">
    <div class="col-sm-7 col-md-7 col-lg-8 content-left">


        <img src="../images/content_left.jpg"style="width: 80%; margin:0 10% 5% 10%;">

        个性化生活调优计划从现在开始

    </div>
    <div class="col-sm-5 col-md-5 col-lg-4 content-right" style="">
        <div style="padding: 25px;">
            <form action="../pages/success.php" method="post" class="ws-validate">
                <fieldset>
                    <legend style="">
                        <strong>用户名</strong>
                    </legend>
                    <input type="text" name="username" required>
                </fieldset>

                <fieldset>

                    <legend><strong>密码</strong></legend>
                    <input type="password" id="password1" name="password" required="required">

                </fieldset>

                <fieldset>

                    <legend><strong>重新输入</strong></legend>
                    <input type="password" id="password2" name="password1" required="required">

                </fieldset>

                <fieldset>

                    <legend><strong>电话号码</strong></legend>
                    <input type="text" name="phone" required>

                </fieldset>
                <fieldset>
                    <input type="checkbox" name="check" required style="margin-left: 15px;">我已阅读并同意<a href="../termsandconditions.pdf">运动处方试用协议</a>.
                </fieldset>

                <input type="hidden" name="option" value="insert">
                <fieldset>
                    <input class="button-submit button-register" type="submit" name="submit" value="注册">
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script>

    webshim.setOptions('forms', {
        lazyCustomMessages: true
    });

    //start polyfilling
    webshim.polyfill('forms');


</script>



</div>