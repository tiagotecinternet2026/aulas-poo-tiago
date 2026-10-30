<?php 
use App\Pedidos\Pedido;
use App\Relatorios\Pedido as RelatorioPedido;
use App\Pedidos\StatusPedido;
use App\Saudacao;

/* Substituimos TODOS os requires manuais de cada arquivo (classe, interface, enum)
por UM ÚNICO require apontando para o autoload. */
require_once "vendor/autoload.php";

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

$saudacao = new Saudacao();
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
            <p>Testando a saudação: <?= $saudacao->cumprimentar() ?></p>
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
                <li><b>Composer</b>: gerenciador de dependências para PHP; aqui utilizamos apenas o recurso de <b>autoload</b></li>
                <li>Configuração do autoload no <b>composer.json</b></li>
                <li><b>PSR-4</b>: diretriz que determina a relação entre namespaces e diretórios para o autoload</li>
                <li>Mapeamento do namespace <b>App\</b> para a pasta <b>src/</b></li>
                <li>Geração do autoload com <b>composer dump-autoload</b></li>
                <li>Carregamento do autoload na index.php usando um único <b>require_once</b> apontando para <b>vendor/autoload.php</b></li>
                <li>Teste: criação da classe <b>Saudacao</b> com carregamento automático via autoload</li>
                <li><b>composer install</b>: instala dependências e gera arquivos do autoload (desde que você tenha o composer.json)</li>
                <li>Lembrete: a pasta <b>vendor</b> não precisa ser versionada pelo Git. Por isso, a colocamos no <b>.gitignore</b></li>
            </ul>
        </div>

    </div>
</body>

</html>