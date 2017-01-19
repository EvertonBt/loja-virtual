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
    <h2>Opções Administrativas</h2>

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
  <h2> Logs de Acesso </h2>
  <h3> 
      <?php if(isset($_GET['removido'])) echo "  Registro Removido com Sucesso!!!" ?> 
  </h3> 
  <div id="tabela"> 
  <table>
<tr>
<th> Registro</th>
<th> Usuario </th>
<th> Tipo de Ação</th>
<th>  Horário de Acesso</th>
<th colspan='1'> Opção</th>
</tr>
<tr> &nbsp; </tr>
<?php foreach ($usuarios->logs as $log) : ?>
<tr>
<td>
<?php echo $log['id_log']; ?>
</td>
<td>
<?php echo $log['usuario']; ?>
</td>
<td>
<?php echo $log['tipo_acao']; ?>
</td>
<td>
<?php echo $log['horario']; ?>
</td>
<td> <a href="adm.php?acao=remover_l&id=<?php echo $log['id_log'];?> "> remover registro</a> </td>
</tr>
<?php endforeach; ?>
</table>
  </div> <!-- Fim da div tabela -->
 
  </section>
  
  </div> <!-- Fim da div paineis -->
 <?php 
   
      include "rodape.php"; 
 ?> 
     <!-- <h1> <del> Olá, sou o index.html! </del> </h1> -->
  </body>
</html>