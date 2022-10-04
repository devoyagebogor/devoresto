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
                    <table id="datatablesSimple" class="">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Images</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Periode</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Images</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Periode</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Option</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1;
                            foreach ($view_promo as $result) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>
                                        <img src="<?= base_url('assets/img/uploaded/promo/')  .  $result['img_promo']; ?>" alt="img-devoyage" style="height: 100px; width= auto;" class="rounded mx-auto d-block">
                                    </td>
                                    <td><?= $result['title']; ?></td>
                                    <td><?= $result['caption']; ?></td>
                                    <td><?= $result['periode']; ?></td>
                                    <td><?= $result['price']; ?></td>
                                    <?php $now = $result['date'];
                                    $tg = date('d M Y', $now); ?>
                                    <td><?= $tg; ?></td>
                                    <td class="btn-group-vertical gap-2 d-grid">

                                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editThisPromo<?= $result['id']; ?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="<?= base_url('development/d_Dpromo/' . $result['id']) ?>" class="btn btn-danger" onclick="return confirm('Delete Promo ?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="editThisPromo<?= $result['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editThisPromoLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editThisPromoLabel">Update Promo ?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <h5 class="card-header">Edit Promo</h5>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Today is The Best Day</h5>
                                                        <p class="card-text">This page is to edit promotion image, to show website visitors.</p>
                                                        <?= form_open_multipart('development/projcet_update_promo/' . $result['id']); ?>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="titlePromo" class="form-label">Title Promo</label>
                                                                    <input type="text" class="form-control" id="titlePromo" aria-describedby="titleHelp" name="title" value="<?= $result['title']; ?>">
                                                                    <div id="titleHelp" class="form-text">Promo Title is Important!</div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="CaptionPromo" class="form-label">Caption Promo</label>
                                                                    <input type="text" class="form-control" id="CaptionPromo" name="caption" value="<?= $result['caption']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="periodePromo" class="form-label">Periode Promo</label>
                                                                    <input type="text" class="form-control" id="periodePromo" aria-describedby="titleHelp" name="periode" value="<?= $result['periode']; ?>">
                                                                    <div id="titleHelp" class="form-text">Promo Periode is Important!</div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="PricePromo" class="form-label">Price</label>
                                                                    <input type="text" class="form-control" id="PricePromo" name="price" value="<?= $result['price']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <img src="<?= base_url('assets/img/uploaded/promo/' . $result['img_promo']); ?>" alt="" class="d-block mx-auto w-75 rounded-3">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="img_promo" class="form-label">Image Promo</label>
                                                                    <input type="file" class="form-control" id="img_promo" name="img_promo">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-grid mb-3">
                                                            <button type="submit" class="btn btn-success">Save</button>
                                                        </div>
                                                        <?= form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">

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