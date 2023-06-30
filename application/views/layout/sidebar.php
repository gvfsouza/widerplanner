<style>
       .nav-item .nav-link {
           display: flex;
           align-items: center;
           margin: 8px 0;
           padding: 14px 12px;
           border-radius: 8px;
           text-decoration: none;
           transition: all 0.2s ease;
       }

       /* muda a cor do fundo dos itens quando passa o mouse */
       .nav-item .nav-link:hover {
           background-color: white;
       }

       /* cor do ícone quando passa o mouse */
       .nav-item .nav-link:hover .icon {
           color: #55a69fd9;
       }

       /* cor do link quando passa o mouse */
       .nav-item .nav-link:hover .link {
           color: #55a69fd9;
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

   </style><!-- Sidebar -->
   <ul class="navbar-nav  sidebar " id="accordionSidebar" style="background-color: #55a69fd9;">
       <!-- Sidebar - Brand -->
       <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('home') ?>">
           <div class="sidebar-brand-icon ">
               <img src="https://www.indaiatuba.sp.gov.br/_layout/images/brasao.png" class="img-fluid" style=" margin-top:10px;max-width: 35%; min-width: 35%;">
           </div>
       </a> -->

       <li class="nav-item">
           <a class="nav-link" href="<?php base_url('home') ?>home">
               <i class="fas fa-home icon"></i>
               <span class="link">Home</span></a>
       </li>

       <li class="nav-item">
           <a title="Gerenciar Usuários" class="nav-link" href="<?php base_url(); ?>perfil_cliente">
               <i class="fas fa-syringe icon"></i>
               <span class="link">Perfil </span>
           </a>
       </li>

       <li class="nav-item">
           <a title="Gerenciar Usuários" class="nav-link" href="<?php base_url(); ?>servicos">
               <i class="fas fa-users icon"></i>
               <span class="link">Serviços</span>
           </a>
       </li>

       <li class="nav-item">
           <a title="Gerenciar Usuários" class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
               <i class="fas fa-sign-out-alt icon"></i>
               <span class="link">Sair</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider d-none d-md-block">
   </ul>
   <!-- End of Sidebar -->
   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">