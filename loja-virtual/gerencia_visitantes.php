<?php
include "banco.php";
include "classes/usuarios.class.php";
include "classes/emails.class.php";


$usuarios = new Usuarios($conexao);
$emails   = new Emails($conexao);

// Ação para chamar o formulario de cadastro dos usuários

if($_GET['acao'] == "cadastro_v")

{
    include "cadastro_visitantes.php";

}


//Ação para verificar se o usuário já existe e em seguida gravar os dados no banco.
if($_GET['acao'] == "gravar_v")
{
      $valores['nome']           = $_POST['nome'];
	  $valores['sobrenome']      = $_POST['sobrenome'];
	  $valores['login']          = $_POST['login'];
	  $valores['email']          = $_POST['email'];
	  $valores['senha_insegura'] = $_POST['senha'];
	  $valores['nivel_acesso']   = "limitado";
	  $valores['senha']  = md5($valores['senha_insegura']);
	
	  if(!$usuarios->testa_usuario_existe($valores['login'])) 
	  {
		   $usuarios->gravar_usuario($valores);
		   header('Location: gerencia_visitantes.php?acao=cadastro_v&gravado=ok');
		  
	  }
	 else
	 {
		 header('Location: gerencia_visitantes.php?acao=cadastro_v&problemas=erro');
	 }
	      
	
}	

// Ação que chama o formulario de Login
if($_GET['acao']  == "login")
{
	 include "login.php";
	
}



if($_GET['acao'] == "logar")
{
	$login          = $_POST['login'];
	$senha_insegura = $_POST['senha'];
		
	$senha = md5($senha_insegura);
	 

	
	if($usuarios->buscar_por_login($login, $senha))
	{
		session_start("loja");
		$_SESSION['login'] = $login;
		
		$valores['usuario'] = $login;
		
		date_default_timezone_set('America/Sao_Paulo');
		$valores['horario']   = date("H:i d/m/Y");
		
		$valores['tipo_acao'] = "Usuario Logou com Sucesso no Sistema";
		
		$usuarios->gerar_log($valores);
		header('Location: index.php?q=livros');
	}
	
	else
		header('Location: gerencia_visitantes.php?acao=login&erro=y');
	
}	

if($_GET['acao'] == "sair")
 {
         session_start("loja");     
	     $valores['usuario'] = $_SESSION['login'];
		
		 date_default_timezone_set('America/Sao_Paulo');
		 $valores['horario']   = date("H:i d/m/Y");
		
		$valores['tipo_acao'] = "Usuario Saiu do Sistema";
		
		$usuarios->gerar_log($valores);
	   
	   session_destroy();
       header('Location: index.php?p=livros');
		
		} 
		
if($_GET['acao'] == "fale_conosco")
{
	include "fale_conosco.php";
	
	
}

if($_GET['acao'] == "enviar_email")
{
	
	$valores['nome']     = $_POST['nome'];
	$valores['email']    = $_POST['email'];
	$valores['mensagem'] = $_POST['mensagem'];
	
	 date_default_timezone_set('America/Sao_Paulo');
	$valores['horario']  = date("H:i d/m/Y");
	
	
	$emails->enviar_email($valores);
	header('Location: gerencia_visitantes.php?acao=fale_conosco&enviado=ok');
	
	
}

?>