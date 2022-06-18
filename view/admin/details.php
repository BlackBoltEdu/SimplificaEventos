<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">



            <div class="col-md-12">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">Dados <span>| Cliente</span></h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Whatsapp/Tel</th>
                                    <th scope="col">Data de solicitação</th>
                                    <th scope="col">Data de alteração</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $tables[0]['username'] ?></td>
                                    <td><?= $tables[0]['useremail'] ?></td>
                                    <td><?= $tables[0]['whatsapp']  ?></td>
                                    <td><?= $tables[0]['data_criacao'] ?></td>
                                    <td><?= $tables[0]['data_alteracao'] ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Formulário do evento</h5>

                        <form class="row g-3" method="POST">

                            <input type="hidden" name="id_cliente" value="<?= $tables[0]['userid'] ?>">
                            <input type="hidden" name="id_evento" value="<?= $tables[0]['eventoid'] ?>">

                            <input type="hidden" name="status_atual" value="<?= $tables[0]['status'] ?>">

                            <div class="col-12 mb-2">
                                <label class="form-label fw-bold">Status</label>
                                <select class="form-select" name="status">
                                    <option selected value="" disabled><?= $tables[0]['status'] ?></option>
                                    <option value="Em análise">Em análise</option>
                                    <option value="Em andamento">Em andamento</option>
                                    <option value="Concluído">Concluído</option>
                                    <option value="Cancelado">Cancelado</option>
                                </select>
                            </div>
                            <div class="col-10">
                                <label class="form-label">Personagem</label>
                                <input type="text" class="form-control" name="s_personagem">
                            </div>
                            <div class="col-2">
                                <label class="form-label">Preço</label>
                                <input type="text" class="form-control mask" name="p_personagem" required>
                            </div>

                            <div class="col-10">
                                <label class="form-label">Fotografo</label>
                                <input type="text" class="form-control" name="s_fotografo">
                            </div>
                            <div class="col-2">
                                <label class="form-label">Preço</label>
                                <input type="text" class="form-control mask" name="p_fotografo" required>
                            </div>

                            <div class="col-10">
                                <label class="form-label">Buffet</label>
                                <input type="text" class="form-control" name="s_buffet">
                            </div>
                            <div class="col-2">
                                <label class="form-label">Preço</label>
                                <input type="text" class="form-control mask" name="p_buffet" required>
                            </div>

                            <div class="col-10">
                                <label class="form-label">Musica</label>
                                <input type="text" class="form-control" name="s_musica">
                            </div>
                            <div class="col-2">
                                <label class="form-label">Preço</label>
                                <input type="text" class="form-control mask" name="p_musica" required>
                            </div>

                            <div class="col-10">
                                <label class="form-label">Decorador</label>
                                <input type="text" class="form-control" name="s_decorador">
                            </div>
                            <div class="col-2">
                                <label class="form-label">Preço</label>
                                <input type="text" class="form-control mask" name="p_decorador" required>
                            </div>

                            <div class="col-10">
                                <label class="form-label">Local</label>
                                <input type="text" class="form-control" name="s_local">
                            </div>
                            <div class="col-2">
                                <label class="form-label">Preço</label>
                                <input type="text" class="form-control mask" name="p_local" required>
                            </div>

                            <div class="text-center">
                                <button type="reset" class="btn btn-secondary">Limpar campos</button>
                                <button type="submit" class="btn btn-primary" name="btn_enviar" value="enviar">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">Serviços <span>| solicitados</span></h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nome do serviço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $servicos = $tables[0]['eventservicos'];
                                $servicos = explode(',', $servicos);
                                ?>

                                <?php foreach ($servicos as $servico) : ?>
                                    <tr>
                                        <td class="text-capitalize"><?= $servico ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </section>

</main>

<script>
    const mask = {
        valor(value) {
            console.log(value)

            return value
                .replace(/\D/g, '')
                .replace(/(\d{1})/, '$1');
        }
    }

    const valores = document.querySelectorAll('.mask');

    valores.forEach((valor) => {
        valor.addEventListener('input', e => {
            e.target.value = mask.valor(e.target.value);
        })
    })
</script>