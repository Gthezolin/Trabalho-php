const loginButton = document.getElementById('loginButton');
const registerButton = document.getElementById('registerButton');
const container = document.querySelector('.container');

// Adiciona a classe 'right-panel-active' para mostrar o formulário de cadastro
registerButton.addEventListener('click', () => {
    container.classList.add('right-panel-active');
});

// Remove a classe 'right-panel-active' para mostrar o formulário de login
loginButton.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
});