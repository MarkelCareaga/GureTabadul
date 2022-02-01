<style>
    body,
		html {
			margin-left: 20%;
			margin-top: 10%;
			padding: 0;
			height: 100%;
			background: #BCDDD4 !important;
		}
		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #3AA877;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: #BCDDD4;
			padding: 10px;
			text-align: center;
			margin-left: 20%;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid rgb(3, 3, 3);
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 39%;
			background: #c0392b !important;
			color: white !important;
			height: 33px;
			margin-left: 28%;
			margin-top: 3%;
			font-family: 'Poppins';
			text-decoration: bold;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #c0392b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}
		input.form-control.input_user{
			margin-left: 23%;
			height: 35px;
			padding-left: 3%;
			
		}
		input.form-control.input_pass{
			margin-left: 23%;
			height: 35px;
			padding-left: 3%;
			margin-top: 6%;
			
		}
		input#customControlInline.custom-control-input{
			margin-left: 23%;
		}
		label.custom-control-label{
			margin-left: -1%;
		}
		div.d-flex.justify-content-center.links{
			margin-left: 23%;
		}
		div.custom-control.custom-checkbox{
			margin-top: 5%;
		}
		div.input-group-append{
			width: 4%;
		}
		div.input-group-append{
			width: 4%;
			margin-left: 10%;
			
		}
		button.btn.login_btn{
			border-radius: 20%;
		}

</style>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="../../Nav/img/LogoTabadul64PX.jpg" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            
                        </div>
                        <input type="text" name="" class="form-control input_user" value="" placeholder="username">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            
                        </div>
                        <input type="password" name="" class="form-control input_pass" value="" placeholder="password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                        </div>
                    </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                <button type="button" name="button" class="btn login_btn">Login</button>
            </div>
                </form>
            </div>
    
            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Don't have an account? <a href="#" class="ml-2">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>

