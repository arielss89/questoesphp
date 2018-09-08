<?php
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['tel'];
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$dest = $_POST['dest'];//destinatário
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	

	if(mail($email, $dest, $assunto,$mensagem))
		Echo "Olá $nome ". "Seus dados são $email $senha $telefone $cpf $rg $assunto $mensagem ";
		Echo "Email enviado para $dest com sucesso";


	else
		Echo "Erro ao enviar mensagem";
	
?>