window.sr = ScrollReveal({ reset: true });

sr.reveal('.scrollReveal', {duration: 1000});

sr.reveal('.scrollReveal-left', {
    origin: 'left',
    distance: '50px',
    duration: 2500
});

sr.reveal('.scrollReveal-right', {
    origin: 'right',
    distance: '50px',
    duration: 2500
});

sr.reveal('.scrollReveal-bottom', {
    origin: 'bottom',
    distance: '50px',
    duration: 2500
});

sr.reveal('.services', {
    origin: 'right',
    distance: '50px',
    duration: 2000
});

window.addEventListener('scroll', () =>{
    document.querySelector('#nav-bar').classList.toggle('teste', window.scrollY > 0);
});