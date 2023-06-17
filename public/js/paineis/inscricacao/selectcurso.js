$(document).ready(function() {
    // Quando uma opção é selecionada em qualquer select
    $(document).on("change", "#select", function() {
      var selectedOption = $(this).val();
      
      // Desativa a opção selecionada em todos os selects
      $("select option[value='" + selectedOption + "']").not(":selected").prop("disabled", true);
      
      // Desabilita o select inteiro
      $(this).prop("disabled", true);
    });
  });