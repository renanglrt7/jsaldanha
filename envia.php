<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$assunto = addslashes($_POST['assunto']);

$para = "renangmail.com";
$assuntoemail = "Coleta de dados";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

$cabeca = "From: gisele@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assuntoemail,$corpo,$cabeca)){
    echo("Email enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}

?>