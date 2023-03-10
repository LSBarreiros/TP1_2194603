<!DOCTYPE html>
    <html lang="en">
    
        <?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
 
    <body>
        
        <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layout.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
    </html><?php /**PATH /Users/lidiabarreiros/Documents/MAISONNEUVE/SESSION_04_HIVER23/CADRICIEL_WEB/TP1_Laravel_2194603/maisonneuve_2194603/resources/views/main.blade.php ENDPATH**/ ?>