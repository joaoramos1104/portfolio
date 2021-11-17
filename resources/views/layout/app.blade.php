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
                </script>


            @hasSection('javascript')
                @yield('javascript')
            @endif


</body>
</html>
