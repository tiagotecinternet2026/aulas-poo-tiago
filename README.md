# Exemplos de POO no PHP

Neste repositório utilizaremos o PHP com **Programação Orientada a Objetos**.

Os assuntos e exemplos estão divididos por `branches`, acessíveis pelo menu de branches no GitHub.

---

## Branch 09: Namespaces

- Reorganização dos arquivos em pastas dentro de src
- Declaração do namespace e do subnamespace em cada arquivo
- Utilização do nome completo de um recurso: App\Pedidos\Pedido
- Importação do namespace com use para utilizar nomes simples
- Criação de apelidos com as para solucionar conflitos de nomes
- Lembrete: use importa namespaces; require_once carrega arquivos

---

## Branch 08: Enumerações

- Enumerações com um conjunto definido de opções usando case
- Casos associados a valores do tipo string
- Acesso a um caso com StatusPedido::NomeDoCaso
- Acesso ao valor/texto do caso com ->value

---

## Branch 07: Recursos Estáticos

- Propriedades estáticas usando static
- Métodos estáticos usando static
- Acesso a recursos estáticos com ::
- Acesso a recursos estáticos da própria classe usando self
- Diferença entre usar recursos estáticos de classe e recursos de objeto

---

## Branch 06: Interfaces

- Interface Notificador como um contrato de comportamentos (métodos)
- Definição do método enviar(string $mensagem): string na Interface
- Aplicação da interface com implements nas classes NotificadorEmail e NotificadorSMS
- Implementação do método enviar em cada classe
- Polimorfismo: a mesma chamada a enviar utiliza a implementação de cada classe.

---

## Branch 05: Classes Abstratas, Métodos Abstratos e Polimorfismo

- Classe abstrata: Conteudo
- Impossibilidade de instanciar diretamente uma classe abstrata
- Método abstrato: getDescricao()
- Obriga a implementação do método abstrato pelas classes filhas Filme e Serie
- Polimorfismo: a mesma chamada a getDescricao() utiliza a implementação de cada classe

---

## Branch 04: Herança

- Classe-pai (superclasse): Conteudo
- Classe-filha (subclasse): Filme e Serie
- Herança utilizando extends
- Herança com propriedades e métodos
- Visibilidade protected na superclasse permitindo o acesso através das subclasses.
- Construtor da superclasse através de parent::__construct()
- Propriedades específicas das subclasses

---

## Branch 03: Método Construtor

- Finalidade do construtor
- Implementação do método __construct
- Parâmetros/argumentos do construtor
- Passagem de dados/valores ao criar objetos
- Atribuição de valores para as propriedades usando o construtor
- Uso de setter a partir do construtor

---

## Branch 02: Visibilidade e Encapsulamento

- Visibilidade de propriedades: public e private
- Encapsulamento
- Métodos Getters para leitura
- Métodos Setters para escrita

---

## Branch 01: Classes, Objetos, Propriedades e Métodos

- Classes e Objetos
- Propriedades e métodos
- Tipos de dados
- Uso do $this para acessar recursos de dentro da própria classe