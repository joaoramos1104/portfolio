@extends('layout.app')
@section('body')

    <!-- header -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">

                    <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <strong><a class="nav-link" href="#experience">Experience | Education</a></strong>
                            </li>
                            <li class="nav-item">
                                <strong><a class="nav-link" href="#skills">Skills | Awards</a></strong>
                            </li>
                            <li class="nav-item">
                                <strong><a class="nav-link" href="#projects">Projects</a></strong>
                            </li>
                            <li class="nav-item">
                                <strong><a class="nav-link" href="#interests">Interests</a></strong>
                            </li>
                            <li class="nav-item">
                                <strong><a class="nav-link" href="#contact">Contact</a></strong>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar float-end social-icons">
                        <li class="nav-item me-2">
                            <a class="social-icon" href="https://linkedin.com/in/joao-f-ramos1104" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                    </ul>
                    <ul class="nav navbar float-end social-icons">
                        <li class="nav-item me-2">
                            <!--<a class="nav-link" href="{{ route('admin') }}" target="_blank"><i class="fas fa-user"></i> Login</a>-->
                            <button class="switch" id="switch">
                                <span><i class="fas fa-sun me-2"></i></span>
                                <span><i class="fas fa-moon ms-2"></i></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            @foreach($profiles as $profile)
                <div class="row mt-2">
                    <div class="col-md-7 col-sm-12 m-auto text-center text-color">
                        <span class=""><img class="img-fluid img-profile shadow m-auto mb-2" src="{{ env('APP_URL') }}/storage/{{ $profile->img_profile }}" alt="..." /></span>
                        <h2 class="element">{{ $profile->name }} |
                            <strong class="animated text-success"></strong>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                        new TypeIt(".animated", {
                                            speed: 150,
                                            loop: true,
                                            delay: 500,
                                        })
                                            .type('{{ $profile->tag_name }}', {delay:900})
                                            .delete('{{ $profile->tag_name }}'.length)
                                            .type('{{ $profile->tag_name2 }}', {delay:900})
                                            .pause(1000)
                                            .go();
                                    });
                                </script>
                        </h2>
                        <p>{!! $profile->description !!}</p>
                        <a class="btn btn-custom btn-light shadow me-2" href="https://linkedin.com/in/joao-f-ramos1104" target="_blank">Saiba Mais</a>
                        <!--<a class="btn btn-custom btn-light shadow" href="#experience">Start Now</a>-->
                    </div>
                    <div class="col-md-5 col-sm-none m-auto p-3 img-header js-tilt" data-tilt>
                        <img id="img_header" src="{{ env('APP_URL') }}/storage/{{ $profile->img_header }}" class="img-fluid rounded-custom" alt="header2.png">
                    </div>
                </div>
            @endforeach
            <div class="row col-1 m-auto text-center pt-3">
                <a class="button-down" href="#experience"><i class="fas fa-3x fa-angle-down"></i></a>
            </div>
        </div>
        <div class="col-1 float-end">
            <a class="button-top" href="#">Topo <i class="fas fa-3x fa-angle-up"></i></a>
        </div>
    </header>

    <!-- Main -->
    <main>
        <!-- Experience -->
        <div class="container rounded-custom shadow banner mt-5" id="experience">
            <div class="row text-white col p-2">
                <h3 class=" text-center m-auto">Education | Experiences</h3>
                <div class="col-md-6 col-sm-12 text-center">
                    <h5 class="fw-bold">Education</h5>
                    @foreach($education as $educ)
                        <h5>{{ $educ->institution }}</h5>
                        <h5>{{ $educ->type_course }}</h5>
                        <h5>{{ $educ->course }}</h5>
                        {{-- <p>{{ $educ->time_course }}</p> --}}
                        <hr class="border-bottom border-white">
                    @endforeach
                </div>

                <div class="col-md-6 col-sm-12 text-center">
                    <h5 class="fw-bold">Experiences</h5>
                    @foreach($experiences as $experience)
                        <h5>{{ $experience->job_title }}</h5>
                        <p>{{ $experience->description_experience }}</p>
                        <a href="{{ $experience->link_reference }}" target="_blank" class="btn btn-custom btn-sm btn-light shadow">Veja mais</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <hr class="border-bottom border-white">
        </div>

        <!-- Skills and Certification -->
        <div id="skills">
            <div class="container mt-3 text-color">
                <h3 class="text-center mb-2">Skills</h3>
                <div class="row p-3 bg-skills shadow rounded-2">
                    <div class="row col-md-4 col-sm-12 p-3">
                        <h4 class="text-center mb-2">Soft Skills</h4>
                        <ul class="list-group list-group-flush text-center">
                            @foreach($soft_skills as $soft_skill)
                            <li class="list-group-item bg-transparent text-color">
                                {{ $soft_skill->name }}
                                <span class="badge text-success"><i class="far fa fa-check"></i></span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="row col-md-8 col-sm-12 p-2 p-3">
                        <h4 class="text-center mb-2">Hard Skills</h4>
                        @foreach($skills as $skill)
                            <div class="col m-auto text-center p-3 skill">
                                <p class="rounded-2 p-2" style="color:{{ $skill->color_skill }};">{!! $skill->icon_skill !!}</p>
                                <p class="text-color">{{ $skill->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="container mt-3">
                    <hr class="border-bottom border-dark">
                </div>
            </div>
            <div class="container mt-3 mb-3">
                <h3 class="text-center mb-2 text-color">Awards</h3>
                <div class="row justify-content-center">
                    @foreach($awards as $key => $award)
                        <div class="col-md-3 col-sm-12 mr-1 mb-2 award">
                            <div class="card awards border-0 shadow text-center">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalCertification{{ $key }}"><img src="{{ env('APP_URL') }}/storage/{{ $award->certification }}" class="card-img-top rounded-custom p-1" alt="..."></a>
                                <a class="m-auto p-1" target="_blank" href="{{ $award->link }}">{{ $award->name }}</a>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="modalCertification{{ $key }}" tabindex="-1" aria-labelledby="modalCertificationLabel{{ $key }}" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <button class="btn float-end text-white" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times fa-2x"></i></button>
                                <img src="{{ env('APP_URL') }}/storage/{{ $award->certification }}" alt="..." class="modal-content">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="container mt-3">
                    <hr class="border-bottom border-dark">
                </div>
            </div>

        </div>

        <!-- Projects -->
        <div id="projects" class="">
            <h3 class="text-center m-auto text-color">Projects</h3>
            <div class="container">
                <div class="">
                    <div class="justify-content-center">
                        <div class="col-6 p-1 text-center m-auto">
                            <a class="btn btn-custom btn-sm btn-light shadow" href="https://github.com/joaoramos1104" target="_blank">Visite meu Github <i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    @foreach($projects as $chave => $project)
                        @if($chave %2 == 0)
                            <section class="container-fluid text-color">
                                <div class="col-6">

                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-7 col-sm-12 float-start m-auto">
                                        <div id="carousel{{ $chave }}" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                @foreach($project->imgProject as $key => $images)
                                                    <button type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide-to="{{ $key }}" aria-label="{{ $key }}" class="bg-secondary {{$key == 0 ? 'active' : '' }} " aria-current=" {{$key == 0 ? 'true' : '' }}"></button>
                                                @endforeach
                                            </div>
                                            <div class="carousel-inner rounded shadow">
                                                @foreach($project->imgProject as $key => $images)
                                                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                                        <img src="{{ env('APP_URL') }}/storage/{{ $images->img_project }}" class="d-block w-100 img-carousel" alt="...">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide="prev">
                                                <span class="bg-secondary rounded p-2" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide="next">
                                                <span class="bg-secondary rounded p-2" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12 float-end m-auto text-center p-3">
                                        <h3 class="fw-bold text-success ">{{ $project->title }}</h3>
                                        <strong><p>{{ $project->description }}</p></strong>
                                        <a class="btn btn-custom btn-sm btn-light mb-1 shadow" target="_blank" href="{{ $project->url_project_web }}" >Confira <i class="fa-solid fa-browser"></i></a>
                                        <a class="btn btn-custom btn-sm btn-light mb-1 shadow" target="_blank" href="{{ $project->url_project }}" >Projeto <i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                                <div class="container mt-3">
                                    <hr class="border-bottom border-dark">
                                </div>
                            </section>
                        @else
                            <section class="container-fluid text-color rounded-custom">
                                <div class="row mt-5">
                                    <div class="col-md-5 col-sm-12 float-end m-auto text-center p-1">
                                        <h3 class="fw-bold text-success">{{ $project->title }}</h3>
                                        <strong><p>{{ $project->description }}</p></strong>
                                        <a class="btn btn-custom btn-sm btn-light mb-1 shadow" target="_blank" href="{{ $project->url_project_web }}" >Confira <i class="fa-solid fa-browser"></i></a>
                                        <a class="btn btn-custom btn-sm btn-light mb-1 shadow" target="_blank" href="{{ $project->url_project }}" >Projeto <i class="fab fa-github"></i></a>
                                    </div>
                                    <div class="col-md-7 col-sm-12 float-start m-auto">
                                        <div id="carousel{{ $chave }}" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                @foreach($project->imgProject as $key => $images)
                                                    <button type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide-to="{{ $key }}" aria-label="{{ $key }}" class="bg-secondary {{$key == 0 ? 'active' : '' }} " aria-current=" {{$key == 0 ? 'true' : '' }}"></button>
                                                @endforeach
                                            </div>
                                            <div class="carousel-inner rounded shadow">
                                                @foreach($project->imgProject as $key => $images)
                                                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                                        <img src="{{ env('APP_URL') }}/storage/{{ $images->img_project }}" class="d-block img-carousel" alt="...">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide="prev">
                                                <span class="bg-secondary rounded p-2" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide="next">
                                                <span class="bg-secondary rounded p-2" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container mt-3">
                                    <hr class="border-bottom border-dark">
                                </div>
                            </section>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="container mt-3">
                <hr class="border-bottom border-dark">
            </div>
        </div>

        <!-- Interests -->
        <div id="interests">
            <div class="container text-color">
                <div class="row m-auto p-3">
                    <h3 class="mb-5 text-center">Interests</h3>
                    <div class="text-center">
                        @foreach($interests as $interest)
                            <strong><p>{{ $interest->description }}</p></strong>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <hr class="border-bottom border-dark">
            </div>
        </div>

        <!-- Contact -->
        <div id="contact">
            <div class="container text-color">
                <div class="row col p-3">
                    <h3 class="mb-5 text-center">Contact</h3>
                    <div class="col-md-6 p-3">
                        <h4 class="text-center mb-2">Deixe sua mensagem</h4>
                        <form name="send_message" class="row g-3">
                            @csrf
                            <div class="col-md-6 p-1">
                                <label class="form-label">Seu Nome</label>
                                <input type="text" class="form-control rounded-pill shadow" id="name" name="name" data-name='input-messager' placeholder="Seu Nome" required>
                            </div>
                            <div class="col-md-6 p-1">
                                <label class="form-label">Seu Telefone</label>
                                <input type="text" class="form-control rounded-pill shadow" id="tel" name="tel" data-name='input-messager' onkeypress="mask(this, mphone);" placeholder="(21) 99999-9999" required>
                            </div>
                            <div class="col-12 p-1">
                                <label class="form-label">E-mail</label>
                                <input type="email" class="form-control rounded-pill shadow" id="email" name="email" data-name='input-messager' placeholder="Seu e-mail" required>
                            </div>
                            <div class="form-check mb-3 p-1 text-center">
                                <label class="form-label">Mensagem</label>
                                <textarea name="message" rows="5" class="form-control rounded shadow" id="message" data-name='input-messager' placeholder="Coloque aqui sua mensagem..." required></textarea>
                            </div>
                            <div class="col-12 p-1 text-center">
                                <button type="submit" class="btn btn-light shadow">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 d-sm-none d-md-block p-3 m-auto">
                                                    {{-- <iframe class="rounded-custom map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.86034076902!2d-43.41874938450831!3d-22.77056363875018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x996688796fd8c3%3A0x9c37e0468461879b!2sAv.%20Ant%C3%B4nio%20Borges%2C%20323%20-%20Jacutinga%2C%20Mesquita%20-%20RJ%2C%2026564-030!5e0!3m2!1spt-BR!2sbr!4v1635635568647!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                        <div class="mb-2 text-center">
                            <i class="fas fa-map-marker-alt"></i> <strong>Mesquita - RJ</strong><br>
                            <i class="fas fa-phone-square-alt text-color"></i><strong> +55 (21) 98298-2487</strong><br>
                            <a class="nav-link" href="https://api.whatsapp.com/send?phone=5521982982487" target="_blank"><i class="fab fa-whatsapp text-color"> </i><strong>WhatsApp</strong></a>
                            <a class="nav-link" href="skype:joao.f.ramos"> <i class="fab fa-skype text-color"></i><strong> Skype -</strong> joao.f.ramos</a>
                            <a class="nav-link" href="mailto:joao.ramos1988@outlook.com"> <i class="fas fa-envelope text-color"></i><strong> joao.ramos1988@outlook.com</strong></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loading" class="row col-3 m-auto fixed-top"></div>
        </div>
    </main>


    <!-- Modal error_message -->
    <div class="modal fade" id="error_message" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-white text-center bg-dark">
                <div class="modal-header  border-0">
                    <h4 class="modal-title" id="staticBackdropLabel"><i class="fas fa-exclamation-triangle text-warning"></i></h4>
                </div>
                <div class="modal-body">
                    <h4>Ocorreu um erro, tente novamente mais tarde!</h4>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-sm btn-success " data-bs-dismiss="modal" aria-label="Close">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal success_message -->
    <div class="modal fade" id="success_message" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="success_messageBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-success text-center">
                <div class="modal-body">
                    <h4 class="modal-title" id="success_messageBackdropLabel"><i class="far fa-check-circle"></i></h4>
                    <h4>Mensagem enviada com sucesso!</h4>
                    <button type="button" class="btn btn-outline-secondary shadow" data-bs-dismiss="modal" aria-label="Close">Fechar</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        ScrollReveal().reveal('.container', { delay: 100, reset: false })
        ScrollReveal().reveal('h1, h3, h5, h6', { delay: 150, reset: false })
        ScrollReveal().reveal('section', { delay: 150, reset: false })
        ScrollReveal().reveal('p', { delay: 200, reset: false })
        ScrollReveal().reveal('#img_header', { delay: 350, reset: true })
        ScrollReveal().reveal('.skill', { interval: 100 });
        ScrollReveal().reveal('.award', { interval: 100 });
    </script>


@endsection
