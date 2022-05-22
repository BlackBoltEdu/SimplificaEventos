const toggle = document.getElementById('toggle');
const sidebar = document.getElementById('sidebar');
const navbar = document.querySelector('#nav-bar');
const header = document.querySelector('header');

document.onclick = function(e){
    if(e.target.id !== 'sidebar' && e.target.id !== 'toggle'){ 
        toggle.classList.remove('active');
        sidebar.classList.remove('active');
        navbar.classList.remove('active');
        header.classList.remove('active');
    }
}

toggle.onclick = function(){
    toggle.classList.toggle('active');
    sidebar.classList.toggle('active');
    navbar.classList.toggle('active');
    header.classList.toggle('active');
};