$(document).ready(function () {

  var click = 0; // global
  $('#register_form').submit(function (e) {
  	var error = false;
  	var formData = $(this).serializeArray();
  	var formDataAjax = {};
  	$.each(formData, function (index, data) {
  		if (!data.value) {
  			error = true;
  			return false;
  		}
  		if (data && formDataAjax[data.name] !== 'repswd') {
  			formDataAjax[data.name] = data.value;
  		}
  	});

  	if (error) {
  		return;
  	}

  	if (formDataAjax.pswd !== formDataAjax.repswd) {
  		$('.message').text('Password does not match.').css({'color':'red'});
  		return false;
  	}

  	if (!error && !click) {
		click = 1;
		// $('#submitForm').prop('disabled', true);
  		$.post(url + 'user/register', formDataAjax, function(callback, status) {
  			if (callback.data === 'success') {
  				click = 0;
  				// $('#submitForm').prop('disabled', false);
  			} else {
  				$('.message').text('Send failed kindly refresh the page.').css({'color':'red'});
  			}
  		}, 'json');
  	}

  	// e.preventDefault();
  	return false;
  });

});