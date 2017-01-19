<?php
class usuarios{

public $conexao;
public $usuarios = array();
public $usuario;
public $logs = array();

public function __construct($conexao){

$this->conexao = $conexao;

}



public function buscar_todos(){
	
$sqlBusca = "SELECT * FROM usuarios";
$resultado = $this->conexao->query($sqlBusca);
$this->usuarios = array();

while ($u = mysqli_fetch_assoc($resultado)) {
$this->usuarios[] = $u;

             }
	
}



public function gravar_usuario($usuario)
{
$sqlGravar = "INSERT INTO usuarios(nome, sobrenome, login, senha, email, nivel_acesso)
VALUES
(
'{$usuario['nome']}',
'{$usuario['sobrenome']}',
'{$usuario['login']}',
'{$usuario['senha']}',
'{$usuario['email']}',
'{$usuario['nivel_acesso']}'
)
";
$this->conexao->query($sqlGravar);
}


function buscar_por_id($id)
{
$sqlBusca = 'SELECT * FROM usuarios WHERE user_id = ' . $id;
$resultado = $this->conexao->query($sqlBusca);
$this->usuario = mysqli_fetch_assoc($resultado);
}

function buscar_por_login($login, $senha)
{
	
$sqlBusca = "SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'";
$resultado = $this->conexao->query($sqlBusca);
if(mysqli_num_rows($resultado))
  {
	  return true;
  }

}


function testa_usuario_existe($login)
{
	
$sqlBusca = "SELECT * FROM usuarios WHERE login = '$login'";
$resultado = $this->conexao->query($sqlBusca);
if(mysqli_num_rows($resultado))
  {
	  return true;
  }

}


public function editar_usuario($usuario)
{
$sqlEditar = "UPDATE usuarios SET
nome = '{$usuario['nome']}',
sobrenome = '{$usuario['sobrenome']}',
email = '{$usuario['email']}',
login = '{$usuario['login']}',
senha = '{$usuario['senha']}',
nivel_acesso = '{$usuario['nivel_acesso']}'
WHERE user_id = {$usuario['id']}
";
$this->conexao->query($sqlEditar);
}

function remover_usuario($id)
{
$sqlRemover = "DELETE FROM usuarios WHERE user_id = {$id}";
$this->conexao->query($sqlRemover);
}


function gerar_log($valores)	
{
$sqlGravar = "INSERT INTO logs(usuario, horario, tipo_acao)
VALUES
(
'{$valores['usuario']}',
'{$valores['horario']}',
'{$valores['tipo_acao']}'
)
";
$this->conexao->query($sqlGravar);
}


public function buscar_logs()
{
	
$sqlBusca = "SELECT * FROM logs";
$resultado = $this->conexao->query($sqlBusca);
$this->logs = array();

while ($u = mysqli_fetch_assoc($resultado)) 
  {
     $this->logs[] = $u;

  }
	
}

function remover_log($id)
{
$sqlRemover = "DELETE FROM logs WHERE id_log = {$id}";
$this->conexao->query($sqlRemover);
}

	

}

?>