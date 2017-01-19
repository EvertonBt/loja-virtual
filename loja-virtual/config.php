<?php

//Exemplo de uso de constantes, elas devem ser usadas em caixa alta, sem cifrão e não podem ser alteradas durante o programa
/*
$linguagem = "PHP";
define("BANCO", "MySQL");
echo "Eu uso {$linguagem} com o banco " . BANCO;
// Exibe: Eu uso PHP com o banco MySQL
*/

// Conexão ao banco de dados (MySQL)

define("BD_SERVIDOR", "localhost");
define("BD_USUARIO", "root");
define("BD_SENHA", "");
define("BD_BANCO", "loja");

// E-mail para notificação
define("EMAIL_NOTIFICACAO", "shunshanpb@gmail.com");