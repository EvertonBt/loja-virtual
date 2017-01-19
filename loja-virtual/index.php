<?php
/* 
	Esse Arquivo é responsável por gerenciar as requisições da área da loja virtual, que engloba os departamentos: livros, dvds, jogos, software e etc... 
(que estão no menu lateral esquerdo).

*/
include "banco.php";
include "classes/produtos.class.php";

$produtos = new Produtos($conexao);

//Essa sequência de ifs analisa quais departamentos escolhidos e os valores de busca para listar os produtos da loja virtual
if(isset($_GET['q'])){
	
	$filtro = $_GET['q'];
	$produtos->buscar_por_categoria($filtro);
}

else if (isset($_POST['pesquisa']))
 {	
    $filtro = $_POST['pesquisa'];
    $produtos->buscar_por_nome($filtro);
 }

 else{ 
	
	  header('Location: sobre.php');
     
 }

 include "template.php";

?>