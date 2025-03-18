<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SB Admin 2 - Laravel</title>
        <!-- Custom fonts for this template-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet">
    
        <!-- Custom styles -->
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    </head>    
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(url('/')); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Laravel SB Admin 2</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Navigation -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/')); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/about')); ?>">
                    <i class="fas fa-fw fa-info-circle"></i>
                    <span>About</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/contact')); ?>">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content" class="container mt-5">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

    </div>

    <!-- Link JS dari SB Admin 2 -->
    <script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\fiana\tugas1web_project\tugas1web_project\resources\views/layouts/app.blade.php ENDPATH**/ ?>