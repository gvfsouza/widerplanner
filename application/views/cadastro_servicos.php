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
                <div>
                    <h3 id="dados-cleinte" style="font-size: 25px;font-weight:bold">Cadastro Serviço</h3>
                    <br>
                </div>
                <fieldset class="form-group"
                    style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                    <br>
                </fieldset>

                <!-- FORMULÁRIO  -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="" role="tabpanel">

                        <!-- Mensagem de sucesso cadastro/e-mail  -->
                        <?php if ($this->session->flashdata('sucesso')) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('sucesso'); ?>
                            </div>
                        <?php } ?>

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
                                                            <input style="font-size:14px" type="text" class="form-control" id="foto_servico" name="foto_servico" value="">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="" style="color: #4e4e4e;"><b>Nome do Serviço:</b></label>
                                                            <br>
                                                            <input style="font-size:14px" type="text" class="form-control" id="nome_servico" name="nome_servico" value="">
                                                        </div>
                                                        <div class="dados-cliente form-group col-md-12">
                                                            <label for="" style="color: #4e4e4e;"><b>Descrição:</b></label>
                                                            <br>
                                                            <textarea class="form-control" name="descricao_servico" id="descricao_servico" cols="5" rows="3"></textarea>
                                                        </div>
                                                        <div class="dados-cliente form-group col-md-6">
                                                            <label for="" style="color: #4e4e4e;"><b>Valor:</b></label>
                                                            <br>
                                                            <input type="number" class="form-control"
                                                                aria-label="Amount (to the nearest dollar)" id="valor_servico" name="valor_servico" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="dados-cliente form-group col-md-6">
                                                            <label for=""
                                                                style="color: #4e4e4e;"><b>Duração:</b></label>
                                                            <br>
                                                            <input style="font-size:14px" type="time" class="form-control" id="duracao_servico" name="duracao_servico" value="">
                                                        </div>
                                                    </div>
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
                        Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300
                    </span>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>