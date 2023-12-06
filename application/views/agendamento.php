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

                        <?php if ($this->session->flashdata('sucesso')) { ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('sucesso'); ?>
                                </div>
                        <?php } ?>
                        <!----------------FIM-----MENSAGEM DE SUCESSO AO CADASTRAR ---------------->

                        <!----------------INICIO-----MENSAGEM DE ERRO AO CADASTRAR ---------------->
                        <?php if ($this->session->flashdata('erro')): ?>
                                <div class="alert alert-danger">
                                    <?php echo $this->session->flashdata('erro'); ?>
                                </div>
                        <?php endif; ?>
                        <!----------------FIM-----MENSAGEM DE ERRO AO CADASTRAR ---------------->

                        <form action="" method="POST">
                            <div class="p-3 bg-white">
                                <div class="row">
                                    <div class="col-12">
                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                            <div class="form-group col-md-12">
                                                <label for="" style="color: #4e4e4e;"><b>Profissional(s) Disponível:</b></label>
                                                <br>
                                                <select name="fk_profissional" id="fk_profissional" class="form-control profissional" style="cursor: pointer;" required>
                                                    <option class="text-center" value="">--- Selecione uma Opção ---</option>
                                                    <?php foreach ($listar_profissionais as $value) { ?>
                                                                        <option value="<?php echo $value->id_usuario; ?>" data-nome="<?php echo $value->nome_usuario; ?>"><?php echo $value->nome_usuario; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="" style="color: #4e4e4e;"><b>Escolha uma Data:</b></label>
                                                    <br>
                                                    <input type="date" class="form-control data_agenda" id="data_agenda" name="data_agenda" max="9999-12-31">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="" style="color: #4e4e4e;"><b>Horários Disponíveis:</b></label>
                                                    <br>
                                                    <select name="fk_hora" id="fk_hora" class="form-control servico" style="cursor: pointer;" required>
                                                        <option class="text-center" value="">--- Selecione uma Opção ---</option>
                                                        <?php foreach ($listar_hora as $value) { ?>
                                                            <option value="<?php echo $value->id_hora; ?>" data-nome="<?php echo $value->horarios_semana; ?>"><?php echo $value->horarios_semana; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                            <div class="row">
                                                <div class="col-md-8">
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
                                                        <button type="button" class="btn btn-primary add_novo_Servico" style="font-size: 14px;">
                                                            <i class="fas fa-plus"></i> Adicionar Serviço
                                                        </button>
                                                    </div>
                                                </div
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button href="<?php echo base_url(); ?>/agendamento/" type="submit" name="salvar" class="btn-lg btn" style="border: none;background-color: #82a4ef;color: white;" value='2' >Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <br><br>

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
        var botao_excluir = '<div class="btn btn-danger botao_remover" style="font-size: 14px;"><i class="fas fa-trash-alt"></i> Remover</div>';

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