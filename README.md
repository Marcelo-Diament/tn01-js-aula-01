# Módulo JS | Aula 01
##### Repositório para Prática em Aula
-----
  
#### Tema Geral: JavaScript (JS)
#### Tema da Aula: Introdução ao JS
  
  
# Temas
**Nessa aula visitaremos os conceitos básicos, como:**

  - Uso do **console.log**
  - **Interação via browser** (alert, prompt e confirm)
  - **Seletores JS** (por tags HTML, classes, ids e atributos)
  - **Tipos de Dados** (boolean, null, undefined, number, bitInt, string, symbol e objects)
  - **Condicionais** (if, else, else if, switch)
  - **Loops** (for, forEach, for in, for of, while, do while)
  - **Escopos** (global, local e bloco)
  - **Variáveis** (const, var e let)
  
  
# console.log

![Console.log](https://raw.githubusercontent.com/Marcelo-Diament/tn01-js-aula-01-pronto/master/assets/img/console.png)

Basicamente trazemos informações para o DevTools através do console.log. Como o próprio nome já diz, estamos acessando o **console** e criando um **log**. O log é um método, uma função - log('_conteúdo que queremos exibir_'). Faremos uma série de práticas para entendermos o console.log.

## Dicas bacanas

### Estilo no console
Sabia que pode incluir estilo às informações inseridas no console? É um recuro um pouco limitado, mas nos ajuda a diferenciar as informações que estamos incluindo no log do console. Para isso basta incluirmos _%c_ antes de onde deve ser aplicado cada estilo e, na sequência, passar esses estilos como um segundo parâmetro (tendo como valor a mesma sintaxe do CSS). Exemplo:

```js
console.log(
    'Text normal, %ctexto com fundo preto e cor branca, %ctexto com fundo amarelo e cor azul',
    'background-color:black;color:white;',
    'background-color:#ffff00;color:blue;'
);
```

### Interpolação
Podemos incluir variáveis e código JS dentro da expressão sem termos de concatenar com +. Para isso usamos _${ variáveis, etc. }_.
Para que isso seja possível, devemos usar crases ao invés de aspas simples. Exemplo:

```js
nome = 'Fulano';
// Usando concatenação
console.log('O valor de nome é: ' + nome)
// Usando Interpolação
console.log(`O valor de nome é: ${nome}`)
```

### Usando template strings
Template strings são strings com valores embutidos. A interpolação é uma delas. Algumas outras são:

```js
// Quebra de linha:
console.log('Linha 1\nLinha 2\nLinha 3')
// Tabulação:
console.log('Linha 1, Coluna 1\n\tLinha 2, Coluna 2\n\t\tLinha 3, Coluna 3\n\tLinha 4, Coluna 2\nLinha 5, Coluna 1')
```

### Além do log()
Temos ainda outras funções nativas referentes ao console, como:

#### console.warn()
Traz o log só que amarelo e com o ícone de alerta (se não quiser setar 'na mão' o estilo com o %c)

#### console.error()
Traz o log só que vermelho (e com o ícone X)

#### console.trace()
Nos traz o 'ratro' do que está acontecendo, indicando o arquivo e linha de cada item chamado. Exemplo:
```js
function x( param ) {
  function y( param ) {
    console.trace( `${param} (usando trace)`);
    console.log( `${param} (usando log)`);
  }
  y( param + 1 );
}
x( 6 );
// Experimente rodar esse trecho de código (snippet) no console e veja a diferença
```

#### console.table()
Também podemos usar o console.table para mostrar as chaves e valores (propriedades) de um objeto ou array. Veja:
```js
alunos = [
  { nome : "Fulano", idade : 10 },
  { nome : "Ciclano", idade : 20 },
  { nome : "Beltrano", idade : 30 },
]
console.table(alunos)
```

#### console.time()
Podemos ainda medir o tempo que demora entre um ponto e outro do nosso script. Basta declararmos console.time() e console.timeEnd(), desse modo:
```js
console.time('tempo do loop')
arr = []
for ( let i = 0; i < 1000; i++ ) {
  arr.push(i)
}
console.timeEnd('tempo do loop')
```

#### console.assert()
Retorna uma mensagem caso a condição não seja verdadeira. Para não precisarmos criar um if para validar coisas simples
```js
minhaVar = 10
console.assert(minhaVar < 5, 'minhaVar não é menor que 5')
```

# Interação via Browser

![Interação via browser](https://raw.githubusercontent.com/Marcelo-Diament/tn01-js-aula-01-pronto/master/assets/img/interacao.png)

Temos 3 maneiras de interagir com o usuário através do próprio browser. Essas interações consistem naquelas 'caixinhas' (tipo pop up). Essas 3 maneiras são:

## alert()
Simplesmente exibe uma mensagem para o usuário (exemplo: 'Bem vindo!')

## confirm()
Solicita uma confirmação do usuário (exemplo: 'Tenho mais de 18 anos')
_Podemos guardar a confirmação numa variável booleana_

## prompt()
Permite que o usuário digite algo na 'caixinha' (exemplo: 'Digite seu nome')
_Podemos guardar o valor inserido numa variável_
  

# Seletores JS

![Seletores JS](https://raw.githubusercontent.com/Marcelo-Diament/tn01-js-aula-01-pronto/master/assets/img/seletores.png)

Funcionam de modo bem semelhante ao CSS, porém precisamos acessar o documento (_document_) para então selecionarmos os elementos. De forma geral, podemos fazer isso de duas maneiras:

## getElementBy

Selecionamos o elemento especificando a forma de seleção. Temos as seguintes opções:

### Tag HTML
Usamos o comando _document.getElementsByTagName(**tag**)_. Note que estamos usando Elements no plural. Ou seja, receberemos uma Collection (coleção) de todos os elementos que se enquadrem nessa coleção.

```js
paragrafos = document.getElementByTagName('p');
```

### Classe
Usamos o comando _document.getElementsByClassName(**classe**)_. Novamente estamos usando Elements no plural. Ou seja, receberemos uma Collection (coleção) de todos os elementos que se enquadrem nessa coleção.

```js
elementosVerdes = document.getElementByClassName('elemento-verde');
```

### Id
Usamos o comando _document.getElementById(**id**)_. Nesse caso, considerando o uso correto do ID, só teremos um único elemento com o ID buscado. Logo, receberemos um único elemento como retorno. Vale ressaltar que, caso haja mais de um elemento com o mesmo ID, receberemos o primeiro deles (conforme ordem do próprio documento).

```js
formulario = document.getElementByTagName('meuForm');
```

## querySelector

Selecionamos o elemento especificando o tipo de seleção no próprio termo a ser buscado (como no CSS). Temos as seguintes opções:

### querySelector
Usamos o comando _document.querySelector(**.classe**)_, _document.querySelector(**#id**)_, _document.querySelector(**tag**)_ ou _document.querySelector(**\[nomeAtributo="valorAtributo"\]**)_. Esse seletor retorna apenas um resultado, então - idealmente - deveria ser utilizado apenas para IDs, para elementos únicos.

```js
paragrafoPrincipal = document.querySelector('#paragrafoPrincipal');
```

### querySelectorAll
Usamos o comando _document.querySelectorAll(**.classe**)_, _document.querySelectorAll(**#id**)_, _document.querySelectorAll(**tag**)_ ou _document.querySelectorAll(**\[nomeAtributo="valorAtributo"\]**)_. Esse seletor já retorna uma coleção, então mesmo que só haja um elemento na coleção, deve ser tratado como tal.

```js
inputsNumber = document.querySelectorAll('[type="number"]');
```

**Coleções** | Usamos o índice dos elementos dentro da coleção para acessá-los, como num array. Então se quisermos acessar a primeira ocorrência, devemos usar o índice [0].


# Tipos de Dados

![Tipos de Dados](https://raw.githubusercontent.com/Marcelo-Diament/tn01-js-aula-01-pronto/master/assets/img/tipos-de-dados.png)

Temos 2 divisões macro - os dados primitivos e objetos. À grosso modo, os tipos primitivos ficam guardados numa _stack_ (pilha), na memória física. Já os objetos ficam guardados no _heap_ (um amontoado) - e esses objetos são referenciados por ponteiros guardados na _stack_. Vale pontuar que quando criamos objetos que sejam cópia de outros objetos, na realidade estamos copiando o _pointer_ (ponteiro, ou seja, o referenciador), e não o objeto em si.

## Valores Primitivos
Temos os seguintes dados primitivos:

### booleano
Tem duas opções de valor - _true_ ou _false_

### null
Tem seu valor setado como _null_, ou seja, é nulo (não vazio)

### undefined
Diferente do _null_, ele ainda não recebeu um valor específico

### string
Assim como no PHP, a string é um conjunto de caracteres (ou pode ser vazia também)

### number
É um número, que pode variar de _-2 elevado à potência 53 -1_ até _2 elevado à potência 53 - 1_. Aceita os mesmos operadores vistos em PHP (_+, -, *, /, %_)
Também temos o _Infinity_, o _-Infinity_ (ambos se comportam como Infinito, positivo e negativo).
E o _NaN_ (Not a Number), que é retornado quando tentamos realizar operações matemáticas com dados que não sejam _Number_.
_Observação: para números que ultrapassam o limite do number temos o BigInt._

### bigInt
Representa um valor numérico do objeto instanciado. Pode ser uma string ou um número inteiro. Não pode ser usado com métodos Math.
Extrapola os limites do number (permite números maiores), porém perde a precisão (exemplo: 5n / 2n retorna 2n, e não 2.5n).

### symbol
De forma superficial, serve para gerarmos propriedades/chaves de objetos anônimos. Não é enumerável e tem uso bem específico e limitado.
Não entraremos nesse tema no curso, mas deixamos um link para maiores informações ao final desse documento.
  
  
## Valores de Referência
São os objetos. Verão que todos os tipos de dado declarados abaixo são, na realidade, objetos.
Os objetos possuem métodos e propriedades (assim como vimos na aula de POO, no entanto, ao invés da _single arrow_ usada em PHP - -> - usamos um ponto para acesá-los em JS).
Os principais são:

### arrays
São arrays iguais aos de PHP, com valores discriminados através de seus índices: _meuArray = ["x", 23, "cachorro"]_.

### objetos
Funcionam como arrays associativos, onde temos pares de chaves (strings) e valores (de quaisquer tipos).
São representados com as chaves:
```js
meuObj = {
  "propriedade1" : "valor",
  "propriedade2" : 123456
}
```

### funções
Função - ou _function_ - é considerada como um Objeto Fundamental em JS (assim como Objetos e Erros).
  
**Truque**: podemos declarar uma função da maneira tradicional (_minhaFuncao( ) { ... }_) ou podemos usar a **arrow function**, das seguintes formas:
  
```js
// Arrow Function sem parâmetros
function = ( ) => {
  // ...
}

// Arrow Function com UM parâmetro
function = paramUnico => {
  // ...
}

// Arrow Function com DOIS (ou mais) parâmetros
function = ( paramUm, paramDois ) => {
  //...
}

// Arrow Function com UM parâmetro e apenas um return direto (dispensa chaves)
function = x => console.log(x)
``` 

A única **desvantagem da _arrow function_** é que ela não permite usarmos a palavra mágica _this_ (que se refere ao elemento em questão dentro da função).
  
### datas
Temos o utilitário _Date_ já construído internamente no JS.

### json
Trata-se do nosso querido e já conhecido _JSON_, muito utilizado no consumo de APIs.

### outros
Também temos outros tipos de objetos como: _Map_, _Set_, _WeakMap_, _WeakSet_ (Maps associam valores a objetos enquanto Sets são conjuntos de objetos).


# Condicionais

![Condicionais](https://raw.githubusercontent.com/Marcelo-Diament/tn01-js-aula-01-pronto/master/assets/img/condicionais.png)

Funcionam exatamente como visto em PHP. Temos as condicionais:

## if
Onde, caso a condição declarada seja verdadeira, o código é executado.

## if / else
Caso a condição seja verdadeira, o primeiro bloco de código é executado. Caso contrário (_else_, senão), o segundo bloco é adicionado.

## if / else if / else 
Podemos incluir novas condições com o _else if_.

**Truques**

#### if ternário
> Podemos simplificar o if / else com a seguinte sintaxe:
```js
condição
  ? caso true
  : caso false

// ou em uma linha apenas

condição ? caso true : caso false
```
  
#### if short circuit
> Podemos simplificar o if com a seguinte sintaxe:
```js
condição
  && caso true

// ou em uma linha apenas

condição && caso true
```
   
## switch
Determinamos um parâmetro e então criamos _n_ casos para determinarmos o comportamento do nosso código.
_Curiosidade: podemos ter **true** como parâmetro e, em cada caso declaramos comparações - caso a comparação seja verdadeira, o respectivo bloco de ações será executado_
  
  
# Loops

![Loops](https://raw.githubusercontent.com/Marcelo-Diament/tn01-js-aula-01-pronto/master/assets/img/loops.png)

Também funcionam de maneira bem semelhante ao PHP (com poucas diferenças). Também temos 2 loops novos, descritos mais adiante.

## for
Aquele loop mais básico, onde declaramos um valor inicial, uma condição para o loop continuar 'rodando' e um incremento:
```js
for ( let i = 0; i < arr.length; i++) {
  // ...
}
```

## forEach
A lógica é a mesma do PHP, mas a sintaxe é distinta. Aplicamos o método forEach a uma coleção e definimos o que deve ser feito dentro de uma função declarada como parâmetro:
```js
arr.forEach ( function() {
  // ...
})
```


## while
Assim como no PHP, declaramos uma condição - enquanto for verdadeira, o loop 'roda' (lembre-se de definir o incremento para não cair num loop infinito):
```js
while (condicao) {
  // ...
}
```


## do while
Também igual ao loop no PHP: declaramos a execução e então a condição - o código é executado e então a condição é verificada.
```js
do {
  // ...
} while (condicao)
```


**Novos Loops!**
  
## for ... of
Lembra o foreach do PHP. Usamos para percorrermos coleções enumeráveis, como arrays. Caminha sobre os índices do array. Então temos a unidade e a coleção:
```js
for ( unidade of colecao ) {
  // ...
}
```

## for ... in
Funciona igual ao _for of_, mas é aplicado a objetos, cujas propriedades não são enumeráveis. Caminha sobre as propriedades de um objeto:
```js
for ( propriedade in objeto ) {
  // ...
}
```
  

# Escopos

![Escopos](https://raw.githubusercontent.com/Marcelo-Diament/tn01-js-aula-01-pronto/master/assets/img/escopo.png)

É muito importante entenderem como funcionam os escopos para que entendam como criar as variáveis e como e onde acessá-las. Basicamente temos 3 tipos de escopo:

## Global
Trata-se do script ou documento como um todo. Variáveis de escopo global podem ser acessadas dentro de qualquer escopo, em qualquer parte do documento.

## Local
Chamamos de escopo local quando criamos uma variável dentro de uma função. Alguns uma variável pode ou não transcender/extrapolar esse escopo. Precisamos entender esses conceitos para que isso ocorra  propositadamente, e não acidentalmente.

## Bloco
Chamamos de bloco os blocos de condicionais ou loops. Muitas vezes queremos manter nossas variáveis dentro daquele bloco - principalmente quando estamos iterando objetos. Imagine um script onde temos dois loops. Em ambos estamos usando o for e usando _i_ para iteração (_i++_). Se não mantivermos o escopo de cada _i_ dentro do seu respectivo bloco, um loop passará a interferir no outro - normalmente esse tipo de comportamento não é desejado.

### Resumo
| Escopo | Aplicação |
| ------ | ------ |
| Global | Documento |
| Local | Função |
| Bloco | Condicional ou Loop |

# Variáveis

![Variáveis](https://raw.githubusercontent.com/Marcelo-Diament/tn01-js-aula-01-pronto/master/assets/img/variaveis.png)
  
## const
Recebe um valor _constante_, ou seja, uma vez declarada não pode ter um novo valor atribuído a ela. Lembrando que não precisa receber necessariamente um valor numérico ou string - podemos atrelar a essa _const_ uma função também. Exemplo:
```js
const soma = (x, y) => { return x + y }
```
A _const_, se declarada globalmente, pode ser acessada globalmente. Mas, se for declarada dentro de um bloco ou em escopo local, se limita a esse escopo.

## Let
A _let_ funciona de maneira muito semelhante à _const_, ou seja: se declarada dentro de um bloco ou escopo local, respeita tal escopo. No entanto pode ter um novo valor atribuído a ela _n_ vezes.

## var
Atualmente, no ES6 (_EcmaScript6_) não costuma ser utilizada - isso pois, diferente da _let_, ela transcende o escopo de bloco (não o respeita). A _var_ pode ter seu valor atribuído _n_ vezes também.

**Exemplo do problema de utilizarmos a _var_:** 

```js
console.log('\nUSANDO VAR\n');
for (var i = 0; i < 5; i++){
  console.log(`var i dentro do loop for: ${i}`)
}
console.log(`var i fora do loop for: ${i}`)
/*
 *  USANDO VAR
 *  var i dentro do loop for: 0
 *  var i dentro do loop for: 1
 *  var i dentro do loop for: 2
 *  var i dentro do loop for: 3
 *  var i dentro do loop for: 4
 *  var i fora do loop for: 5
 */

console.log('\nUSANDO LET\n');
for (let j = 0; j < 5; j++){
  console.log(`let j dentro do loop for: ${j}`)
}
console.log(`let j fora do loop for: ${j}`)
/*
 *  USANDO LET
 *  var j dentro do loop for: 0
 *  var j dentro do loop for: 1
 *  var j dentro do loop for: 2
 *  var j dentro do loop for: 3
 *  var j dentro do loop for: 4
 *  var j fora do loop for: **j is not defined**
 */
```

## Sem prefixo
Se declararmos uma variável sem definir se é _var_, _let_ ou _const_, essa variável terá escopo global, independente do escopo em que foi declarada. Exemplo:
```js
var x = 1 // Global
y = 2 // Global

function()
{
    var x = 1 // Local
    y = 2  // Global

    // Executando uma função anônima (sem nome)
    (function()
    {
        var n = 1; // Local
        x = 2; // Herda do escopo 'superior'
        z = 3; // Global
    }())
}
```
 
## Conteúdo Extra | Closure
No exemplo abaixo temos duas _closures_ - soma5() e soma10(). Ambas compartilham o mesmo corpo de função, mas possuem **ambientes distintos** (cada uma tem um valor distinto para _x_). Ademais, usando a função criarSomador(), tornamos a função anônima de retorno dessa função (_function (y) { return x + y }_) é privada.

```js
function criarSomador(x) {
  return function(y) {
    return x + y;
  };
}

var soma5 = criarSomador(5);
var soma10 = criarSomador(10);

console.log(soma5(2));  // 7
console.log(soma10(2)); // 12
```


## + Extras!

Conheça 3 princípios muito úteis na hora de criarmos nossos scripts:

### DRY - Don't Repeat Yourself
> DRY consiste em ter consistência no seu código e manter uma funcionalidade específica única, sem repetí-la diversas vezes para contemplar diferentes cenários (a solução deve ser consistente e prever essas variações dentro da própria solução, de modo que sempre que nos depararmos com essa questão específica, possamos recorrer a essa funcionalidade).

### YAGNI - You Aren't Gonna Need It
> Ao mesmo tempo que temos o DRY, não podemos tentar prever toda e cada situação em cada funcionalidade implantada. Devemos deixar nosso código o mais enxuto possível - claro que devemos prever alguns cenários, ter certa flexibilidade e planejarmos nossos scripts - mas não é uma boa prática tentarmos prever cenários que muito provavelmente jamais existirão.

### KISS - Keep It Simple, Stupid!
> Por fim, devemos sempre optar pela simplicidade - ela confere maior legibilidade ao código (seja para outros devs que colaborem no mesmo projeto ou para nós mesmos, ao revisitarmos um projeto antigo), maior performance (normalmente) e maior fluidez no processo de desenvolvimento. Dica: após 'finalizar' seu código, dê mais uma revisada e tente entender se é possível simplificar sua(s) solução(ões) - verá que muitas vezes aquilo que parecia ser a solução acaba se tornando apenas um rascunho da melhor solução.

  
## Links Úteis

[Documentação do console](https://developers.google.com/web/tools/chrome-devtools/console/api)

[Sobre tipos de Dados](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Data_structures)

[Sobre Infinity](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Infinity)

[Sobre BigInt](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/BigInt)

[Sobre Symbol](https://developer.mozilla.org/pt-BR/docs/Glossario/Symbol)

[Closure](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/Closures)

[Sobre os 3 princípios citados](https://medium.com/opensanca/3-princ%C3%ADpios-para-facilitar-a-vida-de-todo-programador-5842885c9659)

É isso galera! Qualquer dúvida, nos procurem no Slack da turma! Boa aula!
