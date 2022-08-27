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
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php echo e(url(mix('css/bootstrap/bootstrap.css'))); ?>">
    <script src="<?php echo e(url(mix('js/bootstrap/bootstrap.bundle.js'))); ?>"></script>

    <link href="<?php echo e(url(mix('fontawesome/css/fontawesome.css'))); ?>" rel="stylesheet">

    <script defer src="<?php echo e(url(mix('fontawesome/js/fontawesome.js'))); ?>"></script>

    <style>
        html,
        .login {
            height: 95%;
        }

        .login {

            color: rgb(22, 21, 21);
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

    </style>

</head>
<body>


<?php if (! empty(trim($__env->yieldContent('body')))): ?>
    <?php echo $__env->yieldContent('body'); ?>
<?php endif; ?>

<script src="<?php echo e(url(mix('js/jquery/jquery.min.js'))); ?>"></script>

</body>
</html>
<?php /**PATH D:\joaor\Área de Trabalho\portifolio\resources\views/layout/layout_login/login.blade.php ENDPATH**/ ?>