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
    border-radius: 50%;
    bottom: 0%;
    left: 10%;
  }

  img {
    position: absolute;
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
              <div class="p-3 bg-white">
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                        <?php if (!empty($listar_fotos)) : ?>
                            <?php foreach ($listar_fotos as $value) : ?>
                            <article>
                                    <figure> 
                                        <?php if (!empty($value->foto_lugar)) { ?>
                                            <center><img style='width:100px; height:100px;' id='base64image' src='data:image/jpeg;base64,<?php echo $value->foto_lugar ?>' /></center>
                                        <?php } ?>
                                    </figure>
                                </article>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Nenhuma foto encontrada.</p>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
                <form action="" method="POST">
                <div class="text-right">
                  <button href="/fotos_barbearia/" type="submit" name="salvar" class="btn-lg btn" style="border: none;background-color: #82a4ef;color: white;">Salvar</button>
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