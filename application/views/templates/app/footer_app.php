        <!-- Modal Hot Promo-->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Slideshow +</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form action="<?php echo base_url('development/dev_Slideshow'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" placeholder="Title Slideshow" aria-label="Title Slideshow" aria-describedby="basic-addon1" name="title_ss">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Animation</span>
                                        <input type="text" class="form-control" placeholder="right-align / left-align / center-align" aria-label="Caption Promo" aria-describedby="basic-addon2" name="animation">
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Text</span>
                                    <input type="text" class="form-control" placeholder="Text-slide" aria-label="Periode-promo" aria-describedby="basic-addon3" name="text_ss">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Addons</span>
                                    <input type="text" class="form-control" placeholder="Text-Addons" aria-label="Text-addons" name="addons">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" placeholder="Images" name="img_slides">
                                <span class="input-group-text" id="basic-addon1">JPG|PNG</span>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Add +</button>
                            </div>
                            </form>
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

        <!-- Modal Packages -->
        <div class="modal fade" id="staticBackdropPackages" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Packages +</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <h5 class="card-header">Add Packages Devoyage</h5>
                            <div class="card-body">
                                <h5 class="card-title">Today is THe Best Day</h5>
                                <?= form_open_multipart('development/dev_packages'); ?>
                                <div class="mb-3">
                                    <label for="inputTitle" class="form-label">Title Package</label>
                                    <input type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" name="title_package">
                                    <div id="titleHelp" class="form-text">Add the Title for Visitors Web</div>
                                </div>
                                <div class="mb-3">
                                    <label for="captionPackage" class="form-label">Caption Package</label>
                                    <input type="text" class="form-control" id="captionPackage" name="caption_package">
                                </div>
                                <div class="mb-3 form-check">
                                    <label class="form-label" for="filePicturePackage">Add Picture Pacakage</label>
                                    <input type="file" class="form-control" id="filePicturePackage" name="img_package">
                                </div>
                                <div class="d-grid mt-2 mb-2">
                                    <button type="submit" class="btn btn-primary">Add Package +</button>
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
        <!-- Modal Gallery-->
        <div class="modal fade" id="staticBackdropGallerys" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Gallery +</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/js/'); ?>chart-area-demo.js"></script>
        <script src="<?= base_url('assets/js/'); ?>chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>js/datatables-simple-demo.js"></script>
        </body>

        </html>