/**
* /------------/ Funcao da senha/------------------/
*/						// #001
//	/------------/ Funcao avaliar a senha/------------------/
function avaliarSenha(){
	//Pegando o valor da senha digitada
	var senhaDigitada = document.getElementById("NovaSenha").value;
	var senha2 = document.getElementById("ConfSenha").value;
	var nivel = 0;

	//Pegando a senha que esta a ser digitada
	document.getElementById("mostaSenha").innerHTML = "" + senhaDigitada;

	//Comparando se a senha ]e fraca
	if ((senhaDigitada != "") && (senhaDigitada.length >= 4) && (senhaDigitada.length <= 7)) {
		nivel += 10;
		//Comparando a senha media
	}else if (senhaDigitada.length > 7) {
		nivel += 25;
	}

	//Comparando a senha media 2
	if ((senhaDigitada != "") && (senhaDigitada.length >= 5) && (senhaDigitada.match(/[a-z]+/))) {
		nivel += 10;
	}

	//Comparando a senha Forte
	if ((senhaDigitada != "") && (senhaDigitada.length >= 6) && (senhaDigitada.match(/[A-Z]+/))) {
		nivel += 20;
	}

	//Comparando a senha Excelente ou Perfeita
	if ((senhaDigitada != "") && (senhaDigitada.length >= 7) && (senhaDigitada.match(/[&^%@#$*!/.,;~`"]+/))) {
		nivel += 25;
	}
		//if (true) {}	
	mostarNivelSenha(nivel);

	if ((senhaDigitada != "") && (senha2 != "")) {
		if ((senhaDigitada == senha2)) {
			document.getElementById("resultcomparaSenha").innerHTML="<span style='color: #008000'>Senha confirmada</span>";
		}else{
			document.getElementById("resultcomparaSenha").innerHTML="<span style='color: #ff0000'>As senhas não correspondem</span>";
			senha2.value.reset();
		}
	}
}

//Funcao para verificar os niveis de cada senha
function mostarNivelSenha(nivel){
	if (nivel < 30) {
		document.getElementById("avaliacaoResult").innerHTML= "<span style='color: #ff0000'>Senha é Fraca</span>";
	}else if ((nivel >= 30) && (nivel < 50)) {
		document.getElementById("avaliacaoResult").innerHTML= "<span style='color: #ffd700'>Senha Média</span>";
	}else if ((nivel >= 50) && (nivel < 70)) {
		document.getElementById("avaliacaoResult").innerHTML= "<span style='color: #7fff00'>Senha Forte</span>";
	}else if ((nivel >= 70) && (nivel < 100)) {
		document.getElementById("avaliacaoResult").innerHTML= "<span style='color: #008000'>Senha Excelente</span>";
	}
}//	/------------/ Fim Funcao avliar a senha/------------------/


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