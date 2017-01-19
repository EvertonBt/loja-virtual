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
        <li><a href="index.php?q=acessorios">Acessórios</a></li>
      </ul>
    </nav>
  </section><!-- fim .menu-departamentos -->


</div><!-- fim .container .destaque -->
 
 
  <div class="container paineis">
  <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->
  <section class="painel mais-vendidos">
<h2> Novo Produto</h2>
<div id="formulario">
<form name="cadastro_u" method="post" action="adm.php?acao=atualizar_p" enctype="multipart/form-data">
	<ul>
        <li>
        	<input type="hidden" name="id" value="<?php echo $produto['id'];?>" > 
			<label for="name">Nome</label>
            <input type="text" size="40" id="name" name="nome" value="<?php echo $produto['nome'];?> " />
        </li>
        <li>
        	<label for="email"> Preço </label>
            <input type="text" size="40" id="email" name="preco" value="<?php echo $produto['preco'];?>"/>
        </li>
        <li>
            <label > Categoria</label>
            <select name="select_categoria">
		        <option value="livros"     <?php echo ($produto['categoria'] == "livros")     ? "selected" : ""; ?>>  Livros </option>
				<option value="dvds"       <?php echo ($produto['categoria'] == "dvds")       ? "selected" : ""; ?>>   Dvds </option>
		        <option value="jogos"      <?php echo ($produto['categoria'] == "jogos")      ? "selected" : ""; ?>>  Jogos </option>
				<option value="software"   <?php echo ($produto['categoria'] == "software")   ? "selected" : ""; ?>> Software </option>
				<option value="papelaria"  <?php echo ($produto['categoria'] == "papelaria")  ? "selected" : ""; ?>> Papelaria </option>
				<option value="acessorios" <?php echo ($produto['categoria'] == "acessorios") ? "selected" : ""; ?>> Acessórios </option>
		   </select>
        </li>
        <li>
            <label> Escolher Imagem</label>
            <input type="file" name="imagem"/>
             <h4> <?php echo "Imagem anterior: <span>".$produto['imagem'] ."</span";?>  </h4>
		</li>
        <li>
        	<label for="message">Descrição:</label>
            <input type="hidden" name="imagem_anterior" value="<?php echo $produto['imagem'];?>">
			<textarea cols="50" rows="5" id="message" name="descricao"> <?php echo $produto['descricao']; ?></textarea>
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
