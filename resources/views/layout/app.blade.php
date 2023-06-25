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

    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">

    <script src="{{ url(mix('assets/scrollreveal/scrollreveal.es.js')) }}"></script>
    <script src="{{ url(mix('assets/scrollreveal/scrollreveal.js')) }}"></script>

    <script crossorigin="anonymous" src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js" defer></script>



</head>
<body>
@hasSection('body')
    @yield('body')
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
                    <a class="social-icon" href="https://twitter.com/joaoramos1988" target="_blank"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item m-auto text-secondary">
                    <i class="far fa-copyright"></i> {{ date('Y') }} João F. Ramos Junior
                </li>
            </ul>
        </div>
    </footer>
    </div>

@endif
<script src="{{ url(mix('/assets/jquery/jquery.min.js')) }}"></script>
<script src="{{ asset('/assets/js/main.js') }}"></script>

@hasSection('javascript')
    @yield('javascript')
@endif


</body>
</html>
