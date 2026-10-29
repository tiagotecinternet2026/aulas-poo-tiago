<?php 
require_once "src/Notificador.php"; 
require_once "src/NotificadorEmail.php"; 
require_once "src/NotificadorSMS.php"; 

$notificadorPorEmail = new NotificadorEmail();
$notificadorPorSMS = new NotificadorSMS();

// Pedido 123abc
$emailPedido1 = $notificadorPorEmail->enviar("Seu pedido 123abc foi confirmado!");
$smsPedido1 = $notificadorPorSMS->enviar("Seu pedido 123abc foi confirmado!");

// Pedido 789xyz
$emailPedido2 = $notificadorPorEmail->enviar("Seu pedido 789xyz foi confirmado!");

// Pedido 456asd
$emailPedido3 = $notificadorPorEmail->enviar("Seu pedido 456asd foi confirmado!");

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
                <h2>Notificações: Pedido 123abc</h2>
                <p> <?= $emailPedido1 ?> </p>
                <p> <?= $smsPedido1 ?> </p>
            </article>

            <article class="card-conteudo">
                <h2>Notificações: Pedido 789xyz</h2>
                <p> <?= $emailPedido2 ?> </p>
                <p> </p>
            </article>

            <article class="card-conteudo">
                <h2>Notificações: Pedido 456asd</h2>
                <p> <?= $emailPedido3 ?> </p>
                <p> </p>
            </article>
        </div>

        <hr>        

        <section class="card-conteudo">
            <h2>Resumo/Total dos envios de notificações</h2>
            
            <!-- Note abaixo o acesso do método estático ATRAVÉS da classe
             e com o uso do operador :: (resolução de escopo) -->
            <p>E-mails enviados: <b> <?= NotificadorEmail::getQuantidadeEnviada() ?> </b> </p>
            <p>SMS enviados: <b> <?= NotificadorSMS::getQuantidadeEnviada() ?> </b> </p>
        </section>

        <hr>

    <div class="assuntos-estudados">
        <h2>Assuntos estudados</h2>
        <ul></ul>
    </div>

    </div>
</body>

</html>