
const botaoFecharPopup = document.getElementById('fechar-popup');
const sobreposicaoPopup = document.getElementById('sobreposicao-popup');

function fecharPopup() {
    sobreposicaoPopup.style.display = 'none';
}

function mostrarPopup() { 
    sobreposicaoPopup.style.display = 'block';
}

botaoFecharPopup.addEventListener('click', fecharPopup);