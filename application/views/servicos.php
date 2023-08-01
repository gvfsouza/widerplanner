<style>
    .card-profile {
        width: 300px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem;
        background-color: white;
        border-radius: 1rem;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.6);
    }

    .profile-image {
        position: relative;
        top: -100px;
        border-radius: 50%;
        background-image: url(https://images.unsplash.com/photo-1499557354967-2b2d8910bcca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=736&q=80);
        width: 11rem;
        height: 11rem;
        background-position: center;
        background-size: cover;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.4);
    }

    .profile-info {
        text-align: center;
        margin-top: -3rem;
        margin-bottom: 1rem;
    }

    .profile-info.profile-name {
        color: #020d2c;
    }

    .profile-name{
        /* box-shadow: 0px 0px 10px #879bc9; */
        border-radius: 5px;
        background-color: #879bc9;
        font-size:22px;
        color:black;
    }

    .profile-info>.profile-desc {
        color: #666666;
        font-size: 0.9rem;
    }

    .status {
        list-style: none;
        display: flex;
        justify-content: space-between;
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
        justify-content: space-between;
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
        justify-content: space-between;
    }
    </style>

    <div class="card-container">
        <div class="card-profile">
            <div class="card-header-profile">
                <div class="profile-image"></div>
                <div class="profile-info">
                    <h3 class="profile-name">Mechas</h3>
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

                <div class="action">
                    <button class="btn btn-success" style="width: 100%;">Select</button>
                </div>
            </div>
        </div>
        <div class="card-profile">
            <div class="card-header-profile">
                <div class="profile-image"></div>
                <div class="profile-info">
                    <h3 class="profile-name">Corte</h3>
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

                <div class="action">
                    <button class="btn btn-success" style="width: 100%;">Select</button>
                </div>
            </div>

        </div>
        <div class="card-profile">
            <div class="card-header-profile">
                <div class="profile-image"></div>
                <div class="profile-info">
                    <h3 class="profile-name">Manicure</h3>
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

                <div class="action">
                    <button class="btn btn-success" style="width: 100%;">Select</button>
                </div>
            </div>
        </div>

        <div class="card-profile">
            <div class="card-header-profile">
                <div class="profile-image"></div>
                <div class="profile-info">
                    <h3 class="profile-name">Progressiva</h3>
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

                <div class="action">
                    <button class="btn btn-success" style="width: 100%;">Select</button>
                </div>
            </div>
        </div>
    </div>