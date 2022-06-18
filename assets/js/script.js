const services = document.querySelectorAll('.service')

services.forEach((service) => {
    service.addEventListener('mouseenter', () => {
        service.classList.add('item');
        service.addEventListener('mouseleave', () => {
            service.classList.remove('item');
        });
    });
});

const itensSelecionados = document.querySelectorAll('.input-agenda input[type="checkbox"]');
const btnAgendar = document.querySelector('#btn-agendar');
const servicos = document.querySelector('#json_servicos');
const error = document.querySelector('#error');
let arrayServicos = [];

btnAgendar.addEventListener('click', (e) => {
    itensSelecionados.forEach((item) => {
        // Verifica se o item está selecionado
        if(!item.checked) {
            // Verifica se o item já existe no array
            if(arrayServicos.indexOf(item.value) !== -1) {
                // Se existir, remove o item do array
                arrayServicos.splice(item.value, 1);
            }
        } else if(item.checked) {
            // Se não existir, adiciona o item no array
            if(arrayServicos.indexOf(item.value) === -1) {
                arrayServicos.push(item.value);
            }           
        }
    });
    servicos.value = arrayServicos;
})

document.querySelectorAll('.input-agenda input').forEach(function(input) {
    input.addEventListener('change', function() {
        this.parentNode.classList.toggle('checked-agenda');
    });
});