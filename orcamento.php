<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TECNOCAR_EMPILHADEIRAS</title>
  <link rel="stylesheet" type="text/css" media=" screen and (min-width: 320px)" href="styles/Small.css">
  <link rel="stylesheet" type="text/css" media=" screen and (min-width: 1000px)" href="styles/Medium.css">
  <link rel="stylesheet" type="text/css" media=" screen and (min-width: 1350px)" href="styles/style.css">
  <link rel="stylesheet" type="text/css" href="../../../../formulario.css" />
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="total">     
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>   
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
       <a href="faleconosco.php" type="button" class="btn btn-link btn-lg" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>FALE CONOSCO</a>
       <a href="orcamento.html" type="button" class="btn btn-link btn-lg" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>ORÇAMENTOS</a>
    </div>
 </div>

<?php
 
/* apenas dispara o envio do formulário caso exista $_POST['enviarFormulario']*/
 
if (isset($_POST['enviarFormulario'])){
 
 
/*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/
 
$enviaFormularioParaNome = 'TECNOCAR_WEBSITE';
$enviaFormularioParaEmail = 'esquinel_dr@hotmail.com';
 
$caixaPostalServidorNome = 'WebSite | Formulário';
$caixaPostalServidorEmail = 'esquinel_dr@hotmail.com';
$caixaPostalServidorSenha = 'motoka';
 
/*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/ 
 
 
/* abaixo as veriaveis principais, que devem conter em seu formulario*/
 
$remetenteNome  = $_POST['nome'];
$remetenteEndereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$remetenteEmail = $_POST['email'];
$telefone = $_POST['telefone'];
$operadora = $_POST['operadora'];
$assunto  = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
 
$mensagemConcatenada = 'Formulário gerado via website para Orçamento'.'<br/>'; 
$mensagemConcatenada .= '-------------------------------<br/><br/>'; 
$mensagemConcatenada .= 'Nome: '.$remetenteNome.'<br/>';
$mensagemConcatenada .= 'Endereço: '.$remetenteEndereco.'<br/>';
$mensagemConcatenada .= 'Bairro: '.$bairro.'<br/>';
$mensagemConcatenada .= 'E-mail: '.$remetenteEmail.'<br/>';
$mensagemConcatenada .= '-------------------------------<br/><br/>';
$mensagemConcatenada .= 'Telefone: '.$telefone.'<br/>';
$mensagemConcatenada .= 'Operadora: '.$operadora.'<br/>';
$mensagemConcatenada .= '-------------------------------<br/><br/>';
$mensagemConcatenada .= 'Telefone: '.$telefone.'<br/>';
$mensagemConcatenada .= 'Operadora: '.$operadora.'<br/>';
$mensagemConcatenada .= '-------------------------------<br/><br/>'; 
$mensagemConcatenada .= 'Telefone: '.$telefone.'<br/>';
$mensagemConcatenada .= 'Operadora: '.$operadora.'<br/>';  
$mensagemConcatenada .= '-------------------------------<br/><br/>'; 
$mensagemConcatenada .= 'Assunto: '.$assunto.'<br/>';
$mensagemConcatenada .= 'Mensagem: "'.$mensagem.'"<br/>';
 
 
/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/ 
 
require_once('/Users/Douglas_Esquinelato/Desktop/form/PHPMailer-master/PHPMailerAutoload.php');
 
$mail = new PHPMailer();
 
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth  = true;
$mail->Charset   = 'utf8_decode()';
$mail->Host  = 'smtp-mail.outlook.com';
$mail->Port  = '587';
$mail->Username  = $caixaPostalServidorEmail;
$mail->Password  = $caixaPostalServidorSenha;
$mail->From  = $caixaPostalServidorEmail;
$mail->FromName  = utf8_decode($caixaPostalServidorNome);
$mail->IsHTML(true);
$mail->Subject  = utf8_decode($assunto);
$mail->Body  = utf8_decode($mensagemConcatenada);
 
 
$mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));
 
if(!$mail->Send()){
$mensagemRetorno = 'Erro ao enviar formulário: '. print($mail->ErrorInfo);
}else{
$mensagemRetorno = 'Formulário enviado com sucesso!';
} 
 
 
}
?>

<form action="" method="post">
 <div class="formulario">Formulário para Orçamento</div>
  <div class="espaco">			  
     <label>SEU NOME COMPLETO (*)</label>
	 <input name="nome" class="form-control" value="" type="text" />
  </div>
      <div class="left">
		<label>SEU ENDEREÇO</label>
		<input name="endereco" class="form-control" value="" type="text">
	  </div>
      <div class="left">
        <label>SEU BAIRRO (*)</label>
		<input name="bairro" class="form-control" value="" type="text">
	  </div>
      <div>
	    <label>SEU ENDEREÇO DE EMAIL (*)</label>
	    <input name="email" class="form-control" value="" type="text" />
  </div>
  <div class="leftc">
		  <label>TELEFONE  (*)  </label>
		  <input  name="telefone" class="form-control" maxlength="15" value="" type="text">
  </div>
  <div class="leftnovo">
        <label for="operadora"> OPERADORA  (*)</label>
		<select class="form-control" id="operadora" name="operadora"> 
        <option value="" selected="selected"></option>
        <option value="Oi Fixo" >Oi Fixo</option>
        <option value="Oi Movel" >Oi Móvel</option>
        <option value="Vivo" >Vivo Móvel</option>
        <option value="Claro" >Claro Móvel</option>
        <option value="Tim Movel" >Tim Móvel</option>
        <option value="Tim Fixo" >Tim Fixo</option>
        <option value="Nextel" >Nextel</option>
        <option value="Nextel" >GVT</option>
        <option value="Nextel" >Net Fone</option>
        <option value="Nextel" >Livre Embratel</option>
	    </select>
  </div>    
  <div class="leftc">
		  <label>TELEFONE  (*)  </label>
		  <input  name="telefone" class="form-control" maxlength="15" value="" type="text">
  </div>
  <div class="leftnovo">
        <label for="operadora"> OPERADORA  (*)</label>
		<select class="form-control" id="operadora" name="operadora"> 
        <option value="" selected="selected"></option>
        <option value="Oi Fixo" >Oi Fixo</option>
        <option value="Oi Movel" >Oi Móvel</option>
        <option value="Vivo" >Vivo Móvel</option>
        <option value="Claro" >Claro Móvel</option>
        <option value="Tim Movel" >Tim Móvel</option>
        <option value="Tim Fixo" >Tim Fixo</option>
        <option value="Nextel" >Nextel</option>
        <option value="Nextel" >GVT</option>
        <option value="Nextel" >Net Fone</option>
        <option value="Nextel" >Livre Embratel</option>
	    </select>
  </div>
  <div class="leftc">
		  <label>TELEFONE  (*)  </label>
		  <input  name="telefone" class="form-control" maxlength="15" value="" type="text">
  </div>
  <div class="leftnovo">
        <label for="operadora"> OPERADORA  (*)</label>
		<select class="form-control" id="operadora" name="operadora"> 
        <option value="" selected="selected"></option>
        <option value="Oi Fixo" >Oi Fixo</option>
        <option value="Oi Movel" >Oi Móvel</option>
        <option value="Vivo" >Vivo Móvel</option>
        <option value="Claro" >Claro Móvel</option>
        <option value="Tim Movel" >Tim Móvel</option>
        <option value="Tim Fixo" >Tim Fixo</option>
        <option value="Nextel" >Nextel</option>
        <option value="Nextel" >GVT</option>
        <option value="Nextel" >Net Fone</option>
        <option value="Nextel" >Livre Embratel</option>
	    </select>
	    </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
       <div>
          <label >ASSUNTO DESEJADO</label>
		  <input name="assunto" class="form-control" value="" type="text">
       </div>
       <div>
         <label class="descrição" >MENSAGEM DESEJADA</label>
		 <textarea class="form-control" rows="10" name="mensagem"></textarea>
		</div>
        <BR />
        <imput type="submit" class="btn btn-primary btn-lg btn-block" name="enviarFormulario" value="ENVIAR">
      </form>  
    
                <!-- Final do Website -->
           <div class="footer">Desenvolvido por DGS_SISTEMAS® 2014-2016</div>
</body>
</html>