<?php 
if ($_POST) {
	
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];


$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers = 'From: esquinel_dr@hotmail.com';// <- O e-mail que está configurado no .htaccess
$headers = "X-Sender:  \n"; //email do servidor //que enviou
$headers = 'Date:'.date('r');


$message = "Testando outros remetentes, para facilitar a resposta";


if (mail('esquinel_dr@hotmail.com', $mensagem, $telefone, $email, $nome, $headers)) {
	print('Funcionou');
}else{ 
	print('Nao Funcionou...');

};
}
?>  