

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

    label {
        color: black;
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

    tr, th{
        text-align: center;
    }
</style>

<div>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="background-color: white;">

                <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                    <div>
                        <legend class="form-group" style="color: white; font-size: 18px;">
                            <strong>Agendamentos Realizados</strong>
                        </legend>
                    </div>
                </fieldset>

                <!-- FORMULÁRIO  -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="" role="tabpanel">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col" style="font-size: 18px; color: #002b6c; font-weight: bold;">Cliente</th>
                                <th scope="col" style="font-size: 18px; color: #002b6c; font-weight: bold;">Data</th>
                                <th scope="col" style="font-size: 18px; color: #002b6c; font-weight: bold;">Hora</th>
                                <th scope="col" style="font-size: 18px; color: #002b6c; font-weight: bold;">Serviço</th>
                                <th scope="col" style="font-size: 18px; color: #002b6c; font-weight: bold;">Profissional</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($listar_agendamentos_realizados as $key => $value) { ?>
                                        <tr>
                                        <th scope="row"><?php echo $value->nome_usuario; ?></th>
                                        <td><?php echo formata_data($value->data_agenda); ?></td>
                                        <td><?php echo $value->horarios_semana; ?></td>
                                        <?php if (!empty($listar_servicos_agendamentos[$key])) { ?>
                                            <td><b><?php echo $listar_servicos_agendamentos[$key]->servicos; ?></b></td>
                                        <?php } ?>
                                        <?php if (!empty($listar_profissionais_agendamentos)) { ?>
                                                <td><b><?php echo $listar_profissionais_agendamentos[$key]->nome_usuario; ?></b></td>
                                        <?php } ?>
                                    </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="col-12 text-center">
                    <span class="text-center" style="text-align: center">Sistema desenvolvido para cunho estudantil <br>
                        Projeto de Conclusão de Curso - Superior de
                        Tecnologia em Análise e Deselvolvimento de Sistemas <br> Centro Universitário Nossa Senhora do
                        Patrocínio <br> Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300
                    </span>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
