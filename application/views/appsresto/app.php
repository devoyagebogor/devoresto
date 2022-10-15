<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Devoyage Bogor - Deresto Coffee & Kitchen</li>
                <li class="breadcrumb-item">@Width @Height (Promo & Menu) 1080px.</li>
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
                <div class="btn-group gap-4 gap-sm-4">
                    <a href="<?= base_url('appsresto/view_menuPromo'); ?>" class="btn btn-secondary mb-4">View Table Promo / Menu</a>
                    <a href="<?= base_url('appsresto/view_galleryPar'); ?>" class="btn btn-warning mb-4">View Table Galler / Parallax</a>

                </div>
                <!-- Promo & Menus -->
                <div class="col-xl-6 col-md-12">
                    <div class="card bg-success text-white mb-4" data-bs-toggle="modal" data-bs-target="#modalForPromoMenu">
                        <div class="card-body">Promo & Menu Deresto<i class="bi bi-currency-dollar"></i></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Home & Gallery -->
                <div class="col-xl-6 col-md-12">
                    <div class="card bg-danger text-white mb-4" data-bs-toggle="modal" data-bs-target="#modelForGalleryHome">
                        <div class="card-body">Home & Gallery <i class="bi bi-images"></i></i></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
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
<!-- Promo & Menu -->
<div class="modal fade" id="modalForPromoMenu" aria-hidden="true" aria-labelledby="modalForPromoMenuLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalForPromoMenuLabel">Tools For Add new Promo Or Deresto Menu</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Menu & Promo -->
                    <div class="col-md-7 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">To Devoyage</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Show List Images</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Today Is The Best Day</h5>
                                <?= form_open_multipart('appsresto/deresto_web_devs_promoOrMenu'); ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="titleImage" class="form-label">Title Image</label>
                                            <input type="text" class="form-control" id="titleImage" aria-describedby="titleHelp" name="titles">
                                            <div id="titleHelp" class="form-text">Title Image for Describe this Product.</div>
                                        </div>
                                        z
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="captionImg" class="form-label">Caption Image</label>
                                            <input type="text" class="form-control" id="captionImg" aria-describedby="titleHelp" name="captions">
                                            <div id="titleHelp" class="form-text">Title Image for Describe this Product.</div>
                                        </div>
                                        <div class="mb-2 my-0   ">
                                            <input class="form-control form-control" id="formFileSm" type="file" name="img_choose" placeholder="insert image..">
                                        </div>
                                    </div>

                                </div>

                                <div class="mb-3 d-grid">
                                    <button type="submit" class="btn btn-primary">Insert Image</button>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                    <!-- Type for Menu -->
                    <div class="col-md-5 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                Add Type Menu
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Tools For Add Type Menu Deresto</h5>
                                <form class="row g-3" action="<?php echo base_url('appsresto/deresto_web_devs_types'); ?>" method="POST">
                                    <div class="col-6">
                                        <label for="staticEmail2" class="visually-hidden">Menu Type</label>
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="New Type">
                                    </div>
                                    <div class="col-6">
                                        <label for="MenuTypes" class="visually-hidden"><i class="bi bi-plus-lg"></i> Type</label>
                                        <input type="text" class="form-control" id="MenuTypes" placeholder="Type.." name="newType">
                                    </div>
                                    <div class="mb-3 d-grid">
                                        <button type="submit" class="btn btn-primary mb-3"><i class="bi bi-plus-lg"></i> Type</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#modelForGalleryHome" data-bs-toggle="modal">Add Gallery or Update Parallax ?</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modelForGalleryHome" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Tools for Add new Gallery or Update the Parallax</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="card">
                            <h5 class="card-header">New Image for Deresto</h5>
                            <div class="card-body">
                                <h5 class="card-title">Today is The Best Day</h5>
                                <?= form_open_multipart('appsresto/deresto_web_devs_gallery'); ?>
                                <div class="mb-3">
                                    <label for="titleGallery" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="titleGallery" aria-describedby="titleHelp" name="title_img">
                                    <div id="titleHelp" class="form-text">To Expressions for the moment.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="caption_img" class="form-label">Caption</label>
                                    <input type="text" class="form-control" id="caption_img" name="caption_img">
                                </div>
                                <div class="mb-3">
                                    <label for="img_" class="form-label">Insert Image</label>
                                    <input type="file" class="form-control" id="img_" name="img_">
                                    <div id="img_help" class="form-text">~ @2MB | w-1500px & h-1000px</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>List Parallax</h4>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Images</th>
                                            <th>Link</th>
                                            <th>Types</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Images</th>
                                            <th>Link</th>
                                            <th>Types</th>
                                            <th>Option</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td><img src="<?= base_url('assets/deresto/img/uploaded/background/2-min.jpg'); ?>" alt="img" class="w-50 img-responsive img-thumbnail d-block mx-auto"></td>
                                            <td>Home</td>
                                            <td>Header</td>
                                            <th>
                                                <div class="btn-group-vertical d-grid gap-3">
                                                    <a href="#" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                                                </div>
                                            </th>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#modalForPromoMenu" data-bs-toggle="modal">Back to Promo Tools</button>
            </div>
        </div>
    </div>
</div>
<a class="btn btn-primary" data-bs-toggle="modal" href="#modalForPromoMenu" role="button">Add Promo or Menu ?</a>