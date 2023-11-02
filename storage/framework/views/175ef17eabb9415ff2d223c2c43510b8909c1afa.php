<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php echo e(url(mix('assets/bootstrap/bootstrap.css'))); ?>">
    <script src="<?php echo e(url(mix('assets/bootstrap/bootstrap.bundle.js'))); ?>"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">

    <link href="<?php echo e(url(mix('assets/fontawesome/fontawesome.css'))); ?>" rel="stylesheet">
    <script src="<?php echo e(url(mix('assets/fontawesome/fontawesome.js'))); ?>"></script>

    <link href="<?php echo e(asset('/assets/css/style.css')); ?>" rel="stylesheet">

    <script src="<?php echo e(url(mix('assets/scrollreveal/scrollreveal.es.js'))); ?>"></script>
    <script src="<?php echo e(url(mix('assets/scrollreveal/scrollreveal.js'))); ?>"></script>

    <script crossorigin="anonymous" src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js" defer></script>



</head>
<body>
<?php if (! empty(trim($__env->yieldContent('body')))): ?>
    <?php echo $__env->yieldContent('body'); ?>
    <!-- Footer -->
    <?php if (isset($component)) { $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Footer::class, []); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf)): ?>
<?php $component = $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf; ?>
<?php unset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php endif; ?>
<script src="<?php echo e(url(mix('/assets/jquery/jquery.min.js'))); ?>"></script>
<script src="<?php echo e(asset('/assets/js/main.js')); ?>"></script>

<?php if (! empty(trim($__env->yieldContent('javascript')))): ?>
    <?php echo $__env->yieldContent('javascript'); ?>
<?php endif; ?>


</body>
</html>
<?php /**PATH E:\xampp\htdocs\portfolio\resources\views/layout/app.blade.php ENDPATH**/ ?>