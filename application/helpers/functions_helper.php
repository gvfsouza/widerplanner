<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('anti_injection')) {
    function anti_injection($input) {
        $input = trim($input); // Remove espaços em branco no início e no final
        $input = stripslashes($input); // Remove barras invertidas adicionadas por addslashes
        $input = htmlspecialchars($input, ENT_QUOTES); // Converte caracteres especiais em entidades HTML
        return $input;
    }
}

function gerarSenhaAleatoria($tamanho = 10) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $senha = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $indice = mt_rand(0, strlen($caracteres) - 1);
        $senha .= $caracteres[$indice];
    }
    return $senha;
}

if (!function_exists('anti_injection')) {
    function anti_injection($input)
    {
        if (is_array($input)) {
            return array_map('anti_injection', $input);
        }

        $input = trim($input);
        $input = strip_tags($input);
        $input = addslashes($input);

        return $input;
    }
}
// function gerarSenhaAleatoria($tamanho = 8) {
//     $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $senha = '';
//     $comprimentoCaracteres = strlen($caracteres);

//     for ($i = 0; $i < $tamanho; $i++) {
//         $senha .= $caracteres[random_int(0, $comprimentoCaracteres - 1)];
//     }

//     return $senha;
// }
