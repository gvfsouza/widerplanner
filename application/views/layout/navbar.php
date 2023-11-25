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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Conteúdo do seu modal aqui -->
        </div>
    </div>
</div>

    <script>
       // Adicionar funcionalidade ao botão de toggle
    document.getElementById('sidebarToggleTop').addEventListener('click', function() {
        // Adicione aqui o código para exibir/ocultar o sidebar
        document.getElementById('accordionSidebar').classList.toggle('toggled');
    });
    </script>
</nav>