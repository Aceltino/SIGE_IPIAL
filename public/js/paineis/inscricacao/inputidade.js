$(document).ready(function() {
    // Obtém a data atual
    var dataAtual = new Date();
    
    // Formata a data atual no formato YYYY-MM-DD
    var dataAtualFormatada = dataAtual.toISOString().split("T")[0];
    
    // Define a data atual como o valor máximo do campo de entrada
    $("#datainput").attr("max", dataAtualFormatada);
    
    // Verifica a data selecionada e a idade quando houver alteração no campo de entrada
    $("#datainput").on("change", function() {
      var dataSelecionada = new Date($(this).val());
      var idade = calcularIdade(dataSelecionada, dataAtual);
      
      if (idade < 14) {
        $("#mensagem").text("Deves possuir no mínimo de 14 anos");
        $("#idadeinput").val(idade +"ANOS"); 
      } else {
        $("#mensagem").text("");
        $("#idadeinput").val(idade +"ANOS"); 
      }
    });
    
    // Impede a seleção de datas futuras
    $("#datainput").on("input", function() {
      var dataSelecionada = new Date($(this).val());
      
      if (dataSelecionada > dataAtual) {
        $(this).val("");
      }
    });
    
    // Função para calcular a idade com base na data de nascimento e na data atual
    function calcularIdade(dataNascimento, dataAtual) {
      var diff = Math.abs(dataAtual - dataNascimento);
      return Math.floor(diff / (1000 * 60 * 60 * 24 * 365.25));
    }
  });