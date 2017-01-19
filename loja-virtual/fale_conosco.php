<?php
$estilo = '<link rel="stylesheet" type="text/css" href="css/estilos_adm.css">';
include "cabecalho.php";

?>
  <div class="container destaque">

  <section class="busca">
    <h2>Busca</h2>

    <form action="index.php" method="POST" name="formulario">
      <input type="search" name="pesquisa">
      <input type="image" src="img/busca.png">
    </form>
  </section><!-- fim .busca -->

  <section class="menu-departamentos">
    <h2> Departamentos</h2>

    <nav>
      <ul>
	    <li><a href="index.php?q=livros">Livros</a> </li>
        <li><a href="index.php?q=dvds">Cds e Dvds</a></li>
        <li><a href="index.php?q=jogos">Jogos </a></li>
        <li><a href="index.php?q=software">Software</a></li>
        <li><a href="index.php?q=telefonia">Telefonia Celular</a></li>
        <li><a href="index.php?q=papelaria">Papelaria</a></li>
        <li><a href="index.php?q=acessorios">Acessórios</a></li>
      </ul>
    </nav>
  </section><!-- fim .menu-departamentos -->


</div><!-- fim .container .destaque -->
 
 
  <div class="container paineis">
  <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->
  <section class="painel mais-vendidos">
<h2> Fale Conosco</h2>
<h3> <?php if(isset($_GET['enviado'])) echo "Mensagem Enviada Com Sucesso" ?> </h3>
<div id="formulario">
<form name="fale_conosco" method="post" action="gerencia_visitantes.php?acao=enviar_email">
	<ul>
        <li>
        	<label for="name">Nome</label>
            <input type="text" size="40" id="name" name="nome" required />
        </li>
        <li>
        	<label for="email"> Email</label>
            <input type="email" size="40" id="email" name="email" required/>
        </li>
        <li>
        	<label for="message">Mensagem</label>
            <textarea cols="42" rows="5" id="message" name="mensagem"> </textarea>
		</li>
	</ul>
    <p>
        <button type="submit" class="action">Enviar</button>
        <button type="reset" class="right"> Limpar</button>
    </p>
</form>
</section>
  
  </div> <!-- Fim da div paineis -->

<?php

include "rodape.php";

?>