$(document).ready(function() {
  // Quando uma opção é selecionada em qualquer select
  $(document).on("change", "select[id^='cursos']", function() {
    var selectedOption = $(this).val();
    
    // Bloqueia a opção selecionada em outros selects
    $("select[id^='cursos']").not(this).find("option[value='" + selectedOption + "']").prop("disabled", true);
    
    // Remove a opção selecionável do select atual
    $(this).find("option").not(":selected").prop("disabled", true);
  });

  // Ao enviar o formulário
  $("form").on("submit", function() {
    // Habilita todas as opções
    $("select[id^='cursos'] option").prop("disabled", false);
  });
});