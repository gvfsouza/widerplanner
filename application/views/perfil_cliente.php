<style>
    label {
        color: black;
    }

    tr,
    td,
    th {
        text-align: center;
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
                        <form action="">
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
                                                                <input style="font-size:14px" type="text" class="form-control" id="nome" name="nome" value="<?php echo $value->nome_usuario ;?>" disabled="">
                                                            </div>
                                                            <div class="dados-cliente form-group col-md-6">
                                                                <label for="" style="color: #77787a;">CPF:</label>
                                                                <br>
                                                                <input type="text" class="form-control" id="cpd" name="cpf" value="<?php echo $value->cpf_usuario ;?>" disabled="">
                                                            </div>
                                                            <div class="dados-cliente form-group col-md-4">
                                                                <label for="" style="color: #77787a;">Data Nasc.:</label>
                                                                <br>
                                                                <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" value="<?php echo $value->dt_nasc_usuario ;?>" disabled="">
                                                            </div>
                                                            <div class="dados-cliente form-group col-md-2">
                                                                <label for="" style="color: #77787a;">Sexo:</label>
                                                                <br>
                                                                <input style="font-size:14px" type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $value->sexo_usuario ;?>" disabled="">
                                                            </div>
                                                            <div class="dados-cliente col-md-6">
                                                                <label for="" style="color: #77787a;">Celular:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="celular" name="celular" value="<?php echo $value->telefone_usuario ;?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="dados-cliente col-md-3">
                                                                <label for="" style="color: #77787a;">CEP:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="cep" name="cep" value="<?php echo $value->cep_usuario ;?>">
                                                            </div>
                                                            <div class="dados-cliente col-md-7">
                                                                <label for="" style="color: #77787a;">Logradouro:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="logradouro" name="logradouro" value="<?php echo $value->logradouro_usuario ;?>">
                                                            </div>
                                                            <div class="dados-cliente col-md-2">
                                                                <label for="" style="color: #77787a;">N°:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="numero" name="numero" value="<?php echo $value->numero_usuario ;?>">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="dados-cliente col-md-5">
                                                                <label for="" style="color: #77787a;">Complemento:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="complemento" name="complemento" value="<?php echo $value->complemento_usuario ;?>">
                                                            </div>
                                                            <div class="dados-cliente col-md-7">
                                                                <label for="" style="color: #77787a;">Bairro:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $value->bairro_usuario ;?>">
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="dados-cliente col-md-7">
                                                                <label for="" style="color: #77787a;">Cidade:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $value->cidade_usuario ;?>">
                                                            </div>
                                                            <div class="dados-cliente col-md-5">
                                                                <label for="" style="color: #77787a;">UF:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="uf" name="uf" value="<?php echo $value->estado_usuario ;?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </fieldset>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
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
                                    <tr>
                                        <td style="font-size: 11px;">Corte Masculino</td>
                                        <td style="font-size: 11px;">05/03/23</td>
                                        <td style="font-size: 11px;">14h 30min</td>
                                        <td style="font-size: 11px;">Cristian</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">Pigmetação</td>
                                        <td style="font-size: 11px;">12/02/23</td>
                                        <td style="font-size: 11px;">17h00</td>
                                        <td style="font-size: 11px;">Thiago</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px;">Luzes</td>
                                        <td style="font-size: 11px;">07/01/23</td>
                                        <td style="font-size: 11px;">15h00</td>
                                        <td style="font-size: 11px;">Giovane</td>
                                    </tr>
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