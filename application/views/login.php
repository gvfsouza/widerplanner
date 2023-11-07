<style>
  html,
  body {
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

<div class="container">
  <!-- Outer Row -->
  <div class="row justify-content-center d-flex align-items-center h-100">

    <div class="col-xl-6 col-lg-12 col-md-9 ">

      <div class="card o-hidden border-0 shadow-lg my-5 ">
        <div class="card-body p-0">

          <!-- Nested Row within Card Body -->
          <div class="row ">
            <div class="col-lg-12">
              <div class="form-group">
                <div class="p-3 ">

                  <div class="text-center">
                    <h1 class="h4 text-gray-800 mb-4" style="font-size: 18px;"><b>WiderPlanner
                        <br>
                        LOGIN</b></h1>
                  </div>
                  <form method="POST" action="">
                    <div class="form-group">
                      <label for="cpf"><i class="fas fa-id-card"></i> CPF</label>
                      <input type="number" name="CPF" maxlength="14" class="form-control" required>
                    </div>
                    <br>

                    <div class="form-group" style="position: relative;">
                      <label for="senha"><i class="fas fa-lock"></i> Senha</label>
                      <input type="password" class="form-control" placeholder="Insira sua senha" name="senha" id="senha" required>
                      <!-- <i class="fas fa-solid fa-eye-slash" id="show-btn" style="position: absolute; cursor:pointer; top: 37px; right: 7px;"></i> -->
                    </div>
                    <br>

                    <a style="text-align:center; color:#135A93" href="">Esqueci senha</a>
                    <br>
                    <span><a href=""><strong style="font-size:14px">Clique aqui</strong> para realizar o cadastro</a></span>

                    <br>
                    <p style="text-align: right;"><input type="hidden" name="enviar" id="enviar" value="1" /> <input class="form-control" style="background:#135A93; color:white" type="submit" name="entrar" id="entrar" value="Entrar" /></p>
                  </form>
                  <div id="rodape">
                    <p><small>&copy; Sistema desenvolvido para cunho estudantil <br /> Desenvolvimento Web: Departamento de Informática <br /> Projeto de Conclusão de Curso - Superior de
                        Tecnologia em Análise e Deselvolvimento de Sistemas <br>Centro Universitário Nossa Senhora do
                        Patrocínio<br>Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
