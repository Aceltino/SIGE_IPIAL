var select = document.getElementById("opcoes");

select.addEventListener("change", function() {
  var selectedOption = select.options[select.selectedIndex];
  if (selectedOption.value == "") {
    selectedOption.disabled = true;
  }
});
