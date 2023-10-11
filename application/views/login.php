<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@100;300;400;500;700;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins", sans-serif;
  }

  body {

    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #879bc942;
  }

  .container {
    background-color: white;
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
    transition: 0.5s;
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
    transition: 0.3s;
  }

  input[type="text"],
  input[type="password"] {
    border: none;
    margin-top: 10px;
    border-radius: 5px;
    padding: 8px 0 8px 35px;
    outline: none;
    width: 100%;
    box-shadow: 0 0 7px 0 #879bc994;
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

  .iPassword {
    top: 114px;
  }

  .iPassword2 {
    top: 190px;
  }

  label{
    color: #879BC9;
  }

  a{
    text-decoration: none;
  }
</style>

<div class="container">
  <form id="signin">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="cpf"> <i class="fas fa-lock"></i> CPF:</label>
                <input type="text" class="form-control" placeholder="Digite o CPF" name="cpf" id="cpf">
            </div>
        </div>
        <br>
        <div class="col-md-12">
            <label for="senha"> <i class="fas fa-lock"></i> Senha:</label>
            <input type="password" class="form-control" placeholder="Insira sua senha" name="senha" id="senha">
        </div>
    </div>
    <div class="divCheck">
      <br>
      <span><a href="">Esqueci Senha</a></span>
      <br>
      <br>
      <span><a href=""><strong>Clique aqui</strong> para realizar o cadastro</a></span>
    </div>
    <button type="submit">Entrar</button>
  </form>
</div>