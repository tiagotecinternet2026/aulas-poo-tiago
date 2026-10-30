<?php 
/* Nesta segunda forma, basta indicar o uso do recurso através do namespace */
use App\Pedidos\Pedido;

// Repare que aqui definimos um apelido (as) para solucionar o conflito de nomes de classe
use App\Relatorios\Pedido as RelatorioPedido;

use App\Pedidos\StatusPedido;

// Atualizamos os caminhos físicos (pasta/arquivo.php)
require_once "src/Relatorios/Pedido.php";
require_once "src/Pedidos/StatusPedido.php"; 
require_once "src/Pedidos/Pedido.php"; 
require_once "src/Notificacoes/Notificador.php"; 
require_once "src/Notificacoes/NotificadorEmail.php"; 

// Veja que nessa primeira forma, precisamos passar o nome completo da classe
$notificadorPorEmail = new App\Notificacoes\NotificadorEmail();

$pedido1 = new Pedido(1001, "Fulano da Silva", StatusPedido::Pendente);
$pedido2 = new Pedido(1002, "Beltrano Souza", StatusPedido::Pendente);
$pedido3 = new Pedido(1003, "José da Silva", StatusPedido::AguardandoPagamento);
$pedido4 = new Pedido(1004, "Mônica Santos", StatusPedido::SaiuParaEntrega);

$pedido3->setStatus(StatusPedido::Pago);
$pedidos = [$pedido1, $pedido2, $pedido3, $pedido4];

// Criando um objeto a partir da classe Pedido do subnamespace Relatorios
$relatorioPedido1 = new RelatorioPedido(); // repare que usamos o apelido em vez do nome real
$relatorioPedido2 = new App\Relatorios\Pedido(); // também é válido usando nome completo

// var_dump($relatorioPedido1, $relatorioPedido2);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos da loja virtual</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja Virtual</p>
            <h1>Pedidos da loja virtual</h1>
            <p>Cada pedido possui um status: Pendente, Aguardando pagamento, Em preparação, Pago ou Saiu para entrega</p>
        </header>

        <div class="conteudos">      
        <?php foreach($pedidos as $pedido): ?>
            <article class="card-conteudo">
                <h2>Pedido #<?= $pedido->getNumero() ?> </h2>
                <p>Cliente: <?= $pedido->getCliente() ?> </p>
                <p>Status: 
                    <!-- Atenção ao uso necessário do value para mostrar os valores -->
                    <b class="destaque"> <?= $pedido->getStatus()->value ?> </b>
                </p>
        <?php 
        $mensagem = 'Seu pedido #'.$pedido->getNumero().' está com o status: '.$pedido->getStatus()->value;
        ?>
                <p><small> <?= $notificadorPorEmail->enviar($mensagem) ?></small></p>
            </article>
        <?php endforeach; ?>            
        </div>

        <hr>               

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                
            </ul>
        </div>

    </div>
</body>

</html>