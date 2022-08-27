<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo e(url(mix('css/bootstrap/bootstrap.css'))); ?>">
    <script src="<?php echo e(url(mix('js/bootstrap/bootstrap.js'))); ?>"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">

    <style>

        body{
            background: linear-gradient(to bottom,
             rgba(90, 88, 89, 0.8) 0%, rgba(92, 88, 89, 0.2) 100%), url(images/article5.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment:fixed;
            background-size: cover;
            box-shadow: inset 0 0 5rem rgba(61, 61, 61, 0.768);
        }


        body::after{
            content: '';
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-image: url(images/header3.svg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: bottom;
            z-index: -1;
        }



        header.cont-header{
            height: 100vh;
            min-width: 30rem;
            padding-top: 1.5rem;
            padding-bottom: 0;
        }

        .rounded-custom{
            border-radius: 5px;

        }

        .border-right-green{
            border-right: 5px solid green;
            border-radius: 10px;

        }
        .border-left-green{
            border-left: 5px solid green;
            border-radius: 10px;

        }


        .nav-custom .nav-link{
            font-weight: 700;
            color: #fff;
            border-bottom: .25rem solid transparent;
        }

        .nav-custom .nav-link:hover,
        .nav-custom .nav-link:focus {
            border-bottom-color: #fff;
        }

        .nav-custom .active {
            color: #fff;
            border-bottom-color: #fff;
        }


        .bg-main{
            background-image: linear-gradient(to bottom,
            rgb(21, 67, 116) 0%, rgba(33, 37, 41, 74%) 100%), url(images/article1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        main{
            height: 100%;
            min-width: 30rem;
            padding-top: 1.5rem;
            padding-bottom: 2.5rem;
        }

        .bg-section{
            background-color: rgba(37, 36, 36, 0.467);
        }



        .banner::after, .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;

            transform: skew(15deg)
                       translateX(-50%);
            width: 75%;
            height: 100%;
            background-image: linear-gradient(120deg,#eaee44,#33d0ff);
            background-color: #333;
            opacity: .7;
        }
        .banner::before {
            transform: skew(-15deg)
                       translateX(-50%);
        }
        .banner {
            overflow: hidden;
        }


        .banner > * {
            z-index: 100;
        }


        .banner {
            position: relative;
            min-height: 50vh;
            background-image: url(images/article3.jpg);
            background-size: cover;
            display: flex;

        }

        footer{
            /*box-shadow: inset 0 0 5rem rgba(61, 61, 61, 0.768);*/

        }


    </style>

</head>
<body>
    <nav class="container navbar nav-custom">
        <div class="float-start p-2">
            <a class="nav navbar-brand text-white" href="#"><h3>Home</h3></a>
        </div>
        <div class="nav">
            <ul class="nav navbar text-white">
                <li class="nav-item">
                    <a class="nav-link " href="#">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="cont-header">
        <div class="container h-100 pt-5">
            <div class="row">
                <div class="col-md-4 col-sm-12 m-auto text-center text-white">
                    <h3>Coloque o Texto Aqui</h3>
                    <p>Coloque mais textos aqui</p>
                    <a class="btn btn-light shadow me-2" href="#">Read More</a>
                    <a class="btn btn-light shadow" href="#">Start Now</a>
                </div>
                <div class="col-md-8 d-sm-none d-md-block m-auto">
                    <img src="/images/header2.png" class="img-fluid" alt="header2.png">
                </div>
            </div>
            <div class="row m-auto text-center">
                <a href="#"><i>clique aqui</i></a>
            </div>
        </div>

    </header>
    <main class="bg-main">
        <section class="container p-5">
            <div class="row">
                <div class="col-md-3 col-sm-12 d-flex justify-content-center">
                    <div class="card border-0 text-center bg-transparent text-white">
                      <img class="card-img-top rounded-custom shadow-sm" src="images/article4.jpg" alt="article1.jpg">
                      <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Body</p>
                            <a class="btn btn-secondary border-0 shadow m-1" href="#"> Card Link</a>
                            <a class="btn btn-primary border-0 shadow m-1" href="#"> Card Link</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 d-flex justify-content-center">
                    <div class="card border-0 text-center bg-transparent text-white">
                        <img class="card-img-top rounded-custom shadow-sm" src="images/article2.jpg" alt="article2.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Body</p>
                            <a class="btn btn-secondary border-0 shadow m-1" href="#"> Card Link</a>
                            <a class="btn btn-primary border-0 shadow m-1" href="#"> Card Link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 d-flex justify-content-center">
                    <div class="card border-0 text-center bg-transparent text-white">
                        <img class="card-img-top rounded-custom shadow-sm" src="images/article3.jpg" alt="article3.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Body</p>
                            <a class="btn btn-secondary border-0 shadow m-1" href="#"> Card Link</a>
                            <a class="btn btn-primary border-0 shadow m-1" href="#"> Card Link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 d-flex justify-content-center">
                    <div class="card border-0 text-center bg-transparent text-white">
                        <img class="card-img-top rounded-custom shadow-sm" src="images/article4.jpg" alt="article4.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Body</p>
                            <a class="btn btn-secondary border-0 shadow m-1" href="#"> Card Link</a>
                            <a class="btn btn-primary border-0 shadow m-1" href="#"> Card Link</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container rounded-custom banner">
            <div class="row p-3">
                <div class="col-md-6 col-sm-12 float-start m-auto">
                    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner rounded-custom">
                    <div class="carousel-item active">
                        <img src="images/article4.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/article4.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/article3.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 float-end text-white m-auto text-center">
                    <h1>Este é um artigo</h1>
                    <p>Este é meu primeiro artigo em construção.</p>
                    <button class="btn btn-lg btn-light rounded-pill shadow">Confira</button>

                </div>
            </div>
        </section>
    </main>


    <footer class="fix-botton p-3 bg-light">
        <div class="d-flex justify-content-center">
            <li>
                <a href="#">Estamos aqui</a>
               <p>Estamos aqui!<a href="#">eu aqui</a></p>
            </li>
        </div>

    </footer>


    <script src="<?php echo e(url(mix('js/jquery/jquery.min.js'))); ?>"></script>
    <script src="<?php echo e(url(mix('js/bootstrap/bootstrap.js'))); ?>"></script>
</body>
</html>
<?php /**PATH D:\joaor\Área de Trabalho\laravel\portifolio\resources\views/app/home.blade.php ENDPATH**/ ?>