<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('anti_injection')) {
    function anti_injection($input) {
        $input = trim($input); // Remove espaços em branco no início e no final
        $input = stripslashes($input); // Remove barras invertidas adicionadas por addslashes
        $input = htmlspecialchars($input, ENT_QUOTES); // Converte caracteres especiais em entidades HTML
        return $input;
    }
}

