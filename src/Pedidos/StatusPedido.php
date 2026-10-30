<?php
namespace App\Pedidos;

/* Cada case representa um status permitido e
possui um valor/texto associado, que você pode escrever
como quiser (acentos, espaços, cedilha) */

enum StatusPedido: string
{
    case Pendente = "Pendente";
    case AguardandoPagamento = "Aguardando pagamento";
    case Pago = "Pago";
    case EmPreparacao = "Em preparação";
    case SaiuParaEntrega = "Saiu para entrega";
}