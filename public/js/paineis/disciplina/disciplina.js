$(document).ready(function() {
    // Quando a opção "Técnicas" for selecionada
    $('#selectComponente').change(function() {
      if ($(this).val() === 'Técnicas') {
        // Habilitar todas as checkboxes
        $('input[name="curso"]').prop('disabled', false);
      } else {
        // Desabilitar todas as checkboxes, exceto se uma estiver selecionada
        if ($('input[name="curso"]:checked').length === 0) {
          $('input[name="curso"]').prop('disabled', true);
        }
      }
    });
  
    // Ao selecionar uma checkbox
    $('input[name="curso"]').change(function() {
      if ($('#selectComponente').val() === 'Técnicas') {
        // Desmarcar outras checkboxes
        $('input[name="curso"]').not(this).prop('checked', false);
      }
  
      // Verificar se alguma checkbox está selecionada
      if ($('input[name="curso"]:checked').length > 0) {
        // Habilitar todas as checkboxes
        $('input[name="curso"]').prop('disabled', false);
      } else {
        // Desabilitar todas as checkboxes
        $('input[name="curso"]').prop('disabled', true);
      }
    });
  });

sigla_disciplina.addEventListener('input', function () {
    validacao_inputs();
});
nome_disciplina.addEventListener('input', function () {
    validacao_inputs();
});

selecionado.addEventListener('input', function () {
    validacao_inputs();
});











  $(document).ready(function() {
    // Quando o select de componente for alterado
    $('#selectComponente').change(function() {
      if ($(this).val() === 'Técnicas') {
        // Habilitar todas as checkboxes
        $('input[name="curso"]').prop('disabled', false);
      } else if ($(this).val() === 'Cientificas') {
        // Habilitar todas as checkboxes
        $('input[name="curso"]').prop('disabled', false);
        // Desabilitar outras checkboxes após selecionar duas opções
        $('input[name="curso"]').change(function() {
          var numSelecionados = $('input[name="curso"]:checked').length;
          if (numSelecionados >= 2) {
            $('input[name="curso"]').not(':checked').prop('disabled', true);
          } else {
            $('input[name="curso"]').not(':checked').prop('disabled', false);
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