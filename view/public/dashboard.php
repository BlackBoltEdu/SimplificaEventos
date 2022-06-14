<main id="main" class="main">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalEvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Evento agendado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                
                    <?php foreach($modal as $modall): ?>

                        <div class="container-fluid d-flex flex-wrap justify-content-between mb-5">
                            <?php $servicos = explode(',', $modall['servicos'])?>
                            <?php foreach($servicos as $servico): ?>

                                <div class="card-service mt-4">
                                    <img class="img-event" src="../assets/img/serviços/outros/<?= $servico ?>.svg">
                                    <h3><?= $servico ?></h3>
                                </div>

                            <?php endforeach; ?>

                        </div>

                        <div class="container-fluid">
                            <div class="box-flex">
                                <div class="card-info">
                                    <span>Evento: <?= $modall['nome_evento']?></span>
                                </div>
                                <div class="card-info card-data">
                                    <span><?= date('d/m/Y', strtotime($modall['data_evento']))?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>           
            </div>
        </div>
    </div>

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">Quantidade <span>| Eventos</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-cart"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?= count($tables) ?></h6>
                                <span class="text-success small pt-1 fw-bold">100%</span> <span class="text-muted small pt-2 ps-1">Simplificado</span>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Eventos <span>| Cadastrados</span></h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome do Evento</th>
                                    <th scope="col">Data do Evento</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($tables as $table): ?>
                                    <tr>
                                        <th scope="row"><?= $table['id'] ?></th>
                                        <td><?= $table['nome_evento'] ?></td>
                                        <td><?= date('d/m/Y', strtotime($table['data_evento'])) ?></td>
                                        <td><a href="?id=<?= $table['id'] ?>" class="btn btn-primary col-12 fw-bold" id="chamarModal">Detalhes <i class="bi bi-eye"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main><!-- End #main -->