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
  <h2>Mais Vendidos</h2>
  <ol>

  <?php foreach($produtos->produtos as $produto):?>

  
   <li>
        <a href="adm.php?acao=comprar&id=<?php echo $produto['id']?>">
          <figure>
            <img src="img/produto/<?php echo $produto['imagem'];?>">
            <figcaption> <?php echo $produto['nome']."<em> <br> R$".$produto['preco']. "</em>"?></figcaption>
          </figure>
        </a>
      </li>
 <?php   endforeach; ?>
  </ol>
  </section>
  
  </div> <!-- Fim da div paineis -->
 <?php 
   
      include "rodape.php"; 
 ?> 
     
  </body>
</html>