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

	/* Utilidades */
	.txt1 {
		font-family: Montserrat-SemiBold;
		font-size: 16px;
		color: #555555;
		line-height: 1.5;
	}

	.txt2 {
		font-family: Poppins-Regular;
		font-size: 14px;
		color: #999999;
		line-height: 1.5;
	}

	.bo1 {
		border-bottom: 1px solid #999999;
	}

	/* Login */
	.container-login100 {
		width: 100%;
		min-height: 100vh;
		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		align-items: center;
		padding: 15px;

		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		;
	}

	.wrap-login100 {
		width: 465px;
    	/* height: 517px; */
		background: #fff;
		border-radius: 10px;
		position: relative;
	}

	/* Forms */
	.login100-form {
		width: 100%;
	}

	.login100-form-title {
		width: 100%;
		display: block;
		font-family: Montserrat-Medium;
		font-size: 39px;
		color: #555555;
		line-height: 1.2;
		text-align: center;
	}

	/* Button logar com ... */
	.btn-face,
	.btn-google {
		font-family: Montserrat-SemiBold;
		font-size: 18px;
		line-height: 1.2;

		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 15px;
		width: calc((100% - 20px) / 2);
		height: 70px;
		border-radius: 10px;
		box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
		-moz-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
		-o-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
		-ms-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		-moz-transition: all 0.4s;
		transition: all 0.4s;
		position: relative;
		z-index: 1;
	}

	.btn-face {
		color: #fff;
		background-color: #3b5998;
	}

	.btn-face i {
		font-size: 30px;
		margin-right: 17px;
		padding-bottom: 3px;
	}

	.btn-google {
		color: #555555;
		background-color: #fff;
	}

	.btn-google img {
		width: 30px;
		margin-right: 15px;
		padding-bottom: 3px;
	}

	.btn-face:hover:before,
	.btn-google:hover:before {
		opacity: 1;
	}

	.btn-face:hover {
		color: #fff;
	}

	.btn-google:hover {
		color: #39556B;
	}

	/* Input */
	.wrap-input100 {
		width: 100%;
		position: relative;
		background-color: #f7f7f7;
		border: 1px solid #e6e6e6;
		border-radius: 10px;
	}

	.input100 {
		font-family: Poppins-Regular;
		color: #333333;
		line-height: 1.2;
		font-size: 18px;

		display: block;
		width: 100%;
		background: transparent;
		height: 60px;
		padding: 0 20px;
	}

	/* Focus Input */
	.focus-input100 {
		position: absolute;
		display: block;
		width: calc(100% + 2px);
		height: calc(100% + 2px);
		top: -1px;
		left: -1px;
		pointer-events: none;
		border: 1px solid #ab8755;
		border-radius: 10px;

		visibility: hidden;
		opacity: 0;

		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		-moz-transition: all 0.4s;
		transition: all 0.4s;

		-webkit-transform: scaleX(1.1) scaleY(1.3);
		-moz-transform: scaleX(1.1) scaleY(1.3);
		-ms-transform: scaleX(1.1) scaleY(1.3);
		-o-transform: scaleX(1.1) scaleY(1.3);
		transform: scaleX(1.1) scaleY(1.3);
	}

	.input100:focus+.focus-input100 {
		visibility: visible;
		opacity: 1;

		-webkit-transform: scale(1);
		-moz-transform: scale(1);
		-ms-transform: scale(1);
		-o-transform: scale(1);
		transform: scale(1);
	}

	.eff-focus-selection {
		visibility: visible;
		opacity: 1;

		-webkit-transform: scale(1);
		-moz-transform: scale(1);
		-ms-transform: scale(1);
		-o-transform: scale(1);
		transform: scale(1);
	}

	/* Button */
	.container-login100-form-btn {
		width: 100%;
		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		flex-wrap: wrap;
	}

	.login100-form-btn {
		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 0 20px;
		width: 100%;
		height: 60px;
		background-color: #B98F56;
		border-radius: 10px;

		font-family: Poppins-Medium;
		font-size: 16px;
		color: #fff;
		line-height: 1.2;

		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		-moz-transition: all 0.4s;
		transition: all 0.4s;
		position: relative;
		z-index: 1;
	}

	.login100-form-btn:hover:before {
		opacity: 1;
	}

	/* Alert validate */

	.validate-input {
		position: relative;
	}

	.alert-validate::before {
		content: attr(data-validate);
		position: absolute;
		max-width: 70%;
		background-color: #fff;
		border: 1px solid #c80000;
		border-radius: 2px;
		padding: 4px 25px 5px 10px;
		top: 50%;
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		-o-transform: translateY(-50%);
		transform: translateY(-50%);
		right: 12px;
		pointer-events: none;

		font-family: Poppins-Regular;
		color: #c80000;
		font-size: 14px;
		line-height: 1.4;
		text-align: left;

		visibility: hidden;
		opacity: 0;

		-webkit-transition: opacity 0.4s;
		-o-transition: opacity 0.4s;
		-moz-transition: opacity 0.4s;
		transition: opacity 0.4s;
	}

	.alert-validate::after {
		content: "\f12a";
		font-family: FontAwesome;
		display: block;
		position: absolute;
		color: #c80000;
		font-size: 18px;
		top: 50%;
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		-o-transform: translateY(-50%);
		transform: translateY(-50%);
		right: 18px;
	}

	.alert-validate:hover:before {
		visibility: visible;
		opacity: 1;
	}

	@media (max-width: 992px) {
		.alert-validate::before {
			visibility: visible;
			opacity: 1;
		}
	}

	/* Responsive */
	@media (max-width: 768px) {
		.wrap-login100 {
			padding-left: 60px;
			padding-right: 60px;
		}
	}

	@media (max-width: 576px) {
		.wrap-login100 {
			padding-left: 15px;
			padding-right: 15px;
		}
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

.form-group, .botao-logar{
	max-width: 350px;
    margin: 0 auto;
}

label{
	color:black;
}
</style>

<body>

		<div class="container-login100" style="background-color: #4c4d4f;">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" style="padding:60px">
					<span class="login100-form-title p-b-53" style="font-size:34px">
						Login Cliente
					</span>
					<br>

					<div class="social-login">
						<button class="facebook-btn" style="width:346px; border-radius:5px"><i class="fab fa-facebook"></i> Facebook</button>
						<button class="google-btn" style="width:346px; border-radius:5px"><i class="fab fa-google"></i>&nbsp; Google</button>
					</div>
					<div class="form-group">
						<label>Usuário</label>
						<input type="text" name="usuario" class="form-control" required>
					</div>
					<br>
					<div class="form-group">
						<label>Senha</label>
						<input type="text" name="senha" class="form-control" required>
					</div>
					<br>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn botao-logar" style="font-size:18px">
							Logar
						</button>
					</div>

					<br>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Não tem cadastro?
						</span>

						<a href="#" class="cadastrar">
							Cadastrar
						</a>
					</div>
				</form>
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