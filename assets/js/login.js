const init = () =>{
    const validatePassword = (event) =>{
       const input = event.currentTarget;

       if(input.value.length < 8){
           console.log(password.length < 8)
           btnSubmit.setAttribute('disabled', 'disabled');
           underline.classList.add('error');
       }else{
            btnSubmit.removeAttribute('disabled');
            underline.classList.remove('error');
       }
     
      
    }

    const password = document.querySelector('#password');
    const passwordConf = document.querySelector('#passwordConf');
    const btnSubmit = document.querySelector('#button');
    const underline = document.querySelector('.underline');
    
    password.addEventListener('input', validatePassword)
    if(btnSubmit){
        btnSubmit.addEventListener('click', (event) =>{
            event.preventDefault();
        });
    }
}

window.onload = init;