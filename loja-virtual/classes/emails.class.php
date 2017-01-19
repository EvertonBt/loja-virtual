<?php
class Emails{

public $conexao;
public $emails = array();
public $email;


public function __construct($conexao){

$this->conexao = $conexao;

}

public function buscar_emails(){
	
$sqlBusca = "SELECT * FROM emails";
$resultado = $this->conexao->query($sqlBusca);
$this->emails = array();

while ($e = mysqli_fetch_assoc($resultado)) 
    {
       $this->emails[] = $e;

    }
	
}


public function enviar_email($email)
{
$sqlGravar = "INSERT INTO emails(nome, email, horario, mensagem)
VALUES
(
'{$email['nome']}',
'{$email['email']}',
'{$email['horario']}',
'{$email['mensagem']}'
)
";
$this->conexao->query($sqlGravar);
}


function remover_email($id)
{
$sqlRemover = "DELETE FROM emails WHERE id_email = {$id}";
$this->conexao->query($sqlRemover);
}


function visualizar_mensagem($id)
{
	$sqlBusca = "SELECT mensagem FROM emails where id_email = {$id}";
    $resultado = $this->conexao->query($sqlBusca);
    $this->emails = array();

    while ($e = mysqli_fetch_assoc($resultado)) 
    {
       $this->emails[] = $e;

    }
	
}
	
	
}
