<style>
	@font-face {
		font-family: Poppins-Regular;
		src: url('../fonts/poppins/Poppins-Regular.ttf');
	}

	@font-face {
		font-family: Poppins-Medium;
		src: url('../fonts/poppins/Poppins-Medium.ttf');
	}

	@font-face {
		font-family: Montserrat-Medium;
		src: url('../fonts/montserrat/Montserrat-Medium.ttf');
	}

	@font-face {
		font-family: Montserrat-SemiBold;
		src: url('../fonts/montserrat/Montserrat-SemiBold.ttf');
	}

	a {
		font-family: Poppins-Regular;
		font-size: 14px;
		line-height: 1.7;
		color: #666666;
		margin: 0px;
		transition: all 0.4s;
		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		-moz-transition: all 0.4s;
	}

	a:focus {
		outline: none !important;
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		margin: 0px;
	}

	p {
		font-family: Poppins-Regular;
		font-size: 14px;
		line-height: 1.7;
		color: #666666;
		margin: 0px;
	}

	ul,
	li {
		margin: 0px;
		list-style-type: none;
	}

	input {
		outline: none;
		border: none;
	}

	textarea {
		outline: none;
		border: none;
	}

	textarea:focus,
	input:focus {
		border-color: transparent !important;
	}

	input:focus::-webkit-input-placeholder {
		color: transparent;
	}

	input:focus:-moz-placeholder {
		color: transparent;
	}

	input:focus::-moz-placeholder {
		color: transparent;
	}

	input:focus:-ms-input-placeholder {
		color: transparent;
	}

	textarea:focus::-webkit-input-placeholder {
		color: transparent;
	}

	textarea:focus:-moz-placeholder {
		color: transparent;
	}

	textarea:focus::-moz-placeholder {
		color: transparent;
	}

	textarea:focus:-ms-input-placeholder {
		color: transparent;
	}

	input::-webkit-input-placeholder {
		color: #555555;
	}

	input:-moz-placeholder {
		color: #555555;
	}

	input::-moz-placeholder {
		color: #555555;
	}

	input:-ms-input-placeholder {
		color: #555555;
	}

	textarea::-webkit-input-placeholder {
		color: #555555;
	}

	textarea:-moz-placeholder {
		color: #555555;
	}

	textarea::-moz-placeholder {
		color: #555555;
	}

	textarea:-ms-input-placeholder {
		color: #555555;
	}

	label {
		display: block;
		margin: 0;
	}

	button {
		outline: none !important;
		border: none;
		background: transparent;
	}

	button:hover {
		cursor: pointer;
	}

	iframe {
		border: none !important;
	}

	

	.login-form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 300px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
}

.social-login,
.manual-login {
  margin-bottom: 20px;
  text-align: center;
}

.facebook-btn,
.google-btn {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  background-color: #3b5998;
  color: #fff;
  border: none;
  cursor: pointer;
}

.google-btn {
  background-color: #dd4b39;
}

.manual-login input[type="email"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
}
.manual-login input[type="password"] {
  width: 76%;
  padding: 10px;
  margin-bottom: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
}

.manual-login button[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #333;
  color: #fff;
  border: none;
  cursor: pointer;
}

#toggle-password {
  background-color: transparent;
  border: none;
  color: #000;
  cursor: pointer;
}
img {
  border-radius: 50%;
}

</style>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-color: #4c4d4f;">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Login Cliente
					</span>

					<!-- <a href="#" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a> -->

					<div class="social-login">
						<button class="facebook-btn" style="width:350px; border-radius:5px"><i class="fab fa-facebook"></i> Facebook</button>
						<button class="google-btn" style="width:350px; border-radius:5px"><i class="fab fa-google"></i> Google</button>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Usuário
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Senha
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Logar
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Não é conta?
						</span>

						<a href="#" class="cadastrar">
							Cadastrar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>