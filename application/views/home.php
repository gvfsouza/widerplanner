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
                                                    <strong>Serviços Oferecidos</strong>
                                                </legend>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group " style="border: 1px solid #ddd; border-radius: 4px; border: 1px solid #879bc9; display: flex; flex-wrap: wrap; justify-content: space-around;">
                                            <?php foreach ($listar_dados_servicos as $value) { ?>
                                                <div class="card-container" style="flex: 0 0 20%;">
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

                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9; display: flex; flex-wrap: wrap;">
                                            <?php if (!empty($listar_dados_estabelecimento)) : ?>
                                                <?php foreach ($listar_dados_estabelecimento as $value) : ?>
                                                    <div class="card-container" style="flex: 0 0 300px; margin: 10px;">
                                                        <div class="col">
                                                            <?php if (!empty($value->nome_usuario)) : ?>
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
                                                                        <p><i class="fas fa-solid fa-paper-plane"></i>&nbsp;<?php echo $value->email_usuario; ?></p>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else : ?>
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

                                        <fieldset class="form-group " style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                            <div class="card-container">
                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="produto-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="produto"><strong>Corte de Cabelo</strong>
                                                            </h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;45,00 <i class="fas fa-clock"></i> &nbsp;&nbsp;40 minutos</p>
                                                    </center>
                                                </div>

                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="produto-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Barba</strong></h3>
                                                            <br>
                                                            <p class="produto-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;45,00</p>
                                                    </center>
                                                </div>

                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="produto-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Sobrancelhas</strong></h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;15,00 <i class="fas fa-clock"></i> &nbsp;&nbsp;10 minutos</p>
                                                    </center>
                                                </div>

                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="produto-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Pigmentação em
                                                                    barba</strong></h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;15,00 <i class="fas fa-clock"></i> &nbsp;&nbsp;1 hora</p>
                                                    </center>
                                                </div>
                                            </div>
                                            <a class="btn" href="#" role="button" style="float: right; background-color: #1cc88a; color: white; margin-bottom: 15px; position: fixed;">Agenda
                                            </a>
                                        </fieldset>

                                        <br>
                                    </div>
                                </div>
                            </div>
                        </form>
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
</script>