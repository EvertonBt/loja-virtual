<?php
class Produtos{

public $conexao;
public $produtos = array();
public $produto;
 
public function __construct($nova_conexao){

$this->conexao = $nova_conexao;

}



public function buscar_todos(){
	
$sqlBusca = "SELECT * FROM produtos";
$resultado = $this->conexao->query($sqlBusca);
$this->produtos = array();

while ($p = mysqli_fetch_assoc($resultado)) {
$this->produtos[] = $p;

             }
	
}


public function buscar_por_categoria($filtro)
{
$sqlBusca = "SELECT * FROM produtos where categoria = '$filtro'";
$resultado = $this->conexao->query($sqlBusca);
$this->produtos = array();

while ($p = mysqli_fetch_assoc($resultado)) {
$this->produtos[] = $p;

}

}

public function buscar_por_nome($filtro)
{
$sqlBusca = "SELECT * FROM produtos where nome like'$filtro%'";
$resultado = $this->conexao->query($sqlBusca);
$this->produtos = array();

while ($p = mysqli_fetch_assoc($resultado)) {
$this->produtos[] = $p;

             }
}


function buscar_por_id($id)
{
$sqlBusca = 'SELECT * FROM produtos WHERE id = ' . $id;
$resultado = $this->conexao->query($sqlBusca);
$this->produto = mysqli_fetch_assoc($resultado);
}



function tratar_anexo($imagem) {
$padrao = '/^.+(\.jpg|\.png)$/'; 
$resultado = preg_match($padrao, $imagem['name']);
if (!$resultado) {
return false;
}
//move o arquivo enviado do armazenamento temporário para o armazenamento físico, somente se tudo estiver ok (os tipos de arquivos forem válidos)
if(move_uploaded_file($imagem['tmp_name'],"img/produto/{$imagem['name']}")) 
return true;

}


public function gravar_produto($produto)
{
echo $produto['nome'];
echo $produto['categoria'];
echo $produto['imagem'];
echo $produto['descricao'];
echo $produto['preco'];
$sqlGravar = "INSERT INTO produtos(nome, descricao, preco, categoria, imagem)
VALUES
(
'{$produto['nome']}',
'{$produto['descricao']}',
'{$produto['preco']}',
'{$produto['categoria']}',
'{$produto['imagem']}'
)
";
$this->conexao->query($sqlGravar);
}



public function editar_produto($produto)
{
$sqlEditar = "UPDATE produtos SET
nome = '{$produto['nome']}',
descricao = '{$produto['descricao']}',
preco = '{$produto['preco']}',
categoria = '{$produto['categoria']}',
imagem = '{$produto['imagem']}'
WHERE id = {$produto['id']}
";
$this->conexao->query($sqlEditar);
}

function remover_produto($id)
{
$sqlRemover = "DELETE FROM produtos WHERE id = {$id}";
$this->conexao->query($sqlRemover);
}

}

?>