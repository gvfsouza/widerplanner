<style>
    label {
        color: black;
    }

    .card-profile {
        width: 350px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem;
        background-color: white;
        border-radius: 1rem;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        margin: 12px;
        margin-top: 40px;
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
        overflow-x: auto;
        /* white-space: nowrap; */
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

    .col {
        width: 50%;
    }

    .card {
        border: 1px solid #eee;
        border-radius: 15px;
        padding: 20px;
        background-color: #fff;
        display: flex;
        column-gap: 20px;
        box-shadow: 1px 1px 16px -6px rgba(0, 0, 0, 0.5);
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
</style>

<br>

<div>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="background-color: white;">

                <div>
                    <h3 id="dados-cleinte" style="font-size: 25px;font-weight:bold"></h3>
                    <br>
                </div>

                <!-- FORMULÁRIO  -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="" role="tabpanel">
                        <form action="">
                            <div class="p-3 bg-white">
                                <div class="row">
                                    <div class="col-12">

                                        <?php foreach ($listar_estabelecimento as $value) { ?>
                                        <div class="form-group col-md-4">
                                            <label for="nome_estabelecimento" style="color: #787878">Nome
                                                Estabelecimento:</label>
                                            <br>
                                            <input style="font-size: 14px" type="text" class="form-control"
                                                id="nome_estabelecimento" name="nome_estabelecimento"
                                                value="<?php echo $value->nome_estabelecimento; ?>">
                                        </div>
                                        <?php } ?>


                                        <fieldset class="form-group"
                                            style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                                            <div>
                                                <legend class="form-group" style="color: white; font-size: 18px;">
                                                    <strong>Serviços Oferecidos</strong>
                                                </legend>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group "
                                            style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                            <div class="card-container">
                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="profile-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Corte de Cabelo</strong>
                                                            </h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;45,00 <i
                                                                class="fas fa-clock"></i> &nbsp;&nbsp;40 minutos</p>
                                                    </center>
                                                </div>

                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="profile-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Barba</strong></h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;45,00 <i
                                                                class="fas fa-clock"></i> &nbsp;&nbsp;40 minutos</p>
                                                    </center>
                                                </div>

                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="profile-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Sobrancelhas</strong></h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;15,00 <i
                                                                class="fas fa-clock"></i> &nbsp;&nbsp;10 minutos</p>
                                                    </center>
                                                </div>

                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="profile-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Pigmentação em
                                                                    barba</strong></h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;15,00 <i
                                                                class="fas fa-clock"></i> &nbsp;&nbsp;1 hora</p>
                                                    </center>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <br>

                                        <fieldset class="form-group"
                                            style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                                            <div>
                                                <legend class="form-group" style="color: white; font-size: 18px;">
                                                    <strong>Profissionais</strong>
                                                </legend>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group "
                                            style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                            <div class="card-container">
                                                <!-- <div class="card-profile" style="width: 300px;">
                                                    <div class="card-header-profile">
                                                        <center><img
                                                                src="https://images.unsplash.com/photo-1499557354967-2b2d8910bcca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=736&q=80"
                                                                alt=""
                                                                style="width: 7.5rem; right: 7.5rem; margin-top: -70px; border-radius: 20px">
                                                        </center>
                                                        <br><br><br><br>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Nome Completo</strong></h3>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p style="font-size: 14px">
                                                            Idade: <br>
                                                            Profissão: <br>
                                                            Quanto tempo está na área:</p>
                                                    </div>
                                                </div> -->

                                                <!-- <div class="card-profile" style="width: 300px;">
                                                    <div class="card-header-profile">
                                                        <center><img
                                                                src="https://images.unsplash.com/photo-1499557354967-2b2d8910bcca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=736&q=80"
                                                                alt=""
                                                                style="width: 7.5rem; right: 7.5rem; margin-top: -70px; border-radius: 20px">
                                                        </center>
                                                        <br><br><br><br>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Nome Completo</strong></h3>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p style="font-size: 14px">
                                                            Idade: <br>
                                                            Profissão: <br>
                                                            Quanto tempo está na área:</p>
                                                    </div>
                                                </div> -->

                                                <div class="flex-container space-between">
                                                    <div class="col card">
                                                        <div class="img-placeholder">
                                                            <img
                                                                src="https://images.unsplash.com/photo-1530797195762-6e542a0f1843?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc5MTY2MjE&ixlib=rb-1.2.1&q=80">
                                                        </div>
                                                        <div>
                                                            <h3>Wafaa</h3>
                                                            <p><i class="fa-solid fa-user"></i> Front End Web Developer
                                                            </p>
                                                            <p><i class="fa-solid fa-paper-plane"></i> <a
                                                                    href="mailto:wafaa_cr@outlook.com">Email Me</a></p>
                                                            <p><i class="fa-solid fa-location-dot"></i> Auckland, New
                                                                Zealand</p>
                                                            <span style="margin: 1px;" title="Excluir" id="13"
                                                                class="btn btn-sm btn-danger excluir_usuario"><i
                                                                    class="fas fa-trash-alt"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col card">
                                                        <div class="img-placeholder">
                                                            <img
                                                                src="https://images.unsplash.com/photo-1614130946015-d5a7a3276fea?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc5MTY4MTU&ixlib=rb-1.2.1&q=80">
                                                        </div>
                                                        <div>
                                                            <h3>Wafaa</h3>
                                                            <p><i class="fa-solid fa-user"></i> Front End Web Developer
                                                            </p>
                                                            <p><i class="fa-solid fa-paper-plane"></i> <a
                                                                    href="mailto:wafaa_cr@outlook.com">Email Me</a></p>
                                                            <p><i class="fa-solid fa-location-dot"></i> Auckland, New
                                                                Zealand</p>
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
    <a class="btn" href="#" role="button"
        style="float: right; background-color: #1cc88a; color: white; margin-bottom: 15px; position: fixed;">Agenda
    </a>
</div>