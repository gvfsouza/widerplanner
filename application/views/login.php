<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Card</title>
</head>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@100;300;400;500;700;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap");


    html, body {
        height: 100%;
    }
    body {
        background-color: #508fc03d;
    }

    #rodape {
        text-align: center;
    }

    label {
        margin: auto;
        text-align: center;
    }

    .form-control {

        margin: auto;
    }

    .form-group {
        max-width: 400px;
        margin: 0 auto;
    }

    /* Resolução para celular */
    @media (max-width: 300px) {
        .form-control {
            width: 100%;
            margin: auto;
        }

        label {
            margin: auto;
            margin-left: 0%;
        }

        .form-control p img {
            width: 100%;
            margin: auto;

        }

    }

    div .form-group input:valid-i {
        display: block;
    }

    div .form-group i.hide-btn::defore {
        content: "\f070";
    }

    div .form-group i #show-btn {
        float: right;

        margin: 3px 0px 0px -20px;
        cursor: pointer
    }

    .container {
        position: relative;
        /* display: flex;
        flex-direction: row;
        justify-content: middle;
        align-items: middle; */
        max-width: 1000px;
    }
</style>

<body>
  <!-- <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="card">
        <div class="col-md-12">
          <p style="text-align:center;font-size: 31px;color: #879bc9;font-weight: bold;">WiderPlanner
          <br>
          <span style="text-align:center;font-size:20px;color:#a8aaad;font-weight: normal;">Login</span></p>
        </div> -->
<div class="card o-hidden border-0 shadow-lg my-5 ">
        <div class="card-body">
          <div class="row">      
            <div class="col-lg-12">
              <div class="form-group">
                <div class="p-3 ">
                  <div class="text-center">
                    <h1 class="h4 text-800 mb-4" style="text-align:center;font-size: 31px;color: #879bc9;font-weight: bold;"><b>WiderPlanner</b>
                    <br>
                    </h1>
                    <p><span style="text-align:center;font-size:20px;color:#a8aaad;font-weight: normal;">Login</span></p>
                  </div>
                  <form method="POST" action="" name="form_login">
                    <div class="form-group">
                      <label> CPF:</label>
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

  <!-- </nav> -->
</body>