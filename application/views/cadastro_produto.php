<style>
    body {
        height: 100%
    }

    label {
        color: black;
    }
</style>

<br>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: white;">

            <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                <div>
                    <legend class="form-group" style="color: white; font-size: 18px;">
                        <strong>Cadastro de Produto</strong>
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
                                    <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                        <div class="row">
                                            <div style="margin-left:10px;"></div>
                                            <div class="col">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label style="color: #4e4e4e">Foto:</label>
                                                        <br>
                                                        <input style="font-size:14px" type="file" class="form-control" id="foto_produto" name="foto_produto" accept="image/*" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="" style="color: #4e4e4e;"><b>Nome:</b></label>
                                                        <br>
                                                        <input style="font-size:14px" type="text" class="form-control" id="nome_produto" name="nome_produto" value="">
                                                    </div>
                                                    <div class="dados-produto form-group col-md-6">
                                                        <label for="" style="color: #4e4e4e;"><b>Valor:</b></label>
                                                        <br>
                                                        <input type="text" class="form-control" id="valor_produto" name="valor_produto" value="">
                                                    </div>
                                                    <div class="dados-produto col-md-6">
                                                        <label for="" style="color: #4e4e4e;"><b>Quantidade:</b></label>
                                                        <input style="font-size:14px" type="number" class="form-control" id="quant_produto" name="quant_produto" value="">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for=""><b>Descrição do Serviço:</b></label>
                                                        <br>
                                                        <textarea type="text" class="form-control" id="descricao_servico" name="descricao_servico" maxlength="14" rows="3" cols="50"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button href="<?php echo base_url(); ?>/cadastro_produto/" type="submit" name="salvar" class="btn-lg btn" style="border: none;background-color: #82a4ef;color: white;">Salvar</button>
                        </div>
                    </form>
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