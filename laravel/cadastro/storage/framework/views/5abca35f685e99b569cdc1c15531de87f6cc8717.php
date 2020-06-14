<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" />

    <style>
        body {
            margin-top: 20px
        }

        .navbar {
            margin-bottom: 20px;
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php $__env->startComponent('components/navbar', ['current' => $current]); ?>
            
        <?php if (isset($__componentOriginal63016879034badbd3164129d151e3a6424f2a373)): ?>
<?php $component = $__componentOriginal63016879034badbd3164129d151e3a6424f2a373; ?>
<?php unset($__componentOriginal63016879034badbd3164129d151e3a6424f2a373); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

        <main role="main">
            <?php if (! empty(trim($__env->yieldContent('body')))): ?>
                <?php echo $__env->yieldContent('body'); ?>
            <?php endif; ?>
        </main>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"  type="text/javascript" > </script>
</body>
</html><?php /**PATH /home/marcelo/Documents/sis/labPHP/laravel/cadastro/resources/views/layout/app.blade.php ENDPATH**/ ?>