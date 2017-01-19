<?php
include "config.php";

$conexao = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
//$conexao = mysqli_connect(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);


if ($conexao->connect_errno) {
echo "Problemas para conectar no banco. Verifique os dados!";
die(); //mata o programa encerrando-o caso haja erros.
}
