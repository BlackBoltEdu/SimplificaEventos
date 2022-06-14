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
let arrayServicos = [];

btnAgendar.addEventListener('click', (e) => {
    itensSelecionados.forEach((item) => {
        if (!item.checked) {
            
            if (arrayServicos.indexOf(item.value) !== -1) {
                arrayServicos.splice(item.value, 1);
            }
        }else if (item.checked) {
            if (arrayServicos.indexOf(item.value) === -1) {
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