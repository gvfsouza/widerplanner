<style>
  label {
    color: black;
  }

  .card-profile {
    width: 250px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2rem;
    background-color: white;
    border-radius: 1rem;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    margin: 12px;
    margin-top: 40px;
  }

  .card-container {
    display: flex;
    overflow-x: auto;
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
              <strong>Agendamento</strong>
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
                      <div class="form-group col-md-6">
                        <label for="" style="color: #4e4e4e;"><b>Escolha uma Data:</b></label>
                        <br>
                        <input type="date" class="form-control" id="fk_dia_semana" name="fk_dia_semana" max="9999-12-31">
                        <!-- <select name="fk_dia_semana" id="fk_dia_semana" class="form-control fk_dia_semana" style="cursor: pointer;" required>
                          <option class="text-center" value="">--- Selecione uma Opção ---</option>
                          </?php foreach ($listar_diasemana as $value) { ?>
                                <option value="</?php echo $value->id_semana; ?>" data-nome="</?php echo $value->dias_semana; ?>"></?php echo $value->dias_semana; ?></option>
                          </?php } ?>
                        </select> -->
                      </div>

                      <div class="form-group col-md-6">
                        <label for="" style="color: #4e4e4e;"><b>Escolha um Horário:</b></label>
                        <br>
                        <select name="fk_hora" id="fk_hora" class="form-control servico" style="cursor: pointer;" required>
                          <option class="text-center" value="">--- Selecione uma Opção ---</option>
                          <?php foreach ($listar_hora as $value) { ?>
                                    <option value="<?php echo $value->id_hora; ?>" data-nome="<?php echo $value->horarios_semana; ?>"><?php echo $value->horarios_semana; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-md-4">
                        <label for="" style="color: #4e4e4e;"><b>Serviço:</b></label>
                        <br>
                        <select name="fk_servicos[]" id="fk_servicos" class="form-control servico" style="cursor: pointer;" required>
                          <option class="text-center" value="">--- Selecione uma Opção ---</option>
                          <?php foreach ($listar_servicos as $value) { ?>
                                    <option value="<?php echo $value->id_servicos; ?>" data-nome="<?php echo $value->nome_servico; ?>"><?php echo $value->nome_servico; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="col-md-3" style="margin-top: 30px;">
                        <div class="servicos_add">
                          <button type="button" class="btn btn-primary add_novo_Servico" style="width: 185px; height: 40px; font-size: 14px;"><i class="fas fa-plus"></i> Adicionar Serviço</button>
                          <button type="button" class="btn btn-danger botao_remover" style="width: 150px; height: 40px; font-size: 14px; margin-left: 10px;"><i class="fas fa-trash-alt"></i> Remover</button>
                        </div>
                      </div>

                      <div class="form-group col-md-5">
                        <label for="" style="color: #4e4e4e;"><b>Profissional(s) Disponível:</b></label>
                        <br>
                        <select name="horaDisp" id="horaDisp" class="form-control" style="cursor: pointer;" required>
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
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

<script>
    var maxButtons = 9999; 

    $('.add_novo_Servico').click(function(e) {
        var container = $(this).closest('.row');
        var element_copy = container.clone();
        var botao_excluir = '<div class="btn btn-outline-danger botao_remover" style="width: 100px; height: 40px; font-size: 14px; margin-top: 10px;"><i class="fas fa-trash-alt"></i> Remover</div>';

        element_copy.find('select, input').val('');
        element_copy.find('.select2').remove(); // Limpa o campo
        element_copy.find('.add_novo_Servico').remove(); // Remove o botão "Adicionar Serviço"

        container.after(element_copy);

        if (element_copy.find('.botao_remover').length === 0) {
            element_copy.find('.col-md-3').append(botao_excluir);
        }

        $('.botao_remover').click(function(e) {
            $(this).closest('.row').remove();
        });

        // Select picker
        $('.servico').select2({
            width: '100%'
        });
    });
</script>