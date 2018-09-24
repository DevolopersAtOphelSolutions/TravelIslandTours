var manageCustomerTable;
$(document).ready(function() {
	// top bar active
	$('#navBrand').addClass('active');

	// manage brand table
	manageCustomerTable = $("#manageCustomerTable").DataTable({
		'ajax': 'php/fetchCustomer.php',
		'order': []
	});
	$('div.dataTables_filter input').focus();

		// submit Customer form function
	$("#submitCustomerForm").unbind('submit').bind('submit', function() {
		// remove the error text
		$(".text-danger").remove();
		// remove the form error
		$('.form-group').removeClass('has-error').removeClass('has-success');

		var CustomerName = $("#CustomerName").val();
		var CustomerContact = $("#CustomerContact").val();
    var CustomerAddress = $("#CustomerAddress").val();
    var CustomerNic = $("#CustomerNic").val();
    var CustomerBirthday = $("#CustomerBirthday").val();


		if(CustomerName == "") {
				$("#CustomerName").after('<p class="text-danger">Customer Name field is required</p>');
				$('#CustomerName').closest('.form-group').addClass('has-error');
			} else {
				// remov error text field
				$("#CustomerName").find('.text-danger').remove();
				// success out for form
				$("#CustomerName").closest('.form-group').addClass('has-success');
			}

		if(CustomerContact == "") {
					$("#CustomerContact").after('<p class="text-danger">Customer Contact field is required</p>');

					$('#CustomerContact').closest('.form-group').addClass('has-error');
				} else {
					// remov error text field
					$("#CustomerContact").find('.text-danger').remove();
					// success out for form
					$("#CustomerContact").closest('.form-group').addClass('has-success');
				}

    if(CustomerAddress == "") {
	      $("#CustomerAddress").after('<p class="text-danger">Customer Name field is required</p>');
	      $('#CustomerAddress').closest('.form-group').addClass('has-error');
	    } else {
	      // remov error text field
	      $("#CustomerAddress").find('.text-danger').remove();
	      // success out for form
	      $("#CustomerAddress").closest('.form-group').addClass('has-success');
	    }

    if(CustomerNic == "") {
	      $("#CustomerNic").after('<p class="text-danger">Customer Name field is required</p>');
	      $('#CustomerNic').closest('.form-group').addClass('has-error');
	    } else {
	      // remov error text field
	      $("#CustomerNic").find('.text-danger').remove();
	      // success out for form
	      $("#CustomerNic").closest('.form-group').addClass('has-success');
	    }

    if(CustomerBirthday == "") {
	      $("#CustomerBirthday").after('<p class="text-danger">Customer Name field is required</p>');
	      $('#CustomerBirthday').closest('.form-group').addClass('has-error');
	    } else {
	      // remov error text field
	      $("#CustomerBirthday").find('.text-danger').remove();
	      // success out for form
	      $("#CustomerBirthday").closest('.form-group').addClass('has-success');
	    }



				if(CustomerName ) {
					var form = $(this);
					// button loading
					$("#createCustomerBtn").button('loading');

					$.ajax({
						url : form.attr('action'),
						type: form.attr('method'),
						data: form.serialize(),
						dataType: 'json',
						success:function(response) {
							// button loading
							$("#createCustomerBtn").button('reset');

							if(response.success == true) {
								// reload the manage member table
								manageCustomerTable.ajax.reload(null, false);

		  	  			// reset the form text
								$("#submitCustomerForm")[0].reset();
								// remove the error text
								$(".text-danger").remove();
								// remove the form error
								$('.form-group').removeClass('has-error').removeClass('has-success');

		  	  			$('#add-customer-messages').html('<div class="alert alert-success">'+
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
	}); // /submit Customer form function


});



function addImg(he = null) {
		$('#cusImage').val('CLC000'+he);

		if(he) {

		}

} // /edit brands function

function saveImg(he = null) {
	//	$('#cusImage').val('CLC000'+he);

	//	if(he) {

	//	}

}
