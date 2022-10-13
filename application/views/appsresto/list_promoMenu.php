<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Devoyage Bogor - Deresto Coffee & Kitchen</li>
            </ol>
            <!-- Deresto -->
            <div clascs="dropdown-divider"></div>
            <div class="row">
                <div class="col-auto">
                    <small>
                        <?= $this->session->flashdata('dev'); ?>
                    </small>
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Menu or Promo</h4>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Images</th>
                                        <th>Type</th>
                                        <th>Title</th>
                                        <th>Caption</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Images</th>
                                        <th>Type</th>
                                        <th>Title</th>
                                        <th>Caption</th>
                                        <th>Option</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($result_menu as $result) : ?>
                                        <tr>
                                            <th><?= $no++; ?></th>
                                            <td><img src="<?= base_url('assets/deresto/img/uploaded/menu_promo/' . $result['img']) ?>" alt="img" class="img-responsive w-75 d-block mx-auto"></td>
                                            <td><?= $result['menu_type']; ?></td>
                                            <td><?= $result['title']; ?></td>
                                            <td></td>
                                            <td class="btn-group gap-3">
                                                <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editPromoMenu<?= $result['id']; ?>">Edit</a>
                                                <a href="<?= base_url('appsresto/delete_/' . $result['id']) ?>" class="btn btn-danger" onclick="return confirm('Delete Row ?')">Delete</a>
                                            </td>
                                        </tr>
                                        <!-- Edit Promo Menu -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="editPromoMenu<?= $result['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editPromoMenuLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editPromoMenuLabel">Edit Promo or Menu</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-8 col-sm-12">
                                                                <?= form_open_multipart('appsresto/edit_/' . $result['id']); ?>
                                                                <div class="mb-3">
                                                                    <label for="titleGallery" class="form-label">Title</label>
                                                                    <input type="text" class="form-control" id="titleGallery" aria-describedby="titleHelp" name="title_img" value="<?= $result['title']; ?>">
                                                                    <div id="titleHelp" class="form-text">To Expressions for the moment.</div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="caption_img" class="form-label">Caption</label>
                                                                    <input type="text" class="form-control" id="caption_img" name="caption_img" value="<?= $result['caption']; ?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="img_" class="form-label">Insert Image</label>
                                                                    <input type="file" class="form-control" id="img_" name="img_">
                                                                    <div id="img_help" class="form-text">~ @2MB | w-1500px & h-1000px</div>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                                <?= form_close(); ?>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <img src="<?= base_url('assets/deresto/img/uploaded/menu_promo/' . $result['img']) ?>" alt="img" class="img-responsive w-75 d-block mx-auto img-thumbnail">
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