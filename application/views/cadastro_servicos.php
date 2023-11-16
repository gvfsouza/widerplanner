<div class="container-fluid" style="margin-top:30px">
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: white;">

            <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                <div>
                    <legend class="form-group" style="color: white; font-size: 18px;">
                        <strong>Cadastro de Serviços</strong>
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

                    <?php if ($this->session->flashdata('erro')) : ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('erro'); ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="p-3 bg-white">
                            <div class="row">
                                <div class="col-12">
                                    <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                        <div class="row">
                                            <div style="margin-left:10px;"></div>
                                            <div class="col">
                                                <div class="row">
                                                    <div style="margin-left:10px;"></div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="form-group col-md-3">
                                                                <label for=""><b>Foto:</b></label>
                                                                <br>
                                                                <input style="font-size:14px" type="file" class="form-control arquivo" id="arquivo" name="arquivo" accept="image/*">

                                                                <div class="nome-arquivos col mb-3">
                                                                    <div class="arquivo_"></div>
                                                                </div>

                                                                <script>
                                                                    function retornaNomeArquivo() {
                                                                        $(".arquivo").change(function() {
                                                                            var filename = $(this).val().replace(/C:\\fakepath\\/i, '')
                                                                            $(this).parent().parent().parent().next().find('.arquivo_').html('<i class="fas fa-folder-open"></i> ' + filename);
                                                                        });
                                                                    }
                                                                    retornaNomeArquivo()
                                                                </script>
                                                            </div>

                                                            <div class="form-group col-md-3">
                                                                <label for=""><b>Nome:</b></label>
                                                                <br>
                                                                <input style="font-size:14px" type="text" class="form-control" id="nome_servico" name="nome_servico" value="">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for=""><b>Valor:</b></label>
                                                                <br>
                                                                <input type="number" class="form-control" id="valor_servico" name="valor_servico" value="">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for=""><b>Duração:</b></label>
                                                                <br>
                                                                <input style="font-size:14px" type="time" class="form-control" id="duracao_servico" name="duracao_servico" value="">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for=""><b>Descrição do Serviço:</b></label>
                                                                <br>
                                                                <textarea type="text" class="form-control" id="descricao_servico" name="descricao_servico" maxlength="14" rows="3" cols="50"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button href="<?php echo base_url(); ?>/cadastro_servicos/" type="submit" name="salvar" class="btn-lg btn" style="border: none;background-color: #82a4ef;color: white;">Salvar</button>
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
                <br><br>
            </div>
            <br>
        </div>
    </div>
</div>