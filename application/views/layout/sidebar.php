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
        background-color: #F0F3F9;
      }


       /* cor do ícone quando passa o mouse */
       .nav-item .nav-link:hover .icon {
           font-size: 18px;
       }

       /* cor do link quando passa o mouse */
       .nav-item .nav-link:hover .link {
            font-size: 18px;
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

   </style>
   
   <ul class="navbar-nav  sidebar " id="accordionSidebar" style="background-color: #ffffff;">
   
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
           <a class="nav-link" href="https://widerplanner.agsete.com.br/">
               <i class="fas fa-home icon" style="color:#879bc9"></i>
               <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Home</span></a>
       </li>

       <li class="nav-item">
           <a title="Gerenciar Usuários" class="nav-link" href="https://widerplanner.agsete.com.br/perfil_cliente">
            <i class="fas fa-user icon" style="color:#879bc9"></i>
               <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Perfil </span>
           </a>
       </li>

       <!-- <li class="nav-item">
           <a title="Gerenciar Usuários" class="nav-link" href="#">
               <i class="fas fa-users icon" style="color:#879bc9"></i>
               <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Serviços</span>
           </a>
       </li> -->

       <li class="nav-item">
           <a title="Gerenciar Usuários" class="nav-link" href="">
               <i class="fas fa-user-plus icon" style="color:#879bc9"></i>
               <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Cadastros            
            </span>
           </a>
       </li>

       <li class="nav-item">
           <a title="Gerenciar Usuários" class="nav-link" href="https://widerplanner.agsete.com.br/alterar_senha">
               <i class="fas fa-lock icon" style="color:#879bc9"></i>
               <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Alterar senha            
            </span>
           </a>
       </li>

       <li class="nav-item">
           <a title="Gerenciar Usuários" class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
               <i class="fas fa-sign-out-alt icon" style="color:#879bc9"></i>
               <span class="link" style="color:#000000d9;font-weight: bold;font-size:17px">Sair</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider d-none d-md-block">
   </ul>
   <!-- End of Sidebar -->
   <!-- Content Wrapper -->
   
   <div id="content-wrapper" class="d-flex flex-column" style="background-color: #d9e2f7">