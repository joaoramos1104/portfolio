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

    <link rel="stylesheet" href="<?php echo e(url(mix('css/bootstrap/bootstrap.css'))); ?>">
    <script src="<?php echo e(url(mix('js/bootstrap/bootstrap.bundle.js'))); ?>"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">

    <link href="<?php echo e(url(mix('fontawesome/css/fontawesome.css'))); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <script defer src="<?php echo e(url(mix('fontawesome/js/fontawesome.js'))); ?>"></script>

</head>
<body>

            <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>

            <?php if (! empty(trim($__env->yieldContent('body')))): ?>
                <?php echo $__env->yieldContent('body'); ?>

            <?php endif; ?>

    <script src="<?php echo e(url(mix('js/jquery/jquery.min.js'))); ?>"></script>
            <script>
                $("#limparTextarea").click(function(){
                    $("#textareaInteresses").val('');
                    $("#collapseInterests").removeClass( "show" );
                });

                $("#clianFormEducation").click(function(){
                    $("[data-name='cleanAddEducation']").val('');
                    $("#collapseAddEducation").removeClass( "show" );
                });

                $("#clianFormExperience").click(function(){
                    $("[data-name='cleanAddExperience']").val('');
                    $("#collapseAddExperience").removeClass( "show" );
                });

                $("#clianFormAddProfile").click(function(){
                    $("[data-name='cleanAddProfile']").val('');
                    $("#collapseAddProfile").removeClass( "show" );
                });

                $("#clianFormAddProject").click(function(){
                    $("[data-name='cleanAddProject']").val('');
                    $("#collapseAddProject").removeClass( "show" );
                });
            </script>

            <?php if (! empty(trim($__env->yieldContent('javascript')))): ?>
                <?php echo $__env->yieldContent('javascript'); ?>
            <?php endif; ?>


</body>
</html>
<?php /**PATH D:\joaor\Área de Trabalho\portifolio\resources\views/layout/app.blade.php ENDPATH**/ ?>