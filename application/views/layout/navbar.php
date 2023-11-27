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
        <i class="fa fa-bars" style="color: #55a69fd9;"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0);" onclick="openLogoutModal()">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-900"></i>
                Sair
            </a>
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