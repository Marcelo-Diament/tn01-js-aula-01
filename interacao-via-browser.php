<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">Interação via Browser</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/interacao.png" alt="Interação via browser" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">O que é?</h2>
                <p class="col-12">São funções nativas do JavaScript que nos permitem abrir caixas de diálogo para interagirmos com o usuário. Curiosidade: sabia que há uma tag HTML para isso? É a tag <code>&lt;dialog&gt;</code>.</p>
                <p>Temos 3 maneiras de interagir com o usuário através do próprio browser. Essas interações consistem naquelas 'caixinhas' (tipo pop up). Vamos praticar!</p>
            </article>
        </header>
        <script>
            alerta = alert('\nE aí, bora entender as interações via caixas de diálogo?\n\n');
            promptNome = prompt('\nQual seu nome?\n\n');
            promptNome
                ? confirm(`\nEntão vamos pôr a mão na massa ${promptNome}!\n\nClique em OK pra gente começar a praticar!\n\n`)
                : alert('\nSe mudar de idéia, basta dar um refresh na página! =)\n\nSem mais delongas... vamos pra prática!\n\n')
        </script>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 3 | Interação via browser</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Alertando o visitante</h5>
                    <p>Usamos o <code>alert()</code> para exibirmos uma informação na tela:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            alert('Whatsuuuuuuuup?')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Confirmação do usuário</h5>
                    <p>Usamos o <code>confirm()</code> para que a pessoa opte entre 'OK' ou 'Cancel' (tipo em sites de bebidas, por exemplo).</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            confirm('Você tem mais de 18 anos?')
                        </code>
                    </div>
                    <p class="mt-3">Reparou no retorno exibido no console? Podemos salvar isso numa variável e criar condições de acordo com o retorno (clique):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            ciente = confirm('Seus pais sabem que está acessando esse site?')<br />
                            ciente ? alert('Então tá bom!') : alert('Menino mal... tsc tsc tsc')
                        </code>
                    </div>
                    <i>Essa sintaxe é o if ternário, que já vimos em aulas anteriores.</i>
                </li>
                <li class="my-5">
                    <h5>Recebendo informação inserida num input</h5>
                    <p>E o <code>prompt()</code> permite que o usuário insira valores (string) num input:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            nome = prompt('Qual seu nome?')
                        </code>
                    </div>
                    <p class="mt-3">Assim como fizemos com o confirm, também podemos salvar esse valor e usá-lo posteriormente:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            nome = prompt('Qual sua graça?')<br />
                            nome ? alert(`E aí, firmeza ${nome}`) : alert('Então vou te chamar de Fulano')<br />
                            // Ou ainda<br />
                            if(!nome) nome = 'Ciclano'<br />
                            alert(`Ou melhor, vou te chamar de ${nome}`)
                        </code>
                    </div>
                    <i>Reparou que dispensamos o uso das chaves no <code>if</code>? Podemos fazer isso quando só tivermos um único retorno</i>
                </li>
            <p><b>Dica: vale a pena salvar essas informações em variáveis e criarmos condicionais para não exibirmos esses alertas a todo momento.</b></p>
            </ul>
            <p>Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02-pronto/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
    <a href="./console-log.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
    <a href="./seletores-js.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>