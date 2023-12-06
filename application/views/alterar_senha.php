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

<div>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="background-color: white;">

                <!-- FORMULÁRIO  -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="" role="tabpanel">
                        <form action="" method="POST">
                            <div class="p-3 bg-white">
                                <div class="row">
                                    <div class="col-12">
                                        <?php if ($this->session->flashdata('sucesso')) { ?>
                                            <div class="alert alert-success " role="alert">
                                                <?php echo $this->session->flashdata('sucesso'); ?>
                                            </div>
                                        <?php } ?>

                                        <?php if ($this->session->flashdata('erro')) { ?>
                                            <div class="alert alert-danger " role="alert">
                                                <?php echo $this->session->flashdata('erro'); ?>
                                            </div>
                                        <?php } ?>

                                        <br>

                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                                            <div>
                                                <legend class="form-group" style="color: white; font-size: 18px;">
                                                    <strong>Alterar senha</strong>
                                                </legend>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                            <div class="row">
                                                <div style="margin-left:10px;"></div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="senha_atual" style="color: #77787a;">Senha atual:</label>
                                                            <br>
                                                            <input style="font-size:14px" type="password" class="form-control" id="senha_atual" name="senha_atual">
                                                            <!-- <i class="fas fa-eye-slash"></i> -->
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="nova_senha" style="color: #77787a;">Nova senha:</label>
                                                            <br>
                                                            <input type="password" class="form-control" id="nova_senha" name="nova_senha">
                                                            <!-- <i class="fas fa-eye-slash"></i> -->
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="confirma_senha" style="color: #77787a;">Confirmação nova senha</label>
                                                            <br>
                                                            <input type="password" class="form-control" id="confirma_senha" name="confirma_senha">
                                                            <!-- <i class="fas fa-eye-slash"></i> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                        </fieldset>

                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <a href="#"><button class="btn btn active" style="background-color: #879bc9; color: white; margin-top:20px; height:40px; width:150px; border-radius:5px solid black; cursor:pointer;float: right; margin-right: 17px;" type="submit" name="salvar">Salvar</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

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