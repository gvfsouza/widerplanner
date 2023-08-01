
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
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.6);
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
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.4);
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

        .status {
            list-style: none;
            display: flex;
            text-align: center;
            line-height: 1rem;
            margin-bottom: 1.3rem;
        }

        .status-value {
            color: #212121;
            font-weight: 700;
        }

        .status-text {
            font-size: 0.8rem;
            color: #7c7c7d;
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
            margin-left: 2.5rem;
        }
    </style>

    <br>

    <div>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3" style="background-color: white;">

                    <div>
                        <h3 id="dados-cleinte" style="font-size: 25px;font-weight:bold">Perfil Estabelecimento</h3>
                        <br>
                    </div>

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
                                                        <strong>Dados do Estabelecimento</strong>
                                                    </legend>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                                <div class="row">
                                                    <div style="margin-left:10px;"></div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="" style="color: #77787a;"></label>
                                                                <br>
                                                                <input style="font-size:14px" type="text" class="form-control" id="" name="" value="">
                                                            </div>
                                                            <div class="dados-cliente form-group col-md-6">
                                                                <label for="" style="color: #77787a;">:</label>
                                                                <br>
                                                                <input type="text" class="form-control" id="" name="">
                                                            </div>
                                                            <div class="dados-cliente form-group col-md-4">
                                                                <label for="" style="color: #77787a;">:</label>
                                                                <br>
                                                                <input type="" class="form-control" id="" name="" value="">
                                                            </div>
                                                            <div class="dados-cliente form-group col-md-2">
                                                                <label for="" style="color: #77787a;">:</label>
                                                                <br>
                                                                <input style="font-size:14px" type="text" class="form-control" id="" name="" value="">
                                                            </div>
                                                            <div class="dados-cliente col-md-6">
                                                                <label for="" style="color: #77787a;">:</label>
                                                                <input style="font-size:14px" type="text" class="form-control" id="" name="" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <br><br><br><br>

                                            <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                                                <div>
                                                    <legend class="form-group" style="color: white; font-size: 18px;">
                                                        <strong>Serviços Oferecidos</strong>
                                                    </legend>
                                                </div>
                                            </fieldset>

                                            <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                                <div class="card-container">
                                                    <div class="card-profile">
                                                        <div class="card-header-profile">
                                                            <div class="profile-image"></div>
                                                            <div class="profile-info">
                                                                <h3 class="profile-name"><strong>Mechas</strong></h3>
                                                                <br>
                                                                <p class="profile-desc">Descrição (se tiver)</p>
                                                            </div>
                                                        </div>
                                                        <div class="profile-card-body">
                                                            <ul class="status">
                                                                <li>
                                                                    <span class="status-value">R$</span>
                                                                    <span class="status-text">250,00</span>
                                                                </li>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <li>
                                                                    <span class="status-value"><i class="fas fa-clock"></i></span>
                                                                    <span class="status-text">02h00</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-profile">
                                                        <div class="card-header-profile">
                                                            <div class="profile-image"></div>
                                                            <div class="profile-info">
                                                                <h3 class="profile-name"><strong>Corte</strong></h3>
                                                                <br>
                                                                <p class="profile-desc">Descrição (se tiver)</p>
                                                            </div>
                                                        </div>
                                                        <div class="profile-card-body">
                                                            <ul class="status">
                                                                <li>
                                                                    <span class="status-value">R$</span>
                                                                    <span class="status-text">40,00</span>
                                                                </li>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <li>
                                                                    <span class="status-value"><i class="fas fa-clock"></i></span>
                                                                    <span class="status-text">30min</span>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="card-profile">
                                                        <div class="card-header-profile">
                                                            <div class="profile-image"></div>
                                                            <div class="profile-info">
                                                                <h3 class="profile-name"><strong>Manicure</strong></h3>
                                                                <br>
                                                                <p class="profile-desc">Descrição (se tiver)</p>
                                                            </div>
                                                        </div>
                                                        <div class="profile-card-body">
                                                            <ul class="status">
                                                                <li>
                                                                    <span class="status-value">R$</span>
                                                                    <span class="status-text">35,00</span>
                                                                </li>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <li>
                                                                    <span class="status-value"><i class="fas fa-clock"></i></span>
                                                                    <span class="status-text">01h00</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="card-profile">
                                                        <div class="card-header-profile">
                                                            <div class="profile-image"></div>
                                                            <div class="profile-info">
                                                                <h3 class="profile-name"><strong>Progressiva</strong></h3>
                                                                <br>
                                                                <p class="profile-desc">Descrição (se tiver)</p>
                                                            </div>
                                                        </div>
                                                        <div class="profile-card-body">
                                                            <ul class="status">
                                                                <li>
                                                                    <span class="status-value">R$</span>
                                                                    <span class="status-text">310,00</span>
                                                                </li>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <li>
                                                                    <span class="status-value"><i class="fas fa-clock"></i></span>
                                                                    <span class="status-text">03h30</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="card-profile">
                                                        <div class="card-header-profile">
                                                            <div class="profile-image"></div>
                                                            <div class="profile-info">
                                                                <h3 class="profile-name"><strong>Pigmentação</strong></h3>
                                                                <br>
                                                                <p class="profile-desc">Descrição (se tiver)</p>
                                                            </div>
                                                        </div>
                                                        <div class="profile-card-body">
                                                            <ul class="status">
                                                                <li>
                                                                    <span class="status-value">R$</span>
                                                                    <span class="status-text">310,00</span>
                                                                </li>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <li>
                                                                    <span class="status-value"><i class="fas fa-clock"></i></span>
                                                                    <span class="status-text">03h30</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="card-profile">
                                                        <div class="card-header-profile">
                                                            <div class="profile-image"></div>
                                                            <div class="profile-info">
                                                                <h3 class="profile-name"><strong>Progressiva</strong></h3>
                                                                <br>
                                                                <p class="profile-desc">Descrição (se tiver)</p>
                                                            </div>
                                                        </div>
                                                        <div class="profile-card-body">
                                                            <ul class="status">
                                                                <li>
                                                                    <span class="status-value">R$</span>
                                                                    <span class="status-text">310,00</span>
                                                                </li>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <li>
                                                                    <span class="status-value"><i class="fas fa-clock"></i></span>
                                                                    <span class="status-text">03h30</span>
                                                                </li>
                                                            </ul>
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
                </div>
            </div>
            <a class="btn" href="#" role="button" style="float: right; background-color: #1cc88a; color: white">Agendar </a> <br><br>
        </div>