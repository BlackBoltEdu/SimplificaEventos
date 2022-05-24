const services = document.querySelectorAll('.service')

services.forEach((service) => {
    service.addEventListener('mouseenter', () => {
        service.classList.add('item');
        service.addEventListener('mouseleave', () => {
            service.classList.remove('item');
        });
    });
});