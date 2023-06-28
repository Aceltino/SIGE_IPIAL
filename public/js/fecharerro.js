$(document).ready(function() {
    // Manipulador de eventos para o botão de fechar a mensagem de erro
    $('.botaofecharerro').click(function() {
        $(this).closest('.alert').remove();
    });
});

$(document).ready(function() {
    // Manipulador de eventos para o botão de fechar a mensagem de sucesso
    $('.botaofechasucesso').click(function() {
        $(this).closest('.alert').remove();
    });
});