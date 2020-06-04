<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">Condicionais</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/condicionais.png" alt="Tipos de Dados" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">Como funcionam?</h2>
                <p class="col-12">As condicionais são basicamente aquelas mesmas condicionais que vimos em PHP, onde podemos declarar uma condição e a execução de um código caso a condição seja verdadeira - ou caso seja falsa. Também podemos prever <i>n</i> casos.</p>
                <p class="col-12">A principal diferença será a possibilidade de declararmos de outras formas essas condições e ações.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 8 | Condicionais</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>if</h5>
                    <p>Declaramos uma ação a ser executada caso a condição seja verdadeira.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            if (2 == "2") {<br />
                            <span class="ml-3">console.log('\nEssa condição é verdadeira!\n\n')</span><br />
                            }
                        </code>
                    </div>
                    <p class="mt-3">E, como quase tudo em <abbr title="JavaScript">js</abbr>, podemos fazer a mesma coisa de outra maneira. Podemos usar o <b>short-circuit</b>, caso usemos apenas um retorno:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            2 == "2"<br />
                            <span class="ml-3">&& console.log('\nEssa condição é verdadeira\n\n')</span>
                        </code>
                    </div>
                    <p class="mt-3">Nesse mesmo cenário de um retorno único, podemos usar o if tradicional, mas sem as chaves:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            if (2 == "2")<br />
                            <span class="ml-3">console.log('\nEssa condição é verdadeira!\n\n')</span>
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>if | else</h5>
                    <p>Funciona como o <code>if</code>, mas acrescentamos um <i>senão</i>, um trecho de código que deve ser executado caso a condição não seja verdadeira.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            if (2 === "2") {<br />
                            <span class="ml-3">console.log('\n2 Number é exatamente igual a 2 String\n\n')</span><br />
                            } else  {<br />
                            <span class="ml-3">console.log('\n2 Number não é exatamente igual a 2 String\n\n')</span><br />
                            }
                        </code>
                    </div>
                    <p class="mt-3">Com o if / else, ao invés do <b>short-circuit</b>, podemos usar o <b>if ternário</b> (que pode ser lido como uma pergunta)</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            2 === "2"<br />
                            <span class="ml-3">? console.log('\n2 Number é exatamente igual a 2 String\n\n')</span><br />
                            <span class="ml-3">: console.log('\n2 Number não é exatamente igual a 2 String\n\n')</span>
                        </code>
                    </div>
                    <p class="mt-3">Poderíamos até mesmo usar o <b>if ternário</b> dentro do próprio <code>console.log()</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(2 === "2" ? '\n2 Number é exatamente igual a 2 String\n\n' : '\n2 Number não é exatamente igual a 2 String\n\n')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>if | else if | else</h5>
                    <p>Existe ainda a possibilidade de usarmos o <b>else if</b>, como se disséssmos <i>senão, se ...</i>.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            if (3 === "2") {<br />
                            <span class="ml-3">console.log('\n3 Number é exatamente igual a 2 String\n\n')</span><br />
                            } else if (3 == "2") {<br />
                            <span class="ml-3">console.log('\n3 Number corresponde (de maneira ampla) à String 2\n\n')</span><br />
                            } else {<br />
                            <span class="ml-3">console.log('\n3 não é igual a 2\n\n')</span><br />
                            }
                        </code>
                    </div>
                    <p class="mt-3">Seria possível usarmos o <b>if ternário</b>, mas não é recomendado, pois começa a deixar de ser legível:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            3 === "2"<br />
                            <span class="ml-3">? console.log('\n3 Number é exatamente igual a 2 String\n\n')</span><br />
                            <span class="ml-3">: 3 == "2"</span><br />
                                <span class="ml-5">? console.log('\n3 Number corresponde (de maneira ampla) à String 2\n\n')</span><br />
                                <span class="ml-5">: console.log('\n3 não é igual a 2\n\n')</span>
                        </code>
                    </div>
                    <p class="mt-3">Caso haja muitas condições a serem consideradas, podemos usar o <code>switch</code> - vamos rever como ele funciona!</p>
                </li>
                <li class="my-5">
                    <h5>switch</h5>
                    <p>Com o <code>switch</code> nós avaliamos um parâmetro e <i>n</i> possíveis casos. Quando um desses casos for verdadeiro, brecamos o <code>switch</code> com o <code>break</code>. Vamos ver na prática:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            let dreams = 'are made of this'<br />
                            switch (dreams) {<br />
                            <span class="ml-3">case 'condição 1' :</span><br />
                                <span class="ml-5">console.log('\nSwitch dreams are condição 1\n\n')</span><br />
                            <span class="ml-3">break;</span><br />
                            <span class="ml-3">case 'condição 2' :</span><br />
                                <span class="ml-5">console.log('\nSwitch dreams are condição 2\n\n')</span><br />
                            <span class="ml-3">break;</span><br />
                            <span class="ml-3">case 'condição 3' :</span><br />
                                <span class="ml-5">console.log('\nSwitch dreams are condição 3\n\n')</span><br />
                            <span class="ml-3">break;</span><br />
                            <span class="ml-3">case 'are made of this' :</span><br />
                                <span class="ml-5">console.log('\nSwitch dreams are made of this (huahuahuahua)\n\n')</span><br />
                            <span class="ml-3">break;</span><br />
                            <span class="ml-3">default:</span><br />
                                <span class="ml-5">console.log('\nNenhum dos casos declarados é verdadeiro\n\n')</span><br />
                            <span class="ml-3">break;</span><br />
                            }
                        </code>
                    </div>
                    <p class="mt-3">Perceba que temos o <i>default</i> para contemplar casos não previstos (funciona como um <i>else</i>). Mas... e se quisermos usar comparações? Separamos um truque para mostrar para vocês! O <code>switch</code> não verifica uma condição x casos? Podemos verificar se a condição é verdadeira! Veja a seguir.</p>
                    <div class="bg-dark p-5">
                    <code class="font-weight-bold">
                            switch (true) {<br />
                            <span class="ml-3">case ('2' === 3) :</span><br />
                                <span class="ml-5">console.log('\n\'2\' não corresponde a 3 de forma exata\n\n')</span><br />
                            <span class="ml-3">break;</span><br />
                            <span class="ml-3">case ('2' == 3) :</span><br />
                                <span class="ml-5">console.log('\n\'2\' não corresponde a 3 nem de forma não exata\n\n')</span><br />
                            <span class="ml-3">break;</span><br />
                            <span class="ml-3">case ('2' === '3') :</span><br />
                                <span class="ml-5">console.log('\n\'2\' não corresponde a \'3\' de forma exata\n\n')</span><br />
                            <span class="ml-3">break;</span><br />
                            <span class="ml-3">case ('2' == '3') :</span><br />
                                <span class="ml-5">console.log('\n\'2\' não corresponde a \'3\' nem de forma não exata\n\n')</span><br />
                            <span class="ml-3">break;</span><br />
                            <span class="ml-3">case (2n/2n === 3n/2n) :</span><br />
                                <span class="ml-5">console.log('\nComparando 2n e 3n divididos por 2n (BigInt), podemos afirmar que 2 é sim igual a 3! Wow!\n\n')</span><br />
                            <span class="ml-3">break;</span><br />
                            <span class="ml-3">default:</span><br />
                                <span class="ml-5">console.log('\nNenhum dos casos declarados anteriormente é verdadeiro - 2 não é 3\n\n')</span><br />
                            <span class="ml-3">break;</span><br />
                            }
                        </code>
                    </div>
                </li>
            </ul>
            <p>Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02-pronto/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./tipos-de-dados.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./loops-js.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>