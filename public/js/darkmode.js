const btnMudarTema = document.querySelector("#mudar-modo");

function AcaoModoEscuro(){
	document.body.classList.toggle("modo-escuro");
	document.header.classList.toggle("modo-escuro");
	document.footer.classList.toggle("modo-escuro");
}

//Guardar o valor escolhido pelo usuario
function guardaModo(){
	const ModoEsc = localStorage.getItem("modo-escuro");

	if(ModoEsc){
		AcaoModoEscuro();
	}
}
guardaModo(); 


btnMudarTema.addEventListener("change", function() {
	AcaoModoEscuro();

	localStorage.removeItem("modo-escuro");

	if((document.body.classList.contains("modo-escuro")) && (document.header.classList.contains("modo-escuro")) && (document.footer.classList.contains("modo-escuro"))){
		localStorage.setItem("modo-escuro", 1,1,1);
	}
});