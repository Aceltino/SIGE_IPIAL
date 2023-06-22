//Pegando os elementos html via id
let uploadButton = document.getElementById("btn-upload");
let ImagemEscolhida = document.getElementById("img-escolhida");


//Accao a se realizar ao fazer o upload
uploadButton.onchange = () => {

    //Lendo o arquivo selecionado
	let reader = new FileReader();
	reader.readAsDataURL(uploadButton.files[0]);
	console.log(uploadButton.files[0]);

    //Atribuindo o caminho da imagem selecionada no src da imagem do HTML
	reader.onload = () => {
		ImagemEscolhida.setAttribute("src", reader.result);
	}

}