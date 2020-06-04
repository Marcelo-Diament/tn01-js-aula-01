<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">Tipos de Dados</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/tipos-de-dados.png" alt="Tipos de Dados" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">Quais são?</h2>
                <p class="col-12">Temos 2 divisões macro - os dados primitivos e objetos. À grosso modo, os tipos primitivos ficam guardados numa <i>stack</i> (pilha), na memória física. Já os objetos ficam guardados no <i>heap</i> (um amontoado) - e esses objetos são referenciados por ponteiros guardados na <i>stack</i>.</p>
                <p class="col-12">Vale pontuar que quando criamos objetos que sejam cópia de outros objetos, na realidade estamos copiando o <i>pointer</i> (ponteiro, ou seja, o referenciador), e não o objeto em si.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 6 | Dados Primitivos</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Booleano</h5>
                    <p>Famoso <code>true</code> ou <code>false</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dadoBooleano = true<br />
                            console.log(dadoBooleano)<br />
                            dadoBooleano = false<br />
                            console.log(dadoBooleano)<br />
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Null</h5>
                    <p>Representa um valor <b>nulo</b> (distinto de vazio ou não definido)</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dadoNull = null<br />
                            console.log(`\ndadoNull: ${dadoNull}\n\n`)<br />
                            console.log(`\nComparando null com undefined: ${dadoNull === undefined}\n\n`)<br />
                            console.log(`\nComparando null com string vazia: ${dadoNull === ""}\n\n`)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Undefined</h5>
                    <p>Tipo atribuído a variáveis que <b>não possuem valor definido</b> (mas existem)</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            let dadoUndefined<br />
                            console.log(`\ndadoUndefined: ${dadoUndefined}\n\n`)<br />
                            console.log(`\nComparando undefined com null: ${dadoUndefined === null}\n\n`)<br />
                            console.log(`\nComparando undefined com string vazia: ${dadoUndefined === ""}\n\n`)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>String</h5>
                    <p>Um conjunto que pode incluir caracteres alfanuméricos e caracteres especiais</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            let dadoString = 'Essa é 1 string'<br />
                            console.log(`\ndadoString: ${dadoString}\n\n`)<br />
                        </code>
                    </div>
                    <p class="mt-3">Temos a propriedade <code>length</code>, que retorna o comprimento de uma string (número de caracteres):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dadoString.length
                        </code>
                    </div>
                    <p class="mt-3">Ainda entraremos na lição de funções, mas vale dar um spoiler - string possuem alguns métodos específicos, como <code>bold()</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dadoString.bold()
                        </code>
                    </div>
                    <p><i>Veja que a string receberá a tag <code>&lt;b&gt;</code> como seu container.</i></p>
                    <p class="mt-3">Outro método é o <code>charAt()</code>, que retorna o caractere posicionado na posição declarada:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dadoString.charAt(5)
                        </code>
                    </div>
                    <p class="mt-3">Os caracteres possuem códigos identificadores (<i>chartCodes</i>). O método <code>charCodeAt</code> nos retorna esse código:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dadoString.charCodeAt(5)
                        </code>
                    </div>
                    <p class="mt-3">Para validar o final de uma string podemos usar o <code>endsWith</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dadoString.endsWith('g')
                        </code>
                    </div>
                    <p class="mt-3">Assim como validar o início da string, com o <code>startsWith</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dadoString.startsWith('e')<br />
                            dadoString.startsWith('E')<br />
                        </code>
                    </div>
                    <p><i>Note que esse método é caseSensitive (diferencia maiúsculas de minúsculas).</i></p>
                    <p class="mt-3">Ainda existem <i>n</i> outros métodos específicos de strings. Mais alguns exemplos:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dadoString.indexOf('é') // Retorna a primeira ocorrência desse trecho. Caso não exista, retorna -1<br />
                            dadoString.includes('!') // Retorna valor booleano<br />
                            dadoString.italics() // Inclui a tag &lt;i&gt; ao redor da string<br />
                            dadoString.link('./index.php') // Transforma a string num link, incluindo o parâmetro como valor do atributo href<br />
                            dadoString.toLowerCase() // Transforma todos os caracteres em minúsculas<br />
                            dadoString.toUpperCase() // Transforma todos os caracteres em maiúsculas<br />
                            dadoString.repeat(2) // Repete a string de acordo com o número passado como parâmetro<br />
                            <br />/* No console, digite o nome da variável e um ponto em seguida - explore outras propriedades e métodos!<br />Veja quanta coisa bacana já temos disponível! */
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Number</h5>
                    <p>Ou números - assim como as strings, possuem propriedades e métodos nativos. Vamos ver um exemplo de Number:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dadoNumber = 5<br />
                            console.log(`\ndadoNumber: ${dadoNumber}\n\n`)<br />
                            console.log(`\nComparando com o número 5 (correspondência ampla): ${dadoNumber == 5}\n\n`)<br />
                            console.log(`\nComparando com o número 5 (correspondência exata): ${dadoNumber === 5}\n\n`)<br />
                            console.log(`\nComparando com a string '5' (correspondência ampla): ${dadoNumber == '5'}\n\n`)<br />
                            console.log(`\nComparando com a string '5' (correspondência exata): ${dadoNumber === '5'}\n\n`)
                        </code>
                    </div>
                    <p><i>Quando comparamos uma string a um número de mesmo valor (de forma não exata), recebemos <code>true</code>. Já com a correspondência exata, é retornado <code>false</code>.</i></p>
                    <p class="mt-3">Antes de vermos os métodos, vamos ver algumas operações básicas:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(dadoNumber + 5) // Soma<br />
                            console.log(dadoNumber - 5) // Subtração<br />
                            console.log(dadoNumber * 5) // Multiplicação<br />
                            console.log(dadoNumber / 5) // Divisão<br />
                            console.log(dadoNumber % 5) // Módulo (resto de uma divisão)<br />
                            // Podemos usar o módulo para verificar se um número é par:<br />
                            console.log(dadoNumber % 2 === 0 ? `${dadoNumber} é par` : `${dadoNumber} é ímpar`)<br />
                            console.log((dadoNumber + 1) % 2 === 0 ? `${dadoNumber + 1} é par` : `${dadoNumber + 1} é ímpar`)<br />
                            console.log(dadoNumber ** 3) // Potência (no caso, elevado a 3 - igual a 5 * 5 * 5)<br />
                            console.log(`\nValor atual de dadoNumber = ${dadoNumber}\n\n`)<br />
                            console.log(`\nPara modificarmos o valor de dadoNumber podemos usar a atribuição com operação, como\n\n\t'x += y',\n\n\t'x -= y', \n\n\t'x *= y',\n\n\t'x /= y'\n\n\t'x **= y'\n\n`)<br />
                            dadoNumber -= 3<br />
                            console.log(`\ndadoNumber -= 3 | dadoNumber agora vale ${dadoNumber}\n\n`)<br />
                            dadoNumber += 8<br />
                            console.log(`\ndadoNumber += 8 | dadoNumber agora vale ${dadoNumber}\n\n`)<br />
                            dadoNumber *= 10<br />
                            console.log(`\ndadoNumber *= 10 | dadoNumber agora vale ${dadoNumber}\n\n`)<br />
                            dadoNumber /= 2<br />
                            console.log(`\ndadoNumber /= 2 | dadoNumber agora vale ${dadoNumber}\n\n`)<br />
                            dadoNumber **= 2<br />
                            console.log(`\ndadoNumber **= 2 | dadoNumber agora vale ${dadoNumber}\n\n`)<br />
                        </code>
                    </div>
                    <p class="mt-3">Temos ainda mais 3 tipos de Number; o primeiro deles é o NaN:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(`\nNaN significa Not a Number:\n\n`)<br />
                            console.log('b' + 'a' + + 'a' + 'a')<br />
                            console.log(`\nBrincadeiras à parte, isso acontece pois "+ +'a'" é interpretado como + (+a)\n\n`)<br />
                            console.log(`\nOutro exemplo de NaN seria 'Hello' / 5: ${'Hello' / 5}\n\n`)<br />
                        </code>
                    </div>
                    <p class="mt-3">Temos ainda Infinity e -Infinity:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(`\nAcessamos o Infinity ao tentar dividir um número por zero:\n1/0 = ${1/0}\n\n`)<br />
                            console.log(`\nE o -Infinity, ao tentar dividir um número negativo por zero:\n-1/0 = ${-1/0}\n\n`)<br />
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>BigInt</h5>
                    <p>Trata-se de um tipo de dado bem próximo ao Número, mas pode ter um comprimento maior. Para demonstrar isso, faremos as seguintes declarações:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            const x = 10<br />
                            const y = 20<br />
                            console.log(`\nSe compararmos ${x} e ${y}, recebemos como ${x === y} retorno\n\n`)<br />
                            <br />
                            console.log(`\nSabemos que dados do tipo Number vão de -(2**53 - 1) a 2**53 - 1\n\n`)<br />
                            console.log(`\nPara acessarmos o valor máximo (integer), podemos usar o seguinte método: Number.MAX_SAFE_INTEGER\n\n`)<br />
                            console.log(`\nNúmero máximo para Numbers = ${Number.MAX_SAFE_INTEGER}\n\n`)<br />
                            <br />
                            console.log(`\nEntão vamos repetir a comparação de igualdade, mas utilizando o valor máximo + 1 e o valor máximo + 2\n\n`)<br />
                            const maxMaisUm = Number.MAX_SAFE_INTEGER + 1<br />
                            const maxMaisDois = Number.MAX_SAFE_INTEGER + 2<br />
                            console.log(`\nSe compararmos maxMaisUm e maxMaisDois, recebemos como ${maxMaisUm === maxMaisDois} retorno\n\n`)<br />
                            console.log(`\nIsso ocorre pois o valor máximo é o máximo, não conseguimos ir além dele com o Number.\n\n`)<br />
                        </code>
                    </div>
                    <p class="mt-3">Agora que sabemos as limitações do Number, vamos entender o BigInt. Esse tipo de dado recebe um <i>n</i> após o valor numérico.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(`\nVamos novamente para a comparação de igualdade, mas com BigInt\n\n`)<br />
                            const bigIntMaxMaisUm = BigInt(Number.MAX_SAFE_INTEGER) + 1n<br />
                            const bigIntMaxMaisDois = BigInt(Number.MAX_SAFE_INTEGER) + 2n<br />
                            console.log(`\nbigIntMaxMaisUm === bigIntMaxMaisDois retorna ${bigIntMaxMaisUm === bigIntMaxMaisDois}\n\n`)<br />
                            console.log(`\nAgora a comparação retorna false, como esperado.\n\n`)<br />
                        </code>
                    </div>
                    <p class="mt-3">Vale ressaltar que o BigInt não é um Number, por isso não pode ser 'misturado' com Numbers. Veja o que acontece se tentarmos fazer isso:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(`\n4n + 6 = ${4n + 6}\n\n`)<br />
                        </code>
                    </div>
                    <p class="mt-3">BigInt também não trabalha com frações.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(`\n4n / 4n = ${4n/2n}\n\n`)<br />
                            console.log(`\n5n / 4n = ${5n/2n}\n\n`)<br />
                            console.log(`\nComo demonstrado, 5n / 2n retorna 2n, e não 2.5n.\n\n`)<br />
                        </code>
                    </div>
                </li>
            </ul>
        </article>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 7 | Tipos de Referência</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Arrays</h5>
                    <p>São arrays iguais aos de PHP, com valores discriminados através de seus índices:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            meuArray = ["x", 23, "cachorro"]<br />
                            console.log(`\nmeuArray = ${meuArray}\n\n`)
                        </code>
                    </div>
                    <p class="mt-3">E para acessarmos os valores desse <code>array</code> basta usarmos o índice desejado:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(`\nmeuArray[1] = ${meuArray[1]}\n\n`)
                        </code>
                    </div>
                    <p class="mt-3">Caso tentemos acessar um índice inexistente, recebemos -1 de retorno:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(`\nmeuArray[1] = ${meuArray[9]}\n\n`)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Objeto</h5>
                    <p>Funcionam como arrays associativos, onde temos pares de chaves (strings) e valores (de quaisquer tipos). São representados com as chaves <code>{ }</code> e tem as chaves separados de seus valores com dois pontos (<code>chave : valor</code>).</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            meuObj = {<br/>
                                <span class="ml-3">"propriedade1" : "valor",</span><br/>
                                <span class="ml-3">"propriedade2" : 123456</span><br/>
                            }
                        </code>
                    </div>
                    <p class="mt-3">Podemos usar o <code>console.table()</code> para visualizarmos melhor um objeto:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.table(meuObj)
                        </code>
                    </div>
                    <p class="mt-3">Objetos são compostos por propriedades e métodos (funções, a serem vistas mais adiante). Para acessá-los basta usarmos o ponto (<code>.</code>):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(`\nmeuObj.propriedade1 = ${meuObj.propriedade1}\n\n`)<br />
                            console.log(`\nmeuObj.propriedade2 = ${meuObj.propriedade2}\n\n`)<br />
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Funções</h5>
                    <p>São funções como vimos em PHP - podem receber um nome ou não (funções anônimas). As funções podem - ou não - receber parâmetros. A seguir, uma função simples, sem parâmetro:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            function dizerOi() {<br/>
                                <span class="ml-3">alert('Oi!')</span><br/>
                            }
                        </code>
                    </div>
                    <p class="mt-3">Para chamarmos uma função, basta declararmos o nome dela seguido dos parênteses:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dizerOi()
                        </code>
                    </div>
                    <p class="mt-3">Para usarmos parâmetro, basta declararmos entre os parênteses (na construção da função e quando a chamamos):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            function dizerOla(umNome) {<br/>
                                <span class="ml-3">alert(`Olá ${umNome}!`)</span><br/>
                            }<br />
                            dizerOla('Beltrano')
                        </code>
                    </div>
                    <p class="mt-3">É possível aninhar funções também:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            function cumprimentar(nome) {<br />
                                <span class="ml-3">cumprimentos = ['Fala', 'Opa', 'E aí', 'Olar', 'Olá', 'Oi', 'Salve']</span><br />
                                <span class="ml-3">function sortearCumprimento() {</span><br />
                                    <span class="ml-5">indiceRandomico = Math.floor(Math.random() * cumprimentos.length)</span><br />
                                    <span class="ml-5">return cumprimentos[indiceRandomico]</span><br />
                                    <span class="ml-3">}</span><br />
                                    <span class="ml-3">alert(`${sortearCumprimento()} ${nome}!`)</span><br />
                            }<br />
                            cumprimentar('Abirosvaldo')
                        </code>
                    </div>
                    <p class="mt-3">No exemplo a seguir, vamos usar uma função anônima como método de um objeto. Também usaremos a palavra this para nos referirmos ao objeto em questão.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            let pessoa = {<br />
                                <span class="ml-3">nome : "Fulano",</span><br />
                                <span class="ml-3">sobrenome : "da Silva",</span><br />
                                <span class="ml-3">mostrarNomeCompleto : function() {</span><br />
                                    <span class="ml-5">console.log(`${this.nome} ${this.sobrenome}`)</span><br />
                                <span class="ml-3">}</span><br />
                            }<br />
                            pessoa.mostrarNomeCompleto()
                        </code>
                    </div>
                    <p class="mt-3">Outra forma de declararmos uma função é a <i>arrow function</i>. Recebe esse nome por conta do uso da <i>double arrow</i>. Confira suas variações:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Arrow Function sem parâmetros<br />
                            arrowSemParam = ( ) => {<br />
                                <span class="ml-3">console.log('Arrow function sem parâmetro')</span><br />
                            }<br />
                            arrowSemParam()<br />
                            <br />
                            // Arrow Function com UM parâmetro<br />
                            arrowUmParam = paramUnico => {<br />
                                <span class="ml-3">console.log('Arrow function com um parâmetro')</span><br />
                            }<br />
                            arrowUmParam()<br />
                            <br />
                            // Arrow Function com DOIS (ou mais) parâmetros<br />
                            arrowDoisParam = ( paramUm, paramDois ) => {<br />
                                <span class="ml-3">console.log('Arrow function com dois parâmetros')</span><br />
                            }<br />
                            arrowDoisParam()<br />
                            <br />
                        </code>
                    </div>
                    <p class="mt-3">Reparou que, nesses casos, não declaramos a palavra <i>function</i>? Se o retorno for único também podemos eliminar as chaves:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Arrow Function com Retorno Direto<br />
                            arrowDireta = ( ) => console.log('Arrow function Retorno Único')<br />
                            arrowDireta()
                        </code>
                    </div>
                    <p class="mt-3">Mas <b>atenção!</b> A <i>arrow function</i> também tem suas desvantagens... não podemos usar  <i>keyword</i> <i>this</i> com ela, veja:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            let pessoa = {<br />
                                <span class="ml-3">nome : "Fulano",</span><br />
                                <span class="ml-3">sobrenome : "da Silva",</span><br />
                                <span class="ml-3">mostrarNomeCompleto : () => {</span><br />
                                    <span class="ml-5">console.log(`${this.nome} ${this.sobrenome}`)</span><br />
                                <span class="ml-3">}</span><br />
                            }<br />
                            pessoa.mostrarNomeCompleto()
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Date</h5>
                    <p>É um tipo específico de dados cuja finalidade é representar datas. Para representarmos a data atual usamos:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            dataAtual = new Date()<br />
                            console.log(dataAtual)
                        </code>
                    </div>
                    <p class="mt-3">Também podemos definir uma data específica no tempo, por exemplo, o primeiro milisegundo de 2020 (repare que Janeiro é o mês 0):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            primeiroMilisegundoDe2020 = new Date(2020, 00, 01, 00, 00, 00, 1)<br />
                            console.log(primeiroMilisegundoDe2020)
                        </code>
                    </div>
                    <p class="mt-3">Se usarmos apenas 2 dígitos para o ano, é considerado 19XX:</p>
                    <div class="bg-dark p-5">
                    <code class="font-weight-bold">
                            vinteAbril1910 = new Date(10, 03, 20)<br />
                            console.log(vinteAbril1910)
                        </code>
                    </div>
                    <p class="mt-3">Podemos declarar a data como string (em inglês):</p>
                    <div class="bg-dark p-5">
                    <code class="font-weight-bold">
                            diaDasBruxas = new Date('October 31, 2020 23:23:00')<br />
                            console.log(diaDasBruxas)
                        </code>
                    </div>
                    <p class="mt-3">E tammbém é possível acessar datas apenas por milisegundos (a partir de 1o de Janeiro de 1970, 0 hora):</p>
                    <div class="bg-dark p-5">
                    <code class="font-weight-bold">
                            dataZeroJs = new Date(0)<br />
                            console.log(dataZeroJs)
                        </code>
                    </div>
                    <i>No caso mostrou dia 31/12/1969 21:00 - isso ocorre por que a data é baseada no Meridiano de Greenwich, ou seja, fuso-horário 0.</i>
                    <p class="mt-3">Se quisermos uma data anterior a 1970 usando milisegundos, podemos usar valores negativos:</p>
                    <div class="bg-dark p-5">
                    <code class="font-weight-bold">
                            dataAnteriorA1970 = new Date(-31536000000)<br />
                            console.log(dataAnteriorA1970)
                        </code>
                    </div>
                    <i>31536000000 milisegundos equivalem a 365 dias.</i>
                    <p class="mt-3">Também existem alguns métodos específicos para datas, tais como:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            hoje = new Date()<br />
                            console.log(`\nhoje.getDay() = ${hoje.getDay()}\n\n`)<br />
                            console.log(`\nhoje.getMonth() = ${hoje.getMonth()}\n\n`)<br />
                            console.log(`\nhoje.getFullYear() = ${hoje.getFullYear()}\n\n`)<br />
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>JSON</h5>
                    <p>Acrônimo de JavaScript Object Notation - trata-se na realidade de uma string que pode ser facilmente transmitida entre diferentes ambientes e linguagens através de web services (muito usada em APIs).</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            meuJson = {<br/>
                                <span class="ml-1">"usuarios" : [</span><br/>
                                    <span class="ml-3">{</span><br/>
                                        <span class="ml-5">"id" : 0,</span><br/>
                                        <span class="ml-5">"nome" : "Fulano"</span><br/>
                                    <span class="ml-3">},</span><br/>
                                    <span class="ml-3">{</span><br/>
                                        <span class="ml-5">"id" : 1,</span><br/>
                                        <span class="ml-5">"nome" : "Beltrano"</span><br/>
                                    <span class="ml-3">}</span><br/>
                                <span class="ml-1">]</span><br/>
                            }<br />
                            console.log(meuJson)
                        </code>
                    </div>
                    <p class="mt-3">Podemos transformar um objeto em string (JSON):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            objetoParaString = JSON.stringify(meuJson)<br />
                            console.log(objetoParaString)
                        </code>
                    </div>
                    <p class="mt-3">O método JSON.stringify() ainda pode receber mais 2 parâmetros, o <i>replacer</i> e o <i>spacer</i>. Por enquanto deixaremos o replacer como <i>null</i>:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            objetoParaString2 = JSON.stringify(meuJson, null, 4)<br />
                            console.log(objetoParaString2)
                        </code>
                    </div>
                    <p class="mt-3">E, no caminho oposto, para transformarmos essa string em um objeto podemos usar o método <code>JSON.parse()</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            stringParaObjeto = JSON.parse(objetoParaString)<br />
                            console.log(stringParaObjeto)
                        </code>
                    </div>
                    <p class="mt-3">Da mesma forma que temos o <code>replacer</code> no JSON.stringify, temos o <code>reviver</code> como parâmetro opcional do JSON.parse - ele nos permite incluirmos uma função para manipularmos o conteúdo do JSON. Não vamos entrar a fundo, mas funciona assim:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            JSON.parse(objetoParaString, (k, v) => console.log(`\nk = ${k} | v = ${v}\n\n`))
                        </code>
                    </div>
                    <p class="mt-3">Por fim, há ainda a propriedade toJSON, que nos permite controlar como se dará o método stringify desse objeto. Isso acontece através da função declarada como valor da propriedade toJSON.</p>
                    <p>Então, vamos criar uma função que retorna a chave 'propriedade1' com o valor da 'propriedade2' e defini-la como valor da propriedade toJSON. Veja:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            meuObj2 = {<br/>
                                <span class="ml-3">"propriedade1" : "valor",</span><br/>
                                <span class="ml-3">"propriedade2" : 123456</span><br/>
                            }<br/>
                            meuObj2.toJSON = function() { return { propriedade1 : this.propriedade2 } }<br />
                            JSON.stringify(meuObj2)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Outros</h5>
                    <p>Também temos outros tipos de objetos como: <i>Map</i>, <i>Set</i>, <i>WeakMap</i>, <i>WeakSet</i> (Maps associam valores a objetos enquanto Sets são conjuntos de objetos). Não entraremos em detalhes mas vale a pena estudarem esses tipos de dados/objetos posteriormente.</p>
                </li>
            </ul>
            <p>Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02-pronto/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./seletores-js.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./condicionais-js.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>