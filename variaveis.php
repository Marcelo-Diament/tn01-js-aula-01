<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">Tipos de Variáveis</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/variaveis.png" alt="Variáveis" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">Quais as variáveis disponíveis?</h2>
                <p class="col-12">Podemos declarar uma variável sem <i>keyword</i> (como vimos ela será tratada como uma variável global). Mas normalmente usamos essas <i>keywords</i> para controlarmos o escopo de cada variável declarada.</p>
                <p class="col-12">Vamos ver as semelhanças e diferenças entre <code>const</code>, <code>let</code> e a quase obsoleta, <code>var</code>.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 11 | Variáveis</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>const</h5>
                    <p>Recebe um valor <b>constante</b>, ou seja, uma vez declarada não pode ter um novo valor atribuído a ela.</p>
                    <p class="mt-3">Lembrando que não precisa receber necessariamente um valor numérico ou string - podemos atrelar a essa <code>const</code> uma função também.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            const soma = (x, y) => { return x + y }<br />
                            console.log(soma(2, 3))
                        </code>
                    </div>
                    <p class="mt-3">Como vimos na lição anterior, a <code>const</code>, se declarada globalmente, pode ser acessada globalmente. Mas, se for declarada dentro de um bloco ou em escopo local, se limita a esse escopo.</p>
                </li>
                <li class="my-5">
                    <h5>let</h5>
                    <p>A <code>let</code> funciona de maneira muito semelhante à <code>const</code>, ou seja: se declarada dentro de um bloco ou escopo local, respeita tal escopo. No entanto pode ter um novo valor atribuído a ela <i>n</i> vezes.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            let x = 30<br />
                            console.log(`\nValor de x = ${x}\n\n`)<br />
                            x = 90<br />
                            console.log(`\nValor de x = ${x}\n\n`)<br />
                            x = 10<br />
                            console.log(`\nValor de x = ${x}\n\n`)<br />
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>var</h5>
                    <p>Atualmente, no ES6 (<i>EcmaScript6</i>) não costuma ser utilizada - isso pois, diferente da <code>let</code>, ela transcende o escopo de bloco (não o respeita). A <code>var</code> pode ter seu valor atribuído <i>n</i> vezes também. Veja o problema de utilizarmos a <code>var</code>:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            for (var i = 0; i < 5; i++){<br />
                                <span class="ml-3">console.log(`\nvar i dentro do loop for: ${i}\n\n`)</span><br />
                            }<br />
                            console.log(`\nvar i fora do loop for: ${i}\n\n`)
                        </code>
                    </div>
                    <p class="mt-3">Só para fins de comparação, vamos fazer o mesmo com <code>let</code>:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            for (let j = 0; j < 5; j++){<br />
                                <span class="ml-3">console.log(`\nlet j dentro do loop for: ${j}\n\n`)</span><br />
                            }<br />
                            console.log(`\nlet j fora do loop for: ${j}\n\n`)
                        </code>
                    </div>
                </li>
            </ul>
            <p>Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02-pronto/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./escopos.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./index.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Início</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>