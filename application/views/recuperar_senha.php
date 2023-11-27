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
    background-color: #135b93;
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
                <div class="p-3">
                  <div class="col-md-12">
                    <p style="text-align:center;font-size: 31px;color: #135b93;font-weight: bold;">WiderPlanner
                    <br>
                    <span style="text-align:center;font-size:20px;color:#a8aaad;font-weight: normal;">Recuperar Senha<span></p>
                    <br>
                  </div>
                  <div style="background-color: #7fc19c30; color: #555252; padding: 10px; border-radius: 5px;">
                    Preencha os campos abaixo com a nova senha.
                  </div>
                    <form method="POST">
                    <?php
                      if ($this->session->flashdata('succeso')) {
                          echo '<div style="background-color: #209d2042; color: #0e3d0e; padding: 10px; vertical-align: middle; border-radius: 5px;">';
                          echo $this->session->flashdata('success_email');
                          echo '</div>';
                      }
                      ?>
                      <?php
                      if ($this->session->flashdata('erro')) {
                          echo '<div style="background-color: #F8D7DA; color: #6a040d; padding: 10px; width: 318px; height: 50px; vertical-align: middle; border-radius: 5px;">';
                          echo $this->session->flashdata('erro');
                          echo '</div>';
                    } ?>
                      <br>
                      <div class="form-group">
                        <label for="nova_senha" style="color:#a8aaad">Nova senha</label>
                        <input style="width: 100%" type="password" class="form-control" id="nova_senha" name="nova_senha" placeholder="Digite a nova senha" required>
                      </div>
                      <div class="form-group">
                        <label for="confirma_senha" style="color:#a8aaad">Confirme a nova senha</label>
                        <input style="width: 100%" type="password" class="form-control" id="confirma_senha" name="confirma_senha" placeholder="Insira a senha novamente" required>
                      </div>
                  
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