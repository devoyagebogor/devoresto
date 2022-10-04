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
                                <th>Animation</th>
                                <th>Text</th>
                                <th>Addons</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Images</th>
                                <th>Title</th>
                                <th>Animation</th>
                                <th>Text</th>
                                <th>Addons</th>
                                <th>Option</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1;
                            foreach ($slides as $result) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>
                                        <img src="<?= base_url('assets/img/uploaded/slides/')  .  $result['img_slides']; ?>" alt="img-devoyage" style="height: 100px; width= auto;" class="rounded mx-auto d-block">
                                    </td>
                                    <td><?= $result['title_ss']; ?></td>
                                    <td><?= $result['animation']; ?></td>
                                    <td><?= $result['text_ss']; ?></td>
                                    <td><?= $result['addons']; ?></td>
                                    <td class="btn-group-vertical gap-2 d-grid">

                                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editThisSlide<?= $result['id']; ?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="<?= base_url('development/d_Slides/' . $result['id']) ?>" class="btn btn-danger" onclick="return confirm('Delete Slideshow ?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="editThisSlide<?= $result['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Slideshow ?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <form action="<?php echo base_url('development/projcet_update_slider/' . $result['id']); ?>" method="post" enctype="multipart/form-data">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                <input type="text" class="form-control" placeholder="Title Slideshow" aria-label="Title Slideshow" aria-describedby="basic-addon1" name="title_ss" value="<?= $result['title_ss']; ?>">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Animation</span>
                                                                <input type="text" class="form-control" placeholder="right-align / left-align / center-align" name="animation" value="<?= $result['animation']; ?>">
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Text</span>
                                                            <input type="text" class="form-control" placeholder="Text-slide" name="text_ss" value="<?= $result['text_ss']; ?>">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Addons</span>
                                                            <input type="text" class="form-control" placeholder="Text-Addons" aria-label="Text-addons" name="addons" value="<?= $result['addons']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <img src="<?= base_url('assets/img/uploaded/slides/' . $result['img_slides']); ?>" alt="img-devoyage" class="img-responsive rounded mx-auto d-block img-thumbnail" width="150">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control" placeholder="Images" name="img_slides">
                                                        <span class="input-group-text" id="basic-addon1">JPG|PNG</span>
                                                    </div>
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-success">Save +</button>
                                                    </div>
                                                    </form>
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