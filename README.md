# Exemplos de POO no PHP

Neste repositório utilizaremos o PHP com **Programação Orientada a Objetos**.

Os assuntos e exemplos estão divididos por `branches`, acessíveis pelo menu de branches no GitHub.

---

## Branch 01: Classes, Objetos, Propriedades e Métodos

https://github.com/tiagotecinternet2026/aulas-poo-tiago/tree/01_classes-objetos-propriedade-metodos

- Classes e Objetos
- Propriedades e métodos
- Tipos de dados
- Uso do `$this` para acessar recursos de dentro da própria classe

---

## Branch 02: Visibilidade e Encapsulamento

https://github.com/tiagotecinternet2026/aulas-poo-tiago/tree/02_visibilidade-e-encapsulamento

- Visibilidade de propriedades: `public` e `private`
- Encapsulamento
- Métodos Getters para leitura
- Métodos Setters para escrita

---

## Branch 03: Método Construtor

https://github.com/tiagotecinternet2026/aulas-poo-tiago/tree/03_metodo-construtor

- Finalidade do construtor
- Implementação do método `__construct`
- Parâmetros/argumentos do construtor
- Passagem de dados/valores ao criar objetos
- Atribuição de valores para as propriedades usando o construtor
- Uso de setter a partir do construtor

---

## Branch 04: Herança

https://github.com/tiagotecinternet2026/aulas-poo-tiago/tree/04_heranca

- Classe-pai (superclasse): `Conteudo`
- Classe-filha (subclasse): `Filme` e `Serie`
- Herança utilizando `extends`
- Herança com propriedades e métodos
- Visibilidade `protected` na superclasse permitindo o acesso através das subclasses
- Construtor da superclasse através de `parent::__construct()`
- Propriedades específicas das subclasses

---

## Branch 05: Classes Abstratas, Métodos Abstratos e Polimorfismo

https://github.com/tiagotecinternet2026/aulas-poo-tiago/tree/05_classes-abstratas-e-polimorfismo

- Classe abstrata: `Conteudo`
- Impossibilidade de instanciar diretamente uma classe abstrata
- Método abstrato: `getDescricao()`
- Obriga a implementação do método abstrato pelas classes filhas `Filme` e `Serie`
- Polimorfismo: a mesma chamada a `getDescricao()` utiliza a implementação de cada classe

---

## Branch 06: Interfaces

https://github.com/tiagotecinternet2026/aulas-poo-tiago/tree/06_interfaces

- Interface `Notificador` como um contrato de comportamentos (métodos)
- Definição do método `enviar(string $mensagem): string` na interface
- Aplicação da interface com `implements` nas classes `NotificadorEmail` e `NotificadorSMS`
- Implementação do método `enviar` em cada classe
- Polimorfismo: a mesma chamada a `enviar` utiliza a implementação de cada classe

---

## Branch 07: Recursos Estáticos

https://github.com/tiagotecinternet2026/aulas-poo-tiago/tree/07_recursos-estaticos

- Propriedades estáticas usando `static`
- Métodos estáticos usando `static`
- Acesso a recursos estáticos com `::`
- Acesso a recursos estáticos da própria classe usando `self`
- Diferença entre usar recursos estáticos de classe e recursos de objeto

---

## Branch 08: Enumerações

https://github.com/tiagotecinternet2026/aulas-poo-tiago/tree/08_enumeracoes

- Enumerações com um conjunto definido de opções usando `case`
- Casos associados a valores do tipo `string`
- Acesso a um caso com `StatusPedido::NomeDoCaso`
- Acesso ao valor/texto do caso com `->value`

---

## Branch 09: Namespaces

https://github.com/tiagotecinternet2026/aulas-poo-tiago/tree/09_namespaces

- Reorganização dos arquivos em pastas dentro de `src`
- Declaração do `namespace` e do subnamespace em cada arquivo
- Utilização do nome completo de um recurso: `App\Pedidos\Pedido`
- Importação do namespace com `use` para utilizar nomes simples
- Criação de apelidos com `as` para solucionar conflitos de nomes
- Lembrete: `use` importa namespaces; `require_once` carrega arquivos

---

## Branch 10: Composer e Autoload

https://github.com/tiagotecinternet2026/aulas-poo-tiago/tree/10_composer-autoload

- Composer: gerenciador de dependências para PHP; aqui utilizamos apenas o recurso de autoload
- Configuração do autoload no `composer.json`
- PSR-4: diretriz que determina a relação entre namespaces e diretórios para o autoload
- Mapeamento do namespace `App\` para a pasta `src/`
- Geração do autoload com `composer dump-autoload`
- Carregamento do autoload na `index.php` usando um único `require_once` apontando para `vendor/autoload.php`
- Teste: criação da classe `Saudacao` com carregamento automático via autoload
- `composer install`: instala dependências e gera arquivos do autoload (desde que você tenha o `composer.json`)
- Lembrete: a pasta `vendor` não precisa ser versionada pelo Git. Por isso, a colocamos no `.gitignore`