
function setupAjaxForm(form_id, form_validations){
	var form = '#' + form_id;
	var form_message = form + '-message';
	
	// en/disable submit button
	var disableSubmit = function(val){
		$(form + ' input[type=submit]').attr('disabled', val);
	};
	
	// setup loading message
	$(form).ajaxSend(function(){
		$(form_message).removeClass().addClass('loading').html('Loading...').fadeIn();
	});
	
	// setup jQuery Plugin 'ajaxForm' 	
	var options = {
		dataType:  'json',
		beforeSubmit: function(){
			// run form validations if they exist
			if(typeof form_validations == "function" && !form_validations()) {
				// this will prevent the form from being subitted
				return false;
			}
			disableSubmit(true);
		},
		success: function(json){
			$(form_message).hide();
			$(form_message).removeClass().addClass(json.type).html(json.message).fadeIn('slow');
			disableSubmit(false);
			if(json.type == 'success')
				$(form).clearForm();
		}
	};
	$(form).ajaxForm(options);
}

$(document).ready(function() {  
    new setupAjaxForm('contact-us');
});
