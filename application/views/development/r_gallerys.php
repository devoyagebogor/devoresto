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
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Images</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Option</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $mp = 1;
                            foreach ($gallerys as $gallery) : ?>
                                <tr>
                                    <td><?= $mp++; ?></td>
                                    <td><img src="<?= base_url('assets/img/uploaded/gallerys/' . $gallery['img_gallery']); ?>" alt="img-gallery" class="img-responsive d-block mx-auto rounded-3" style="height: 100px; width= auto;"></td>
                                    <td><?= $gallery['title_gallery']; ?></td>
                                    <td><?= $gallery['caption_gallery']; ?></td>
                                    <td class="btn-group-vertical gap-2 d-grid">

                                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editThisGallery<?= $gallery['id']; ?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="<?= base_url('development/d_Dgallery/' . $gallery['id']); ?>" class="btn btn-danger" onclick="return confirm('Delete Gallery ?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal Gallery -->
                                <div class="modal fade" id="editThisGallery<?= $gallery['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Gallery ?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <h5 class="card-header">Edit Gallery Devoyage</h5>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Today is THe Best Day</h5>
                                                        <?= form_open_multipart('development/projcet_update_gallery/' . $gallery['id']); ?>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="inputTitle" class="form-label">Title Gallery</label>
                                                                    <input type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" name="title_gallery" value="<?= $gallery['title_gallery']; ?>">
                                                                    <div id="titleHelp" class="form-text">Add the Title for Visitors Web</div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="captionPackage" class="form-label">Caption Gallery</label>
                                                                    <input type="text" class="form-control" id="captionPackage" name="caption_gallery" value="<?= $gallery['caption_gallery']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <img src="<?= base_url('assets/img/uploaded/gallerys/' . $gallery['img_gallery']); ?>" alt="" class="img-responsive mx-auto d-block rounded-2 w-75 my-2" st>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 form-check">
                                                            <label class="form-label" for="filePicturePackage">Change Picture</label>
                                                            <input type="file" class="form-control" id="filePicturePackage" name="img_gallery">
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