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
        .titulo-projeto {
            display: none;
        }
    }
</style>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <p style="color: #135A93 ; margin-top: 10px; font-weight: bold; font-size: 13px" class="titulo-projeto">WiderPlanner</p>
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow d-sm-none">
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
    </ul>
</nav>