<?php
session_start("loja");
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Loja Virtual </title>
    <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Lato|Open+Sans|Oswald|Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css">
	<?php echo $estilo;?>
  
 </head>
  <body>
  
   <header class="container">
  <h1><img src="img/logo.png" alt="Mirror Fashion"> </h1>
 
  <p class="sacola">
<img src="img/sacola.png" alt="carrinho de compras" />
   <br>
	    <?php if(isset($_SESSION['login'])) echo "Olá, ".$_SESSION['login'].'<a href="gerencia_visitantes.php?acao=sair"> Sair </a>' ;	?> 
  </p>
 <br>
  <nav class="menu-opcoes">
   
   <ul>
      <li><a href="index.php?q=livros"> Principal </a></li>
	  <li><a href="gerencia_visitantes.php?acao=login"> Login </a></li>
      <li><a href="gerencia_visitantes.php?acao=cadastro_v"> Cadastre-se</a></li>
	  <li><a href="gerencia_visitantes.php?acao=fale_conosco"> Fale conosco </a></li>
	  <li><a href="sobre.php">Sobre</a></li>
       <li><a href="adm.php?acao=listar_p">Área Administrativa</a></li>
	</ul>
  </nav>
</header>