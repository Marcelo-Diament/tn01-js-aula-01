window.onload = () => {

    // Um pouquinho de JQuery pra quem se interessar! =) Esse script atribui a classe ao item do menu que tem o valor do atributo href igual ao endereço da página acessada
    $('.nav-link').each(function (index, element) {
        element.href == window.location
            ? $('.nav-item')[index].classList.add('active')
            : $('.nav-item')[index].classList.remove('active');
    });

};