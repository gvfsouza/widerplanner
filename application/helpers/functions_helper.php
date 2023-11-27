<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// if (!function_exists('anti_injection')) {
//     function anti_injection($input) {
//         $input = trim($input); // Remove espaços em branco no início e no final
//         $input = stripslashes($input); // Remove barras invertidas adicionadas por addslashes
//         $input = htmlspecialchars($input, ENT_QUOTES); // Converte caracteres especiais em entidades HTML
//         return $input;
//     }
// }

if (!function_exists('anti_injection')) {
    function anti_injection($POST)
    {
        array_walk_recursive($POST, function (&$item, $key) {
            $_POST[$key] = pg_escape_string(trim(htmlspecialchars($item)));
        });
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


// function gerarSenhaAleatoria($tamanho = 8) {
//     $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $senha = '';
//     $comprimentoCaracteres = strlen($caracteres);

//     for ($i = 0; $i < $tamanho; $i++) {
//         $senha .= $caracteres[random_int(0, $comprimentoCaracteres - 1)];
//     }

//     return $senha;
// }
