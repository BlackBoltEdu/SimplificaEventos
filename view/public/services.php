<div class="main-agenda">
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" class="form_agenda">

        <div class="box-agenda">

            <div class="input-box">
                <div class="input-agenda">
                    <input type="checkbox" id="animador" value="animador" name="animador">
                    <label class="cards" for="animador"><img src="../assets/img/serviços/fest-animation.svg" alt="">Animador de Festa</label>
                    <div class="checked"></div>
                </div>

                <div class="input-option">
                    <div class="option">
                        <label for="homem-aranha">Homem-aranha</label>
                        <input type="checkbox" id="homem-aranha">
                    </div>

                    <div class="option">
                        <label for="super-man">Super-Man</label>
                        <input type="checkbox" id="super-man">
                    </div>

                    <div class="option">
                        <label for="super-man">Super-Man</label>
                        <input type="checkbox" id="super-man">
                    </div>

                    <div class="option">
                        <label for="mickey-mouse">Mickey Mouse</label>
                        <input type="checkbox" id="mickey-mouse">
                    </div>

                    <div class="option">
                        <label for="mickey-mouse">Mickey Mouse</label>
                        <input type="checkbox" id="mickey-mouse">
                    </div>

                    <div class="option"  style="background-color: pink; color: var(--color-dark);">
                        <label for="cinderela" >Cinderela</label>
                        <input type="checkbox" id="cinderela">
                    </div>

                    <div class="option"  style="background-color: pink; color: var(--color-dark);">
                        <label for="branca-de-neve" >Branca de Neve</label>
                        <input type="checkbox" id="branca-de-neve">
                    </div>

                    <div class="option"  style="background-color: pink; color: var(--color-dark);">
                        <label for="chapeuzinho" >Chapeuzinho</label>
                        <input type="checkbox" id="chapeuzinho">
                    </div>

                    <div class="option"  style="background-color: pink; color: var(--color-dark);">
                        <label for="ms-marvel" >Ms. Marvel</label>
                        <input type="checkbox" id="ms-marvel">
                    </div>
                </div>
            </div>

            <div class="input-box" >
                <div class="input-agenda">
                    <input type="checkbox" id="photograph" value="fotografo" name="fotografo">
                    <label class="cards" for="photograph"><img src="../assets/img/serviços/moments.svg" alt="">Fotografo</label>
                    <div class="checked"></div>
                </div>
            </div>

            <div class="input-box">
                <div class="input-agenda">
                    <input type="checkbox" id="space-location" value="local" name="local">
                    <label class="cards" for="space-location"><img src="../assets/img/serviços/space-location.svg" alt="">Local Para Evento</label>
                    <div class="checked"></div>
                </div>
            </div>

            <div class="input-box">
                <div class="input-agenda">
                    <input type="checkbox" id="comida" value="bufert" name="bufert">
                    <label class="cards" for="comida"><img src="../assets/img/serviços/food.svg" alt="">Bufert</label>
                    <div class="checked"></div>
                </div>
            </div>

            <div class="input-box">
                <div class="input-agenda">
                    <input type="checkbox" id="musica" value="musica" name="musica">
                    <label class="cards" for="musica"><img src="../assets/img/serviços/music.svg" alt="">Musica</label>
                    <div class="checked"></div>
                </div>
            </div>
            
            <div class="input-box">
                <div class="input-agenda">
                    <input type="checkbox" id="decoracao" value="decoracao" name="decoracao">
                    <label class="cards" for="decoracao"><img src="../assets/img/serviços/organizer.svg" alt="">Decorador</label>
                    <div class="checked"></div>
                </div>
            </div>
        
        </div>

        <div class="box-form">
            <div class="input-form">
                <label for="nome-evento">Nome do Evento:</label>
                <input type="text" id="nome-evento" required autocomplete="off" name="nome_evento">
            </div>

            <div class="input-form">
                <label for="data-evento">Data do Evento:</label>
                <input type="date" id="data-evento" required name="data_evento">
            </div>
        </div>

        <input type="hidden" id="json_servicos" value="" name="servicos">

        <div class="error-evento">Erro: Escolha um Serviço</div>
        <button type="submit" class="btn-agendar" id="btn-agendar" name="btn_agendar" value="agendar">Criar Evento</button>
    </form>
</div>