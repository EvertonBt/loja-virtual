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
  <h2> Informações Gerais  </h2>
  
  <div id="tabela"> 
 
 <br>
  
  <p> 
  Bem vindo a nossa loja virtual criada como avaliação da disciplina de Fundamentos de Programação Orientada a Objetos (java e Php)do curso de Desenvolvimento
de Aplicações para Web da faculdade Unipê.  
	   
 </p>  
 
 <br> 
   
   <p> 
 Essa aplicação foi desenvolvida pelo aluno <span> Everton Batista da Silva </span> de matrícula <span> 1521360053 </span>, usando a linguagem de programação php. 
	   
 </p> 
 
 <br>
 
  
  
  <p> 
   Para navegar pela loja e efeutar as compras use o menu lateral esquerdo  com o título <span> Departamentos </span>. Em termos de código essa área é gerenciada
   pelo arquivo <span> index.php </span>, é nesse arquivo que estão as ações que efetuam o filtro de acordo com o tipo de produto que deseja.
    
 </p> 
 
 <br>
 
 <p> 
 
  Use o <span> menu acima </span> para acessar a página principal com os produtos da loja, realizar o seu cadastro no site, fazer login, ver informações gerais e na guia fale conosco você pode enviar uma dúvida para
  o site, como uma espécie de email. Toda essa área referente ao menu acima é gerenciada pelo arquivo <span> gerencia_visitantes.php </span>.
    
 </p> 
 
 <br> 
 
 <p> 
 
 Ainda no menu acima ao clicar em <span> Área Administrativa </span> todo o menu lateral esquerdo mudará permitindo que você realize o gerenciamento de usuários cadastrados
e de produtos. Permite ainda que você visualize os emails enviados pelo formulario de fale conosco, e os registros de login e logout realizado pelos usuários. Toda essa área
administrativa é gerenciada pelo arquivo <span> adm.php </span>. Normalmente essa área é protegida, restringindo o acesso apenas para usuários administrativos, contudo
para facilitar a correção por parte do professor, ficou "aberta" para acesso irrestrito.
 </p> 
 
 <br> 
 
 <p>
   Os arquivos <span> adm.php </span> , <span> gerencia_visitantes.php </span>, <span>  index.php</span> são o coração da aplicação, eles recebem as requisições
   e definem para qual sessão do site redirecionar e quais arquivos incluir, além de reapassar os acessos ao banco de dados para as classes configuradas. Essas classes
   estão salvas no direório  <span> classes </span> dentro da pasta da aplicação.
  
 </p>
 
 <br>
 
  <p>
  
  O arquivo de banco de dados <span> loja.sql </span> está dentro do diretório banco de dados dentro da pasta da aplicaçao. O nome do banco de dados também é loja 
  e possui ao todo 4 tabelas: produtos, usuários, logs e emails. Além disso é preciso ficar atento às cofigurações do banco, elas estão declaradas no arquivo <span>
  config.php </span>
 </p>
 
<br>
 
 <p>
   
   Na área de cadastro de novos produtos, na hora de escolher as imagens, você deve escolher arquivos no formato <span> .jpg </span> ou <span> .png </span>.
   Na pasta <span> img/produto </span> há várias imagens que podem ser utilizadas para testar o cadastro de novos produtos.
 
 </p>
 
 <br> 
 <p>
  
    A aplicação foi testada no navegador google chrome (v.51) num notebook de 14 polegadas numa resolução de 1366 X 768, ela não é responsiva e possui alguns efeitos de css que podem não funcionar
	em outros navegadores ou versões.
	Algumas fontes usadas na aplicação são "linkadas" para o google web fonts isso pode tornar necessário a conexão com a internet e pode deixar a aplicação sutilmente mais lenta no carregamento.
	A aplicação também não está completa, mas todos os requisitos solicitados foram cumpridos, tais como: inclusão do cabeçalho e rodapé de forma dinâmica, formulario de fale conosco,
	informações gerais do site, pelo menos dois CRUDs, registros de login, área de cadastro, além de uma navegação fácil. 
	 
 </p>
	<br>
	<p>
	Vale ressaltar que foi pedido para que a página inicial se chamasse <span> index.php </span>
	e de fato ela se chama, quando você acessar a página index sem forncer nenhum parâmetro a mais ela chama a página sobre.php, mas na verdade quem efetua a ação é a index. Também é possível
	acessar a página index clicando no link <span> principal </span> no menu acima. Toda a navegação pelos itens dos departamentos da loja se dá por meio dessa página.
	
  
  </p>
  
  
 
  </div> <!-- Fim da div tabela -->
 
  </section>
  
  </div> <!-- Fim da div paineis -->
 <?php 
   
      include "rodape.php"; 
 ?> 
  </body>
</html>