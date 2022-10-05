<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Devoyage Bogor - Deresto Coffee & Kitchen</li>
            </ol>

            <div class="row">
                <div class="col-auto">
                    <small>
                        <?= $this->session->flashdata('dev'); ?>
                    </small>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="text-center">
                        <thead>
                            <tr class="bg-secondary text-light">
                                <th>No</th>
                                <th>Images</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Text</th>
                                <th>Price</th>
                                <th>Periode</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Images</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Text</th>
                                <th>Price</th>
                                <th>Periode</th>
                                <th>Option</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $mp = 1;
                            foreach ($games as $game) : ?>
                                <tr>
                                    <td><?= $mp++; ?></td>
                                    <td><img src="<?= base_url('assets/img/uploaded/games/' . $game['img_games']); ?>" alt="img-games" class="img-responsive d-block mx-auto rounded-3" style="height: 100px; width= auto;"></td>
                                    <td><?= $game['title']; ?></td>
                                    <td><?= $game['caption_games']; ?></td>
                                    <td><?= $game['text_games']; ?></td>
                                    <td><?= $game['price']; ?></td>
                                    <td><?= $game['periode']; ?></td>
                                    <td class="btn-group-vertical gap-2 d-grid">

                                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editThisGame<?= $game['id']; ?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="<?= base_url('development/d_Dgame/' . $game['id']); ?>" class="btn btn-danger" onclick="return confirm('Delete Game ?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal Gallery -->
                                <div class="modal fade" id="editThisGame<?= $game['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Game ?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <h5 class="card-header">Edit Game Devoyage</h5>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Today is THe Best Day</h5>
                                                        <?= form_open_multipart('development/projcet_update_games_orSpot/' . $game['id']); ?>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="inputTitle" class="form-label">Title Game</label>
                                                                    <input type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" name="title_games" value="<?= $game['title']; ?>">
                                                                    <div id="titleHelp" class="form-text">Add the Title for Visitors Web</div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="captionGame" class="form-label">Caption Game</label>
                                                                    <input type="text" class="form-control" id="captionGame" name="caption_games" value="<?= $game['caption_games']; ?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="text_games" class="form-label">Text Game</label>
                                                                    <input type="text" class="form-control" id="text_games" name="text_games" value="<?= $game['text_games']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 gy-lg-5">
                                                                <div class="mb-3">
                                                                    <label for="inputPrice" class="form-label">Price Game</label>
                                                                    <input type="text" class="form-control" id="inputPrice" aria-describedby="periodeHelp" name="price_games" value="<?= $game['price']; ?>">
                                                                    <div id="priceHelp" class="form-text">Add the Title for Visitors Web</div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="inputPeriode" class="form-label">Periode Game</label>
                                                                    <input type="text" class="form-control" id="inputPeriode" aria-describedby="priceHelp" name="periode_games" value="<?= $game['periode']; ?>">
                                                                    <div id="periodeHelp" class="form-text">Add the Title for Visitors Web</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <img src="<?= base_url('assets/img/uploaded/games/' . $game['img_games']); ?>" alt="" class="img-responsive mx-auto d-block rounded-2 w-100">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8 offset-md-2">
                                                                <div class="mb-3">
                                                                    <input type="file" class="form-control" id="newImgGame" aria-describedby="imgHelp" name="img_images">
                                                                    <div id="newImg" class="form-text">New Image</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-grid mt-2 mb-2">
                                                            <button type="submit" class="btn btn-success">Save Gallery</button>
                                                        </div>
                                                        <?= form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Devoyage - Deresto Coffee & Kitchen</div>
                <div>
                    <a href="#">GitHub</a>
                    &middot;
                    <a href="#">Marcomm</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>