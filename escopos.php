<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">Escopos</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/escopo.png" alt="Escopos" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">O que são escopos?</h2>
                <p class="col-12">São os limites, por assim dizer, de uma variável - até onde elas são impactantes e acessíveis e onde deixam de valer.</p>
                <p class="col-12">Os dois principais escopos são o escopo global e o escopo local. E também temos o escopo de bloco. Vamos entender cada um deles.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 10 | Escopos</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Escopo Global</h5>
                    <p>Trata-se do script ou documento como um todo. Variáveis de escopo global podem ser acessadas dentro de qualquer escopo, em qualquer parte do documento.</p>
                    <p class="mt-3">Para declararmos uma variável global, basta a declararmos sem nenhum prefixo. Declarando uma variável na raíz do documento também estamos setando essa variável como global.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            minhaGlobal = "minhaGlobal"<br />
                            const minhaConstGlobal = "minhaConstGlobal"<br />
                            var minhaVarGlobal = "minhaVarGlobal"<br />
                            let minhaLetGlobal = "minhaLetGlobal"<br />
                            console.log(`${minhaGlobal} | ${minhaConstGlobal} | ${minhaVarGlobal} | ${minhaLetGlobal}`)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Local</h5>
                    <p>Chamamos de escopo local quando criamos uma variável dentro de uma função. Alguns uma variável pode ou não transcender/extrapolar esse escopo. Precisamos entender esses conceitos para que isso ocorra  propositadamente, e não acidentalmente.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            function criarVariaveisLocais() {<br />
                                <span class="ml-3">minhaLocal = "minhaLocal"</span><br />
                                <span class="ml-3">const minhaConstLocal = "minhaConstLocal"</span><br />
                                <span class="ml-3">var minhaVarLocal = "minhaVarLocal"</span><br />
                                <span class="ml-3">let minhaLetLocal = "minhaLetLocal"</span><br />
                                <span class="ml-3">console.log(`${minhaLocal} | ${minhaConstLocal} | ${minhaVarLocal} | ${minhaLetLocal}`)</span><br />
                            }<br />
                            criarVariaveisLocais()<br />
                            // Agora vamos chamar as variáveis locais fora da função:<br />
                            console.log(`${minhaLocal}`)<br />
                            console.log(`${minhaConstLocal}`)<br />
                            console.log(`${minhaVarLocal}`)<br />
                            console.log(`${minhaLetLocal}`)<br />
                        </code>
                    </div>
                    <p class="mt-3">Reparou que a única que pôde ser acessada foi a variável que foi declarada sem 'prefixo'?</p>
                </li>
                <li class="my-5">
                    <h5>Escopo de Bloco</h5>
                    <p>Chamamos de bloco os blocos de condicionais ou loops. Muitas vezes queremos manter nossas variáveis dentro daquele bloco - principalmente quando estamos iterando objetos.</p>
                    <p class="mt-3">Imagine um script onde temos dois loops. Em ambos estamos usando o for e usando <i>i</i> para iteração (<i>i++</i>). Se não mantivermos o escopo de cada <i>i</i> dentro do seu respectivo bloco, um loop passará a interferir no outro - normalmente esse tipo de comportamento não é desejado.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            if(2 === 2) {<br />
                                <span class="ml-3">minhaBlocada = "minhaBlocada"</span><br />
                                <span class="ml-3">const minhaConstBlocada = "minhaConstBlocada"</span><br />
                                <span class="ml-3">var minhaVarBlocada = "minhaVarBlocada"</span><br />
                                <span class="ml-3">let minhaLetBlocada = "minhaLetBlocada"</span><br />
                                <span class="ml-3">console.log(`${minhaBlocada} | ${minhaConstBlocada} | ${minhaVarBlocada} | ${minhaLetBlocada}`)</span><br />
                            }<br />
                            // Agora vamos chamar as variáveis de bloco fora do bloco:<br />
                            console.log(`${minhaBlocada}`)<br />
                            console.log(`${minhaConstBlocada}`)<br />
                            console.log(`${minhaVarBlocada}`)<br />
                            console.log(`${minhaLetBlocada}`)<br />
                        </code>
                    </div>
                    <p class="mt-3">Reparou que agora, além da variável de escopo global, conseguimos acessar a variável declarada com a <i>keyword</i> <code>var</code>? Isso pode se tornar um problema... Na próxima lição entenderemos as diferenças entre os tipos de variáveis!</p>
                </li>
            </ul>
            <p>Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02-pronto/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./loops-js.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./variaveis.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>