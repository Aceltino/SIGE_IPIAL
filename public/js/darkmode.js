//Pegando o selector#chenge-theme 
const btnMudarTema = document.querySelector("#change-theme");

//Verificando a existencia do tema dark 
if (localStorage.getItem('data-theme') == 'dark') {
	btnMudarTema.checked = true;
}

//Criando a função para a mudança de tema
btnMudarTema.addEventListener('change', () => {
	let theme = localStorage.getItem('data-theme');

	//Ativando temas de acordo a sua existência
	if (!btnMudarTema.checked) {
		changeThemeToLight()
	}else{
		changeThemeToDark()
	}
});