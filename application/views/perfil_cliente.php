<style>
    label {
        color: black;
    }

    tr,
    td,
    th {
        text-align: center;
    }

    input {
        color: #766f6f;
        font-weight: bold;
    }
</style>

<br>

<div>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="background-color: white;">

                <!-- FORMULÁRIO  -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="" role="tabpanel">
                        <!-- Mensagem de erro cadastro/e-mail -->
                        <?php if ($this->session->flashdata('sucesso')) : ?>
                            <div class="alert alert-success">
                                <?php echo $this->session->flashdata('sucesso'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($this->session->flashdata('erro')) : ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('erro'); ?>
                            </div>
                        <?php endif; ?>
                        <form action="" method="post">
                            <div class="p-3 bg-white">
                                <div class="row">
                                    <div class="col-12">
                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                                            <div>
                                                <legend class="form-group" style="color: white; font-size: 18px;">
                                                    <strong>Perfil Cliente</strong>
                                                </legend>
                                            </div>
                                        </fieldset>
                                        <?php foreach ($dados_cliente as $value) { ?>

                                            <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                                <div class="row">
                                                    <div style="margin-left:10px;"></div>

                                                    <div class="col">

                                                        <div class="row">
                                                            <legend class="form-group" style="color: #879bc9; font-size: 18px; margin-left:14px">
                                                                <strong>Dados Pessoais</strong>
                                                            </legend>
                                                            <div class="form-group col-md-6">
                                                                <label for="" style="color: #77787a;">Nome:</label>
                                                                <br>
                                                                <input style="font-size:14px" type="text" class="form-control" id="nome" name="nome" value="<?php echo $value->nome_usuario; ?>" disabled>
                                                            </div>
                                                            <div class="dados-cliente form-group col-md-6">
                                                                <label for="" style="color: #77787a;">CPF:</label>
                                                                <br>
                                                                <input type="text" class="form-control" id="cpd" name="cpf" value="<?php echo $value->cpf_usuario; ?>" disabled>
                                                            </div>
                                                            <div class="dados-cliente form-group col-md-4">
                                                                <label for="" style="color: #77787a;">Data Nasc.:</label>
                                                                <br>
                                                                <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" value="<?php echo $value->dt_nasc_usuario; ?>" disabled>
                                                            </div>
                                                            <div class="dados-cliente form-group col-md-2">
                                                                <label for="" style="color: #77787a;">Sexo:</label>
                                                                <br>
                                                                <input style="font-size:14px" type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $value->sexo_usuario; ?>" disabled>
                                                            </div>
                                                            <div class="dados-cliente col-md-6">
                                                                <label for="" style="color: #77787a;">Celular:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="telefone_usuario" name="telefone_usuario" value="<?php echo $value->telefone_usuario; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="dados-cliente col-md-3">
                                                                <label for="" style="color: #77787a;">CEP:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="cep_usuario" name="cep_usuario" value="<?php echo $value->cep_usuario; ?>" onkeypress="mascara(this, cep)" oninput="formatarCep(this)" maxlength="9">
                                                            </div>
                                                            <div class="dados-cliente col-md-7">
                                                                <label for="" style="color: #77787a;">Logradouro:</label>
                                                                <input type="hidden" id="logradouro_hidden" name="logradouro_usuario" value="<?php echo $value->logradouro_usuario; ?>">
                                                                <input style="font-size:14px" type="text" class="form-control" id="logradouro_usuario" value="<?php echo $value->logradouro_usuario; ?>">
                                                            </div>
                                                            <div class="dados-cliente col-md-2">
                                                                <label for="" style="color: #77787a;">N°:</label>
                                                                <input type="hidden" id="numero_hidden" name="numero_usuario" value="<?php echo $value->numero_usuario; ?>">

                                                                <input style="font-size:14px" type="text" class="form-control" id="numero_usuario" value="<?php echo $value->numero_usuario; ?>">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="dados-cliente col-md-5">
                                                                <label for="" style="color: #77787a;">Complemento:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="complemento_usuario" name="complemento_usuario" value="<?php echo $value->complemento_usuario; ?>">
                                                            </div>
                                                            <div class="dados-cliente col-md-7">
                                                                <label for="" style="color: #77787a;">Bairro:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="bairro_usuario" name="bairro_usuario" value="<?php echo $value->bairro_usuario; ?>">
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="dados-cliente col-md-7">
                                                                <label for="" style="color: #77787a;">Cidade:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="cidade_usuario" name="cidade_usuario" value="<?php echo $value->cidade_usuario; ?>">
                                                            </div>
                                                            <div class="dados-cliente col-md-5">
                                                                <label for="" style="color: #77787a;">UF:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="estado_usuario" name="estado_usuario" value="<?php echo $value->estado_usuario; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </fieldset>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <button href="<?php echo base_url(); ?>/perfil_cliente/" type="submit" name="salvar" class="btn-lg btn" style="border: none;background-color: #82a4ef;color: white;    margin-right: 17px;">Salvar</button>
                        </form>
                    </div>
                </div>
                <form action="">
                    <div class="p-3 bg-white">
                        <div class="row">
                            <div class="col-12">
                                <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                                    <div>
                                        <legend class="form-group" style="color: white; font-size: 18px;"> <i class="fas fa-clipboard-list"></i>
                                            <strong>Histórico</strong>
                                        </legend>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;color: black;">
                            <table class="table table-responsive-lg">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-size: 13px;">Serviço</th>
                                        <th scope="col" style="font-size: 13px;">Data</th>
                                        <th scope="col" style="font-size: 13px;">Hora</th>
                                        <th scope="col" style="font-size: 13px;">Profissional</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($historico_agendamentos_realizados as $value) { ?>
                                        <tr>
                                            <?php if (!empty($historico_servicos_agendamentos)) { ?>
                                                <td><?php echo $historico_servicos_agendamentos[0]->nome_servico; ?></td>
                                            <?php } ?>
                                            <td style="font-size: 11px;"><?php echo formata_data($value->data_agenda); ?></td>
                                            <td style="font-size: 11px;"><?php echo $value->horarios_semana; ?></td>
                                            <?php if (!empty($historico_profissionais_agendamentos)) { ?>
                                                <td><?php echo $historico_profissionais_agendamentos[0]->nome_usuario; ?></td>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>

                </form>

                <div class="col-12 text-center">
                    <span style="text-align: center">Sistema desenvolvido para cunho estudantil <br>
                        Projeto de Conclusão de Curso - Superior de Tecnologia em Análise e Deselvolvimento de Sistemas
                        <br>
                        Centro Universitário Nossa Senhora do Patrocínio <br>
                        Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Função para formatar o CEP (removendo caracteres não numéricos)
    function formatarCep(cep) {
        return cep.replace(/\D/g, '');
    }

    // Função para buscar e preencher os campos de endereço
    function preencherEndereco() {
        var cep = formatarCep(document.getElementById('cep_usuario').value);

        if (cep.length === 8) {
            // Fazer a consulta à API ViaCEP
            $.getJSON('https://viacep.com.br/ws/' + cep + '/json/', function(data) {
                if (!data.erro) {
                    document.getElementById('logradouro').value = data.logradouro;
                    document.getElementById('bairro').value = data.bairro;
                    document.getElementById('cidade').value = data.localidade;
                    document.getElementById('uf').value = data.uf;
                }
            });
        }
    }

    // Evento que dispara a consulta ao preencher o CEP
    document.getElementById('cep_usuario').addEventListener('blur', preencherEndereco);
</script>