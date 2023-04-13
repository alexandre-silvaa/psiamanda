<?php
$fone = '5515998524942';
$mensagem = 'Olá Amanda, tudo bem? Vim pelo seu site e gostaria informações sobre as consultas, por favor.';

$url = "https://api.whatsapp.com/send?phone=$fone&text=$mensagem"; // URL do link que você deseja abrir

header("Location: $url");
exit; // Importante: use a função "exit" para interromper a execução do script após a função "header"
?>
