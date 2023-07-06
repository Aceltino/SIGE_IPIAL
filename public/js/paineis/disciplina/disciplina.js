$(document).ready(function() {
  // Quando o select de componente for alterado
  $('#selectComponente').change(function() {
    // Desmarcar todas as checkboxes selecionadas
    $('input[name="curso"]:checked').prop('checked', false);

    if ($(this).val() === 'Técnicas') {
      // Habilitar todas as checkboxes
      $('input[name="curso"]').prop('disabled', false);
    } else if ($(this).val() === 'Cientificas') {
      var numTotalCheckboxes = $('input[name="curso"]').length;
      var numSelecionar = numTotalCheckboxes - 1;

      // Habilitar todas as checkboxes
      $('input[name="curso"]').prop('disabled', false);

      // Ao selecionar uma checkbox
      $('input[name="curso"]').change(function() {
        var numSelecionados = $('input[name="curso"]:checked').length;

        if (numSelecionados > numSelecionar) {
          $(this).prop('checked', false);
        }
      });
    } else {
      // Desabilitar todas as checkboxes
      $('input[name="curso"]').prop('disabled', true);
    }
  });
  // Ao selecionar uma checkbox
  $('input[name="curso"]').change(function() {
    if ($('#selectComponente').val() === 'Técnicas') {
      // Desmarcar outras checkboxes
      $('input[name="curso"]').not(this).prop('checked', false);
    }
  });
});

// Com socio culturar mas com bug quando selecionar está a impossibilitar de desmarcar os outos 

/*$(document).ready(function() {
    // Quando o select de componente for alterado
    $('#selectComponente').change(function() {
      // Desmarcar todas as checkboxes selecionadas
      $('input[name="curso"]:checked').prop('checked', false);
  
      if ($(this).val() === 'Técnicas') {
        // Habilitar todas as checkboxes
        $('input[name="curso"]').prop('disabled', false);
      } else if ($(this).val() === 'Cientificas') {
        var numTotalCheckboxes = $('input[name="curso"]').length;
        var numSelecionar = numTotalCheckboxes - 1;
  
        // Habilitar todas as checkboxes
        $('input[name="curso"]').prop('disabled', false);
  
        // Ao selecionar uma checkbox
        $('input[name="curso"]').change(function() {
          var numSelecionados = $('input[name="curso"]:checked').length;
  
          if (numSelecionados > numSelecionar) {
            $(this).prop('checked', false);
          }
        });
      } else if ($(this).val() === 'Socio-culturais') {
        // Selecionar todas as checkboxes
        $('input[name="curso"]').prop('checked', true);
        // Desabilitar a mudança de seleção para checkboxes não selecionadas
        $('input[name="curso"]:not(:checked)').change(function() {
          $(this).prop('checked', true);
        });
      } else {
        // Desabilitar todas as checkboxes
        $('input[name="curso"]').prop('disabled', true);
      }
    });
  
    // Ao selecionar uma checkbox
    $('input[name="curso"]').change(function() {
      if ($('#selectComponente').val() === 'Técnicas') {
        // Desmarcar outras checkboxes
        $('input[name="curso"]').not(this).prop('checked', false);
      }
    });
  });*/