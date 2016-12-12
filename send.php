<?php 
$date = date("d/m/Y h:i");

include "config.php";



//ENVIO DA MENSAGEM ORIGINAL
if (!empty($_POST)) {

$headers = "$cabecalho_da_mensagem_original";
if ($assunto_digitado_pelo_usuario=="n")
{
  $assunto = "$assunto_da_mensagem_original";
};
$seuemail = "$email_para_onde_vai_a_mensagem";
$mensagem = "$configuracao_da_mensagem_original";
mail($seuemail,$assunto,$mensagem,$headers);

//ENVIO DE MENSAGEM DE RESPOSTA AUTOMATICA
$headers = "$cabecalho_da_mensagem_de_resposta";
if ($assunto_digitado_pelo_usuario=="s")
{
  $assunto = "$assunto_da_mensagem_de_resposta";
}
else
{
  $assunto = "Re: $assunto";
};
$mensagem = "$configuracao_da_mensagem_de_resposta";

mail($email,$assunto,$mensagem,$headers);

if (empty($email)){
echo "<script>alert('Preencha os campos corretamente');";
echo "location.href='index.html'</script>";
}
elseif (empty($assunto)){
echo "<script>alert('Preencha os campos corretamente');";
echo "location.href='index.html'</script>";
}
if (empty($mensagem)){
echo "<script>alert('Preencha os campos corretamente');";
echo "location.href='index.html'</script>";
}
elseif (empty($headers)){
echo "<script>alert('Preencha os campos corretamente');";
echo "location.href='index.html'</script>";
}
else{

echo "<script>alert('Enviado com sucesso');";
echo "location.href='index.html'</script>";
}	}

?>