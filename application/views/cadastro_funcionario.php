<style>
  label {
    color: black;
  }
</style>

<br>

<div>
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3" style="background-color: white;">

        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
          <div>
            <legend class="form-group" style="color: white; font-size: 18px;">
              <strong>Cadastro de Profissional</strong>
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
                    <fieldset class="form-group"
                      style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                      <div class="row">
                        <div style="margin-left:10px;"></div>
                        <div class="col">
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="" style="color: #4e4e4e;"><b>Foto:</b></label>
                              <br>
                              <input style="font-size:14px" type="file" class="form-control" id="foto" name="foto"
                                value="">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="" style="color: #4e4e4e;"><b>Nome Completo do Funcionário:</b></label>
                              <br>
                              <input style="font-size:14px" type="text" class="form-control" id="nome_funcionario"
                                name="nome_funcionario" value="">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="" style="color: #4e4e4e;"><b>Idade:</b></label>
                              <br>
                              <input style="font-size:14px" type="text" class="form-control" id="nome_funcionario"
                                name="nome_funcionario" value="">
                            </div>
                            <div class="dados-cliente form-group col-md-4">
                              <label for="" style="color: #4e4e4e;"><b>Profissão:</b></label>
                              <br>
                              <input type="text" class="form-control" name="profissao" id="profissao" value="">
                            </div>
                            <div class="dados-cliente form-group col-md-4">
                              <label for="" style="color: #4e4e4e;"><b>Quanto tempo está na área:</b></label>
                              <br>
                              <input type="text" class="form-control" id="tempo_area" name="tempo_area" value="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-10">
                              <label for="" style="color: #4e4e4e;"><b>Serviço:</b></label>
                              <select name="fk_servico[]" class="form-control adicionar_servico" style="cursor: pointer;" required>
                                <option class="text-center" value="">--- Selecione uma Opção ---</option>
                                <option value="opcao1">Opção 1</option>
                                <option value="opcao2">Opção 2</option>
                              </select>
                            </div>
                            <div class="col-2">
                              <!-- O botão "Remover" está oculto inicialmente -->
                              <button type="button" class="btn btn-danger" style="display: none;" onclick="removerCampo(this)">Remover</button>
                            </div>
                          </div>
                            <button type="button" onclick="adicionarCampo()">Adicionar Serviço</button>
                        </div>
                      </div>
                    </fieldset>
                    <br>
                  </div>
                </div>
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

<script>
    function adicionarCampo() {
      var divCampos = document.getElementById("campos");
      var campoPrincipal = divCampos.querySelector(".row.form-group");
      var novoCampo = campoPrincipal.cloneNode(true);
      // Torna o botão "Remover" visível no campo adicionado
      novoCampo.querySelector("button").style.display = "block";
      divCampos.appendChild(novoCampo);
    }

    function removerCampo(botaoRemover) {
      var divCampos = document.getElementById("campos");
      var campoParaRemover = botaoRemover.closest(".row.form-group");
      divCampos.removeChild(campoParaRemover);
    }
  </script>
