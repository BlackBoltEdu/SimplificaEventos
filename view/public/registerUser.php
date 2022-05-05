<main>
    <section class="section-one">
        <img src="../assets/img/register.svg" alt="ilustaração de cadastro">
    </section>

    <section class="section-two">

        <div class="container-form">
            <h1>Cadastro</h1>

            <form method="POST">
                <div class="input-field">
                    <input id="name" type="text" name="name" autocomplete="off" required>
                    <label for="name">Nome</label>
                    <div class="underline"></div>
                </div>

                <div class="input-field">
                    <input id="cpf" type="text" name="cpf" autocomplete="off" required>
                    <label for="cpf">CPF ou CNPJ</label>
                    <div class="underline" data-js-test="invalid-CPF"></div>
                </div>

                <div class="input-field">
                    <input id="email" type="email" name="email" required>
                    <label for="email">E-mail</label>
                    <div class="underline"></div>
                </div>

                <div class="input-field">
                    <input class="input-password" id="password" type="password" name="password" required>
                    <label for="password">Senha</label>
                    <img id="visiblePassword" src="../assets/img/eye-outline.svg" alt="">
                    <div class="underline" data-js="underline-password"></div>
                </div>

                <div class="input-field">
                    <input class="input-password" id="passwordConf" type="password" name="passwordConf" required>
                    <label for="passwordConf">Confirmar senha</label>
                    <div class="underline" data-js="underline-password-conf"></div>
                </div>

                <button class="btnSubmit btnHover" id="button" name="btnSubmit" value="submit" type="submit">
                    <ion-icon name="document-lock-outline"></ion-icon><span>Cadastrar</span>
                </button>
            </form>
        </div>

    </section>
</main>