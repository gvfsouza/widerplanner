<style>
    span {
        font-size: 12px;
    }

    @media (max-width: 300px) {
        strong {
            font-size: 10px;
        }

        span {
            font-size: 9px;
        }
    }

    @media (max-width: 780px) {
        .titulo-portal-servidor {
            display: none;
        }
    }
</style>

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"  style="border-radius: 10px 10px 10px 10px; margin-left: 20px; margin-right: 20px; margin-top: 20px"> 

    <p style="color: #66afa8; margin-top: 5px; font-weight: bold; font-size: 13px"></p>
   

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars" style="color: #879BC9;"></i>
    </button>

    <!-- <img src="https://scontent-gru2-2.xx.fbcdn.net/v/t39.30808-6/302135953_502845391841930_8585948991976360589_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=TpFICO55swEAX9n1EQ0&_nc_ht=scontent-gru2-2.xx&oh=00_AfBT9HRfTe5yRcAsGZt3sDXK85JhzGBXzs-N63KIrkrQ-A&oe=656B55E5" alt="Logo Barbearia" style="width: 60px; height:60px; border-radius: 10px"> -->
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <!-- Dropdown - User Information -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true" style="font-size: 28px; color: #434d64;">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p style="font-weight: bold;">Tem certeza de que deseja sair?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                            <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-primary">Sim</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>


        

    <script>
       // Adicionar funcionalidade ao botão de toggle
    document.getElementById('sidebarToggleTop').addEventListener('click', function() {
        // Adicione aqui o código para exibir/ocultar o sidebar
        document.getElementById('accordionSidebar').classList.toggle('toggled');
    });
    </script>
</nav>