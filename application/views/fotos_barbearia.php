<style>
  body {
    display: grid;
    min-height: 100vh;
  }

  figure {
    width: 500px;
    aspect-ratio: 7 / 4;
    --bg: hsl(330 80% calc(90% - (var(--hover) * 10%)));
    /* --accent: hsl(280 80% 40%); */
    transition: background 0.2s;
    /* background:
      radial-gradient(circle at top left, var(--accent), transparent 75%),
      var(--bg); */
    margin: 0;
    position: relative;
    overflow: hidden;
    border-radius: 1.5rem;
    margin: 10px;
  }

  figure:after {
    content: "";
    position: absolute;
    width: 20%;
    aspect-ratio: 1;
    border-radius: 50%;
    bottom: 0%;
    left: 10%;
    background: linear-gradient(-65deg, var(--bg) 50%, var(--accent) 50%);
    filter: blur(25px);
    transform:
      translateX(calc(var(--hover) * 15%)) scale(calc(1 + (var(--hover) * 0.2)));
    transition: transform 0.2s, background 0.2s;
  }

  img {
    position: absolute;
    left: 20%;
    top: 15%;
    width: 40%;
    transform:
      translateX(calc(var(--hover) * -15%)) scale(calc(1 + (var(--hover) * 0.2)));
    transition: transform 0.2s;
  }

  article {
    --hover: 0;
  }

  article:hover {
    --hover: 1;
  }
</style>

<br>

<div>
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3" style="background-color: white;">

        <div>
          <h3 id="dados-agenda" style="font-size: 25px;font-weight:bold"></h3>
          <br>
        </div>

        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
          <div>
            <legend class="form-group" style="color: white; font-size: 18px;">
              <strong>Fotos da Barbearia</strong>
            </legend>
          </div>
        </fieldset>

        <!-- FORMULÁRIO  -->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="" role="tabpanel">
            <form action="">
              <div class="p-3 bg-white">
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <article>
                        <figure><img src="https://assets.codepen.io/605876/person.png" alt=""></figure>
                      </article>
                      <article>
                        <figure><img src="https://assets.codepen.io/605876/person.png" alt=""></figure>
                      </article>
                      <article>
                        <figure><img src="https://assets.codepen.io/605876/person.png" alt=""></figure>
                      </article>
                    </div>
                  </div>
                </div>
                <div class="text-right">
                  <button href="/agendamento/" type="submit" name="salvar" class="btn-lg btn" style="border: none;background-color: #82a4ef;color: white;">Salvar</button>
                </div>
            </form>
          </div>
        </div>
        <br>
        <br>
        <div class="col-12 text-center">
          <span style="text-align: center">Sistema desenvolvido para cunho estudantil <br>
            Projeto de Conclusão de Curso - Superior de Tecnologia em Análise e Deselvolvimento de Sistemas
            <br>
            Centro Universitário Nossa Senhora do Patrocínio <br>
            Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300</span>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>