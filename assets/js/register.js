const init = () =>{
    const validatePassword = (event) =>{
       const input = event.currentTarget;

       if(input.value.length < 8){
           btnSubmit.setAttribute('disabled', 'disabled')
           input.nextElementSibling.classList.add('error');
       }else{
            btnSubmit.removeAttribute('disabled');
            input.nextElementSibling.classList.remove('error');
       }
    }

     /* CPF and CNPJ mask */
    const masks = {
        cpfOrCNPJ (value){
            let mask = 0

            if(value.length < 15){
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
            }

            return mask
        }
    }

    const isCPF = (event) => {
        const inputCPF = event.currentTarget;
        cpf = inputCPF.value.replace(/[.\-\/]/gm, "") // removing dots, hyphen and slash from CPF or CNPJ
        
        if(cpf.length < 12){
            let j = 10;
            valor1 = 0;
            for (let i = 0; i < 9; i++) {
                valor1 += cpf[i] * j;
                j--;
                if (i = 7) {
                    valor1 = (valor1 * 10) % 11;
                    if (valor1 == 10 || valor1 == 11) {
                        valor1 = 0;
                    }
                }
            }
            if (valor1 != cpf[9]) {
                return alert('CPF invalido');
            } else {
                let j = 2;
                for (let i = 0; i < 10; i++) {
                    valor1 += cpf[i] * j;
                    j++;
                    if (i = 7) {
                        valor1 = (valor1 * 10) % 11;
                        console.log(valor1);
                        if (valor1 == 10 || valor1 == 11) {
                            valor1 = 0;
                            return true;
                        }
                    }
                }
            }
        }
    
        console.log(cpf);
    }
    
    const cpf = document.querySelector('#cpf');
    const password = document.querySelector('#password');
    const passwordConf = document.querySelector('#passwordConf');
    const btnSubmit = document.querySelector('#button');
    
    cpf.addEventListener('input', event => {
        event.target.value = masks.cpfOrCNPJ(event.target.value);
    });

    cpf.addEventListener('blur', isCPF);

    password.addEventListener('input', validatePassword);

    if(btnSubmit){
        btnSubmit.addEventListener('click', (event) =>{
            event.preventDefault();
        });
    }
}


window.onload = init;