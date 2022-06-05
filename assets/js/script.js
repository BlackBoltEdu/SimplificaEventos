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
let arrayServicos = [];

document.querySelectorAll('.input-agenda input').forEach(function(input) {
    input.addEventListener('change', function() {
        this.parentNode.classList.toggle('checked-agenda');
    });
});

btnAgendar.addEventListener('click', (e) => {
    itensSelecionados.forEach((item) => {
        if (item.checked) {
            if(arrayServicos.indexOf(item.value) === -1){
                arrayServicos.splice(item.value !== true);
                arrayServicos.push(item.value);
                
                console.log(arrayServicos);
            }           
        }
    })
    e.preventDefault();
})