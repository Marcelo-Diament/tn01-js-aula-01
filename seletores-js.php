<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">Seletores JS</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/seletores.png" alt="Seletores JS" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">O que são?</h2>
                <p class="col-12">São formas de selecionarmos elementos do nosso documento (mais adiante veremos o tal do DOM). Funcionam de modo bem semelhante ao CSS, porém precisamos acessar o documento (_document_) para então selecionarmos os elementos. Podemos selecionar pelo nome das tags HTML, pelos atributos ID, classe ou por outros atributos.</p>
                <p class="col-12">De forma geral, dividimos os seletores de duas maneiras: <b>getElementBy</b> ou <b>querySelector</b> - entenderemos a diferença entre eles nessa lição.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 4 | getElementBy</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>getElementById()</h5>
                    <p>Selecionamos um elemento (único) pelo seu ID</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.getElementById('voltarBtn')
                        </code>
                    </div>
                    <p class="mt-3">Caso o ID não exista, receberemos o retorno <code>null</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.getElementById('umIdQualquer')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>getElementsByClassName()</h5>
                    <p>Usamos para fazer uma seleção através de uma classe em comum entre os elementos a serem selecionados</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.getElementsByClassName('bg-dark')
                        </code>
                    </div>
                    <p class="mt-3">Diferente da seleção por ID, temos uma <b>coleção de elementos HTML</b> como retorno. Esse retorno é um <code>array</code>. Por isso podemos verificar a propriedade <code>length</code> dessa coleção:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.getElementsByClassName('bg-dark').length
                        </code>
                    </div>
                    <p class="mt-3">E para selecionarmos um elemento específico, devemos declarar seu índice:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Rode uma linha de comando por vez para ver cada resultado<br />
                            document.getElementsByClassName('bg-dark')[0]<br />
                            document.getElementsByClassName('bg-dark')[1]<br />
                            document.getElementsByClassName('bg-dark')[2]<br />
                        </code>
                    </div>
                    <p class="mt-3">Se tentarmos selecionar um índice inexistente, recebemos <code>undefined</code> como retorno:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.getElementsByClassName('bg-dark')[999]
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>getElementsByTagName()</h5>
                    <p>Semelhante ao seletor por nome da classe, esse seletor utiliza o nome da tag HTML:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.getElementsByTagName('code')
                        </code>
                    </div>
                    <p class="mt-3">Esse seletor também nos retorna um <code>HTMLColletcion</code>, então devemos acessar cada elemento através de seu índice:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.getElementsByTagName('code')[4]
                        </code>
                    </div>
                    <i>Caso o índice não exista, retornará <code>undefined</code></i>
                </li>
            </ul>
        </article>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 5 | querySelector</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>querySelector()</h5>
                    <p>Selecionamos um elemento (único) de acordo com a query passada. É necessário usar o símbolo do tipo de seletor, como o <code>#</code> para ID.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelector('#voltarBtn')
                        </code>
                    </div>
                    <p class="mt-3">Caso o ID não exista, receberemos o retorno <code>null</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelector('#umIdQualquer')
                        </code>
                    </div>
                    <p class="mt-3">O querySelector também funciona com outros seletores, mas sempre retornará apenas um elemento (a primeira ocorrência):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelector('.bg-dark')
                        </code>
                    </div>
                    <p class="mt-3">Uma das vantagens do querySelector é que podemos usar o seletor de atributos igual do CSS:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelector('[href="./interacao-via-browser.php"]')
                        </code>
                    </div>
                    <p class="mt-3">Podemos inclusive usar recursos mais sofisticados do CSS, veja:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelector('a:not([href="./interacao-via-browser.php"])')<br />
                            // Ou...<br />
                            document.querySelector('li.nav-item:last-child')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>querySelectorAll()</h5>
                    <p>Também usa a sintaxe do CSS para criar o seletor, mas traz um conjunto de elementos, uma <code>NodeList</code> (mesmo que haja apenas um item selecionado)</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelectorAll('.bg-dark')
                        </code>
                    </div>
                    <p class="mt-3">Mesmo que haja um único item, receberemos essa <code>NodeList</code>:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelectorAll('#voltarBtn')
                        </code>
                    </div>
                    <p class="mt-3">Para selecionarmos um elemento específico, devemos declarar seu índice:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelectorAll('p')[2]
                        </code>
                    </div>
                    <p class="mt-3">E, se tentarmos selecionar um índice inexistente, recebemos <code>undefined</code> como retorno:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelectorAll('.bg-dark')[999]
                        </code>
                    </div>
                    <p class="mt-3">Assim como a HTMLColletcion, a NodeList é um Objeto, então também permite acesarmos a propriedade <code>length</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelectorAll('.bg-dark').length
                        </code>
                    </div>
                    <p class="mt-3">E claro, também podemos utilizar seletores mais elaborados (iguais do CSS):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelectorAll('[class*="col"]:not(.collapse)')
                        </code>
                    </div>
                    <i>Nesse caso estamos selecionando elementos que tenham classes cujos valores contenham o trecho 'col' mas que não tenham a classe 'collapse'.</i>
                </li>
            </ul>
            <p>Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02-pronto/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./interacao-via-browser.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./tipos-de-dados.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>