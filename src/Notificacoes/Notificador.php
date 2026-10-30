<?php

// Namespace principal/raíz: App (pode ser qualquer nome)
// Seguido de \ e o nome do subnamespace (nome da pasta)
namespace App\Notificacoes;

interface Notificador
{
    public function enviar(string $mensagem): string;
    public static function getQuantidadeEnviada(): int;
}