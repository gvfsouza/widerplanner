<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Card</title>
</head>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@100;300;400;500;700;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap");

    * {
        font-family: "poppins", sans-serif;

    }

    body {
        background-color: #d7e0f6;
        background-size: 400% 400%;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        width: 412px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: auto;
        padding: 20px;
        background-color: #fff;
    }

    .card .card-body {
        padding: 20px;
    }

    .card .form-group {
        margin-bottom: 25px;
    }

    .card .form-group input[type="text"],
    .card .form-group input[type="password"] {
        width: 90%;
        padding: 10px;
        font-size: 16px;
        border-radius: 4px;
        border: 1px solid #ccc;
        margin-top: 8px;
    }

    .card .form-group label {
        display: block;
        font-weight: bold;
    }

    .card button:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .card button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #879bc9;
        color: white;
        border-radius: 4px;
        border: 0;
        cursor: pointer;
    }

    .form-control {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }

    input::placeholder {
        color: gray;
        /* Substitua com a cor desejada */
    }
</style>

<body>
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="p-3 ">
                                    <div class="col-md-12">
                                        <p style="text-align:center;font-size: 31px;color: #879bc9;font-weight: bold;">WiderPlanner
                                            <br>
                                            <span style="text-align:center;font-size:20px;color:#a8aaad;font-weight: normal;">Login</span>
                                        </p>
                                    </div>

                                    <?php
                                    if ($this->session->flashdata('error')) {
                                        echo '<div style="background-color: #F8D7DA; color: #6a040d; padding: 10px; width: 318px; height: 50px; vertical-align: middle; border-radius: 5px;">';
                                        echo $this->session->flashdata('error');
                                        echo '</div>';
                                    }
                                    ?>

                                    <form method="POST" action="<?php echo site_url('login/login'); ?>" name="form_login" class="login">
                                    <div class="form-group">
                                            <label for="cpf_usuario" style="color: #a8aaad"> CPF:</label>
                                            <span id="cpfUsuario"></span>
                                            <input style="font-size: 14px; width: 100%;" type="text" class="form-control" id="cpf_usuario" name="cpf_usuario" placeholder="Insira seu CPF" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="senha" style="color: #a8aaad"><i class="fas fa-solid fa-key"></i>Senha:</label>
                                            <div style="position: relative;">
                                                <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha" style="font-size: 14px; width: 100%;">
                                                <span class="fas fa-solid fa-eye-slash" id="show-btn" style="position: absolute; cursor:pointer; top: 50%; transform: translateY(-50%); right: 10px;"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <a href="https://widerplanner.agsete.com.br/esqueci_senha" style="color: #a1a3a8; text-align: right; text-decoration: none; font-size: small"><b>Esqueci senha</b></a>

                                            <br><br>

                                            <a href="https://widerplanner.agsete.com.br/cadastro_cliente" style="font-size:14px; color:#87A0D2"><strong style="font-size:14px; color:#87A0D2">Clique aqui</strong> para realizar o cadastro</a>
                                        </div>

                                        <div class="text-center">
                                            <p style="width: 100%;"><input type="hidden" name="env" id="env" value="1">
                                                <input type="hidden" name="env" id="env" value="1" /> <input class="form-control" style="background:#87A0D2; color:white; border:none;border-radius: 5px; width: 100%; height: 40px; cursor:pointer" type="submit" name="entrar" id="entrar" value="Entrar" />
                                            </p>
                                        </div>
                                    </form>
                                    <br>
                                    <div id="rodape" style="text-align:center;color: gray;font-size:12px">
                                        <p><small>Sistema desenvolvido para cunho estudantil <br> Projeto de Conclusão de Curso - Superior de Tecnologia em Análise e Deselvolvimento de Sistemas <br> Centro Universitário Nossa Senhora do Patrocínio</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script>
        var cpfInput = document.getElementById('cpf_usuario');
        cpfInput.addEventListener('input', formatarCPF);

        function formatarCPF() {
            var cpf = cpfInput.value.replace(/\D/g, '');

            if (cpf.length > 3 && cpf.length <= 6) {
                cpf = cpf.replace(/(\d{3})(\d{1,3})/, '$1.$2');
            } else if (cpf.length > 6 && cpf.length <= 9) {
                cpf = cpf.replace(/(\d{3})(\d{3})(\d{1,3})/, '$1.$2.$3');
            } else if (cpf.length > 9) {
                cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{1,2})/, '$1.$2.$3-$4');
            }

            cpfInput.value = cpf;

            cpfCheck(cpfInput);
        }

        function cpfCheck(el) {
            var cpfStatus = document.getElementById('cpfUsuario');
            var cpfValue = el.value.replace(/\D/g, '');

            if (is_cpf(cpfValue)) {
                cpfStatus.innerHTML = '<span style="color:green">Válido</span>';
            } else {
                cpfStatus.innerHTML = '<span style="color:red">Inválido</span>';
            }

            if (el.value == '') {
                cpfStatus.innerHTML = '';
            }
        }

        function is_cpf(c) {
            if ((c = c.replace(/[^\d]/g, "")).length == 14) {
                cnpj = c;
                cnpj = cnpj.replace(/[^\d]+/g, '');

                if (cnpj == '') return false;

                if (cnpj.length != 14)
                    return false;

                // Elimina CNPJs invalidos conhecidos
                if (cnpj == "00000000000000" ||
                    cnpj == "11111111111111" ||
                    cnpj == "22222222222222" ||
                    cnpj == "33333333333333" ||
                    cnpj == "44444444444444" ||
                    cnpj == "55555555555555" ||
                    cnpj == "66666666666666" ||
                    cnpj == "77777777777777" ||
                    cnpj == "88888888888888" ||
                    cnpj == "99999999999999")
                    return false;

                // Valida DVs
                tamanho = cnpj.length - 2
                numeros = cnpj.substring(0, tamanho);
                digitos = cnpj.substring(tamanho);
                soma = 0;
                pos = tamanho - 7;
                for (i = tamanho; i >= 1; i--) {
                    soma += numeros.charAt(tamanho - i) * pos--;
                    if (pos < 2)
                        pos = 9;
                }
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado != digitos.charAt(0))
                    return false;

                tamanho = tamanho + 1;
                numeros = cnpj.substring(0, tamanho);
                soma = 0;
                pos = tamanho - 7;
                for (i = tamanho; i >= 1; i--) {
                    soma += numeros.charAt(tamanho - i) * pos--;
                    if (pos < 2)
                        pos = 9;
                }
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado != digitos.charAt(1))
                    return false;

                return true;
            } else {
                if ((c = c.replace(/[^\d]/g, "")).length != 11)
                    return false

                if (c == "00000000000")
                    return false;

                var r;
                var s = 0;

                for (i = 1; i <= 9; i++)
                    s = s + parseInt(c[i - 1]) * (11 - i);

                r = (s * 10) % 11;

                if ((r == 10) || (r == 11))
                    r = 0;

                if (r != parseInt(c[9]))
                    return false;

                s = 0;

                for (i = 1; i <= 10; i++)
                    s = s + parseInt(c[i - 1]) * (12 - i);

                r = (s * 10) % 11;

                if ((r == 10) || (r == 11))
                    r = 0;

                if (r != parseInt(c[10]))
                    return false;

                return true;
            }
        }
    </script>
</body>