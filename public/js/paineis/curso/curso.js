$(document).ready(function() {
    // Selecionar o elemento de input pelo ID ou classe
    var inputElement = $('#sigla');
  
    // Lidar com o evento input
    inputElement.on('input', function() {
      // Obter o valor do campo de entrada
      var inputValue = $(this).val();
  
      // Converter o valor para maiúscula
      var upperCaseValue = inputValue.toUpperCase();
  
      // Atualizar o valor do campo de entrada com apenas letras maiúsculas
      $(this).val(upperCaseValue);
    });
  });