$(function(){
    //original field values
    var field_values = {
            //id        :  value
	'uname' : '请输入您的用户名',
        'phone'  : '请输入您的常用手机号',
	'password' : '请输入密码',
	'cpassword' : '请确认密码'
    };


    //inputfocus
    $('input#uname').inputfocus({ value: field_values['uname'] });
    $('input#phone').inputfocus({ value: field_values['phone'] });
    $('input#password').inputfocus({ value: field_values['password'] });
    $('input#cpassword').inputfocus({ value: field_values['cpassword'] }); 




    //reset progress bar
    $('#progress').css('width','0');
    $('#progress_text').html('0% Complete');

    //first_step
    $('form').submit(function(){ return false; });
    $('#submit_first').click(function(){
        //remove classes
        $('#first_step input').removeClass('error').removeClass('valid');

        //ckeck if inputs aren't empty
        var fields = $('#first_step input[type=text], #first_step input[type=password]');
        var error = 0;
        fields.each(function(){
            var value = $(this).val();
            if( value.length<4 || value==field_values[$(this).attr('id')] ) {
                $(this).addClass('error');
                $(this).effect("shake", { times:3 }, 50);
                
                error++;
            } else {
                $(this).addClass('valid');
            }
        });        
        if(!error) {
                $('#first_step').slideUp();
                $('#second_step').slideDown();  
	}

    });


    $('#submit_second').click(function(){
        //remove classes
        $('#second_step input').removeClass('error').removeClass('valid');

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
        var fields = $('#second_step input[type=text], #second_step input[type=password]');
        var error = 0;
        fields.each(function(){
            var value = $(this).val();
            if( value.length<1 || value==field_values[$(this).attr('id')] || ( $(this).attr('id')=='email' && !emailPattern.test(value) ) ) {
                $(this).addClass('error');
                $(this).effect("shake", { times:3 }, 50);
                
                error++;
            } else {
                $(this).addClass('valid');
            }
        });

        if(!error) {
            if( $('#password').val() != $('#cpassword').val() ) {
                    $('#second_step input[type=password]').each(function(){
                        $(this).removeClass('valid').addClass('error');
                        $(this).effect("shake", { times:3 }, 50);
                    });
                    
                    return false;
            } else { 
                //update progress bar
                $('#progress_text').html('66% Complete');
                $('#progress').css('width','226px');
                
                //slide steps
                $('#second_step').slideUp();
                $('#third_step').slideDown();  
	}   
        } else return false;

    });




    $('#submit_third').click(function(){
        //send information to server
        $('.back').hide();
		$('#progress_bar').css('display', 'none');
		$('#third_step').slideUp();
        $('#finish_step').slideDown();
		$.post("../js/send_enq.php?"+$("#online_register").serialize(), {
		
			}, 
			function(response){
			
			if(response==1)
			{
				$("#finish_msg").after('<b>注册完成！！！请转入数据收集界面开始收集数据</b>');
			}else if (response == 2){
				$("#finish_msg").after('很抱歉，您的用户名已经被注册了，请选择另外的用户名！');
			}else if(response == 3){
				$("#finish_msg").after('很抱歉，由于您现在的身体状况，我们的自动处方生成系统目前并不能够给您提供100%安全的处方，我们的医师会与您单独联系来确保您运动的安全和有效。');
			}else{
				$("#finish_msg").after('<font color=#ff6600>oops! Something wrong went or you not filled all details</font>');
			}			
		});
		
    });
    
    
    //back button
   $('.back').click(function(){
        var container = $(this).parent('div'),
            previous  = container.prev();

        switch(previous.attr('id')) {
            case 'first_step' : $('#progress_text').html('0% Complete');
                                 $('#progress').css('width','0px');
                                 break;
            case 'second_step': $('#progress_text').html('33% Complete');
                                 $('#progress').css('width','113px');
                                 break;
            
            case 'third_step' : $('#progress_text').html('66% Complete');
                                 $('#progress').css('width','226px');
                                 break;
            
            default: break;
        }
            
        $(container).slideUp();
        $(previous).slideDown();
    });

});
