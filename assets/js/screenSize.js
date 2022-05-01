const section = document.querySelector('.section-one');

window.addEventListener('resize', e => {
    console.log(typeof screen.width)

    if (screen.width > 299 && screen.width < 768) {
        section.remove();
    }else{
        const sectionOne = document.createElement("section");
        sectionOne.className = "section-one";
        sectionOne.innerHTML = `<img src="../assets/img/register.svg" alt="ilustaração de cadastro">`;
        
        const element = document.querySelector('.section-two');
        element.insertBefore(sectionOne, element)
    }
})