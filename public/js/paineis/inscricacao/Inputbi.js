/******************************************************************************************************** */
$(document).ready(function() {
  var input = $("#bi_input");
  var mensagem = $("#mensagem1");

  input.on("blur", function() {
    var valordainput = input.val();

    // Remove qualquer caractere não permitido
    valordainput = valordainput.replace(/[^0-9A-Z]/g, "");

    // Verifica se o valor possui exatamente 14 caracteres
    if (valordainput.length === 14) {
      // Verifica as regras para cada posição do caractere
      var novenumero = valordainput.substring(0, 9);
      var duasletras = valordainput.substring(9, 11);
      var resto = valordainput.substring(11);

      var regexnovenumero = /^[0-9]{9}$/;
      var regexduasletras = /^[A-Z]{2}$/;
      var regexresto = /^[0-9]{3}$/;

      if (regexnovenumero.test(novenumero) && regexduasletras.test(duasletras) && regexresto.test(resto)) {
        // O valor está de acordo com as regras especificadas
        mensagem.text(""); // Limpa a mensagem de erro
      } else {
        // O valor não está de acordo com as regras especificadas
        input.val(""); // Apaga o valor do campo de entrada
        mensagem.text("Bilhete de identidade inválido");
      }
    } else {
      // O valor não possui exatamente 14 caracteres
      input.val(""); // Apaga o valor do campo de entrada
      mensagem.text("Bilhete de identidade inválido");
    }
  });
});

/******************************************************************************************************** */















/******************************************************************************************************** */


$(document).ready(function() {
  var input = $("#bi_input1");
  var mensagem = $("#mensagem2");

  input.on("blur", function() {
    var valordainput = input.val();

    // Remove qualquer caractere não permitido
    valordainput = valordainput.replace(/[^0-9A-Z]/g, "");

    // Verifica se o valor possui exatamente 14 caracteres
    if (valordainput.length === 14) {
      // Verifica as regras para cada posição do caractere
      var novenumero = valordainput.substring(0, 9);
      var duasletras = valordainput.substring(9, 11);
      var resto = valordainput.substring(11);

      var regexnovenumero = /^[0-9]{9}$/;
      var regexduasletras = /^[A-Z]{2}$/;
      var regexresto = /^[0-9]{3}$/;

      if (regexnovenumero.test(novenumero) && regexduasletras.test(duasletras) && regexresto.test(resto)) {
        // O valor está de acordo com as regras especificadas
        mensagem.text(""); // Limpa a mensagem de erro
      } else {
        // O valor não está de acordo com as regras especificadas
        input.val(""); // Apaga o valor do campo de entrada
        mensagem.text("Bilhete de identidade inválido");
      }
    } else {
      // O valor não possui exatamente 14 caracteres
      input.val(""); // Apaga o valor do campo de entrada
      mensagem.text("Bilhete de identidade inválido");
    }
  });
});

/******************************************************************************************************** */














/******************************************************************************************************** */

$(document).ready(function() {
  var input = $("#bi_input2");
  var mensagem = $("#mensagem3");

  input.on("blur", function() {
    var valordainput = input.val();

    // Remove qualquer caractere não permitido
    valordainput = valordainput.replace(/[^0-9A-Z]/g, "");

    // Verifica se o valor possui exatamente 14 caracteres
    if (valordainput.length === 14) {
      // Verifica as regras para cada posição do caractere
      var novenumero = valordainput.substring(0, 9);
      var duasletras = valordainput.substring(9, 11);
      var resto = valordainput.substring(11);

      var regexnovenumero = /^[0-9]{9}$/;
      var regexduasletras = /^[A-Z]{2}$/;
      var regexresto = /^[0-9]{3}$/;

      if (regexnovenumero.test(novenumero) && regexduasletras.test(duasletras) && regexresto.test(resto)) {
        // O valor está de acordo com as regras especificadas
        mensagem.text(""); // Limpa a mensagem de erro
      } else {
        // O valor não está de acordo com as regras especificadas
        input.val(""); // Apaga o valor do campo de entrada
        mensagem.text("Bilhete de identidade inválido");
      }
    } else {
      // O valor não possui exatamente 14 caracteres
      input.val(""); // Apaga o valor do campo de entrada
      mensagem.text("Bilhete de identidade inválido");
    }
  });
});

/******************************************************************************************************** */












/******************************************************************************************************** */

$(document).ready(function() {
  var input = $("#bi_input3");
  var mensagem = $("#mensagem4");

  input.on("blur", function() {
    var valordainput = input.val();

    // Remove qualquer caractere não permitido
    valordainput = valordainput.replace(/[^0-9A-Z]/g, "");

    // Verifica se o valor possui exatamente 14 caracteres
    if (valordainput.length === 14) {
      // Verifica as regras para cada posição do caractere
      var novenumero = valordainput.substring(0, 9);
      var duasletras = valordainput.substring(9, 11);
      var resto = valordainput.substring(11);

      var regexnovenumero = /^[0-9]{9}$/;
      var regexduasletras = /^[A-Z]{2}$/;
      var regexresto = /^[0-9]{3}$/;

      if (regexnovenumero.test(novenumero) && regexduasletras.test(duasletras) && regexresto.test(resto)) {
        // O valor está de acordo com as regras especificadas
        mensagem.text(""); // Limpa a mensagem de erro
      } else {
        // O valor não está de acordo com as regras especificadas
        input.val(""); // Apaga o valor do campo de entrada
        mensagem.text("Bilhete de identidade inválido");
      }
    } else {
      // O valor não possui exatamente 14 caracteres
      input.val(""); // Apaga o valor do campo de entrada
      mensagem.text("Bilhete de identidade inválido");
    }
  });
});

/******************************************************************************************************** */














/******************************************************************************************************** */

$(document).ready(function() {
  var input = $("#bi_input4");
  var mensagem = $("#mensagem5");
  
  input.on("blur", function() {
  var valordainput = input.val();
  // Remove qualquer caractere não permitido
valordainput = valordainput.replace(/[^0-9A-Z]/g, "");

// Verifica se o valor possui exatamente 14 caracteres
if (valordainput.length === 14) {
  // Verifica as regras para cada posição do caractere
  var novenumero = valordainput.substring(0, 9);
  var duasletras = valordainput.substring(9, 11);
  var resto = valordainput.substring(11);

  var regexnovenumero = /^[0-9]{9}$/;
  var regexduasletras = /^[A-Z]{2}$/;
  var regexresto = /^[0-9]{3}$/;

  if (regexnovenumero.test(novenumero) && regexduasletras.test(duasletras) && regexresto.test(resto)) {
    // O valor está de acordo com as regras especificadas
    mensagem.text(""); // Limpa a mensagem de erro
  } else {
    // O valor não está de acordo com as regras especificadas
    input.val(""); // Apaga o valor do campo de entrada
    mensagem.text("Bilhete de identidade inválido");
  }
} else {
  // O valor não possui exatamente 14 caracteres
  input.val(""); // Apaga o valor do campo de entrada
  mensagem.text("Bilhete de identidade inválido");
}
});
});
/******************************************************************************************************** */


