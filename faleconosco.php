<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TECNOCAR_EMPILHADEIRAS</title>
  <link rel="stylesheet" type="text/css" media=" screen and (min-width: 320px)" href="styles/Small.css">
  <link rel="stylesheet" type="text/css" media=" screen and (min-width: 1000px)" href="styles/Medium.css">
  <link rel="stylesheet" type="text/css" media=" screen and (min-width: 1350px)" href="styles/style.css">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="total">     
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script> 
    
    <?php
if (isset($_POST['BTEnvia'])){
 
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 	//====================================================
	$email_remetente = "douglas@dgssistemas.net"; // deve ser um email do dominio
	//====================================================
 
 
	//Configurações do email, ajustar conforme necessidade
	//====================================================
	$email_destinatario = "esquinel_dr@hotmail.com"; // qualquer email pode receber os dados
	$email_reply = "$email";
	$email_assunto = "Contato Website";
	//====================================================
 
 
	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
 	$mensagem = $_POST['mensagem'];
	//====================================================
 
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n"; 
	$email_conteudo .=  "Telefone = $telefone \n";
	$email_conteudo .=  "Mensagem = $mensagem \n";
 	//====================================================
 
	//Seta os Headers (Alerar somente caso necessario)
	//====================================================
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
 
 
	//Enviando o email
	//====================================================
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
		echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
        echo "javascript:window.location='faleconosco.html';</script>"; 
	}
  	else{
		echo "<script type='javascript'>alert('Problema ao enviar!');";
        echo "javascript:window.location='faleconosco.html';</script>";
	}
	//====================================================
}	
?>  
            <!-- Inicio da barra de navegação --> 
         <div class="item1">
           <div class="logo"><img src="imagens/logo.png" width="188" height="125"></div>
         <div class="rede">
          <a href="#"><img src="imagens/FACE.png" width="40" height="40"></a>
          &nbsp &nbsp
          <a href="#"><img src="imagens/2000px-Twitter_Logo_Mini.svg_.png" width="40" height="40"></a>
          &nbsp &nbsp <span class="Siga">Siga-nos...</span> </div>
        <div class="pesquisa">
      <form class="navbar-form navbar-left" role="search">
    <div class="input-group">
   <input type="text" class="form-control" placeholder="Encontre em nosso site....." size="50px">
  <div class="input-group-btn">
 <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search black" aria-hidden="true"></span></button>
  </div>
    </div> 
     </form>
       </div>
        </div>
           <!-- Inicio do Letreiro com barra de navegação -->
    <div class="item2">
      <div class="letreiro">
       <marquee width="1200"> <img src="imagens/topo-empilhadeira.png" width="100" height="35" >....Sejam bem vindos em nossa Home-Page....</marquee>
      </div>
    </div>
                 <!-- Inicio da div de botões -->
 <div class="item4">
   <div class="linha"></div>
     <div class="botao">          
       <a href="index.html" type="button" class="btn btn-link btn-lg" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>HOME</a>
       <a href="servicos.html" type="button" class="btn btn-link btn-lg" ><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>SERVIÇOS</a>
       <a href="vendasaluguel.html" type="button" class="btn btn-link btn-lg" ><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>VENDAS/ALUGUEL</a>
       <a href="faleconosco.html" type="button" class="btn btn-link btn-lg" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>FALE CONOSCO</a>
       <a href="orcamento.html" type="button" class="btn btn-link btn-lg" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>ORÇAMENTOS</a>
    </div>
 </div>   
               <!-- inicio do formulario de contato -->
    <h1>Entre em contato conosco</h1>
<div class="form">
    <br>
      <div class="nome">         
        <form class="form-horizontal">
            <form action="<? $PHP_SELF; ?>" method="POST">
          <div class="form-group">
           <div class="col-sm-10">
               <input type="nome" class="form-control" name="nome" placeholder="DIGITE AQUI SEU NOME">
           </div>
          </div> 
          <div class="form-group">
           <div class="col-sm-10">
             <input type="email" class="form-control" name="email"  placeholder="DIGITE AQUI SEU E-MAIL">
           </div>
          </div> 
          <div class="form-group">
           <div class="col-sm-10">
              <input type="telefone" class="form-control" name="telefone" placeholder="DIGITE AQUI SEU TELEFONE" >
           </div>
          </div> 
            <div class="form-group">
             <div class="col-sm-10">
               <textarea name="mensagem" rows="3" class="form-control" placeholder="ESCREVA AQUI SUA MENSAGEM" ></textarea>
             </div>
            </div>
               <a href="BTEnvia.php" type="button" class="btn btn-primary btn-lg btn-block">ENVIAR</a>
        </form> 
            </form>
          
      </div>
  <div class="direita"><h2>Estamos Localizados</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.209706365262!2d-49.91561368458929!3d-22.232120819734703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfda75a1da08d5%3A0x9756848812b09b8b!2sR.+Aldo+Roteli%2C+82+-+Jardim+Esplanada%2C+Mar%C3%ADlia+-+SP%2C+17521-390!5e0!3m2!1spt-BR!2sbr!4v1478290270491" width="300" height="200" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
    <div class="position">
            <address>
              <strong>TECNOCAR EMPILHADEIRAS</strong><br>
                Rua Aldo Roteli, Nº82 <br>
                CEP 17521-390<br>
                Bairro Jardim Esplanada<br>
                Cidade de Marília, São Paulo <br>
                Tel. (14) 3417-4956 / (14) 9784-6825
            </address>
         <address>
           <strong>Sandra / Carlos</strong><br>
           <a href="mailto:tecnocar@tecnocarempilhadeiras.com.br">tecnocar@tecnocarempilhadeiras.com.br</a>
         </address>
    </div>
  </div>
</div>    
             <!-- Final do Website -->
           <div class="footerf">Desenvolvido por DGS_SISTEMAS® 2014-2016</div>
</body>
</html>
