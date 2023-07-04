//Preparei 7 id para colocarem nas inputs do numero de telefone para validação se precisarem validar mais de uma input de número de telefone passer o id telefoneinput para a input 1 e telefoneinput1 para input 2 e assim por diante, sem esquecer de adicionar a class mensagem erro em uma div que deve estar obrigatoriamente depois da input do número de telefone 

/********************************************************************************************************** */

$(document).ready(function() {
  $("#telefoneinput").on("input", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Limita o número de caracteres a 9
    telefone = telefone.substring(0, 9);
    
    // Verifica se o valor começa com o número 9
    if (!telefone.startsWith("9")) {
      telefone = "9" + telefone;
    }
    
    // Atualiza o valor da input
    $(this).val(telefone);
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    } else {
      // Oculta a mensagem de erro
      $(this).next(".mensagem-erro").hide();
    }
  });
  
  // Evento "blur" para verificar as condições e apagar o valor da input se necessário
  $("#telefoneinput").on("blur", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Apaga o valor da input
      $(this).val("");
      
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    }
  });
});

/********************************************************************************************************** */

















/********************************************************************************************************** */

$(document).ready(function() {
  $("#telefoneinput2").on("input", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Limita o número de caracteres a 9
    telefone = telefone.substring(0, 9);
    
    // Verifica se o valor começa com o número 9
    if (!telefone.startsWith("9")) {
      telefone = "9" + telefone;
    }
    
    // Atualiza o valor da input
    $(this).val(telefone);
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    } else {
      // Oculta a mensagem de erro
      $(this).next(".mensagem-erro").hide();
    }
  });
  
  // Evento "blur" para verificar as condições e apagar o valor da input se necessário
  $("#telefoneinput2").on("blur", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Apaga o valor da input
      $(this).val("");
      
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    }
  });
});
/********************************************************************************************************** */























/********************************************************************************************************** */

$(document).ready(function() {
  $("#telefoneinput3").on("input", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Limita o número de caracteres a 9
    telefone = telefone.substring(0, 9);
    
    // Verifica se o valor começa com o número 9
    if (!telefone.startsWith("9")) {
      telefone = "9" + telefone;
    }
    
    // Atualiza o valor da input
    $(this).val(telefone);
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    } else {
      // Oculta a mensagem de erro
      $(this).next(".mensagem-erro").hide();
    }
  });
  
  // Evento "blur" para verificar as condições e apagar o valor da input se necessário
  $("#telefoneinput3").on("blur", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Apaga o valor da input
      $(this).val("");
      
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    }
  });
});
/********************************************************************************************************** */









/********************************************************************************************************** */

$(document).ready(function() {
  $("#telefoneinput4").on("input", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Limita o número de caracteres a 9
    telefone = telefone.substring(0, 9);
    
    // Verifica se o valor começa com o número 9
    if (!telefone.startsWith("9")) {
      telefone = "9" + telefone;
    }
    
    // Atualiza o valor da input
    $(this).val(telefone);
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    } else {
      // Oculta a mensagem de erro
      $(this).next(".mensagem-erro").hide();
    }
  });
  
  // Evento "blur" para verificar as condições e apagar o valor da input se necessário
  $("#telefoneinput4").on("blur", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Apaga o valor da input
      $(this).val("");
      
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    }
  });
});
/********************************************************************************************************** */












/********************************************************************************************************** */

$(document).ready(function() {
  $("#telefoneinput5").on("input", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Limita o número de caracteres a 9
    telefone = telefone.substring(0, 9);
    
    // Verifica se o valor começa com o número 9
    if (!telefone.startsWith("9")) {
      telefone = "9" + telefone;
    }
    
    // Atualiza o valor da input
    $(this).val(telefone);
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    } else {
      // Oculta a mensagem de erro
      $(this).next(".mensagem-erro").hide();
    }
  });
  
  // Evento "blur" para verificar as condições e apagar o valor da input se necessário
  $("#telefoneinput5").on("blur", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Apaga o valor da input
      $(this).val("");
      
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    }
  });
});
/********************************************************************************************************** */

















/********************************************************************************************************** */


$(document).ready(function() {
  $("#telefoneinput6").on("input", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Limita o número de caracteres a 9
    telefone = telefone.substring(0, 9);
    
    // Verifica se o valor começa com o número 9
    if (!telefone.startsWith("9")) {
      telefone = "9" + telefone;
    }
    
    // Atualiza o valor da input
    $(this).val(telefone);
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    } else {
      // Oculta a mensagem de erro
      $(this).next(".mensagem-erro").hide();
    }
  });
  
  // Evento "blur" para verificar as condições e apagar o valor da input se necessário
  $("#telefoneinput6").on("blur", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Apaga o valor da input
      $(this).val("");
      
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    }
  });
});
/********************************************************************************************************** */


















/********************************************************************************************************** */

$(document).ready(function() {
  $("#telefoneinput7").on("input", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Limita o número de caracteres a 9
    telefone = telefone.substring(0, 9);
    
    // Verifica se o valor começa com o número 9
    if (!telefone.startsWith("9")) {
      telefone = "9" + telefone;
    }
    
    // Atualiza o valor da input
    $(this).val(telefone);
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    } else {
      // Oculta a mensagem de erro
      $(this).next(".mensagem-erro").hide();
    }
  });
  
  // Evento "blur" para verificar as condições e apagar o valor da input se necessário
  $("#telefoneinput7").on("blur", function() {
    var telefone = $(this).val();
    
    // Remove qualquer caractere não numérico
    telefone = telefone.replace(/\D/g, "");
    
    // Verifica se o número de caracteres é menor que 9
    if (telefone.length < 9) {
      // Apaga o valor da input
      $(this).val("");
      
      // Exibe a mensagem de erro vermelha
      $(this).next(".mensagem-erro").text("Digite um número válido").show();
    }
  });
});
/********************************************************************************************************** */

