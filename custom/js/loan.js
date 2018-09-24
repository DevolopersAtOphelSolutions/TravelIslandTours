$(document).ready(function() {

		// submit Customer form function
	$("#submitLoanForm").unbind('submit').bind('submit', function() {
		// remove the error text
		$(".text-danger").remove();
		// remove the form error
		$('.form-group').removeClass('has-error').removeClass('has-success');


var loanType = $("#loanType").val();
var loanPeriod = $("#loanPeriod").val();
var CustomerId = $("#CustomerId").val();
var loanAmount = $("#loanAmount").val();

if(loanType == "") {
    $("#loanType").after('<p class="text-danger">Customer Name field is required</p>');
    $('#loanType').closest('.form-group').addClass('has-error');
  } else {
    // remov error text field
    $("#loanType").find('.text-danger').remove();
    // success out for form
    $("#loanType").closest('.form-group').addClass('has-success');
}

if(loanPeriod == "") {
  $("#loanPeriod").after('<p class="text-danger">Customer Contact field is required</p>');

    $('#loanPeriod').closest('.form-group').addClass('has-error');
  } else {
    // remov error text field
    $("#loanPeriod").find('.text-danger').remove();
    // success out for form
    $("#loanPeriod").closest('.form-group').addClass('has-success');
  }

if(CustomerId == "") {
    $("#CustomerId").after('<p class="text-danger">Customer Name field is required</p>');
    $('#CustomerId').closest('.form-group').addClass('has-error');
  } else {
    // remov error text field
    $("#CustomerId").find('.text-danger').remove();
    // success out for form
    $("#CustomerId").closest('.form-group').addClass('has-success');
  }

if(loanAmount == "") {
    $("#loanAmount").after('<p class="text-danger">Customer Name field is required</p>');
    $('#loanAmount').closest('.form-group').addClass('has-error');
  } else {
    // remov error text field
    $("#loanAmount").find('.text-danger').remove();
    // success out for form
    $("#loanAmount").closest('.form-group').addClass('has-success');
  }

	if(CustomerId){

						var form = $(this);
						// button loading
						$("#createLoanBtn").button('loading');

						$.ajax({
							url : form.attr('action'),
							type: form.attr('method'),
							data: form.serialize(),
							dataType: 'json',
							success:function(response) {
								// button loading
								$("#createLoanBtn").button('reset');

								if(response.success == true) {
									// reload the manage member table
								//	manageCustomerTable.ajax.reload(null, false);

			  	  			// reset the form text
									$("#submitLoanForm")[0].reset();
									// remove the error text
									$(".text-danger").remove();
									// remove the form error
									$('.form-group').removeClass('has-error').removeClass('has-success');

			  	  			$('#create-loan-messages').html('<div class="alert alert-success">'+
			            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
			            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
			          '</div>');

			  	  			$(".alert-success").delay(500).show(10, function() {
										$(this).delay(3000).hide(10, function() {
											$(this).remove();
										});
									}); // /.alert
								}  // if

							} // /success
						}); // /ajax
					} // if

			return false;

});//submit form
});
