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

        /* 
        .card-footer {
            padding: var(--padding);
            padding-top: 0;
        } */

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

        .card-header.header-img {
            padding: 0;
            overflow: hidden;
        }

        .card-header.header-img>img {
            display: block;
            width: 100%;
            max-height: 200px;
            /* aspect-ratio: 16 / 9; */
            object-fit: cover;
            object-position: center;
            /* transition: filter 200ms ease-in-out; */
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

        }

        /* 
        .card:hover>.card-header.header-img>img {
            filter: brightness(0.9);
        } */
    </style>

    <div class="row justify-content-center d-flex align-items-center h-100 w-100">
        <div class="col-xl-6 col-lg-12 col-md-9" style="display: contents">
            <div class="card-container d-flex justify-content-around">
                <div class="card" style="max-width: 270px;width: 270px; border: 2px solid #B98F56">
                    <header class="card-header header-img">
                        <img src="img/pintar-cabelo.jpg" alt="">
                        <p class="header-title">Pintar o cabelo</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$250,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 02h</div>
                    <!-- <div class="card-footer">
                        <button class="btn">Buy</button>
                        <button class="btn">More info</button>
                    </div> -->
                </div>
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/corte-masculino.jpg" alt="">
                        <p class="header-title">Corte Masculino + Barba</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$65,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 50min</div>
                </div>
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/progressiva.jpg" alt="">
                        <p class="header-title">Progressiva</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$320,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 03h 30min</div>
                    <!-- <div class="card-footer">
                        <button class="btn">Buy</button>
                        <button class="btn">More info</button>
                    </div> -->
                </div>
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/selagem.jpg" alt="">
                        <p class="header-title">Selagem</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$120,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 01h</div>
                    <!-- <div class="card-footer">
                        <button class="btn">Buy</button>
                        <button class="btn">More info</button>
                    </div> -->
                </div>
            </div>
        </div>

    </div>

    <div class="row justify-content-center d-flex align-items-center h-100 w-100">
        <div class="col-xl-6 col-lg-12 col-md-9" style="display: contents">
            <div class="card-container d-flex justify-content-around">
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/coloracao-barba.jpg" alt="">
                        <p class="header-title">Coloração Barba</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$50,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 40min</div>
                    <!-- <div class="card-footer">
                        <button class="btn">Buy</button>
                        <button class="btn">More info</button>
                    </div> -->
                </div>
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/hidratacao.jpg" alt="">
                        <p class="header-title">Hidratação</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$60,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 45min</div>
                </div>
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/corte-infantil.jpg" alt="">
                        <p class="header-title">Corte Infantil</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$25,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 30min</div>
                    <!-- <div class="card-footer">
                        <button class="btn">Buy</button>
                        <button class="btn">More info</button>
                    </div> -->
                </div>
                <div class="card" style="max-width: 270px;width: 270px;">
                    <header class="card-header header-img">
                        <img src="img/design-sobrancelha.jpg" alt="">
                        <p class="header-title">Design de Sobrancelhas</p>
                    </header>
                    <div class="card-body"><i class="fas fa-dollar-sign"></i> R$40,00</div>
                    <div class="card-body"><i class="fas fa-clock"></i> 40min</div>
                    <!-- <div class="card-footer">
                        <button class="btn">Buy</button>
                        <button class="btn">More info</button>
                    </div> -->
                </div>
            </div>
        </div>

    </div>

</body>

</html>