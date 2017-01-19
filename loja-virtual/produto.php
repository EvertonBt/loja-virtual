<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Checkout Loja Virtual</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <meta name="viewport" content="width=device-width">
<!-- Fazer o meunu se juntar com o título jumbron removendo a margin-->
<!-- e mudar a cor do ícone do sanduíche que abre o menu ao clicar --> 
 <style>

.navbar {
  margin: 0;
}

.navbar .glyphicon {
  color: yellow;
}
</style>
  
  </head>
<body>
 <!-- Personalizando as mensagens de validação usando java script -->
 <script>
 document.querySelector('input[type=email]').oninvalid = function() {

  // remove mensagens de erro antigas
  this.setCustomValidity("");

  // reexecuta validação
  if (!this.validity.valid) {

    // se inválido, coloca mensagem de erro
    this.setCustomValidity("Email inválido");
  }
};
 </script>
 
 <nav class="navbar navbar-default navbar-static-top"> 

  <div class="navbar-header">
    <a class="navbar-brand" href="index.php?q=livros"> Loja Virtual</a> 
    <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
  <span class="glyphicon glyphicon-align-justify"></span>
</button>
  
  </div>
  <ul class="nav navbar-nav collapse navbar-collapse"> 
    <li><a href="sobre.php">Sobre</a></li>
    <li><a href="#">Ajuda</a></li>
    <li><a href="#">Perguntas frequentes</a></li>
    <li><a href="#">Entre em contato</a></li>
  </ul>
</nav>
 
 <div class="jumbotron">
 <div class="container">
  <h1>Ótima escolha!</h1>
  <p>Obrigado por comprar na Loja Virtual
  Preencha seus dados para efetivar a compra.</p>
 </div> 
  </div> 
 
 <div class="container"> 
 <div class="row">
 
 <div class="col-sm-4 col-lg-3">
 <div class="panel panel-success"> 
  
  <div class="panel-heading">
    <h2 class="panel-title">Sua compra</h2>
  </div>
  
  <div class="panel-body">
<img src="img/produto/<?php echo $produto['imagem']?>" 
   class="img-thumbnail img-responsive hidden-xs" > 
   
 
	<dl>
  
  <dt>Produto</dt>
  <dd><?= $produto['nome'] ?></dd>
  
  <dt>Preço</dt>
  <dd id="preco"><?= $produto['preco'] ?></dd>

  </dl>

   <div class="form-group">
    <label for="qt">Quantidade</label>
    <input id="qt" class="form-control" type="number" min="0" max="99"
      value="1">
  </div>
  
  <div class="form-group">
    <label for="total">Total</label>
    <output for="qt valor" id="total" class="form-control">
      <?= $produto['preco'] ?>
    </output>
  </div>
  
  </div>

  </div>
  </div> 

  
  
  <form class="col-sm-8 col-lg-9"> 
  
  <div class="row">
  <fieldset class="col-md-6">
    <legend>Dados pessoais</legend>
     <div class="form-group">
    <label for="nome">Nome completo</label>
    <input type="text" class="form-control" id="nome" name="nome" autofocus required>
  </div>

  <div class="form-group">
    <label for="email">Email</label>

	<div class="input-group">
      <span class="input-group-addon"> @</span>
      <input type="email" class="form-control"
             id="email" name="email" placeholder="email@example.com">
  </div>
  </div>

  <div class="form-group">
    <label for="cpf">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00"  required>
  </div>

  <div class="checkbox">
    <label>
      <input type="checkbox" value="sim" name="spam" checked>
      Quero receber spam da Loja Virtual
    </label>
  </div>
  </fieldset>

   <fieldset class="col-md-6">
  <legend>Cartão de crédito</legend>

  <div class="form-group">
    <label for="numero-cartao">Número - CVV</label>
    <input type="text" class="form-control" 
           id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
  </div>

  <div class="form-group">
    <label for="bandeira-cartao">Bandeira</label>
    <select name="bandeira-cartao" id="bandeira-cartao"
        class="form-control">
      <option value="master">MasterCard</option>
      <option value="visa">VISA</option>
      <option value="amex">American Express</option>
    </select>
  </div>

  <div class="form-group">
    <label for="validade-cartao">Validade</label>
    <input type="month" class="form-control" 
           id="validade-cartao" name="validade-cartao">
  </div>
</fieldset>
   
   
   
  <button type="submit" class="btn btn-primary pull-right btn-lg"> 
  <span class="glyphicon glyphicon-thumbs-up"></span>  
  Confirmar Pedido
  </button>
</form>
  </div>
  </div> 
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
<script>
jQuery(function($){
   $("#cpf").mask("999.999.999-99" ,{placeholder:"xxx.xxx.xxx-xx"});
   $("#phone").mask("(999) 999-9999");
   $("#tin").mask("99-9999999");
   $("#ssn").mask("999-99-9999");
});
</script>
<script src="js/inputmask-plugin.js"></script> 
<script src="js/ConverteMoeda.js"> </script>
<script src="js/TestaConversao.js"> </script>
<script src="js/total.js"> </script>
</body>
</html>
