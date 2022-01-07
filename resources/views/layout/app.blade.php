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

    <link rel="stylesheet" href="{{ url(mix('assets/bootstrap/bootstrap.css')) }}">
    <script src="{{ url(mix('assets/bootstrap/bootstrap.bundle.js')) }}"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">

    <link href="{{ url(mix('assets/fontawesome/fontawesome.css')) }}" rel="stylesheet">
    <script src="{{ url(mix('assets/fontawesome/fontawesome.js')) }}"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="{{ url(mix('assets/scrollreveal/scrollreveal.es.js')) }}"></script>
    <script src="{{ url(mix('assets/scrollreveal/scrollreveal.js')) }}"></script>


</head>
<body>
    @hasSection('body')
        @yield('body')
        <!-- Footer -->
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
                    <li class="nav-item m-auto text-secondary">
                        <i class="far fa-copyright"></i> 2021 João F. Ramos
                    </li>
                </ul>
            </div>
        </footer>

    @endif
    <script src="{{ url(mix('/assets/jquery/jquery.min.js')) }}"></script>

            <script>
                $("#limparTextarea").click(function(){
                    $("#textareaInteresses").val('');
                    $("#collapseInterests").removeClass( "show" );
                });

                $("#cleanFormEducation").click(function(){
                    $("[data-name='cleanAddEducation']").val('');
                    $("#collapseAddEducation").removeClass( "show" );
                });

                $("#cleanFormExperience").click(function(){
                    $("[data-name='cleanAddExperience']").val('');
                    $("#collapseAddExperience").removeClass( "show" );
                });

                $("#cleanFormAddProfile").click(function(){
                    $("[data-name='cleanAddProfile']").val('');
                    $("#collapseAddProfile").removeClass( "show" );
                });

                $("#cleanFormAddUser").click(function(){
                    $("[data-name='cleanAddProject']").val('');
                    $("#collapseAddProject").removeClass( "show" );
                });
                $("#cleanFormCresteUserAdmin").click(function(){
                    $("[data-name='cresteUserAdmin']").val('');
                });
                $("#cleanFormUpdatePasswordAdmin").click(function(){
                    $("[data-name='updatePasswordAdmin']").val('');
                });

                //button-top
                jQuery(document).ready(function() {
                    // Exibe ou oculta o botão
                    jQuery(window).scroll(function() {
                        if (jQuery(this).scrollTop() > 200) {
                            jQuery('.button-top').fadeIn(200);
                        } else {
                            jQuery('.button-top').fadeOut(200);
                        }
                    });

                    // Faz animação para subir
                    jQuery('.button-top').click(function(event) {
                        event.preventDefault();
                        jQuery('html, body').animate({scrollTop: 0}, 300);
                    })
                });
                </script>


            @hasSection('javascript')
                @yield('javascript')
            @endif


</body>
</html>
