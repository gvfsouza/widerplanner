<style>
        label {
            color: black;
        }

        .profile-image {
            position: relative;
            top: -70px;
            border-radius: 50%;
            background-image: url(https://images.unsplash.com/photo-1499557354967-2b2d8910bcca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=736&q=80);
            width: 6.5rem;
            height: 6.5rem;
            background-size: cover;
            position: center;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        }

        .profile-info {
            text-align: center;
            /* margin-top: -3rem; */
            margin-bottom: 1rem;
        }


        .profile-name {
            border-radius: 5px;
            font-size: 18px;
            color: black;
        }

        .profile-info>.profile-desc {
            color: #666666;
            font-size: 0.9rem;
        }

        .status-value {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .status-value i {
            margin-left: 10px;
        }

        .action {
            display: flex;
        }

        .btn {
            border: none;
            padding: 0.8em 1.9em;
            border-radius: 0.35rem;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-success {
            background: #879bc9;
            color: white;
        }

        .btn-outline {
            border: 1px solid;
            background: transparent;
            color: #133185;
        }

        .btn-success:hover {
            background: #1331859d;
            color: white;
        }

        .btn-outline:hover {
            border: 1px solid;
            background: transparent;
            color: #1331859d;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .flex-container {
            display: flex;
            column-gap: 15px;
            max-width: 1200px;
            width: 100%;
            max-width: 599px;
            margin: 0 auto;
            /* margin-top: 60px; */
        }

        .space-between {
            justify-content: space-between;
        }

        .card {
            border-radius: 15px;
            padding: 20px;
            -webkit-box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.5);
            -moz-box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.5);
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

        h3 {
            font-weight: 400;
        }

        p {
            font-weight: 300;
        }

        a {
            color: #888;
            text-decoration: none;
        }

        a:hover {
            color: inherit;
        }

        @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700');


        body {
            font-family: 'Roboto', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .product-card {
            width: 380px;
            position: relative;
            box-shadow: 0 2px 7px #dfdfdf;
            margin: 50px auto;
            border-radius: 19px;
            /* background: #fafafa; */
        }

        .product-tumb {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 300px;
            padding: 50px;
            /* background: #f0f0f0; */
        }

        .product-tumb img {
            max-width: 100%;
            max-height: 100%;
        }

        .product-details {
            padding: 30px;
        }

        .product-catagory {
            display: block;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            color: #ccc;
            margin-bottom: 18px;
        }

        .product-details h4 a {
            font-weight: 500;
            display: block;
            margin-bottom: 18px;
            text-transform: uppercase;
            color: #363636;
            text-decoration: none;
            transition: 0.3s;
        }

        .product-details h4 a:hover {
            color: #fbb72c;
        }

        .product-details p {
            font-size: 15px;
            line-height: 22px;
            margin-bottom: 18px;
            color: #999;
        }

        .product-bottom-details {
            overflow: hidden;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        .product-bottom-details div {
            float: left;
            width: 50%;
        }

        .product-price {
            font-size: 18px;
            color: #fbb72c;
            font-weight: 600;
        }

        .product-price small {
            font-size: 80%;
            font-weight: 400;
            text-decoration: line-through;
            display: inline-block;
            margin-right: 5px;
        }

        .product-links {
            text-align: right;
        }

        .product-links a {
            display: inline-block;
            margin-left: 5px;
            color: #e1e1e1;
            transition: 0.3s;
            font-size: 17px;
        }

        .product-links a:hover {
            color: #fbb72c;
        }

        /* cor do ícone quando passa o mouse */
        .nav-item .nav-link:hover .icon {
            font-size: 18px;
        }

        /* cor do link quando passa o mouse */
        .nav-item .nav-link:hover .link {
            font-size: 18px;X
        }

        .nav-item .nav-link .icon {
        margin-right: 14px;
        font-size: 20px;
        color: white;
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
                            <div class="p-3 bg-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <br>
                                        <img src="https://scontent-gru2-2.xx.fbcdn.net/v/t39.30808-6/302135953_502845391841930_8585948991976360589_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=TpFICO55swEAX9n1EQ0&_nc_ht=scontent-gru2-2.xx&oh=00_AfBT9HRfTe5yRcAsGZt3sDXK85JhzGBXzs-N63KIrkrQ-A&oe=656B55E5" alt="Logo Barbearia" style="width: 150px; height: 150px; border-radius: 15px">
                                    </div>
                                    <div class="col-md-6">
                                        <p style="font-size: 18px; text-align: end;">
                                            Barbearia GAVAZ <br>
                                            CNPJ: 31.458.001/0001-08 <br>
                                            Instagram: &nbsp;@barbeariagavaz <br><br>
                                            Dados de localização: <br>
                                            Av Dom Pedro I, 1226, Centro, Salto/SP - box 205 (ao lado do cinema)
                                        </p>
                                    </div>

                                    <div class="col-12">
                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                                            <div>
                                                <legend class="form-group" style="color: white; font-size: 18px;">
                                                    <strong>Serviços Oferecidos</strong>
                                                </legend>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group " style="border: 1px solid #ddd; border-radius: 4px; border: 1px solid #879bc9; display: flex; flex-wrap: wrap; justify-content: space-around;">
                                            <?php foreach ($listar_dados_servicos as $value) { ?>
                                                <div class="card-container" style="flex: 20%;">
                                                    <div class="card" style="margin-top: 30px; margin-bottom: 30px; margin-left: 5px; margin-right: 5px; width: 100%;">
                                                        <div class="card-header-profile">
                                                            <div class="profile-info">
                                                                <h3 class="profile-name"><strong><?php echo $value->nome_servico; ?></strong>
                                                                </h3>
                                                                <br>
                                                                <p class="profile-desc"><?php echo $value->descricao_servico; ?></p>
                                                            </div>
                                                        </div>
                                                        <center>
                                                            <p class="status-value">R$ &nbsp;<?php echo $value->valor_servico; ?>,00<i class="fas fa-clock"></i> &nbsp;&nbsp;<?php echo $value->duracao_servico; ?></p>
                                                        </center>
        
                                                        <?php if ($this->session->fk_usuario != '' && $this->session->profissional == 'sim'): ?>
                                                            <form method="POST" action="<?php echo base_url('home/excluir_servico/' . $value->id_servicos); ?>">
                                                            <!-- <a title="Excluir Serviço" class="nav-link" href="#" data-toggle="modal" data-target="#confirmacaoModalServico" data-id="<?php echo $value->id_servicos; ?>"> -->
                                                                <!-- <span class="btn btn-danger" style="font-size: 11px; float: right">Excluir</span> -->
                                                                <span style="width: 45px; margin: 1px;" title="Remover" id="<?= $value->id ?>" class="btn btn-sm btn-danger remover_usuario"><i class="fas fa-trash-alt"></i></span>
                                                            <!-- </a> -->


                                                                <!-- <button type="submit" class="btn btn-danger excluir-item" data-toggle="modal" data-target="#confirmacaoModalServico" data-id="<?php echo $value->id_servicos; ?>" style="font-size: 11px; float: right">Excluir</button> -->
                                                            </form>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </fieldset>

                                        <br>

                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                                            <div>
                                                <legend class="form-group" style="color: white; font-size: 18px;">
                                                    <strong>Profissionais</strong>
                                                </legend>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9; display: flex; flex-wrap: wrap; justify-content: space-around">
                                            <?php if (!empty($listar_dados_estabelecimento)): ?>
                                                <?php foreach ($listar_dados_estabelecimento as $value): ?>
                                                    <div class="card-container" style="flex: 0 0 300px; margin: 10px;">
                                                        <div class="col">
                                                            <?php if (!empty($value->nome_usuario)): ?>
                                                                <div class="card usuario" style="width: 100%; height: 380px;">
                                                                    <div class="img-placeholder">
                                                                        <?php if (!empty($value->foto_usuario)) { ?>
                                                                            <center><img style='display:block; width:100px;height:100px;' id='base64image' src='data:image/jpeg;base64,<?php echo $value->foto_usuario ?>' /></center>
                                                                        <?php } else { ?>
                                                                            <center><img src="https://scontent-gru2-2.xx.fbcdn.net/v/t39.30808-6/302135953_502845391841930_8585948991976360589_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=TpFICO55swEAX9n1EQ0&_nc_ht=scontent-gru2-2.xx&oh=00_AfBT9HRfTe5yRcAsGZt3sDXK85JhzGBXzs-N63KIrkrQ-A&oe=656B55E5" alt="Logo Barbearia"></center>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div>
                                                                        <br>
                                                                        <h3><?php echo $value->nome_usuario; ?></h3>
                                                                        <p><?php echo $value->descricao_usuario; ?></p>
                                                                        <p><i class="fas fa-solid fa-paper-plane icon"></i>&nbsp;<?php echo $value->email_usuario; ?></p>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <p>Nenhum produto encontrado.</p>
                                            <?php endif; ?>
                                        </fieldset>

                                        <br>

                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                                            <div>
                                                <legend class="form-group" style="color: white; font-size: 18px;">
                                                    <strong>Produtos</strong>
                                                </legend>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9; display: flex; flex-wrap: wrap; justify-content: space-around">
                                            <?php if (!empty($listar_dados_produtos)): ?>
                                                <?php foreach ($listar_dados_produtos as $value): ?>
                                                    <div class="card-container" style="flex: 310px; margin: 10px;">
                                                        <div class="col">
                                                            <?php if (!empty($value->nome_produto)): ?>
                                                                <div class="card usuario" style="width: 100%;">
                                                                <br>
                                                                    <div class="img">
                                                                        <?php if (!empty($value->foto_produto)) { ?>
                                                                            <center><img style="width:130px; height:140px" id='base64image' src='data:image/jpeg;base64,<?php echo $value->foto_produto ?>' /></center>
                                                                        <?php } else { ?>
                                                                            <center><img src="https://scontent-gru2-2.xx.fbcdn.net/v/t39.30808-6/302135953_502845391841930_8585948991976360589_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=TpFICO55swEAX9n1EQ0&_nc_ht=scontent-gru2-2.xx&oh=00_AfBT9HRfTe5yRcAsGZt3sDXK85JhzGBXzs-N63KIrkrQ-A&oe=656B55E5" alt="Logo Barbearia"></center>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div>
                                                                        <br>
                                                                        <h3 style="text-align: center"><?php echo $value->nome_produto; ?></h3>
                                                                        <p class="profile-desc" ><?php echo $value->descricao_produto; ?></p>
                                                                        <center>
                                                                            <p class="status-value" style="color: #879BC9; font-weight: bold;">R$ &nbsp;<b><?php echo $value->valor_produto; ?>,00</b></p>
                                                                        </center>

                                                                        <?php if ($this->session->fk_usuario != '' && $this->session->profissional == 'sim'): ?>
                                                                            <form method="POST" action="<?php echo base_url('home/excluir_produto/' . $value->id_produto); ?>">
                                                                                <button type="submit" class="btn btn-danger excluir-item" data-toggle="modal" data-target="#confirmacaoModalProduto" data-id="<?php echo $value->id_produto; ?>" style="font-size: 11px; float: right">Excluir</button>
                                                                            </form>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <p>Nenhum produto encontrado.</p>
                                            <?php endif; ?>
                                        </fieldset>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <span class="text-center" style="text-align: center">Sistema desenvolvido para cunho estudantil <br>
                        Projeto de Conclusão de Curso - Superior de
                        Tecnologia em Análise e Deselvolvimento de Sistemas <br> Centro Universitário Nossa Senhora do
                        Patrocínio <br> Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300</span>
                </div>
                <br>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal de Confirmação para Excluir Serviço -->
    <div class="modal fade" id="confirmacaoModalServico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelServico" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelServico">Confirmação de Exclusão</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir este serviço?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a id="confirmarExclusaoServico" href="#" class="btn btn-danger">Confirmar Exclusão</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cardDescriptions = document.querySelectorAll('.profile-desc');

            cardDescriptions.forEach(function(desc) {
                var fullText = desc.textContent;
                var truncatedText = fullText.slice(0, 120); // Defina o número de caracteres desejado

                desc.innerHTML = truncatedText + '<span class="read-more">... <a href="#" style="color:blue"><b>Ler mais</b></a></span>';

                var readMoreLink = desc.querySelector('.read-more a');

                readMoreLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    desc.innerHTML = fullText + '<span class="read-less"> <a href="#" style="color:blue"><b>Ler menos</b></a></span>';

                    var readLessLink = desc.querySelector('.read-less a');

                    readLessLink.addEventListener('click', function(e) {
                        e.preventDefault();
                        desc.innerHTML = truncatedText + '<span class="read-more">... <a href="#">Ler mais</a></span>';
                    });
                });
            });
        });

        $(document).ready(function () {
            $('.excluir-servico').on('click', function () {
                var id = $(this).data('id');
                $('#confirmarExclusaoServico').data('url', '<?php echo base_url('home/excluir_servico/'); ?>' + id);
            });

            $('#btnConfirmarExclusaoServico').on('click', function () {
                var url = $('#confirmarExclusaoServico').data('url');
                window.location.href = url;
            });
        });

    </script>