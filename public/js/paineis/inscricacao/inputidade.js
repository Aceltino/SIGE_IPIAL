$(document).ready(function() {
  // Obtém a data atual
  var dataAtual = new Date();

  // Formata a data atual no formato YYYY-MM-DD
  var dataAtualFormatada = dataAtual.toISOString().split("T")[0];

  // Define a data atual como o valor máximo do campo de entrada
  $("#datainput").attr("max", dataAtualFormatada);

  // Variável para armazenar o valor original do campo de entrada de data
  var valorOriginalData = "";

  // Verifica a data selecionada e a idade quando o campo de entrada perde o foco
  $("#datainput").on("blur", function() {
    var dataSelecionada = new Date($(this).val());
    var idade = calcularIdade(dataSelecionada, dataAtual);

    if (idade < 14) {
      $("#mensagem").text("Não pode ter abaixo de 14 anos");
      $("#idadeinput").val(idade + "-" + "ANOS");

      // Armazena o valor original do campo de entrada
      valorOriginalData = $(this).val();

      // Limpa o valor do campo de entrada
      $(this).val("");
    } else if (idade > 100) {
      $("#mensagem").text("Idade muito Extensa");
      $(this).val("");
    } else {
      $("#mensagem").text("");
      $("#idadeinput").val(idade + "-" + "ANOS");

      // Restaura o valor original do campo de entrada se estiver vazio
      if ($(this).val() === "") {
        $(this).val(valorOriginalData);
      }
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











//****************************************************************************************************** */



$(document).ready(function() {
  // Obtém a data atual
  var dataAtual = new Date();

  // Formata a data atual no formato YYYY-MM-DD
  var dataAtualFormatada = dataAtual.toISOString().split("T")[0];

  // Define a data atual como o valor máximo do campo de entrada
  $("#datainput10").attr("max", dataAtualFormatada);

  // Variável para armazenar o valor original do campo de entrada de data
  var valorOriginalData = "";

  // Verifica a data selecionada e a idade quando o campo de entrada perde o foco
  $("#datainput10").on("blur", function() {
    var dataSelecionada = new Date($(this).val());
    var idade = calcularIdade(dataSelecionada, dataAtual);

    if (idade < 18) {
      $("#mensagem10").text("Não pode ter abaixo de 18 anos");
      $("#idadeinput10").val(idade + "-" + "ANOS");

      // Armazena o valor original do campo de entrada
      valorOriginalData = $(this).val();

      // Limpa o valor do campo de entrada
      $(this).val("");
    } else if (idade > 100) {
      $("#mensagem10").text("Idade muito Extensa");
      $(this).val("");
    } else {
      $("#mensagem10").text("");
      $("#idadeinput10").val(idade + "-" + "ANOS");

      // Restaura o valor original do campo de entrada se estiver vazio
      if ($(this).val() === "") {
        $(this).val(valorOriginalData);
      }
    }
  });

  // Impede a seleção de datas futuras
  $("#datainput10").on("input", function() {
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








//****************************************************************************************************** */





$(document).ready(function() {
  // Obtém a data atual
  var dataAtual = new Date();

  // Formata a data atual no formato YYYY-MM-DD
  var dataAtualFormatada = dataAtual.toISOString().split("T")[0];

  // Define a data atual como o valor máximo do campo de entrada
  $("#datainput2").attr("max", dataAtualFormatada);

  // Variável para armazenar o valor original do campo de entrada de data
  var valorOriginalData = "";

  // Verifica a data selecionada e a idade quando o campo de entrada perde o foco
  $("#datainput2").on("blur", function() {
    var dataSelecionada = new Date($(this).val());
    var idade = calcularIdade(dataSelecionada, dataAtual);

    if (idade < 18) {
      $("#mensagem08").text("Não pode ter abaixo de 18 anos");
      $("#idadeinput2").val(idade + "-" + "ANOS");

      // Armazena o valor original do campo de entrada
      valorOriginalData = $(this).val();

      // Limpa o valor do campo de entrada
      $(this).val("");
    } else if (idade > 100) {
      $("#mensagem08").text("Idade muito Extensa");
      $(this).val("");
    } else {
      $("#mensagem08").text("");
      $("#idadeinput2").val(idade + "-" + "ANOS");

      // Restaura o valor original do campo de entrada se estiver vazio
      if ($(this).val() === "") {
        $(this).val(valorOriginalData);
      }
    }
  });

  // Impede a seleção de datas futuras
  $("#datainput2").on("input", function() {
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










//****************************************************************************************************** */




$(document).ready(function() {
  // Obtém a data atual
  var dataAtual = new Date();

  // Formata a data atual no formato YYYY-MM-DD
  var dataAtualFormatada = dataAtual.toISOString().split("T")[0];

  // Define a data atual como o valor máximo do campo de entrada
  $("#datainput20").attr("max", dataAtualFormatada);

  // Variável para armazenar o valor original do campo de entrada de data
  var valorOriginalData = "";

  // Verifica a data selecionada e a idade quando o campo de entrada perde o foco
  $("#datainput20").on("blur", function() {
    var dataSelecionada = new Date($(this).val());
    var idade = calcularIdade(dataSelecionada, dataAtual);

    if (idade < 18) {
      $("#mensagem080").text("Não pode ter abaixo de 18 anos");
      $("#idadeinput20").val(idade + "-" + "ANOS");

      // Armazena o valor original do campo de entrada
      valorOriginalData = $(this).val();

      // Limpa o valor do campo de entrada
      $(this).val("");
    } else if (idade > 100) {
      $("#mensagem080").text("Idade muito Extensa");
      $(this).val("");
    } else {
      $("#mensagem080").text("");
      $("#idadeinput20").val(idade + "-" + "ANOS");

      // Restaura o valor original do campo de entrada se estiver vazio
      if ($(this).val() === "") {
        $(this).val(valorOriginalData);
      }
    }
  });

  // Impede a seleção de datas futuras
  $("#datainput20").on("input", function() {
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












//****************************************************************************************************** */
