
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V4</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<meta name="robots" content="noindex, follow">
<script nonce="4ad47c6b-7fd5-454c-a5f7-777fc35015e4">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})))))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>

<style>
@font-face {
    font-family: Poppins-Regular;
    src: url(../fonts/poppins/Poppins-Regular.ttf)
}

@font-face {
    font-family: Poppins-Medium;
    src: url(../fonts/poppins/Poppins-Medium.ttf)
}

@font-face {
    font-family: Poppins-Bold;
    src: url(../fonts/poppins/Poppins-Bold.ttf)
}

@font-face {
    font-family: Poppins-SemiBold;
    src: url(../fonts/poppins/Poppins-SemiBold.ttf)
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
}

body,html {
    height: 100%;
    font-family: Poppins-Regular,sans-serif
}

a {
    font-family: Poppins-Regular;
    font-size: 14px;
    line-height: 1.7;
    color: #666;
    margin: 0;
    transition: all .4s;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s
}

a:focus {
    outline: none!important
}

a:hover {
    text-decoration: none;
    color: #a64bf4
}

h1,h2,h3,h4,h5,h6 {
    margin: 0
}

p {
    font-family: Poppins-Regular;
    font-size: 14px;
    line-height: 1.7;
    color: #666;
    margin: 0
}

ul,li {
    margin: 0;
    list-style-type: none
}

input {
    outline: none;
    border: none
}

textarea {
    outline: none;
    border: none
}

textarea:focus,input:focus {
    border-color: transparent!important
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

input:focus:-moz-placeholder {
    color: transparent
}

input:focus::-moz-placeholder {
    color: transparent
}

input:focus:-ms-input-placeholder {
    color: transparent
}

textarea:focus::-webkit-input-placeholder {
    color: transparent
}

textarea:focus:-moz-placeholder {
    color: transparent
}

textarea:focus::-moz-placeholder {
    color: transparent
}

textarea:focus:-ms-input-placeholder {
    color: transparent
}

input::-webkit-input-placeholder {
    color: #adadad
}

input:-moz-placeholder {
    color: #adadad
}

input::-moz-placeholder {
    color: #adadad
}

input:-ms-input-placeholder {
    color: #adadad
}

textarea::-webkit-input-placeholder {
    color: #adadad
}

textarea:-moz-placeholder {
    color: #adadad
}

textarea::-moz-placeholder {
    color: #adadad
}

textarea:-ms-input-placeholder {
    color: #adadad
}

button {
    outline: none!important;
    border: none;
    background: 0 0
}

button:hover {
    cursor: pointer
}

iframe {
    border: none!important
}

.txt1 {
    font-family: Poppins-Regular;
    font-size: 14px;
    line-height: 1.5;
    color: #666
}

.txt2 {
    font-family: Poppins-Regular;
    font-size: 14px;
    line-height: 1.5;
    color: #333;
    text-transform: uppercase
}

.bg1 {
    background-color: #3b5998
}

.bg2 {
    background-color: #1da1f2
}

.bg3 {
    background-color: #ea4335
}

.limiter {
    width: 100%;
    margin: 0 auto
}

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
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover
}

.wrap-login100 {
    width: 500px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden
}

.login100-form {
    width: 100%
}

.login100-form-title {
    display: block;
    font-family: Poppins-Bold;
    font-size: 39px;
    color: #333;
    line-height: 1.2;
    text-align: center
}

.wrap-input100 {
    width: 100%;
    position: relative;
    border-bottom: 2px solid #d9d9d9
}

.label-input100 {
    font-family: Poppins-Regular;
    font-size: 14px;
    color: #333;
    line-height: 1.5;
    padding-left: 7px
}

.input100 {
    font-family: Poppins-Medium;
    font-size: 16px;
    color: #333;
    line-height: 1.2;
    display: block;
    width: 100%;
    height: 55px;
    background: 0 0;
    padding: 0 7px 0 43px
}

.focus-input100 {
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none
}

.focus-input100::after {
    content: attr(data-symbol);
    font-family: Material-Design-Iconic-Font;
    color: #adadad;
    font-size: 22px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    height: calc(100% - 20px);
    bottom: 0;
    left: 0;
    padding-left: 13px;
    padding-top: 3px
}

.focus-input100::before {
    content: "";
    display: block;
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: #7f7f7f;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s;
    transition: all .4s
}

.input100:focus+.focus-input100::before {
    width: 100%
}

.has-val.input100+.focus-input100::before {
    width: 100%
}

.input100:focus+.focus-input100::after {
    color: #a64bf4
}

.has-val.input100+.focus-input100::after {
    color: #a64bf4
}

.container-login100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center
}

.wrap-login100-form-btn {
    width: 100%;
    display: block;
    position: relative;
    z-index: 1;
    border-radius: 25px;
    overflow: hidden;
    margin: 0 auto;
    box-shadow: 0 5px 30px 0 rgba(3,216,222,.2);
    -moz-box-shadow: 0 5px 30px 0 rgba(3,216,222,.2);
    -webkit-box-shadow: 0 5px 30px 0 rgba(3,216,222,.2);
    -o-box-shadow: 0 5px 30px 0 rgba(3,216,222,.2);
    -ms-box-shadow: 0 5px 30px 0 rgba(3,216,222,.2)
}

.login100-form-bgbtn {
    position: absolute;
    z-index: -1;
    width: 300%;
    height: 100%;
    background: #a64bf4;
    background: -webkit-linear-gradient(right,#00dbde,#fc00ff,#00dbde,#fc00ff);
    background: -o-linear-gradient(right,#00dbde,#fc00ff,#00dbde,#fc00ff);
    background: -moz-linear-gradient(right,#00dbde,#fc00ff,#00dbde,#fc00ff);
    background: linear-gradient(right,#00dbde,#fc00ff,#00dbde,#fc00ff);
    top: 0;
    left: -100%;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s;
    transition: all .4s
}

.login100-form-btn {
    font-family: Poppins-Medium;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 50px
}

.wrap-login100-form-btn:hover .login100-form-bgbtn {
    left: 0
}

.validate-input {
    position: relative
}

.alert-validate::before {
    content: attr(data-validate);
    position: absolute;
    max-width: 70%;
    background-color: #fff;
    border: 1px solid #c80000;
    border-radius: 2px;
    padding: 4px 25px 4px 10px;
    bottom: calc((100% - 20px)/2);
    -webkit-transform: translateY(50%);
    -moz-transform: translateY(50%);
    -ms-transform: translateY(50%);
    -o-transform: translateY(50%);
    transform: translateY(50%);
    right: 2px;
    pointer-events: none;
    font-family: Poppins-Regular;
    color: #c80000;
    font-size: 13px;
    line-height: 1.4;
    text-align: left;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: opacity .4s;
    -o-transition: opacity .4s;
    -moz-transition: opacity .4s;
    transition: opacity .4s
}

.alert-validate::after {
    content: "\f06a";
    font-family: FontAwesome;
    display: block;
    position: absolute;
    color: #c80000;
    font-size: 16px;
    bottom: calc((100% - 20px)/2);
    -webkit-transform: translateY(50%);
    -moz-transform: translateY(50%);
    -ms-transform: translateY(50%);
    -o-transform: translateY(50%);
    transform: translateY(50%);
    right: 8px
}

.alert-validate:hover:before {
    visibility: visible;
    opacity: 1
}

@media(max-width: 992px) {
    .alert-validate::before {
        visibility:visible;
        opacity: 1
    }
}

.login100-social-item {
    font-size: 25px;
    color: #fff;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin: 5px
}

.login100-social-item:hover {
    color: #fff;
    background-color: #333
}

@media(max-width: 576px) {
    .wrap-login100 {
        padding-left:15px;
        padding-right: 15px
    }
}

</style>

<body>

<div class="limiter">
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<form class="login100-form validate-form">
<span class="login100-form-title p-b-49">
Login
</span>
<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
<span class="label-input100">Username</span>
<input class="input100" type="text" name="username" placeholder="Type your username">
<span class="focus-input100" data-symbol="&#xf206;"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Password is required">
<span class="label-input100">Password</span>
<input class="input100" type="password" name="pass" placeholder="Type your password">
<span class="focus-input100" data-symbol="&#xf190;"></span>
</div>
<div class="text-right p-t-8 p-b-31">
<a href="#">
Forgot password?
</a>
</div>
<div class="container-login100-form-btn">
<div class="wrap-login100-form-btn">
<div class="login100-form-bgbtn"></div>
<button class="login100-form-btn">
Login
</button>
</div>
</div>
<div class="txt1 text-center p-t-54 p-b-20">
<span>
Or Sign Up Using
</span>
</div>
<div class="flex-c-m">
<a href="#" class="login100-social-item bg1">
<i class="fa fa-facebook"></i>
</a>
<a href="#" class="login100-social-item bg2">
<i class="fa fa-twitter"></i>
</a>
<a href="#" class="login100-social-item bg3">
<i class="fa fa-google"></i>
</a>
</div>
<div class="flex-col-c p-t-155">
 <span class="txt1 p-b-17">
Or Sign Up Using
</span>
<a href="#" class="txt2">
Sign Up
</a>
</div>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vb26e4fa9e5134444860be286fd8771851679335129114" integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw==" data-cf-beacon='{"rayId":"7ad983852b02a673","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.3.0","si":100}' crossorigin="anonymous"></script>