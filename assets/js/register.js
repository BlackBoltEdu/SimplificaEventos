const init = () =>{
    const cpf = document.querySelector('#cpf');
    const btnSubmit = document.querySelector('#button');
    
    /* DOM to verify passwords */
    const password = document.querySelector('#password');
    const passwordConf = document.querySelector('#passwordConf');
    const eye = document.querySelector('#visiblePassword');

    const underlinePassword = document.querySelector('[data-js="underline-password"]');
    const underlineCPF = document.querySelector('[data-js-test="invalid-CPF"]');
    const underlinePasswordConf = document.querySelector('[data-js="underline-password-conf"]');


    const inputs = document.querySelectorAll('input');

    /* Validate Password */
    const validatePassword = (event) =>{
        const input = event.currentTarget;

        if(input.value.length < 8){
            btnSubmit.setAttribute('disabled', 'disabled')
            btnSubmit.classList.remove('btnHover');
            underlinePassword.classList.add('error');
            return false;
        }else{
            btnSubmit.removeAttribute('disabled');
            btnSubmit.classList.add('btnHover');
            underlinePassword.classList.remove('error');
            return true;
        }
    }

    /* Conference of password */
    const passwordConference = (e) =>{
        console.log('A')
        const inputPasswordConf = e.currentTarget.value;
        const inputPassword = password.value;

        if(inputPasswordConf !== inputPassword || inputPassword.length < 8){
            btnSubmit.setAttribute('disabled', 'disabled')
            btnSubmit.classList.remove('btnHover');
            underlinePasswordConf.classList.add('error');
            return false;
        }
        underlinePasswordConf.classList.remove('error');
        btnSubmit.removeAttribute('disabled');
        btnSubmit.classList.add('btnHover');
        return true;
    }

     /* CPF and CNPJ mask */
    const masks = {
        cpfOrCNPJ (value){
            let mask = 0

            mask = value
                .replace(/\D/g, '')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d{1,2})/, '$1-$2')
                .replace(/(-\d{2})\d+?$/, '$1');
            /* if(value.length < 15){
                mask = value
                .replace(/\D/g, '')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d{1,2})/, '$1-$2')
            }else{
                mask = value
                .replace(/\D/g, '')
                .replace(/(\d{2})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1/$2')
                .replace(/(\d{4})(\d)/, '$1-$2')
                .replace(/(-\d{2})\d+?$/, '$1');
            } */

            return mask
        }
    }
    /* End object mask */
    
    /* Funcition to Validate CPF */
    const isCPF = (event) => {
        const inputCPF = event.currentTarget;
        const cpf = inputCPF.value.replace(/[.\-\/]/gm, "") // removing dots, hyphen and slash from CPF or CNPJ
    
        // const's to verify
        if(cpf === '00000000000' || cpf === "00000000000" || cpf === "11111111111" ||
        cpf === "22222222222" || cpf === "33333333333" || cpf === "44444444444" ||
        cpf === "55555555555" || cpf === "66666666666" || cpf === "77777777777" ||
        cpf === "88888888888" || cpf === "99999999999" || cpf.length > 11){
            underlineCPF.classList.add('error');
            inputCPF.checkValidity() = false
            return false;
        }else{
            underlineCPF.classList.remove('error')
        }

        const validCPF = cpf.split('').map(value => +value); // Converting to an object and converting to a number
        let sum = 0;
        let rest = 0;

        if(validCPF.length < 12){
            /* Checking first value */
            for(let i = 0; i < 9; i++){
                sum += validCPF[i] * (10 - i);
            }

            rest =  (sum * 10) % 11;

            if(rest === 10 || rest === 11){ 
                rest = 0;
            }
            /* End of first value verification  */

            if(rest === validCPF[9]){
                sum = 0; // Reset variable sum
                rest = 0; // Reset variable rest

                /* Checking second value */
                for(let i = 0; i < 10; i++){
                    sum += validCPF[i] * (11 - i);
                    // console.log(`${i+1}ª Repetição: Numero do CPF ${validCPF[i]}, formula ${11 - i} a soma ${sum}`)
                }
                
                rest = (sum * 10) % 11;
                
                if(rest === 10 || rest === 11){ 
                    rest = 0;
                }
                /* End of second value verification */

                if(rest === validCPF[10]){
                    btnSubmit.removeAttribute('disabled');
                    btnSubmit.classList.add('btnHover');
                    underlineCPF.classList.remove('error');
                    return true;
                }else{
                    btnSubmit.setAttribute('disabled', 'disabled')
                    btnSubmit.classList.remove('btnHover');
                    underlineCPF.classList.add('error');
                    return false;
                }
            }else{
                btnSubmit.setAttribute('disabled', 'disabled')
                btnSubmit.classList.remove('btnHover');
                underlineCPF.classList.add('error');
                return false;
            }
            return false;
        }
    }
    
    cpf.addEventListener('input', event => {
        event.target.value = masks.cpfOrCNPJ(event.target.value);
    });

    cpf.addEventListener('input', isCPF);
    password.addEventListener('input', validatePassword);
    passwordConf.addEventListener('input', passwordConference);

    eye.addEventListener('click', e =>{
        if(password.type == 'password'){
            password.type = 'text';
            eye.src = '../assets/img/eye-off-outline.svg'
        }else{
            password.type = 'password';
            eye.src = '../assets/img/eye-outline.svg'
        }
    })

    btnSubmit.addEventListener('submit', e =>{
        const teste = inputs.map((input, index) => {
            if(input[index] === ''){
                return false;
            }
        });
    });
}


window.onload = init;