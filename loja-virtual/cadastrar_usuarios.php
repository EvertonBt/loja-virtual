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
    <h2> Opções Administrativas</h2>

    <nav>
      <ul>
        <li>
		    <a href="index.php?q=livros"> Home</a>
	</li>
		
		<li><a href="adm.php?acao=listar_u">Listar Usuários</a></li>
        <li><a href="adm.php?acao=listar_p">Listar Produtos</a></li>
        <li><a href="adm.php?acao=cadastrar_u">Cadastrar Usuários</a></li>
		<li><a href="adm.php?acao=cadastrar_p">Cadastrar Produtos</a></li>
        <li><a href="adm.php?acao=logs"> Logs de Acesso</a></li>
        <li><a href="adm.php?acao=emails">Emails Recebidos</a></li>             
	 </ul>
    </nav>
  </section><!-- fim .menu-departamentos -->


</div><!-- fim .container .destaque -->
 
 
  <div class="container paineis">
  <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->
  <section class="painel mais-vendidos">
<h2> Adicionar Usuário </h2>
<div id="formulario">
<form name="cadastro_u" method="post" action="adm.php?acao=gravar_u">
	<ul>
        <li>
        	<label for="name">Nome</label>
            <input type="text" size="40" id="name" name="nome" required />
        </li>
          <li>
        	<label for="sobrenome"> Sobrenome</label>
            <input type="text" size="40" id="email" name="sobrenome" required />
        </li>
		
		<li>
        	<label for="email"> email</label>
            <input type="email" size="40" id="email" name="email" required />
        </li>
        <li>
            <label > Nível de Acesso </label>
            <select name="select_nivel">
					<option value="limitado">        Limitado          </option>
					<option value="administrador">   Administrador     </option>
			
		   </select>
        </li>
        <li>
            <label> Login</label>
            <input type="text"" name="login"  size="40" required/>
        </li>
        <li>
        	<label for="message">Senha</label>
           <input type="text"  name="senha" size="40" required/>
		</li>
	</ul>
    <p>
        <button type="submit" class="action">Gravar</button>
        <button type="reset" class="right"> Limpar</button>
    </p>
</form>
</section>
  
  </div> <!-- Fim da div paineis -->

<?php

include "rodape.php";

?>