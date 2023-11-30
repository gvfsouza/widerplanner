<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');

    * {
        font-family: Quicksand;
    }

    .nav-item .nav-link {
        display: flex;
        align-items: center;
        margin: 8px 0;
        padding: 14px 12px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .navbar-nav.sidebar {
        margin: 20px;
        border-radius: 15px;
        background-color: white;
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

    .nav-item .nav-link .link {
        margin-right: 14px;
        font-size: 20px;
        color: white;
    }

    .sidebar {
        width: 13.5rem;
        min-height: 100vh;
    }

    .sidebar .nav-item .collapse .collapse-inner .collapse-item:hover, .sidebar .nav-item .collapsing .collapse-inner .collapse-item:hover {
        background-color: #ffffff;
        color: #879bc9;
    }
</style>
   
    <ul class="navbar-nav sidebar " id="accordionSidebar" style="background-color: #ffffff;">
   
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="col-md-12">
                <br>
                <p style="text-align:center;font-size: 20px;color: #879bc9;font-weight: bold;">WiderPlanner
                <br>
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>home">
               <i class="fas fa-home icon" style="color:#879bc9"></i>
               <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Home</span>
            </a>
       </li>

       <li class="nav-item">
           <a title="Gerenciar Usuários" class="nav-link" href="<?php echo base_url(); ?>agendamento">
                <i class="fas fa-solid fa-clock icon" style="color:#879bc9"></i>
                <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Agendar Horário </span>
           </a>
       </li>

       <?php if ($this->session->fk_usuario != '' && $this->session->profissional == 'sim'): ?>
                <li class="nav-item">
                    <a title="Gerenciar Usuários" class="nav-link" href="<?php echo base_url(); ?>listar_agendamentos">
                        <i class="fas fa-solid fa-list-check icon" style="color:#879bc9"></i>
                        <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Agendamentos Realizados </span>
                    </a>
                </li>
        <?php endif; ?>

        <?php if ($this->session->fk_usuario != '' && $this->session->profissional != 'sim'): ?>
           <li class="nav-item">
               <a title="Gerenciar Usuários" class="nav-link" href="<?php echo base_url(); ?>perfil_cliente">
                <i class="fas fa-user icon" style="color:#879bc9"></i>
                   <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Perfil </span>
               </a>
           </li>
       <?php endif; ?>

       <?php if ($this->session->fk_usuario != '' && $this->session->profissional == 'sim'): ?>
           <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReports" style="color: #879bc9;">
                    <i class="fas fa-sharp fa-solid fa-address-card icon" style="color:#879bc9"></i>
                    <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Cadastros </span>
                </a>
                <div id="collapseReports" class="collapse" aria-labelledby="headingReports" data-parent="#accordionSidebar">
                    <div class="bg py-2 collapse-inner rounded" style="background-color: #D4DDF1;">
                        <a class="collapse-item" href="<?php echo base_url(); ?>cadastro_servicos"><i class=" fas fa-solid fa-scissors icon" style="background-color: white;"></i><b>Cadastro de Serviços</b></a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>cadastro_produto"><b>Cadastro de Produtos</b></a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>cadastro_funcionario"><b>Cadastro de Profissionais</b></a>
                    </div>
                </div>
            </li>
        <?php endif; ?>
       
        <li class="nav-item">
           <a title="Gerenciar Usuários" class="nav-link" href="<?php echo base_url(); ?>alterar_senha">
               <i class="fas fa-lock icon" style="color:#879bc9"></i>
               <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Alterar senha            
            </span>
           </a>
       </li>

       <li class="nav-item">
            <a title="Sair" class="nav-link logout-link" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt icon" style="color:#879bc9"></i>
                <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Sair</span>
            </a>
        </li>


       <!-- Divider -->
       <hr class="sidebar-divider d-none d-md-block">
   </ul>
   
   <div id="content-wrapper" class="d-flex flex-column" style="background-color: #d9e2f7">
  