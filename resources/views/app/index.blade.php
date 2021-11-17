@extends('layout.app')
@section('body')


         <header>
             <nav class="navbar" id="navbarResponsive">
                <div class="container">
                     <ul class="nav navbar nav-custom text-white float-start">
                         <li class="nav-item">
                             <a class="nav-link" href="#experience">Experiência e Educação</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#skills">Habilidades e Conquistas</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#projects">Projetos</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#interests">Interesses</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#contact">Contato</a>
                         </li>
                     </ul>
                     <ul class="nav navbar text-white float-end social-icons">
                         <li class="nav-item me-2">
                             <a class="social-icon" href="https://linkedin.com/in/joao-f-ramos1104" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                         </li>
                         <li class="nav-item me-2">
                             <a class="social-icon" href="https://github.com/joaoramos1104" target="_blank"><i class="fab fa-github"></i></a>
                         </li>
                         <li class="nav-item me-2">
                             <a class="social-icon" href="https://www.instagram.com/f.ramosjoao" target="_blank"><i class="fab fa-instagram"></i></a>
                         </li>
                     </ul>
                    <ul class="nav navbar text-white float-end social-icons">
                        <li class="nav-item me-2">
                           <!-- <a class="nav-link" href="{{ route('admin') }}" target="_blank"><i class="fas fa-user"></i> Login</a>-->
                        </li>
                    </ul>
                 </div>
             </nav>
         </header>

         <!-- Main -->
         <main>
             <!-- Header -->
             <div class="container cont-main">
                 @foreach($profiles as $profile)
                     <div class="row">
                         <div class="col-md-5 col-sm-12 m-auto text-center text-white">
                             <span class=""><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ env('APP_URL') }}/storage/{{ $profile->img_profile }}" alt="..." style="width: 200px; height: 200px;" /></span>
                             <h3>{{ $profile->name }} | {{ $profile->tag_name }}</h3>
                             <p>{{ $profile->description }}</p>
                             <a class="btn btn-light shadow me-2" href="#">Saiba Mais</a>
                             <a class="btn btn-light shadow" href="#experience">Start Now</a>
                         </div>
                         <div class="col-md-7 d-sm-none d-md-block m-auto p-3 img-header">
                             <img id="img_header" src="{{ env('APP_URL') }}/storage/{{ $profile->img_header }}" class="img-fluid rounded-custom" alt="header2.png">
                         </div>
                     </div>
                 @endforeach
                 <div class="row col-1 m-auto text-center pt-3">
                     <a class="button-down" href="#experience"><i class="fas fa-3x fa-angle-down"></i></a>
                 </div>
             </div>

             <!-- Experience -->
             <div class="container rounded-custom shadow banner" id="experience">
                 <div class="row text-white col p-2">
                     <h3 class=" text-center m-auto">Educação e Experiência</h3>
                     @foreach($education as $educ)
                         <div class="col-md-6 col-sm-12 text-center border-end border--white">
                             <p class="fw-bold">Educação</p>
                             <h5>{{ $educ->institution }}</h5>
                             <h5>{{ $educ->type_course }}</h5>
                             <h6>{{ $educ->course }}</h6>
                             <p>{{ $educ->time_course }}</p>
                         </div>
                     @endforeach
                     @foreach($experiences as $experience)
                         <div class="col-md-6 col-sm-12 text-center">
                             <p class="fw-bold">Experiência</p>
                             <h5>{{ $experience->job_title }}</h5>
                             <p style="white-space: pre-wrap;">{{ $experience->description_experience }}</p>
                             <a href="{{ $experience->link_reference }}" target="_blank" class="btn btn-sm btn-light rounded shadow">Veja mais</a>
                         </div>
                     @endforeach
                 </div>
             </div>

             <!-- Skills and Certification -->
             <div id="skills">
                <div class="container mt-3 p-3">
                     <h3 class="text-white text-center p-2 mb-2">Habilidades</h3>
                     <hr class="border-bottom border-white">
                     <div class="text-center d-flex text-white p-1">
                         <div class="row col justify-content-center">
                             @foreach($skills as $skill)
                                 <div class="col-3 col-md-2 mt-2">
                                     {!! $skill->icon_skill !!}
                                     <p>{{ $skill->name }}</p>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                 </div>
                <div class="container mt-3 p-3">
                 <div class="row p-3 text-center text-white m-auto">
                     <h3 class="mb-5">Conquistas e Certificações</h3>
                     <hr class="border-bottom border-white">
                     <ul class="nav flex-column mb-0">
                         <span class="me-1"><i class="fas fa-trophy text-warning"></i></span>
                         @foreach($awards as $award)
                             <li class="nav-item">
                                 <a class="nav-link awards" target="_blank" href="{{ $award->link }}">{{ $award->name }} - {{ $award->institution }}</a>
                             </li>
                         @endforeach
                         <br>
                         <li>
                             <span class="me-1"><i class="fas fa-sync text-success"></i></span>
                             Em breve novas conquistas...!
                         </li>
                     </ul>
                 </div>
             </div>
             </div>

             <!-- Projects -->
             <div id="projects">
                 <h3 class="text-white text-center m-auto">Projetos</h3>
                 <div class="container">
                     <hr class="border-bottom border-white">
                     <div class="row p-3">
                         @foreach($projects as $chave => $project)
                             @if($chave %2 == 0)
                                 <section class="container rounded-custom art-cont">
                                     <div class="row p-3">
                                         <div class="col-md-6 col-sm-12 float-start m-auto">
                                             <div id="carousel{{ $chave }}" class="carousel slide" data-bs-ride="carousel{{ $chave }}">
                                                 <div class="carousel-indicators">
                                                     @foreach($project->imgProject as $key => $images)
                                                         <button type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide-to="{{ $key }}" class="{{$key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
                                                     @endforeach
                                                 </div>
                                                 <div class="carousel-inner rounded shadow">
                                                     @foreach($project->imgProject as $key => $images)
                                                         <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                                             <img src="{{ env('APP_URL') }}/storage/{{ $images->img_project }}" class="d-block img-fluid" alt="..." style="width: 100%; height: 300px;">
                                                         </div>
                                                     @endforeach
                                                 </div>
                                                 <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide="prev">
                                                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                     <span class="visually-hidden">Previous</span>
                                                 </button>
                                                 <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide="next">
                                                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                     <span class="visually-hidden">Next</span>
                                                 </button>
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 float-end text-white m-auto text-center">
                                             <h5 class="fw-bold">{{ $project->title }}</h5>
                                             <p style="white-space: pre-wrap;">{{ $project->description }}</p>
                                             <a class="btn btn-sm btn-light mb-1 shadow" target="_blank" href="{{ $project->url_project }}" >Confira</a>
                                         </div>
                                     </div>
                                 </section>
                             @else
                                 <section class="container rounded-custom art-cont2">
                                     <div class="row p-3">
                                         <div class="col-md-6 col-sm-12 float-end text-white m-auto text-center">
                                             <h5 class="fw-bold">{{ $project->title }}</h5>
                                             <p style="white-space: pre-wrap;">{{ $project->description }}</p>
                                             <a class="btn btn-sm btn-light mb-1 shadow" target="_blank" href="{{ $project->url_project }}" >Confira</a>
                                         </div>
                                         <div class="col-md-6 col-sm-12 float-start m-auto">
                                             <div id="carousel{{ $chave }}" class="carousel slide" data-bs-ride="carousel{{ $chave }}">
                                                 <div class="carousel-indicators">
                                                     @foreach($project->imgProject as $key => $images)
                                                         <button type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide-to="{{ $key }}" class="{{$key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
                                                     @endforeach
                                                 </div>
                                                 <div class="carousel-inner rounded shadow">
                                                     @foreach($project->imgProject as $key => $images)
                                                         <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                                             <img src="{{ env('APP_URL') }}/storage/{{ $images->img_project }}" class="d-block img-fluid" alt="..." style="width: 100%; height: 300px;">
                                                         </div>
                                                     @endforeach
                                                 </div>
                                                 <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide="prev">
                                                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                     <span class="visually-hidden">Previous</span>
                                                 </button>
                                                 <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide="next">
                                                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                     <span class="visually-hidden">Next</span>
                                                 </button>
                                             </div>
                                         </div>
                                     </div>
                                 </section>
                             @endif
                         @endforeach
                     </div>
                 </div>
             </div>

             <!-- Interests -->
             <div id="interests">
                 <div class="container">
                     <div class="row text-white m-auto p-3">
                         <h3 class="mb-5 text-center">Interesses</h3>
                         <hr class="border-bottom border-white">
                         <div class="text-center">
                             @foreach($interests as $interest)
                                 <p style="white-space: pre-wrap;">{{ $interest->description }}</p>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Contact -->
             <div id="contact">
                 <div class="container contact">
                     <div class="row col text-white p-3">
                         <h3 class="mb-5 text-center">Contato</h3>
                         <hr class="border-bottom border-white">
                         <div class="col-md-6 p-3">
                             @if(count($errors) > 0 )
                                 <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                     <strong>Preencha os dados corretaente!</strong>
                                     <ul>
                                         @foreach($errors->all() as $error)
                                             <li>{{ $error }}</li>
                                         @endforeach
                                     </ul>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                 </div>
                             @endif
                             @if($messge = Session::get('success'))
                                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                                     <strong>E-mail enviado com sussesso! </strong> {{ $messge }}
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                 </div>
                             @endif
                             <h4 class="text-center mb-2">Deixe sua mensagem</h4>
                             <form class="row g-3" action="{{ route('message') }}" method="post">
                                 @csrf
                                 <div class="col-md-6 p-1">
                                     <label for="name" class="form-label">Nome</label>
                                     <input type="text" class="form-control rounded-pill" name="name" id="name" placeholder="None" required>
                                 </div>
                                 <div class="col-md-6 p-1">
                                     <label for="tel" class="form-label">Telefone</label>
                                     <input type="text" class="form-control rounded-pill" name="tel" id="tel" placeholder="(21) 99999-9999" required>
                                 </div>
                                 <div class="col-12 p-1">
                                     <label for="email" class="form-label">E-mail</label>
                                     <input type="email" class="form-control rounded-pill" name="email" id="email" placeholder="email@email.com" required>
                                 </div>
                                 <div class="form-check mb-3 p-1 text-center">
                                     <label id="message" for="message" class="form-label">Mensagem</label>
                                     <textarea id="message" name="message" rows="5" class="form-control rounded" placeholder="Coloque aqui sua mensagem..." required></textarea>
                                 </div>
                                 <div class="col-12 p-1 text-center">
                                     <button type="submit" class="btn btn-sm btn-light">Enviar</button>
                                 </div>
                             </form>
                         </div>
                         <div class="col-md-6 d-sm-none d-md-block p-3">
                             <iframe class="rounded-custom map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.86034076902!2d-43.41874938450831!3d-22.77056363875018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x996688796fd8c3%3A0x9c37e0468461879b!2sAv.%20Ant%C3%B4nio%20Borges%2C%20323%20-%20Jacutinga%2C%20Mesquita%20-%20RJ%2C%2026564-030!5e0!3m2!1spt-BR!2sbr!4v1635635568647!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                             <div class="mb-2 text-center">
                                 <i class="fas fa-map-marker-alt"></i> Av. Antônio Borges 323 · Jacutinga · Mesquita - RJ <br>
                                 <i class="fas fa-phone-square-alt"></i> +55 (21) 98298-2487<a href="https://api.whatsapp.com/send?phone=5521982982487" target="_blank"><img class="img-fluid" style="width: 30px; text-decoration: none;" src="assets/img/mens.png" alt="..." />WhatsApp</a><br>
                                 <i class="fas fa-envelope"></i> <a href="mailto:joao.ramos1988@outlook .com">joao.ramos1988@outlook.com</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

            <!-- Footer -->
             <footer class="p-3">
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
                     </ul>
                 </div>
             </footer>

         </main>

    <script>
        ScrollReveal().reveal('.headline')
        ScrollReveal().reveal('.tagline', { delay: 600, rete: true })
        ScrollReveal().reveal('.container', { delay: 100, reset: true })
        ScrollReveal().reveal('h1, h3, h5, h6', { delay: 150, reset: true })
        ScrollReveal().reveal('p', { delay: 200, reset: true })
        ScrollReveal().reveal('#img_header', { delay: 350, reset: true })
    </script>

@endsection
