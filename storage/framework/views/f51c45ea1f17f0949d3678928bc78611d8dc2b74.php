<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
         <title><?php echo e(config('app.name')); ?> - @yeld('title')</title>     
 
                <!-- Favicons -->

                <link href="<?php echo e(asset('assets/img/favicon.png')); ?>" rel="icon">
                <link href="<?php echo e(asset('assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">
              
                <!-- Google Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
              
                <!-- Vendor CSS Files -->
                <link href="<?php echo e(asset('assets/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
                <link href="<?php echo e(asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
                <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
                <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
                <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
                <link href="<?php echo e(asset('assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
                <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
              
                <!-- Template Main CSS File -->
                <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
 
 
    <body>
        
        <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layout.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     
        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    </body>
    </html><?php /**PATH /Users/lidiabarreiros/Documents/MAISONNEUVE/SESSION_04_HIVER23/CADRICIEL_WEB/TP1_Laravel_2194603/maisonneuve_2194603/resources/views/layout/main.blade.php ENDPATH**/ ?>