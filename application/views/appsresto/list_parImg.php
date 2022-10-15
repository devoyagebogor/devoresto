<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Parallax</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Devoyage Bogor - Deresto Coffee & Kitchen</li>
                <li class="breadcrumb-item">@Width @Height 1500x1000</li>
            </ol>
            <!-- Deresto -->
            <hr>
            <div class="row">
                <div class="col-auto">
                    <small>
                        <?= $this->session->flashdata('dev'); ?>
                    </small>
                </div>
            </div>
            <!-- header -->
            <div class="row">

                <div class="card-group">
                    <?php foreach ($parallaxHeader as $header) : ?>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Parallax Header</h5>
                                <p class="text-danger fw-bold mb-2">
                                    Max Width @1500px;
                                    <br>
                                    Max Height @1000px;
                                </p>
                            </div>
                            <img src="<?= base_url('assets/deresto/img/uploaded/background/' . $header['img']); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $header['in_link']; ?></h5>
                                <?php $x = $header['date'];
                                $y = date("d M Y", $x); ?>
                                <p class="card-text">Update in Date : <?= $y; ?></p>
                                <p class="card-text"><small class="text-muted">Devoyage - Deresto | Bogor</small></p>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-small btn-secondary" data-bs-toggle="modal" data-bs-target="#editParallaxHeader<?= $header['id']; ?>">Update Image</a>
                                </div>
                            </div>
                        </div>
                        <!-- modal -->
                        <!-- Header -->
                        <div class="modal fade" id="editParallaxHeader<?= $header['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editParallaxHeaderLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editParallaxHeaderLabel"> Edit Parallax Header</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header">
                                                Parallax for Header
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Update New Parallax Headear</h5>
                                                <p class="card-text">Today is The Best Day</p>
                                                <?= form_open_multipart('appsresto/edit_header/' . $header['id']); ?>
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">New Image</label>
                                                    <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="header_parallax">
                                                    <div id="emailHelp" class="form-text">Update New Image Parallax Header.</div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save Parallax Header</button>
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
                </div>
            </div>
            <!-- content & footer -->
            <div class="row gy-4 my-2">
                <?php foreach ($parallaxContent as $content) : ?>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Parallax Content</h5>
                                        <p class="card-text">Today Is The Best Day</p>
                                        <p class="card-text"><small class="text-muted">Deresto | Devoyage @Bogor</small></p>
                                        <a href=#" class="btn btn-small btn-secondary" data-bs-toggle="modal" data-bs-target="#editParallaxContent<?= $content['id']; ?>">Update New Image</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/deresto/img/uploaded/background/' . $content['img']); ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Content -->
                    <!-- Modal -->
                    <div class="modal fade" id="editParallaxContent<?= $content['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editParallaxContentLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editParallaxContentLabel">Edit Parallax Content</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?= form_open_multipart('appsresto/edit_content/' . $content['id']); ?>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">New Image</label>
                                        <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="content_parallax">
                                        <div id="emailHelp" class="form-text">Update New Image Parallax Content.</div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Parallax Content</button>
                                    <?= form_close(); ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- footer -->
                <?php foreach ($parallaxFooter as $footer) : ?>
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Parallax Footer</h5>
                                        <p class="card-text">Today is The Best Day</p>
                                        <p class="card-text"><small class="text-muted">Deresto | Devoyage @Bogor</small></p>
                                        <a href="#" class="btn btn-small btn-secondary" data-bs-toggle="modal" data-bs-target="#footerModalEdit<?= $footer['id']; ?>">Update New Image</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/deresto/img/uploaded/background/' . $footer['img']); ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal footer -->
                    <!-- Modal -->
                    <div class="modal fade" id="footerModalEdit<?= $footer['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="footerModalEditLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="footerModalEditLabel">Edit Modal Footer</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?= form_open_multipart('appsresto/edit_footer/' . $footer['id']); ?>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">New Image</label>
                                        <input type="file" class="form-control" id="image" aria-describedby="fileHelp" name="parallax_footer">
                                        <div id="fileHelp" class="form-text">Update New Parallax Foooter</div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <?= form_close(); ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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