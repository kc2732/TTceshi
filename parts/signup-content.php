
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

            <form action="../pages/success.php" method="post">
                <fieldset>

                    还没有帐号？点击<a id="show-sign-up" href="../pages/zhuce.php" style="color:firebrick">这里</a>注册

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



</div>