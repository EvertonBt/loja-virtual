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
        <li><a href="adm.php?acao=listar_p">Listar usuarios</a></li>
        <li><a href="adm.php?acao=cadastrar_u">Cadastrar Usuários</a></li>
		<li><a href="adm.php?acao=cadastrar_p">Cadastrar usuarios</a></li>
        <li><a href="adm.php?acao=logs"> Logs de Acesso</a></li>
        <li><a href="index.php?q=acessorios">Acessórios</a></li>
      </ul>
    </nav>
  </section><!-- fim .menu-departamentos -->


</div><!-- fim .container .destaque -->
 
 
  <div class="container paineis">
  <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->
  <section class="painel mais-vendidos">
<h2> Novo usuario</h2>
<div id="formulario">
<form name="cadastro_u" method="post" action="adm.php?acao=atualizar_u">
	<ul>
        <li>
        	<input type="hidden" name="id" value="<?php echo $usuario['user_id'];?>" > 
			<label for="name">Nome</label>
            <input type="text" size="40" id="name" name="nome" value="<?php echo $usuario['nome'];?> " />
        </li>
          <li>
        	<label for="email"> Sobrenome </label>
            <input type="text" size="40" id="email" name="sobrenome" value="<?php echo $usuario['sobrenome'];?>"/>
        </li>
		
		<li>
        	<label for="email"> Email </label>
            <input type="email" size="40" id="email" name="email" value="<?php echo $usuario['email'];?>"/>
        </li>
        <li>
            <label > Nível de Acesso</label>
            <select name="select_nivel">
		        <option value="limitado"     <?php echo ($usuario['nivel_acesso'] == "limitado")      ? "selected" : ""; ?>>Limitado      </option>
				<option value="administrador"<?php echo ($usuario['nivel_acesso'] == "administrador") ? "selected" : ""; ?>>Administrador </option>
		   </select>
        </li>
        <li>
        	<label for="email">  Login</label>
            <input type="text" size="40" id="email" name="login" value="<?php echo $usuario['login'];?>"/>
        </li>
		
		  <li>
        	<label for="email"> Senha </label>
            <input type="password" size="40" id="email" name="nova_senha" placeholder="Deixando vazio será mantido a senha anterior" />
        </li>
		    <input type="hidden"  name="senha_anterior" value="<?php echo $usuario['senha']; ?>" />
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