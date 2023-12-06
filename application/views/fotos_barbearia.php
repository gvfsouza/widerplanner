<style>
    img {
        border-radius: 5px;
        max-width: 180px;
        width: 100%;
        height: auto;
        margin: 8px;
    }

    .product-tumb img {
        max-width: 100%;
        max-height: 100%;
    }

    .card img {
        max-width: 250px;
        transform: translateY(-15%);
    }

    .img-placeholder {
        position: relative;
        max-height: 150px;
        max-width: 250px;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.75);
    }
</style>

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

                    <?php if ($this->session->flashdata('sucesso')) {    ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('sucesso'); ?>
                        </div>
                    <?php } ?>
                    <!----------------FIM-----MENSAGEM DE SUCESSO AO CADASTRAR ---------------->

                    <!----------------INICIO-----MENSAGEM DE ERRO AO CADASTRAR ---------------->
                    <?php if ($this->session->flashdata('erro')) : ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('erro'); ?>
                        </div>
                    <?php endif; ?>
                    <!----------------FIM-----MENSAGEM DE ERRO AO CADASTRAR ---------------->

                        <div class="container-fluid p-3 bg-white">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <?php if ($this->session->fk_usuario != '' && $this->session->profissional == 'sim'): ?>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="fotos_lugar"><b>Inserir uma Foto:</b></label>
                                            <input style="font-size: 14px" type="file" class="form-control" id="fotos_lugar" name="fotos_lugar" accept="image/*">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <br>
                                            <label class="invisible">&nbsp;</label>
                                            <button type="submit" name="salvar" class="btn-lg btn" style="border: none;background-color: #82a4ef;color: white;">Salvar</button>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                                <br><br>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <?php if (!empty($listar_fotos)) : ?>
                                                <?php foreach ($listar_fotos as $value) : ?>
                                                    <div class="col-md-4 mb-3">
                                                        <?php if (!empty($value->fotos_lugar)) : ?>
                                                            <div class="img">
                                                                <center><img id='base64image' src='data:image/jpeg;base64,<?php echo $value->fotos_lugar; ?>' /></center>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <div class="col-12">
                                                    <div class="alert alert-danger" role="alert">
                                                        Nenhuma Foto Encontrada!
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
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
</div>