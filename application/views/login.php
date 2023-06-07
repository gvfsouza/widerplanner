<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@100;300;400;500;700;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'poppins', sans-serif;
}

body {
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.container {
  background-color: whitesmoke;
  padding: 6px;
  width: 350px;
  height: 450px;
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 0 20px 0 darkgrey;
}

form {
  position: absolute;
  margin-top: 80px;
  transition: .5s;
  width: 300px;
  height: 400px;
}

.buttonsForm {
  margin-top: 40px;
  position: relative;
  border-radius: 5px;
  box-shadow: 0 0 7px 0 #879bc9;
}

.buttonsForm button {
  cursor: pointer;
  background: transparent;
  border: none;
  position: relative;
  padding: 10px 29px;
}

.btnColor {
  position: absolute;
  width: 108px;
  height: 100%;
  background: #879bc9;
  border-radius: 5px;
  transition: .3s;
}

input[type="text"], input[type="password"] {
  border: none;
  margin-top: 40px;
  border-radius: 5px;
  padding: 8px 0 8px 35px;
  outline: none;
  width: 100%;
}


button[type="submit"] {
    background: #879bc9;
    color: white;
    border-radius: 5px;
    width: 100%;
    border: none;
    outline: none;
    padding: 8px 0 8px 15px;
    font-size: 15px;
    margin-top: 40px;
    cursor: pointer;
}

.divCheck {
  margin: 10px 0 0 5px;
  width: 80%;
  font-size: 13px;
}

#signin {
  left: 25px;
}

#signup {
  left: 450px;
}

i {
  position: absolute;
  left: 0;
  padding: 10px 10px;
}

.iEmail {
  top: 40px;
}

.iPassword {
  top: 114px;
}

.iPassword2 {
  top: 190px;
}
</style>

  <div class="container">
    <div class="buttonsForm">
      <div class="btnColor"></div>
      <button id="btnSignin" style="border-radius:5px">Sign in</button>
      <button id="btnSignup">Sign up</button>
    </div>

    <form id="signin">
      <input type="text" placeholder="Email" required />
      <i class="fas fa-envelope iEmail"></i>
      <input type="password" placeholder="Password" required />
      <i class="fas fa-lock iPassword"></i>
      <div class="divCheck">
        <input type="checkbox" />
        <span>Remember Password</span>
      </div>
      <button type="submit">Sign in</button>
    </form>

    <form id="signup">
      <input type="text" placeholder="Email" required />
      <i class="fas fa-envelope iEmail"></i>
      <input type="password" placeholder="Password" required />
      <i class="fas fa-lock iPassword"></i>
      <input type="password" placeholder="Password" required />
      <i class="fas fa-lock iPassword2"></i>
      <div class="divCheck">
        <input type="checkbox" required />
        <span>Terms</span>
      </div>
      <button type="submit">Sign up</button>
    </form>
  </div>

  <script> 
  var formSignin = document.querySelector('#signin')
var formSignup = document.querySelector('#signup')
var btnColor = document.querySelector('.btnColor')

document.querySelector('#btnSignin')
  .addEventListener('click', () => {
    formSignin.style.left = "25px"
    formSignup.style.left = "450px"
    btnColor.style.left = "0px"
})

document.querySelector('#btnSignup')
  .addEventListener('click', () => {
    formSignin.style.left = "-450px"
    formSignup.style.left = "25px"
    btnColor.style.left = "110px"
})
  
</script>


