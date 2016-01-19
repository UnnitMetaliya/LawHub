$().ready(function(){

	$(#registerform).validate({

		rules:{

			username: "required",
			email: "required",
			password:{
				required: true,
				minlength: 5
			},

			confirm_password:{
				required: true;
				minlength: 5,
				equalTo: "#password"
			},

			phone_number:{
				required:true,
				minlength:10
			},

			terms:"required"

		},

		messages:{

			username:"Please eneter username",
			password:{
				required:"Please enter a password",
				minlength:"5 characters please"
			},
			confirm_password{
				required:"Please enter",
				minlength:"5 characters",
				equalTo: "Should Match"
			},
			phone_number{
				required:"Please provide phone_number",
				minlength:"10 digits"
			},
			terms:"Please accept policy"
		}
	});
});