<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Card</title>
</head>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@100;300;400;500;700;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap");

  *{
  font-family: "poppins", sans-serif;

  }

  body {
    background-color: #d7e0f6;
    background-size: 400% 400%;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .card {
    width: 412px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: auto;
    padding: 20px;
    background-color: #fff;
  }

  .card .card-body {
    padding: 20px;
  }

  .card .form-group {
    margin-bottom: 25px;
  }

  .card .form-group input[type="text"],
  .card .form-group input[type="password"] {
    width: 90%;
    padding: 10px;
    font-size: 16px;
    border-radius: 4px;
    border: 1px solid #ccc;
    margin-top: 8px;
  }

  .card .form-group label {
    display: block;
    font-weight: bold;
  }

  .card button:hover {
    background-color: #0056b3;
    transform: scale(1.05);
  }

  .card button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #879bc9;
    color: white;
    border-radius: 4px;
    border: 0;
    cursor: pointer;
  }

  .form-control{
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  }
</style>

<body>
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
<div class="container">
  <div class="card"> 
    <div class="card-body">
      <div class="row">      
        <div class="col-lg-12">
          <div class="form-group">
            <div class="p-3 ">
            <div class="col-md-12">
              <p style="text-align:center;font-size: 31px;color: #879bc9;font-weight: bold;">WiderPlanner
              <br>
              <span style="text-align:center;font-size:20px;color:#a8aaad;font-weight: normal;">Login</span></p>
            </div>
            <?php if ($this->session->flashdata('sucesso')) {    ?>
              <div class="alert alert-success" role="alert">
                  <?php echo $this->session->flashdata('sucesso'); ?>
              </div>
            <?php } ?>

            <?php if ($this->session->flashdata('error')) {    ?>
              <div class="alert alert-success" role="alert">
                  <?php echo $this->session->flashdata('error'); ?>
              </div>
            <?php } ?>
            
              <form method="POST" action="<?php echo site_url('login'); ?>" name="form_login">
                <div class="form-group">
                  <label for="cpf" style="color:#a8aaad"> CPF:</label>
                  <input type="text" name="cpf" maxlength="14" class="form-control" placeholder="Insira seu CPF" required="">
                </div>

                <div class="form-group">
                  <label for="senha" style="color:#a8aaad"> Senha:</label>
                  <input type="password" name="senha" maxlength="14" class="form-control" placeholder="Digite a sua senha" required="">
                </div>
                <a href="" style="color: #a1a3a8; text-align: right; text-decoration: none">Esqueci senha</a>
                <br>
                <br>
                <a href=""><strong style="font-size:14px">Clique aqui</strong> para realizar o cadastro</a>
                <br>
                <br>
                <button type="submit" id="entrar" name="entrar">Entrar</button>
              </form>
              <br>
              <div id="rodape" style="text-align:center;color: gray;font-size:12px">
                <p><small>Sistema desenvolvido para cunho estudantil <br> Projeto de Conclusão de Curso - Superior de Tecnologia em Análise e Deselvolvimento de Sistemas <br> Centro Universitário Nossa Senhora do Patrocínio<br>Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  </nav>
</body>