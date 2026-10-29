# Dicas: `Pedido` e `StatusPedido`

## Como os arquivos se relacionam

`StatusPedido.php` define quais status são permitidos. `Pedido.php` representa um pedido e usa essa definição para tipar seu status. Assim, o pedido não recebe qualquer texto livre: seu status precisa ser um dos casos existentes em `StatusPedido`.

O arquivo que usa as duas definições deve carregar `StatusPedido.php` antes de `Pedido.php`, pois a classe `Pedido` depende desse tipo. O exemplo de `index.php` segue essa ordem.

## `StatusPedido.php`

- `enum StatusPedido: string`: declara uma enumeração chamada `StatusPedido`. Uma enumeração representa um conjunto limitado de opções. O `: string` indica que cada caso tem um valor associado do tipo texto. Esse recurso requer PHP 8.1 ou mais recente.
- `case Pendente = "Pendente";` e os demais `case`: cada linha cria uma opção válida. O nome do caso, como `AguardandoPagamento`, é usado no código; o texto associado, como `"Aguardando pagamento"`, é útil para exibição. Os dois podem ter grafias diferentes.
- Os valores associados são acessados com `->value`. Por exemplo, `StatusPedido::AguardandoPagamento->value` resulta no texto `"Aguardando pagamento"`.

Como a enum é fechada, não é possível inventar um novo caso durante a execução atribuindo uma string qualquer. Para adicionar um status, é preciso declarar outro `case`.

## `Pedido.php`

- `class Pedido`: declara a classe que modela um pedido.
- `$numero`, `$cliente` e `$status`: são propriedades do objeto. Os tipos `int`, `string` e `StatusPedido` limitam os dados aceitos. A palavra `private` impede o acesso direto a essas propriedades de fora da classe, favorecendo o encapsulamento.
- `__construct(...)`: é executado ao criar um pedido. Recebe número, cliente e status e os guarda no objeto usando `$this`, que representa a instância atual. O terceiro parâmetro deve ser um caso de `StatusPedido`.
- Getters (`getNumero`, `getCliente`, `getStatus`): retornam os valores das propriedades. O tipo após `:` informa o tipo de retorno, por exemplo `: int` ou `: StatusPedido`.
- Setters (`setNumero`, `setCliente`, `setStatus`): atualizam as propriedades. Seus parâmetros também são tipados; `setStatus(StatusPedido $status)` só aceita um caso da enum. `: void` indica que o método não retorna um valor.

## Exemplo do fluxo

```php
$pedido = new Pedido(1001, "Fulano da Silva", StatusPedido::Pendente);
$pedido->setStatus(StatusPedido::Pago);

echo $pedido->getStatus()->value; // Pago
```

Na primeira linha, `StatusPedido::Pendente` fornece um status permitido ao construtor. Depois, o setter substitui esse status por outro caso válido. O getter devolve o caso da enum, e `->value` obtém o texto associado para exibição.

## Limite importante

O tipo `StatusPedido` garante que o status seja uma opção declarada, mas não garante que a mudança faça sentido no processo do pedido. Por exemplo, `setStatus(StatusPedido::Pago)` pode ser chamado mesmo que o pedido ainda esteja pendente. Se for necessário impedir transições inválidas, essa regra precisa ser implementada separadamente.