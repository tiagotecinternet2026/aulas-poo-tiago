<?php 
require_once "src/StatusPedido.php"; // a Enumeração DEVE vir primeiro
require_once "src/Pedido.php"; // pois a classe Pedido precisa dela

require_once "src/Notificador.php"; 
require_once "src/NotificadorEmail.php"; 

$notificadorPorEmail = new NotificadorEmail();

/* Repare no terceiro parâmetro: é OBRIGATÓRIO usar uma das opções definidas na Enum. */
$pedido1 = new Pedido(1001, "Fulano da Silva", StatusPedido::Pendente);
$pedido2 = new Pedido(1002, "Beltrano Souza", StatusPedido::Pendente);
$pedido3 = new Pedido(1003, "José da Silva", StatusPedido::AguardandoPagamento);
$pedido4 = new Pedido(1004, "Mônica Santos", StatusPedido::SaiuParaEntrega);

$pedidos = [$pedido1, $pedido2, $pedido3, $pedido4];
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