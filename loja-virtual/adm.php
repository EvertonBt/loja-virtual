<?php
include "banco.php";
include "classes/produtos.class.php";
include "classes/usuarios.class.php";
include "classes/emails.class.php";

$produtos = new Produtos($conexao);
$usuarios = new Usuarios($conexao);
$emails   = new Emails($conexao);
$valores  = [];


//Ação para listar os produtos cadastrados

if($_GET['acao'] == "listar_p")
    {
      $produtos->buscar_todos();
      include "listar_produtos.php";
    }

//Ação para chamar o formulário de cadastro de novos produtos
if($_GET['acao'] == "cadastrar_p")
   {
	   include "cadastrar_produtos.php";
	
   }	
 
//Ação para efetuar a gravação de novos produtos
if($_GET['acao'] == "gravar_p") {

if(isset($_POST))
   {
	    $valores['nome']      = $_POST['nome'];
	    $valores['preco']     = $_POST['preco'];
	    $valores['descricao'] = $_POST['descricao'];
	    $valores['categoria'] = $_POST['select_categoria'];
	    echo $valores['categoria'];
	    if (!isset($_FILES['imagem'])) 
		{
            $mensagem = 'Você deve selecionar um arquivo para anexar';
		    $tem_erros = true;
		}                            
	   else 
	   {

	        if ($produtos->tratar_anexo($_FILES['imagem'])) 
			{
                  $valores['imagem']   = $_FILES['imagem']['name'];
                  $tem_erros = false;
			} 
			else 
			{
                 $tem_erros = true;
                 $mensagem = 'Envie apenas anexos nos formatos zip ou pdf';
                 header('Location: adm.php?acao=cadastrar_p&erro=yes');
			}
       }

  
       if (!$tem_erros) 
      {
      
          $produtos->gravar_produto($valores); 
		  $mensagem = "Cadastrado com Sucesso!";
		  header('Location: adm.php?acao=listar_p&gravado=ok');
      }   	  
      
   }
}
//Ação para chamar o formulario de edição dos produtos

if($_GET['acao'] == "editar_p")
   {
	    $id = $_GET['id'];
	   $produtos->buscar_por_id($id);
	   $produto = $produtos->produto;
	   include "editar_produtos.php";
	
   }   

   // Ação que faz a atualização dos dados
if($_GET['acao'] == "atualizar_p") {

if(isset($_POST))
   {
	    $valores['id']        = $_POST['id'];
		$valores['nome']      = $_POST['nome'];
	    $valores['preco']     = $_POST['preco'];
	    $valores['descricao'] = $_POST['descricao'];
	    $valores['categoria'] = $_POST['select_categoria'];
	    $valores['imagem_anterior']  = $_POST['imagem_anterior'];
		
		echo $valores['nome'];
		echo $valores['descricao'];
		echo $valores['categoria'];
		echo $valores['preco'];
		
		
	
		if ($_FILES['imagem']['name'] == "") 
		{
		    $valores['imagem'] = $valores['imagem_anterior'];
		    $tem_erros = false;
		}                            
	   else
	   {  
 	    if ($produtos->tratar_anexo($_FILES['imagem'])) 
			{
                  $valores['imagem']   = $_FILES['imagem']['name'];
			      $tem_erros  = false;
			}
	   }
   
    if (!$tem_erros) 
      {
      
          $produtos->editar_produto($valores); 
		  header('Location: adm.php?acao=listar_p&editado=ok');
      }   
   }
}   
// Ação para remover produtos da lista
if($_GET['acao'] == "remover_p")
{
 	$produtos->remover_produto($_GET['id']);
    header('Location: adm.php?acao=listar_p&removido=ok');
	
}

// Ação para listar os usuários cadastrados
  
if($_GET['acao'] == "listar_u")
    {
	  $usuarios->buscar_todos();
      include "listar_usuarios.php";
    }


  //Ação para chamar o formulário de cadastro de novos usuários
if($_GET['acao'] == "cadastrar_u")
   {
	   include "cadastrar_usuarios.php";
	
   }	

  // Ação para cadastrar os usuários 
  
 if($_GET['acao'] == "gravar_u")
 {
	  $valores['nome']           = $_POST['nome'];
	   $valores['sobrenome']     = $_POST['sobrenome'];
	  $valores['login']          = $_POST['login'];
	  $valores['email']          = $_POST['email'];
	  $valores['senha_insegura'] = $_POST['senha'];
	  $valores['nivel_acesso']   = $_POST['select_nivel']; 
	  $valores['senha']  = md5($valores['senha_insegura']);
	      
		  
	      $usuarios->gravar_usuario($valores); 
		  header('Location: adm.php?acao=listar_u&gravado=ok');
 }

 // Ação para editar os dados dos usuários

 if($_GET['acao'] == "editar_u")
   {
	   $user_id = $_GET['id'];
	   $usuarios->buscar_por_id($user_id);
	   $usuario = $usuarios->usuario;
	   include "editar_usuarios.php";
	
   }  
   
 if($_GET['acao'] == "atualizar_u"){
	   
	  $valores['id']                      = $_POST['id'];
	  $valores['nome']                    = $_POST['nome'];
	  $valores['sobrenome']               = $_POST['sobrenome'];
	  $valores['login']                   = $_POST['login'];
	  $valores['email']                   = $_POST['email'];
	  $valores['nivel_acesso']   = $_POST['select_nivel']; 
	  $valores['nova_senha']  = md5($valores['nova_senha_insegura']);
	 
	 if($_POST['nova_senha']  == "")
		  $valores["senha"] = $_POST['senha_anterior'];
	     
	 else
		 $valores["senha"] ==  md5($_POST['nova_senha']);
	  
	
	 $usuarios->editar_usuario($valores);
	 header('Location: adm.php?acao=listar_u&editado=ok');
 }
 
 
 // Ação para remover usuários da lista
if($_GET['acao'] == "remover_u")
{
 	$usuarios->remover_usuario($_GET['id']);
    header('Location: adm.php?acao=listar_u&removido=ok');
	
}

// Ação para buscar e listar todos os logs armazenados
if($_GET['acao'] == "logs")
{
	$usuarios-> buscar_logs();
	include "logs_acesso.php";
	
}

// Ação para remover log ao clicar no link
if($_GET['acao'] == "remover_l")
{
	$log_id = $_GET['id'];
	$usuarios->remover_log($log_id);
	header('Location: adm.php?acao=logs&removido=ok');
	
	
}

//Ação para listar todos os emails recebidos
if($_GET['acao'] == "emails")
{
	$emails-> buscar_emails();
	include "emails.php";
	
}

//Ação para remover um email ao clicar no link

if($_GET['acao'] == "remover_e")
{
	$id_email = $_GET['id'];
	$emails->remover_email($id_email);
	header('Location: adm.php?acao=emails&removido=ok');
	
}

if($_GET['acao'] == "visualizar_mensagem")
{  
	$id_email = $_GET['id'];
	$emails->visualizar_mensagem($id_email);
	include "visualizar_mensagem.php";
	
}

// Ao clicar no produto ele chama a página para efetuar a compra (essa parte da aplicação ainda está em manutenção).
iF($_GET['acao'] == "comprar")
{
	$id = $_GET['id'];
	$produtos->buscar_por_id($id);
	$produto = $produtos->produto;
	include "produto.php";
	
}


?>