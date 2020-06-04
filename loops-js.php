<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">Loops</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/loops.png" alt="Loops" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">Como funcionam?</h2>
                <p class="col-12">São estruturas de repetição, onde certa ação é executada - ou não - de acordo com uma condição. Funcionam de maneira bem semelhante ao PHP (com algumas poucas diferenças, principalmente de sintaxe).</p>
                <p class="col-12">E no JavaScript contamos com mais dois tipos de loop, o <code>for in</code> e o <code>for of</code>, que veremos no final da lição! Mas vamos começar por aqueles que já conhecemos.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 9 | Loops</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>for</h5>
                    <p>O loop <i>for</i> possui 3 parâmetros - o estado inicial da variável que será incrementada, a condição que permite que o <i>loop</i> continue sendo executado e o incremento. Exemplo:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            arr = ["banana", 42, "espaçonave", "420"]<br />
                            for ( let i = 0; i < arr.length; i++) {<br />
                                <span class="ml-3">console.log(`\nItem de índice i pertencente ao array arr = ${arr[i]}\n\n`)</span><br />
                            }
                        </code>
                    </div>
                    <p class="mt-3">Lembre-se de que podemos alterar a lógica do incremento. Exemplo:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            naipes = ["paus", "copas", "espadas", "ouros"]<br />
                            for ( let x = naipes.length; x > 0 ; x--) {<br />
                                <span class="ml-3">console.log(`\nItem de índice x - 1 pertencente ao array naipes = ${naipes[x-1]}\n\n`)</span><br />
                            }
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>forEach</h5>
                    <p>Diferentemente do <i>foreach</i> do PHP, aqui declaramos primeiro o <i>array</i> e então o método <i>forEach()</i>.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            alunos = ["João", "José", "Jonas", "Josias"]<br />
                            alunos.forEach( aluno => {<br />
                                <span class="ml-3">console.log(`\nNome do aluno: ${aluno}\n\n`)</span><br />
                            })
                        </code>
                    </div>
                    <p class="mt-3">Percebeu que enviamos uma função como parâmetro do <i>forEach</i>? Essa função recebeu um parâmetro, que chamamos de aluno. Mas poderíamos passar o item e o índice como parâmetros. Veja:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            primeirosColocados = ["Fulano", "Ciclano", "Beltrano"]<br />
                            primeirosColocados.forEach( (item, indice) => {<br />
                                <span class="ml-3">console.log(`\nColocado número ${indice + 1}: ${item}\n\n`)</span><br />
                            })
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>while</h5>
                    <p>Assim como no PHP, declaramos uma condição - enquanto for verdadeira, o loop 'roda' (lembre-se de definir o incremento para não cair num loop infinito).</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            fibonacci = [0,1,1,2,3,5,8,13,21,34,55,89,144]<br />
                            num = 0<br />
                            while(num < fibonacci.length) {<br />
                                <span class="ml-3">console.log(`\n${fibonacci[num]}\n\n`)</span><br />
                                <span class="ml-3">num++</span><br />
                            }
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>do | while</h5>
                    <p>Também igual ao loop no PHP: declaramos a execução e então a condição - o código é executado e então a condição é verificada.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            numerosPrimos = [2,3,5,7,11,13,17,19,23,29,31,37]<br />
                            num = numerosPrimos.length - 1<br />
                            do {<br />
                                <span class="ml-3">console.log(`\n${numerosPrimos[num]}\n\n`)</span><br />
                                <span class="ml-3">num--</span><br />
                            } while(num >= 0)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>for | of</h5>
                    <p>Lembra muito o <i>foreach</i> do PHP, mas ao invés do <i>as</i> usamos o <i>of</i>. Usamos o <code>for of</code> com <i>arrays</i>. Vamos lá!</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            animaisVertebrados = ["anfíbio", "ave", "mamífero", "peixe", "réptil"]<br />
                            for(animalVertebrado of animaisVertebrados) {<br />
                                <span class="ml-3">console.log(`\n${animalVertebrado}\n\n`)</span><br />
                            }
                        </code>
                    </div>
                    <p class="mt-3">Dica extra: não chega a ser um loop, mas temos o <code>spread</code>. Uma mão na roda!</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(...animaisVertebrados)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>for | in</h5>
                    <p>Similar ao <code>for of</code>, mas funciona com elementos não iterativos, não enumeráveis - ou seja, objetos.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            cadastrado = {<br/>
                                <span class="ml-3">"id" : 123456,</span><br/>
                                <span class="ml-3">"nome" : "Abirosvaldo",</span><br/>
                                <span class="ml-3">"sobrenome" : "Osvaldo"</span><br/>
                            }<br/>
                            for(prop in cadastrado) {<br />
                                <span class="ml-3">console.log(`\n${prop}: ${cadastrado[prop]}\n\n`)</span><br />
                            }
                        </code>
                    </div>
                </li>
            </ul>
            <p>Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02-pronto/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./condicionais-js.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./escopos.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>