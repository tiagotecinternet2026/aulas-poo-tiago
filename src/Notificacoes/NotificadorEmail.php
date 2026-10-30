<?php
namespace App\Notificacoes;

class NotificadorEmail implements Notificador
{
    // Contador de envios
    private static int $quantidadeEnviada = 0;

    public function enviar(string $mensagem): string
    {
        /* Sempre que ocorrer o acionamento do método enviar,
        atualizaremos a propriedade estática da classe */
        self::$quantidadeEnviada++;

        return "E-mail: $mensagem";
    } 

    /* Usaremos um getter estático para ter
    acesso ao total de envios feitos */
    public static function getQuantidadeEnviada(): int
    {
        return self::$quantidadeEnviada;
    }

}