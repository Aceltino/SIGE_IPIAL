

$(document).ready(function() {
  // Quando o select de componente for alterado
  $('#selectComponente').change(function() {
    var selectedOption = $(this).val();
    
    if (selectedOption === 'Técnicas') {
      handleTecnicas();
    } else if (selectedOption === 'Cientificas') {
      handleCientificas();
    } else if (selectedOption === 'Socio-culturais') {
      handleSocioCulturais();
    } else {
      disableCheckboxes();
    }
  });

  // Função para lidar com a opção "Técnicas"
  function handleTecnicas() {
    // Remover manipuladores de eventos de change associados às checkboxes
    $('input[name="curso"]').off('change');

    // Desmarcar todas as checkboxes selecionadas
    $('input[name="curso"]:checked').prop('checked', false);

    // Habilitar todas as checkboxes
    $('input[name="curso"]').prop('disabled', false);
    
    // Verificar se pelo menos uma checkbox está selecionada
    var numSelecionados = $('input[name="curso"]:checked').length;
    if (numSelecionados === 0) {
      // Marcar o primeiro checkbox por padrão
      $('input[name="curso"]').first().prop('checked', true);
    }

    // Ao selecionar uma checkbox
    $('input[name="curso"]').change(function() {
      // Verificar o número de checkboxes selecionadas
      var numSelecionados = $('input[name="curso"]:checked').length;

      // Se nenhuma checkbox estiver selecionada, marcar o primeiro checkbox
      if (numSelecionados === 0) {
        $('input[name="curso"]').first().prop('checked', true);
      } else if (numSelecionados > 1) {
        // Se mais de uma checkbox estiver selecionada, desmarcar todas exceto a atual
        $('input[name="curso"]').not(this).prop('checked', false);
      }
    });
  }

 // Função para lidar com a opção "Socio-culturais"
function handleSocioCulturais() {
  // Remover manipuladores de eventos de change associados às checkboxes
  $('input[name="curso"]').off('change');

  // Marcar todas as checkboxes
  $('input[name="curso"]').prop('checked', true);

  // Habilitar todas as checkboxes
  $('input[name="curso"]').prop('disabled', false);

  // Ao selecionar uma checkbox
  $('input[name="curso"]').change(function() {
    // Verificar se a opção "Socio-culturais" está selecionada
    if ($('#selectComponente').val() === 'Socio-culturais') {
      // Verificar se a checkbox está marcada
      if (!$(this).is(':checked')) {
        // Marcar a checkbox novamente (impedindo que seja desmarcada)
        $(this).prop('checked', true);
      }
    }
  });
}

// Função para lidar com a opção "Cientificas"
function handleCientificas() {
  // Remover manipuladores de eventos de change associados às checkboxes
  $('input[name="curso"]').off('change');

  // Desmarcar todas as checkboxes
  $('input[name="curso"]').prop('checked', false);

  // Habilitar todas as checkboxes
  $('input[name="curso"]').prop('disabled', false);

  // Contar o número de checkboxes
  var numTotalCheckboxes = $('input[name="curso"]').length;

  // Definir os limites mínimo e máximo de seleção
  var minSelecionar = 2;
  var maxSelecionar = numTotalCheckboxes - 1;

  // Selecionar as duas primeiras checkboxes por padrão
  $('input[name="curso"]').slice(0, 2).prop('checked', true);

  // Ao selecionar uma checkbox
  $('input[name="curso"]').change(function() {
    var numSelecionados = $('input[name="curso"]:checked').length;

    if (numSelecionados > maxSelecionar) {
      // Desmarcar a checkbox se o número máximo for excedido
      $(this).prop('checked', false);
    } else if (numSelecionados < minSelecionar) {
      // Impedir a desmarcação se o número mínimo não for atingido
      $(this).prop('checked', true);
    }
  });
}

  // Função para desabilitar todas as checkboxes
  function disableCheckboxes() {
    // Remover manipuladores de eventos de change associados às checkboxes
    $('input[name="curso"]').off('change');

    // Desabilitar todas as checkboxes
    $('input[name="curso"]').prop('disabled', true);
  }
});





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