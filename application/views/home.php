<style>
    label {
        color: black;
    }

    .card-profile {
        width: 250px;
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
        margin-top: -3rem;
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
                                                            <h3 class="profile-name"><strong>Mechas</strong></h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;310,00 <i
                                                                class="fas fa-clock"></i> &nbsp;&nbsp;03h30</p>
                                                    </center>
                                                </div>

                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="profile-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Corte</strong></h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;310,00 <i
                                                                class="fas fa-clock"></i> &nbsp;&nbsp;03h30</p>
                                                    </center>
                                                </div>

                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="profile-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Manicure</strong></h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;310,00 <i
                                                                class="fas fa-clock"></i> &nbsp;&nbsp;03h30</p>
                                                    </center>
                                                </div>

                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="profile-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Progressiva</strong></h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;310,00 <i
                                                                class="fas fa-clock"></i> &nbsp;&nbsp;03h30</p>
                                                    </center>
                                                </div>

                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="profile-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Pigmentação</strong></h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;310,00 <i
                                                                class="fas fa-clock"></i> &nbsp;&nbsp;03h30</p>
                                                    </center>
                                                </div>

                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <center>
                                                            <div class="profile-image"></div>
                                                        </center>
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Progressiva</strong></h3>
                                                            <br>
                                                            <p class="profile-desc">Descrição (se tiver)</p>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <p class="status-value">R$ &nbsp;310,00 <i
                                                                class="fas fa-clock"></i> &nbsp;&nbsp;03h30</p>
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
                                                <div class="card-profile" style="width: 300px;">
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
                                                </div>

                                                <div class="card-profile" style="width: 300px;">
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
                                                </div>

                                                <div class="card-profile" style="width: 300px;">
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
                                                </div>

                                                <div class="card-profile" style="width: 300px;">
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
                                                </div>

                                                <div class="card-profile" style="width: 300px;">
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
                                                    <p style="font-size: 14px">
                                                        Idade: <br>
                                                        Profissão: <br>
                                                        Quanto tempo está na área:
                                                    </p>
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
                <span class="text-center" style="text-align: center">Sistema desenvolvido para cunho estudantil <br> Projeto de Conclusão de Curso - Superior de
                    Tecnologia em Análise e Deselvolvimento de Sistemas <br> Centro Universitário Nossa Senhora do
                    Patrocínio <br> Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300</span>
            </div>
        </div>
    </div>
    <a class="btn" href="#" role="button" style="float: right; background-color: #1cc88a; color: white; margin-bottom: 15px">Agenda</a>
</div>