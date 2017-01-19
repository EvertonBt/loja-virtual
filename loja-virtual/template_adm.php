<?php
$estilo = '<link rel="stylesheet" href="css/estilos.css" type="text/css">';
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
    <h2>Departamentos</h2>

    <nav>
      <ul>
        <li>
		    <a href="index.php?q=livros">Livros</a>
	</li>
		
		<li><a href="index.php?q=dvds">Listar Usuários</a></li>
        <li><a href="index.php?q=jogos">Listar Produtos</a></li>
        <li><a href="index.php?q=telefonia">Cadastrar Usuários</a></li>
		<li><a href="index.php?q=software">Cadastrar Produtos</a></li>
        <li><a href="index.php?q=papelaria"> Logs de Acesso</a></li>
        <li><a href="index.php?q=acessorios">Acessórios</a></li>
      </ul>
    </nav>
  </section><!-- fim .menu-departamentos -->


</div><!-- fim .container .destaque -->
 
 
  <div class="container paineis">
  <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->
  <section class="painel mais-vendidos">
  <h2> Lista de Produtos</h2>
  <table>
<tr>
<th>Id</th>
<th>Nome</th>
<th>Descricao</th>
<th>Preco</th>
<th>Opções</th
</tr>
<?php foreach ($produtos->produtos as $produto) : ?>
<tr>
<td>
<a href="adm.php?id=<?php echo $produto['id']; ?> ">
<?php echo $produto['id']; ?>
</a>
</td>
<td>
<?php echo $produto['nome']; ?>
</td>
<td>
<?php echo $produto['descricao']; ?>
</td>
<td>
<?php echo $produto['preco']; ?>
</td>
<td> <a href="adm.php?action=editar&id=<?php echo $produto['id']; ?> "> Editar</a> </td>
<td> <a href="adm.php?action=remover&id=<?php echo $produto['id']; ?> "> Remover</a> </td>
</tr>
<?php endforeach; ?>
</table>
  
 
  </section>
  
  </div> <!-- Fim da div paineis -->
 <?php 
   
      include "rodape.php"; 
 ?> 
     <!-- <h1> <del> Olá, sou o index.html! </del> </h1> -->
  </body>
</html>