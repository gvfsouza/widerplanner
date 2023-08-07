<!DOCTYPE html>
<html>
<head>
    <style>
        @font-face {
            font-family: Poppins-Regular;
            /* ... */
        }

        @font-face {
            font-family: Montserrat-Medium;
            /* ... */
        }

        /* Seus estilos anteriores */

        /* Estilos adicionais para a tela de agendamento */
        body {
            margin: 0;
            padding: 0;
            background-color: #F0F8FF; /* Cor de fundo da paleta */
        }

        .container-agendamento {
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrap-agendamento {
            width: 465px;
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-agendamento {
            width: 100%;
        }

        .form-agendamento-title {
            width: 100%;
            display: block;
            font-family: Montserrat-Medium;
            font-size: 30px; /* Tamanho maior */
            color: #555555;
            line-height: 1.2;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold; /* Em negrito */
        }

        .input-agendamento {
            font-family: Poppins-Regular;
            color: #333333;
            line-height: 1.2;
            font-size: 18px;
            display: block;
            width: 100%;
            background: transparent;
            height: 50px;
            padding: 0 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .date-time-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .date-container,
        .time-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .date-container label,
        .time-container label {
            display: block;
        }

        .input-agendamento[type="date"],
        .input-agendamento[type="time"] {
            width: 100%;
            height: 50px;
            padding: 0 20px;
        }

        .btn-agendamento {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #B0C4DE; /* Cor dos botões */
            color: #fff;
            border: none;
            cursor: pointer;
            font-family: Poppins-Medium;
            font-size: 16px;
            line-height: 1.2;
            text-align: center;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container-agendamento">
        <div class="wrap-agendamento">
            <form class="form-agendamento">
                <span class="form-agendamento-title">Agendamento</span>

                <input type="text" class="input-agendamento" placeholder="Nome">
                <input type="tel" class="input-agendamento" placeholder="Telefone">
                <input type="email" class="input-agendamento" placeholder="Email">

                <select class="input-agendamento" required>
                    <option value="" disabled selected>Selecione um serviço</option>
                    <option value="servico1">Serviço 1</option>
                    <option value="servico2">Serviço 2</option>
                    <!-- Mais opções de serviço aqui -->
                </select>

                <div class="date-time-container">
                    <div class="date-container">
                        <label for="data">Data:</label>
                        <input type="date" id="data" name="data" class="input-agendamento" required>
                    </div>
                    <div class="time-container">
                        <label for="hora">Hora:</label>
                        <input type="time" id="hora" name="hora" class="input-agendamento" required>
                    </div>
                </div>

                <button class="btn-agendamento" type="submit">Agendar</button>
                <button class="btn-agendamento" type="button">Ver Agendamento</button>
            </form>
        </div>
    </div>
</body>
</html>