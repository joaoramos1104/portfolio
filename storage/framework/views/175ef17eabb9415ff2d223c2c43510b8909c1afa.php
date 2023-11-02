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
    <div class="bg-footer">
    <footer class="container p-3 mt-3">
        <div class="d-flex justify-content-center">
            <ul class="nav float-end social-icons ms-3">
                <li class="nav-item me-2 text-white">
                    <a class="social-icon" href="https://linkedin.com/in/joao-f-ramos-04692070" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li class="nav-item me-2">
                    <a class="social-icon" href="https://github.com/joaoramos1104" target="_blank"><i class="fab fa-github"></i></a>
                </li>
                <li class="nav-item me-2">
                    <a class="social-icon" href="https://www.instagram.com/f.ramosjoao" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item me-2">
                    <a class="social-icon" href="https://twitter.com/joaoramos1988" target="_blank">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item m-auto text-secondary">
                    <i class="far fa-copyright"></i> <?php echo e(date('Y')); ?> João F. Ramos Junior
                </li>
            </ul>
        </div>
    </footer>
    </div>

<?php endif; ?>
<script src="<?php echo e(url(mix('/assets/jquery/jquery.min.js'))); ?>"></script>
<script src="<?php echo e(asset('/assets/js/main.js')); ?>"></script>

<?php if (! empty(trim($__env->yieldContent('javascript')))): ?>
    <?php echo $__env->yieldContent('javascript'); ?>
<?php endif; ?>


</body>
</html>
<?php /**PATH E:\xampp\htdocs\portfolio\resources\views/layout/app.blade.php ENDPATH**/ ?>