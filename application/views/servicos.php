<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome6/css/all.css">
    <link rel="stylesheet" href="css/app.css'">
    <link rel="stylesheet" href="css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="css/bootstrap-multiselect.min.css">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/sb-admin-2.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">

    <!-- Bootstrap core JavaScript-->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Teste</title>
</head>

<body>
    <style>
        /* @import "animate.css";
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.testimonial {
  display: flex;
  width: 100%;
  height: 100vh;
  align-items: center;
  justify-content: center;
  background-color: #f6f1f1;
  padding-top: 0px;
}

.testimonial-cards {
  max-width: 280px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin: 28px;
  background-color: white;
  box-shadow: 0 3px 10px rgb(0 0 0 / 0.5);
  border-radius: 10px;
}
.testimonial-cards .circulo {
  width: 150px;
  height: 150px;
  padding: 10px;
  border-radius: 100%;
  object-fit: cover;
}

.review {
  font-size: 15px;
  padding: 20px;
  font-family: Arial, Helvetica, sans-serif;
  line-height: 20px;
}

.testimonial-cards:hover {
  background: black;
  color: white;
  border: 5px solid white;
  transform: scale(1.1);
  transition: all 0.5s ease;
}

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --padding: 1rem;
        }

        .card-container {
            margin: 1rem;
            display: grid;
            gap: 1.5rem;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            algin-items: center;
        }

        .card {
            background: white;
            box-shadow: 0 2px 5px 1px rgba(0, 0, 0, .25);
            border-radius: .50rem;
            overflow: hidden;
        }

        .card-header .header-title {
            padding: 0 var(--padding);
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            margin-top: 1rem;
        }

        .card-body {
            color: rgb(173, 173, 173);
            font-size: .9rem;
            padding: 0 var(--padding);
            margin-bottom: 1rem;
        }

        .btn {
            border: none;
            background-color: hsl(257, 100%, 80%);
            padding: .75em 1.5em;
            border-radius: .25em;
            transition: background-color 200ms ease;
            font-weight: 500;
            margin-right: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: hsl(257, 100%, 72%);
        }

        .card-header.header-,circulo {
            padding: 0;
            overflow: hidden;
        }

        .card-header.header-.circulo>.circulo {
            display: block;
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            object-position: center;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        @media screen and (max-width: 768px) {
            .card-container {
                flex-direction: column;
                align-items: center;
                max-width: 550px;
            }
        } */

        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap");

    *,
    *::after,
    *::before {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
    }

    .card-profile {
        width: 300px;
        /* position: absolute; */
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

    <!-- <div class="row justify-content-center d-flex align-items-center h-100 w-100"> -->
        <div class="col-xl-6 col-lg-12 col-md-9" style="display: contents">
            <div class="card-container d-flex justify-content-around">
                <div class="card" style="max-width: 270px;width: 270px; border: 2px solid #B98F56">
                    <header class="card-header header-img">
                        <img src="img/pintar-cabelo.jpg" alt="">
                        <p class="header-title">Mechas</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$250,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 02h00</div>
                </div>
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/corte_feminino.jpg" alt="">
                        <p class="header-title">Corte</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$40,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 30min</div>
                </div>
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/selagem.jpg" alt="">
                        <p class="header-title">Manicure</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$35,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 01h</div>
                </div>
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/progressiva.jpg" alt="">
                        <p class="header-title">Progressiva</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$320,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 03h 30min</div>
                </div>
            </div>
        </div>

    </div>

    <!-- <div class="row justify-content-center d-flex align-items-center h-100 w-100"> -->
        <div class="col-xl-6 col-lg-12 col-md-9" style="display: contents">
            <div class="card-container d-flex justify-content-around">
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/hidratacao.jpg" alt="">
                        <p class="header-title">Hidratação Capilar</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$60,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 45min</div>
                </div>
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/coloracao-barba.jpg" alt="">
                        <p class="header-title">Designer de Sobrancelha</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$50,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 40min</div>
                </div>
                
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/corte-infantil.jpg" alt="">
                        <p class="header-title">Maquiagem</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$85,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 50min</div>
                </div>
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/design-sobrancelha.jpg" alt="">
                        <p class="header-title">Botox</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$70,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 40min</div>
                </div>
            </div>
        </div>

    </div>

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
</body>

</html>