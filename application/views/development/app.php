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
                   <div class="row">
                       <div class="col-xl-3 col-md-6">
                           <div class="card bg-primary text-white mb-4" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                               <div class="card-body">Slideshow <i class="bi bi-code-square"></i></div>
                               <div class="card-footer d-flex align-items-center justify-content-between">
                                   <a class="small text-white stretched-link" href="#">View Details</a>
                                   <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-md-6">
                           <div class="card bg-secondary text-white mb-4" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropGallerys">
                               <div class="card-body">Gallery <i class="bi bi-images"></i></div>
                               <div class="card-footer d-flex align-items-center justify-content-between">
                                   <a class="small text-white stretched-link" href="#">View Details</a>
                                   <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-md-6">
                           <div class="card bg-success text-white mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdropPromo">
                               <div class="card-body">Promo <i class="bi bi-bag-plus-fill"></i></div>
                               <div class="card-footer d-flex align-items-center justify-content-between">
                                   <a class="small text-white stretched-link" href="#">View Details</a>
                                   <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-md-6">
                           <div class="card bg-danger text-white mb-4" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                               <div class="card-body">Parallax & Games <i class="bi bi-view-list"></i></div>
                               <div class="card-footer d-flex align-items-center justify-content-between">
                                   <a class="small text-white stretched-link" href="#">View Details</a>
                                   <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                               </div>
                           </div>
                       </div>
                       <div class="dropdown-divider"></div>
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