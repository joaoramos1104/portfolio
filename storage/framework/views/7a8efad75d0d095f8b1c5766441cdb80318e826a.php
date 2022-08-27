<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php echo e(url(mix('assets/bootstrap/bootstrap.css'))); ?>">
    <script src="<?php echo e(url(mix('assets/bootstrap/bootstrap.bundle.js'))); ?>"></script>

    <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url(mix('assets/fontawesome/fontawesome.css'))); ?>" rel="stylesheet">
    <script defer src="<?php echo e(url(mix('assets/fontawesome/fontawesome.js'))); ?>"></script>

</head>
<body>


<?php if (! empty(trim($__env->yieldContent('content')))): ?>
    <?php echo $__env->yieldContent('content'); ?>
<?php endif; ?>

<script src="<?php echo e(url(mix('assets/jquery/jquery.min.js'))); ?>"></script>

</body>
</html>
<?php /**PATH E:\xampp\htdocs\portfolio\resources\views/layout/login.blade.php ENDPATH**/ ?>