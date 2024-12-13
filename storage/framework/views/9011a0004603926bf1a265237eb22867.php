<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Dashboard Admin</title>
   <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/images/favicon.png')); ?>" />
   <link href="<?php echo e(asset('assets/libs/flot/css/float-chart.css')); ?>" rel="stylesheet" />
   <!-- Custom CSS -->
   <link href="<?php echo e(asset('dist/css/style.min.css')); ?>" rel="stylesheet" />
</head>

<body>
   
   <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
      data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      <header class="topbar" data-navbarbg="skin5">
         <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
               <a class="navbar-brand" href="">
                  <b class="logo-icon ps-2">
                     <!-- Dark Logo icon -->
                     <img src="<?php echo e(asset('assets/images/logo-icon.png')); ?>" alt="homepage" class="light-logo" width="25" />
                  </b>
                  <span class="logo-text ms-2 mt-1">
                     <!-- dark Logo text -->
                     
                     Customer Loyality
                  </span>
               </a>
               <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                     class="ti-menu ti-close"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
               <ul class="navbar-nav float-start me-auto">
                  <li class="nav-item d-none d-lg-block">
                     <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                        data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                  </li>
                  <li class="nav-item search-box">
                     <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i
                           class="mdi mdi-magnify fs-4"></i></a>
                     <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter" />
                        <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                     </form>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      
     <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="page-wrapper" style="background-color: white">
         <div class="page-breadcrumb">
            <div class="row">
               <div class="col-12 d-flex no-block align-items-center">
                  <h4 class="page-title">Dashboard</h4>
                  <div class="ms-auto text-end">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">
                              Library
                           </li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <?php echo $__env->yieldContent('content'); ?>
      </div>
   </div>
         <footer class="footer text-center">
            <a href=""></a>.
         </footer>
      </div>
   </div>
   <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
   <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
   <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
   <script src="../dist/js/waves.js"></script>
   <script src="../dist/js/sidebarmenu.js"></script>
   <script src="../dist/js/custom.min.js"></script>
   <script src="../assets/libs/flot/excanvas.js"></script>
   <script src="../assets/libs/flot/jquery.flot.js"></script>
   <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
   <script src="../assets/libs/flot/jquery.flot.time.js"></script>
   <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
   <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
   <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
   <script src="../dist/js/pages/chart/chart-page-init.js"></script>
</body>

</html>


<?php /**PATH C:\laragon\www\LaravelALDO\resources\views/layouts/content.blade.php ENDPATH**/ ?>