

$(document).ready(function () {
  // Quando o select de componente for alterado
  $('#selectComponente').change(function () {
    var selectedOption = $(this).val();

    if (selectedOption === 'Componente Técnica, Tecnológica e Prática') {
      handleTecnicas();
    } else if (selectedOption === 'Componente Científica') {
      handleCientificas();
    } else if (selectedOption === 'Componente Socio-Cultural') {
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
    $('input[name="curso"]').prop('disabled', false);

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
    $('input[name="curso"]').change(function () {
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
   

    // Desmarcar todas as checkboxes
    $('input[name="curso"]').prop('checked', false);

   
  }

});

if (document.children.length <= 3)
  document.appendChild(document.createElement('div'))


$(document).ready(function () {
  // Selecionar o elemento de input pelo ID ou classe
  var inputElement = $('#sigla');

  // Lidar com o evento input
  inputElement.on('input', function () {
    // Obter o valor do campo de entrada
    var inputValue = $(this).val();

    // Converter o valor para maiúscula
    var upperCaseValue = inputValue.toUpperCase();

    // Atualizar o valor do campo de entrada com apenas letras maiúsculas
    $(this).val(upperCaseValue);
  });
});


function clonar() {
  let selects = document.getElementById("selects");

  if (selects.children.length <= 2)
    selects.innerHTML += montarInput(`el_${selects.children.length + 1}`);

  if (selects.children.length === 3) {
    document.getElementById("add").innerHTML = '';
  }
}

function montarInput(id) {
  return `<div id="${id}"< class="row">
  <div class="form-group col-4">
      <select oninput="this.className = ''" class="form-select" name="tipo_disciplina"
          id="selectTipoDisciplina">
          <option selected disabled>Tipo de Disciplina</option>
          <option value="Terminal">Terminal</option>
          <option value="Contínua">Contínua</option>
      </select>
  </div>

  <div class="form-group col-4">
      <select oninput="this.className = ''" class="form-select" name="classe"
          id="selectclasse">

          ${Options()}
      </select>
    
  </div>

  <div class="form-group col-3">
      <input type="text" id="input" style=" text-align: center;" name="carga_horaria"
          placeholder="Carga Horária"
          oninput="this.className = ''" maxlength="4">
     
  </div>
  
  <button class="form-group col-1 btn btn-danger" type="button" onclick="remove('${id}')">Remover</button>
  
</div>`;
}
function remove(id) {
  let el = document.getElementById(id);

  document.getElementById("selects").removeChild(el);

  if (document.getElementById("selects").children.length < 3) {
    document.getElementById("add").innerHTML = ` <i id="clonebtn1"class="bi bi-plus-circle" onclick="clonar()" style="font-size: 30px; cursor: pointer;"></i>`;
  }
}
function Options() {
  let selectclasse = document.getElementById("selectclasse");
  let options = '';

  for (let opt of selectclasse.children) {
    options += `<option value="${opt.value}">${opt.innerHTML}</option>`;
  }

  return options;
}