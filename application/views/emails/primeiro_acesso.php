<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Acesso</title>
</head>

<body>
    <div style="padding:10px; margin:0 auto; max-width:900px;">
        <br><br>
        <div style="text-align: justify;">
            Olá, <?php echo $nome_usuario; ?>!<br>
            
            <p style="font-size: 16px;font-weight: bold;">Para acessar o sistema, utilize o seu CPF e a senha abaixo:</p>
            <p>Sua senha de acesso ao sistema é: <strong><?php echo $senha_gerada; ?> </strong>
            *Lembre-se de alterar a senha após o primeiro login.</p>
            <p>Você pode acessar o sistema através do seguinte link:</p><a href="<?php echo $linkAcesso; ?>">link de acesso</a>.            
            <br>
            <i style="font-size: 14px;">Esse e-mail é uma mensagem automática.</i>
        </div>
        <br><br>
    </div>

</body>

</html>