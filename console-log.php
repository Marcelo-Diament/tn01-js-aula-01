<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">console.log</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/console.png" alt="Console.log" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">O que é?</h2>
                <p class="col-12">Basicamente trazemos informações para o DevTools através do console.log. Como o próprio nome já diz, estamos acessando o console e criando um log. O log é um método, uma função - log('conteúdo que queremos exibir'). Faremos uma série de práticas para entendermos o console.log.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 1 | console.log()</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Exibindo valor no console</h5>
                    <p>Vamos começar de maneira simples. Vamos exibir no console o nosso nome:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log('Marcelo')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Concatenando e exibindo valor no console</h5>
                    <p>Agora vamos incluir nosso nome completo concatenando (apenas para prática):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log('Marcelo' + ' ' + 'Diament')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Mas... precisava concatenar?</h5>
                    <p>Não! Poderíamos incluir espaço dentro da nossa string sem problema algum:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log('Marcelo Diament')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Também podemos usar números no console</h5>
                    <p>Inclusive fazer contas. Por exemplo:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log('5+5')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Ué! Por que não rolou?</h5>
                    <p>Por que String é diferente de Number. Vamos de novo, dessa vez sem aspas:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(5+5)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Mais uma variação</h5>
                    <p>Poderíamos, ainda, concatenar duas strings</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log('5'+'5')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>console.log com estilo</h5>
                    <p>Podemos passar um segundo parâmetro com o estilo que desejamos aplicar (um pouco limitado, mas funciona).</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log(<br />
                            <span class="ml-3">'Eu sou um aluno da %cDigital House',</span><br />
                            <span class="ml-3">'background-color:darkblue; color:white; text-transform:uppercase; font-size:24px;'</span><br />
                            )
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Interpolação</h5>
                    <p>Ainda veremos variáveis, mas para brincarmos um pouco mais com o console, vamos declarar a variável <i>nome</i> e exibi-la no console:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            nome = 'Victor'<br />
                            console.log('O professor ' + nome + ' é firmeza bagarai')
                        </code>
                    </div>
                    <p class="mt-3">Se não concatenássemos, nome seria simplesmente parte da string. Mas... podemos fazer uso da Interpolação! Veja:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            nome = 'Marcelo'<br />
                            console.log(`O professor ${nome} é ponta firme`)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>template strings</h5>
                    <p>Ainda é possível usar um pouquinho de formatação de texto no console, através das template strings:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.log('\nCadastro\n\nNome: Fulano\nSobrenome: Silva\nHobbies\n\n\tMúsica\n\n\t\tReggae\n\t\tRock\n\t\tBlues\n\n\tEsportes\n\n\t\tTaco\n\t\tXadrez\n\nE por aí vai...\n\n')
                        </code>
                    </div>
                </li>
            </ul>
        </article>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 2 | Outros métodos do console</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Exibindo um alerta no console</h5>
                    <p>Ao invés do método log() usaremos warn()</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.warn('Hey! Tem certeza de que é isso mesmo?')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Exibindo um erro no console</h5>
                    <p>Ao invés do método log() usaremos error()</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            console.error('Ow! Isso aí tá errado rapá!')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Exibindo uma tabela</h5>
                    <p>Muito útil para visualizarmos objetos</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            alunos = [<br />
                            <span class="ml-3">{ nome : "Fulano", idade : 10 },</span><br />
                            <span class="ml-3">{ nome : "Ciclano", idade : 20 },</span><br />
                            <span class="ml-3">{ nome : "Beltrano", idade : 30 }</span><br />
                            ]<br />
                            console.table(alunos)
                        </code>
                    </div>
                </li>
            </ul>
            <p>Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02-pronto/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./index.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Início</b></a>
        <a href="./interacao-via-browser.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>