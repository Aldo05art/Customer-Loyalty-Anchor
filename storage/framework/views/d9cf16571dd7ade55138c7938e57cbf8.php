

<?php $__env->startSection('content'); ?>    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
             <div class="card-body">
                <div class="d-md-flex align-items-center">
                   <div>
                      <h4 class="card-title">Site Analysis</h4>
                      <h5 class="card-subtitle">Overview of Latest Month</h5>
                   </div>
                </div>
                <div class="row">
                   <!-- column -->
                   <div class="col-lg-9">
                      <div class="flot-chart">
                         <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row">
                          <div class="col-6">
                            <div class="bg-dark p-10 text-white text-center">
                               <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                               <h5 class="mb-0 mt-1">2540</h5>
                               <small class="font-light">Total Users</small>
                            </div>
                         </div>
                         <div class="col-6">
                            <div class="bg-dark p-10 text-white text-center">
                               <i class="mdi mdi-plus fs-3 font-16"></i>
                               <h5 class="mb-0 mt-1">120</h5>
                               <small class="font-light">New Users</small>
                            </div>
                         </div>
                         <div class="col-6 mt-3">
                            <div class="bg-dark p-10 text-white text-center">
                               <i class="mdi mdi-cart fs-3 mb-1 font-16"></i>
                               <h5 class="mb-0 mt-1">656</h5>
                               <small class="font-light">Total Shop</small>
                            </div>
                        </div>
                         <div class="col-6 mt-3">
                             <div class="bg-dark p-10 text-white text-center">
                                 <i class="mdi mdi-tag fs-3 mb-1 font-16"></i>
                               <h5 class="mb-0 mt-1">9540</h5>
                               <small class="font-light">Total Orders</small>
                            </div>
                         </div>
                         <div class="col-6 mt-3">
                            <div class="bg-dark p-10 text-white text-center">
                               <i class="mdi mdi-table fs-3 mb-1 font-16"></i>
                               <h5 class="mb-0 mt-1">100</h5>
                               <small class="font-light">Pending Orders</small>
                            </div>
                         </div>
                         <div class="col-6 mt-3">
                            <div class="bg-dark p-10 text-white text-center">
                               <i class="mdi mdi-web fs-3 mb-1 font-16"></i>
                               <h5 class="mb-0 mt-1">8540</h5>
                               <small class="font-light">Online Orders</small>
                            </div>
                         </div>
                      </div>
                   </div>
                   <!-- column -->
                </div>
             </div>
            </div>
       </div>
    </div>
    <div class="row">
       <!-- column -->
       <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Data Sales</h4>
             </div>
             <div class="comment-widgets scrollable">
                 <!-- Comment Row -->
                 <div class="d-flex flex-row comment-row mt-0">
                   <div class="p-2">
                       <img src="../assets/images/users/1.jpg" alt="user" width="50"
                       class="rounded-circle" />
                    </div>
                   <div class="comment-text w-100">
                      <h6 class="font-medium">James Anderson</h6>
                      <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                         type setting industry.
                        </span>
                        <div class="comment-footer">
                         <span class="text-muted float-end">April 14, 2021</span>
                         <button type="button" class="btn btn-cyan btn-sm text-white">
                            Edit
                         </button>
                         <button type="button" class="btn btn-success btn-sm text-white">
                            Publish
                        </button>
                         <button type="button" class="btn btn-danger btn-sm text-white">
                            Delete
                         </button>
                      </div>
                   </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                   <div class="p-2">
                      <img src="../assets/images/users/4.jpg" alt="user" width="50"
                      class="rounded-circle" />
                   </div>
                   <div class="comment-text active w-100">
                       <h6 class="font-medium">Michael Jorden</h6>
                      <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                          type setting industry.
                      </span>
                      <div class="comment-footer">
                          <span class="text-muted float-end">May 10, 2021</span>
                         <button type="button" class="btn btn-cyan btn-sm text-white">
                             Edit
                            </button>
                         <button type="button" class="btn btn-success btn-sm text-white">
                             Publish
                            </button>
                         <button type="button" class="btn btn-danger btn-sm text-white">
                             Delete
                            </button>
                      </div>
                   </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                   <div class="p-2">
                      <img src="../assets/images/users/5.jpg" alt="user" width="50"
                         class="rounded-circle" />
                   </div>
                   <div class="comment-text w-100">
                      <h6 class="font-medium">Johnathan Doeting</h6>
                      <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                         type setting industry.
                      </span>
                      <div class="comment-footer">
                         <span class="text-muted float-end">August 1, 2021</span>
                         <button type="button" class="btn btn-cyan btn-sm text-white">
                            Edit
                        </button>
                         <button type="button" class="btn btn-success btn-sm text-white">
                            Publish
                         </button>
                         <button type="button" class="btn btn-danger btn-sm text-white">
                             Delete
                            </button>
                        </div>
                   </div>
                </div>
            </div>
          </div>
       </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Documents\Praktikum Smt 3\pemweb\laravel\LaravelALDO\LaravelALDO\resources\views/index.blade.php ENDPATH**/ ?>