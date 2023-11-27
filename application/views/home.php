<style>
    label {
        color: black;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .card-profile {
        width: 300px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem;
        background-color: white;
        border-radius: 1rem;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        margin-top: 40px;
    }

    .profile-info {
        text-align: center;
        margin-bottom: 1rem;
    }

    .profile-name {
        font-size: 18px;
        color: black;
    }

    .profile-desc {
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

    .btn {
        border: none;
        padding: 0.8em 1.9em;
        border-radius: 0.35rem;
        cursor: pointer;
        font-weight: 600;
        background-color: #1cc88a;
        color: white;
        margin-bottom: 15px;
        position: fixed;
        bottom: 0;
        right: 0;
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

                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                                            <div>
                                                <legend class="form-group" style="color: white; font-size: 18px;">
                                                    <strong>Serviços Oferecidos</strong>
                                                </legend>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group " style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                            <div class="card-container">
                                                <div class="card-profile">
                                                    <div class="card-header-profile">
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Corte de Cabelo</strong>
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
                                                        <div class="profile-info">
                                                            <h3 class="profile-name"><strong>Barba</strong></h3>
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
                                        </fieldset>

                                        <br>

                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 7px; border: 1px solid #879bc9;background: #879bc9;color: black;">
                                            <div>
                                                <legend class="form-group" style="color: white; font-size: 18px;">
                                                    <strong>Profissionais</strong>
                                                </legend>
                                            </div>
                                        </fieldset>


                                        <?php
                                        if (!empty($listar_dados_produtos)): ?>
                                                <?php foreach ($listar_dados_produtos as $produto): ?>
                                                        <fieldset class="form-group" style="border: 1px solid #ddd; border-radius: 4px; padding: 15px; border: 1px solid #879bc9;">
                                                            <div class="card-container">
                                                                <div class="flex-container space-between">
                                                                    <div class="col card">
                                                                        <div>
                                                                            <?php if (!empty($produto->nome_produto)): ?>
                                                                                    <h3><?php echo $produto->nome_produto; ?></h3>
                                                                                    <div class="col card">
                                                                                        <div class="img-placeholder">
                                                                                            <?php if (!empty($produto->foto_produto)): ?>
                                                                                                    <img style='display:block; width:100px;height:100px;' id='base64image' src='data:image/jpeg;base64,<?php echo $produto->foto_produto ?>' />
                                                                                            <?php endif; ?>
                                                                                        </div>
                                                                                        <div>
                                                                                            <h3>Wafaa</h3>
                                                                                            <p><i class="fa-solid fa-user"></i> Front End Web Developer
                                                                                            </p>
                                                                                            <p><i class="fa-solid fa-paper-plane"></i> <a href="mailto:wafaa_cr@outlook.com">Email Me</a></p>
                                                                                            <p><i class="fa-solid fa-location-dot"></i> Auckland, New
                                                                                                Zealand</p>
                                                                                        </div>
                                                                                    </div>
                                                                            </div><?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                <?php endforeach; ?>
                                        <?php else: ?>
                                                <p>Nenhum produto encontrado.</p>
                                        <?php endif; ?>

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
    <a class="btn" href="#" role="button" style="float: right; background-color: #1cc88a; color: white; margin-bottom: 15px; position: fixed;">Agenda
    </a>
</div>