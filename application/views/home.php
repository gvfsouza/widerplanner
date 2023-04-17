<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importanto CSS do template -->
    <link rel="stylesheet" href="css/bootstrap/app.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-multiselect.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-multiselect.min.css">
    <link rel="stylesheet" href="css/bootstrap/sb-admin-2.css">
    <link rel="stylesheet" href="css/bootstrap/sb-admin-2.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-select.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Wider Planner</title>
</head>

<style> 
    .alert {
        margin: 10px;
    }

    html {
        box-sizing: border-box !important;
        font-size: 100%;
    }

    *,
    *::before,
    *::after {
        box-sizing: inherit !important;
    }

   

    body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    main {
        flex-grow: 1;
        text-align: center;
        padding: 2rem 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
        justify-content: center;
    }

    
    .container,
    section:not(.page-header),
    .page-header>hgroup {
        width: 94%;
        margin-left: auto;
        margin-right: auto;
        max-width: 72ch;
    }

    section:not(.page-header) {
        text-align: center;
        padding: 2rem 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
        justify-content: center;
    }

    .page-header {
        padding: 2rem 0;
        background-color: whitesmoke;
        margin: 0;
        width: 100%;
    }

    .card {
        text-align: left;
        width: 392px;
        background-color: #fff;
        padding: 1.5em;
        border-radius: 2rem;
        transition: all 250ms ease-out;
        transform: translate3d(0, 0, 0);
        background: #fff;
        box-shadow: 0 8px 16px -4px rgba(0, 0, 0, 0.10);
        border-radius: 16px;
    }

    .card header {
        width: 100%;
        text-align: center;
        display: block;
        margin: 0 auto;
    }

    .card header img {
        border-radius: 0.75rem;
        display: block;
        width: 100%;
        height: auto;
        margin: 0 auto 1.5rem;
        text-align: center;
        box-shadow: 0 8px 16px -4px rgba(0, 0, 0, 0.5);
    }

    .card h1,
    .card h2,
    .card h4,
    .card h5,
    .card h6 {
        margin: 0 auto 1rem;
        line-height: 1.5;
    }

    .card time {
        display: block;
        color: darkgray;
        font-weight: 500;
        line-height: 1 !important;
        margin: 0 auto !important;
    }

    .card p:first-of-type {
        font-size: 14px;
        line-height: 1 !important;
        margin: 0 auto 0.5rem;
        margin: 1rem auto 1rem;
        display: block;
    }

    .card footer {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin: 0 auto;
        padding: 0;
        vertical-align: middle;
        align-content: center;
        align-items: center;
        margin-bottom: 0;
    }

    .card footer ul {
        width: 100%;
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        flex-direction: row;
        gap: 0.5rem;
    }

    .card footer ul:first-child {
        justify-content: flex-start;
    }

    .card footer ul:last-child {
        justify-content: flex-end;
    }

    .card footer ul li {
        margin: 0;
        padding: 0;
        list-style: none;
        display: inline-block;
    }

    .card svg {
        transition: all 200ms;
    }

    .card svg * {
        fill: #dadada;
        transition: all 200ms;
    }

    .card button,
    .card .button,
    .card [role="button"],
    .card [type="button"],
    .card [type="reset"],
    .card [type="submit"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        font-weight: 600;
        background-color: #dde6fd;
        border: 2px solid #dde6fd;
        color: #4671dd;
        border-radius: 2rem;
        padding: 0.25rem 0.75rem;
        vertical-align: middle;
        cursor: pointer;
        transition: all 200ms !important;
        outline: 2px solid rgba(70, 113, 221, 0.0);
        outline-offset: 0;
        transform: translate3d(0, 0, 0);
    }

    .card button:hover,
    .card .button:hover,
    .card [role="button"]:hover,
    .card [type="button"]:hover,
    .card [type="reset"]:hover,
    .card [type="submit"]:hover {
        background-color: #c8d4f8;
        border-color: #c8d4f8;
    }

    .card button:focus,
    .card .button:focus,
    .card [role="button"]:focus,
    .card [type="button"]:focus,
    .card [type="reset"]:focus,
    .card [type="submit"]:focus {
        background-color: #b2c3f5;
        border-color: #b2c3f5;
        outline: 2px solid rgba(70, 113, 221, 0.25);
        outline-offset: 2px;
    }

    .card button:active,
    .card .button:active,
    .card [role="button"]:active,
    .card [type="button"]:active,
    .card [type="reset"]:active,
    .card [type="submit"]:active {
        background-color: #849ff0;
        border-color: #849ff0;
        transform: translate3d(0, 2px, 0);
    }

    .card a,
    .card a:link,
    .card a:any-link {
        transition: all 120ms;
        cursor: pointer;
        border-radius: 2rem;
        outline: 2px solid rgba(70, 113, 221, 0.0);
        outline-offset: 0;
        padding: 0.25rem;
        display: inline-block;
        margin: 0;
        line-height: 1;
    }

    .card a:focus,
    .card a:link:focus,
    .card a:any-link:focus {
        background-color: rgba(70, 113, 221, 0.25);
        outline: 2px solid rgba(70, 113, 221, 0.25);
        outline-offset: 2px;
    }

    .card a:focus svg *,
    .card a:link:focus svg *,
    .card a:any-link:focus svg * {
        fill: #5c82e1;
    }

    .card a:active svg *,
    .card a:link:active svg *,
    .card a:any-link:active svg * {
        fill: #214bb5;
    }

    .card:hover {
        transform: translate3d(0, -2px, 0);
        box-shadow: 0 12px 24px -4px rgba(0, 0, 0, 0.10);
    }
</style>

<body>
    <h1>Teste</h1>
    <div class="alert alert-primary" role="alert">
        Atenção
    </div>

    <main>
        <section>
            <article class="card">
                <header>
                    <img src='https://images.unsplash.com/photo-1677348521205-7aa807a63b39?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2Nzg1MjIxMDE&ixlib=rb-4.0.3&q=80'
                        alt=''>
                </header>
                <h3 style="color: black;">Pintar o Cabelo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size: 18px;color: #B98F56;">R$180,00</span></h3>
                <p style="text-align: left;"><i class="fas fa-exclamation-triangle"></i> 01h30min</p>
            </article>
        </section>
    </main>

</body>

</html>
