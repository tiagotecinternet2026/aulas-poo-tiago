<?php 
require_once "src/Notificador.php"; 
require_once "src/NotificadorEmail.php"; 
require_once "src/NotificadorSMS.php"; 

$notificadorPorEmail = new NotificadorEmail();
$notificadorPorSMS = new NotificadorSMS();


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificações da loja virtual</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja Virtual</p>
            <h1>Notificações da loja virtual</h1>
            <p>Simulação de notificações sobre pedidos por e-mail e SMS</p>
        </header>

        <div class="conteudos">        
            <article class="card-conteudo">
                
            </article>
        </div>

        <hr>        

    <div class="assuntos-estudados">
        <h2>Assuntos estudados</h2>
        <ul></ul>
    </div>

    </div>
</body>

</html>