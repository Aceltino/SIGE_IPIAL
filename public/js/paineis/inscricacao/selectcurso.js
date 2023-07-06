$(document).ready(function() {
  // Quando uma opção é selecionada em qualquer select
  $(document).on("change", "select#select", function() {
    var selectedOption = $(this).val();
    
    // Desabilita o select selecionado
    $(this).prop("disabled", true);
    
    // Habilita os outros selects
    $("select#select").not(this).prop("disabled", false);
    
    // Desabilita a opção selecionada em outros selects
    $("select#select option[value='" + selectedOption + "']").not(":selected").prop("disabled", true);
  });

  // Ao enviar o formulário
  $("form").on("submit", function() {
    // Habilita todos os selects
    $("select#select").prop("disabled", false);
    
    // Habilita as opções selecionadas
    $("select#select option:selected").prop("disabled", false);
  });
});