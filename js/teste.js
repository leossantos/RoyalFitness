document.querySelector('form input').oninvalid = function(evt) {
// cancela comportamento padrão do browser
evt.preventDefault();
// checa validade e mostra alert
if (!this.validity.valid) {
alert("Nome obrigatório!");
}
};