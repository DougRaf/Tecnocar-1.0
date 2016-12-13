<?php

//declaração das variaveis de mensgem
   $date = date("d/m/Y h:i");
   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $telefone = $_POST["telefone"];
   $textodamensagem = $_POST["obs"];
   
//faz a configuração de redirecionamento
   $nome_do_site="Tecnocar_Empilhadeira";
   $email_para_onde_vai_a_mensagem = "esquinel_dr@hotmail.com";
   $nome_de_quem_recebe_a_mensagem = "Website_Tecnocar";
   $exibir_apos_enviar= "index.html";
      
//configuração do e-mail de resposta automatica
   $assunto_da_mensagem_de_resposta = "Confirmação";
   $cabecalho_da_mensagem_de_resposta = "From: $nome_do_site <$email_para_onde_vai_a_mensagem>\n";
   $configuracao_da_mensagem_de_resposta=
   "Obrigado por entrar em contato conosco!\nNossa equipe esta trabalhando para melhor atende-los, Logo entraremos em contato.\n
   Atenciosamente...\n
   TECNOCAR EMPILHADEIRAS\n
   (14) 3417-8803\n
   www.tecnocarempilhadeiras.com.br\n
   \nEnviado em: $date";

//enviando a mensagem para o e-mail
   $configuracao_da_mensagem_original .= "Nome: $nome\n";   
   $configuracao_da_mensagem_original .= "Email: $email\n";
   $configuracao_da_mensagem_original .= "Telefone: $telefone\n";
   $configuracao_da_mensagem_original .= "Mensagem: $textodamensagem\n";
   $configuracao_da_mensagem_original .= "ENVIADO EM: $date";
    
?>

