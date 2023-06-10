@extends('layout.app')

<div class="container">
    <nav class="navbar">
        <div class="container d-block">
            <ul class="nav float-end">
                <div class="row d-flex dropdown">
                    <div class="col me-2">
                        <button class="switch float-end" id="switch">
                            <span><i class="fas fa-sun"></i></span>
                            <span><i class="fas fa-moon"></i></span>
                        </button>
                    </div>
                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                Sair
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li>
                            <a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#password">
                                Trocar senha
                            </a>
                        </li><li>
                            <a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createUser">
                                Cadastrar Usuário
                            </a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>

    <div class="p-3">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-12">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="Profile-tab" data-bs-toggle="tab" data-bs-target="#Profile" type="button" role="tab" aria-controls="Profile" aria-selected="true">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="false">Experience | Education</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="false">Skills</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards" type="button" role="tab" aria-controls="awards" aria-selected="false">Certifications | Awards</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">Projects</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="interests-tab" data-bs-toggle="tab" data-bs-target="#interests" type="button" role="tab" aria-controls="interests" aria-selected="false">Interests</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                </li>
            </ul>

            <!-- Tabs -->
            <div class="tab-content" id="myTabContent">
                <!-- tab Profile -->
                <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="Profile-tab">
                    <div class="container">
                        <h3 class=" text-center text-color mt-3">Profile</h3>
                        @foreach($profiles as $profile)
                            <div class="row text-color">
                                <div class="col-md-7 col-sm-12 m-auto text-center">
                                    <span class=""><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ env('APP_URL') }}/storage/{{ $profile->img_profile }}" alt="..." style="width: 150px; height: 150px;" /></span>
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
                                    <strong><p>{!! $profile->description !!}</p></strong>
                                </div>
                                <div class="col-md-5 d-sm-none d-md-block m-auto p-3">
                                    <img src="{{ env('APP_URL') }}/storage/{{ $profile->img_header }}" class="img-fluid rounded-custom" alt="header2.png">
                                </div>
                                <div class="justify-content-center">
                                    <div class="col-md-2 col-sm-12 p-1 m-auto text-center">
                                        <button class="btn btn-sm btn-light shadow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEditProfile{{ $profile->id }}" aria-expanded="false" aria-controls="collapseEditProfile{{$profile->id}}">
                                            Editar
                                        </button>
                                    </div>
                                    <div class="col-md-2 col-sm-12 p-1 m-auto text-center">
                                        <form>
                                            @csrf
                                            <input type="submit" class="btn btn-sm btn-danger shadow" formaction="{{ route('delete_profile', $profile->id) }}" formmethod="post" value="Remover">
                                            @method("DELETE")
                                        </form>
                                    </div>
                                </div>
                                <div class="collapse text-center" id="collapseEditProfile{{ $profile->id }}">
                                    <div class="container">
                                        <form action="{{ route('update_profile', $profile->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row p-1 text-white">
                                                <div class="mb-3 col-md-6 col-sm-12">
                                                    <label class="form-label">Nome</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $profile->name }}">
                                                </div>
                                                <div class="mb-3 col-md-6 col-sm-12">
                                                    <label class="form-label">Tag Perfil</label>
                                                    <input type="text" class="form-control" name="tag_name" value="{{ $profile->tag_name }}">
                                                </div>
                                                <div class="mb-3 col-md-6 col-sm-12">
                                                    <label class="form-label">Tag Perfil 2</label>
                                                    <input type="text" class="form-control" name="tag_name2" value="{{ $profile->tag_name2 }}">
                                                </div>
                                                <div class="mb-3 col-md-6 col-sm-12">
                                                    <label class="form-label">Imagem Perfil</label>
                                                    <input class="form-control" type="file" name="img_profile">
                                                </div>
                                                <div class="mb-3 col-md-6 col-sm-12">
                                                    <label class="form-label">Imagem Header</label>
                                                    <input class="form-control" type="file" name="img_header">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Sobre</label>
                                                    <textarea class="form-control" name="description" rows="5">{{ $profile->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer m-auto justify-content-center">
                                                <button type="submit" class="btn btn-primary shadow">Salvar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="border-bottom border-white">
                            </div>
                        @endforeach
                        <div class="justify-content-center">
                            <div class="col-3 p-1 text-center m-auto">
                                <button class="btn btn-sm btn-primary shadow m-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAddProfile" aria-expanded="false" aria-controls="collapseAddProfile">
                                    Adicionar
                                </button>
                            </div>
                        </div>
                        <div class="collapse text-center" id="collapseAddProfile">
                            <div class="container">
                                <form action="{{ route('create_profile') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row p-1 text-white">
                                        <h3 class="text-center">Perfil</h3>
                                        <div class="row p-1">
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Nome</label>
                                                <input type="text" data-name="cleanAddProfile" class="form-control" name="name" value="" placeholder="Example: Pedro Silva">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Tag Perfil</label>
                                                <input type="text" data-name="cleanAddProfile" class="form-control" name="tag_name" value="" placeholder="Example: Web Developer">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Tag Perfil 2</label>
                                                <input type="text" data-name="cleanAddProfile" class="form-control" name="tag_name2" value="" placeholder="Example: Analista de Sistemas">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Imagem Perfil</label>
                                                <input class="form-control" data-name="cleanAddProfile" type="file" name="img_profile">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Imagem Header</label>
                                                <input class="form-control" data-name="cleanAddProfile" type="file" name="img_header">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Sobre</label>
                                                <textarea class="form-control" data-name="cleanAddProfile" name="description" rows="5" placeholder="Texto..."></textarea>
                                            </div>
                                        </div>
                                        <div class="m-auto justify-content-center">
                                            <button type="button" id="cleanFormAddProfile" class="btn btn-sm btn-warning shadow">Cancelar</button>
                                            <button type="submit" class="btn btn-sm btn-primary shadow">Salvar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tab experience -->
                <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                    <div class="container mt-3 rounded-custom banner m-auto">
                        <div class="row text-white col p-4">
                            <h3 class=" text-center m-auto">Education</h3>
                            @foreach($education as $educ)
                                <div class="col-12 text-center">
                                    <p class="fw-bold">Education</p>
                                    <h5>{{ $educ->institution }}</h5>
                                    <h5>{{ $educ->type_course }}</h5>
                                    <h6>{{ $educ->course }}</h6>
                                    <p>{{ $educ->time_course }}</p>
                                    <div class="row justify-content-center">
                                        <div class="col-md-2 col-sm-12 p-1 text-center">
                                            <button class="btn btn-sm btn-light shadow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEditEducation{{ $educ->id }}" aria-expanded="false" aria-controls="collapseEditEducation{{$educ->id}}">
                                                Editar
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-12 p-1 text-center">
                                            <form>
                                                @csrf
                                                <input type="submit" class="btn btn-sm btn-danger shadow" formaction="{{ route('delete_education', $educ->id) }}" formmethod="post" value="Remover">
                                                @method("DELETE")
                                            </form>
                                        </div>
                                    </div>
                                    <div class="collapse text-center" id="collapseEditEducation{{ $educ->id }}">
                                        <div class="container">
                                            <form action="{{ route('update_education', $educ->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="row p-3">
                                                    <h3 class="text-center">Education</h3>
                                                    <div class="mb-3 col-6">
                                                        <label class="form-label">Instituição</label>
                                                        <input type="text" class="form-control" name="institution" value="{{ $educ->institution }}">
                                                    </div>
                                                    <div class="mb-3 col-6">
                                                        <label class="form-label">Curso</label>
                                                        <input type="text" class="form-control" name="course" value="{{ $educ->course }}">
                                                    </div>
                                                    <div class="mb-3 col-6">
                                                        <label class="form-label">Nível do Curso</label>
                                                        <input type="text" class="form-control" name="type_course" value="{{ $educ->type_course }}">
                                                    </div>
                                                    <div class="mb-3 col-6">
                                                        <label class="form-label">Período</label>
                                                        <input type="text" class="form-control" name="time_course" value="{{ $educ->time_course }}">
                                                    </div>
                                                    <div class="mb-3 col-6">
                                                        <label class="form-label">Status</label>
                                                        <input type="text" class="form-control" name="status" value="{{ $educ->status }}">
                                                    </div>
                                                </div>
                                                <div class="m-auto justify-content-center">
                                                    <button type="submit" class="btn btn-primary shadow">Salvar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="border-bottom border-white">
                                </div>
                            @endforeach
                            <div class="justify-content-center">
                                <div class="p-1 text-center">
                                    <button class="btn btn-sm btn-primary shadow m-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAddEducation" aria-expanded="false" aria-controls="collapseAddEducation">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                            <div class="collapse text-center" id="collapseAddEducation">
                                <div class="container">
                                    <form action="{{ route('create_education') }}" method="post">
                                        @csrf
                                        <div class="row p-1">
                                            <h3 class="text-center">Educação</h3>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Instituição</label>
                                                <input type="text" class="form-control shadow" data-name='cleanAddEducation' name="institution" value="" placeholder="Example: Estácio de Sá">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Curso</label>
                                                <input type="text" class="form-control shadow" data-name='cleanAddEducation' name="course" value="" placeholder="Example: Sistema da Informação">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Nível do Curso</label>
                                                <input type="text" class="form-control shadow" data-name='cleanAddEducation' name="type_course" value="" placeholder="Example: Bacharelado ou Tecnologo">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Período</label>
                                                <input type="text" class="form-control shadow" data-name='cleanAddEducation' name="time_course" value="" placeholder="Example: 2020 - 2025">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <select class="form-select"  name="status">
                                                    <option value="1">Cursando</option>
                                                    <option value="2">Concluído</option>
                                                    <option value="3">Interronpido</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="m-auto justify-content-center">
                                            <button type="button" id="cleanFormEducation" class="btn btn-warning shadow">Cancelar</button>
                                            <button type="submit" class="btn btn-primary shadow">Salvar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-3 rounded-custom banner m-auto">
                        <div class="row text-white col p-4">
                            <h3 class=" text-center m-auto">Experience</h3>
                            @foreach($experiences as $experience)
                                <div class="col-12 text-center">
                                    <p class="fw-bold">Experience</p>
                                    <h5>{{ $experience->job_title }}</h5>
                                    <p style="white-space: pre-wrap;">{{ $experience->description_experience }}</p>
                                    <a href="{{ $experience->link_reference }}" target="_blank" class="btn btn-sm btn-light shadow">Veja mais</a>
                                    <div class="row justify-content-center mt-1">
                                        <div class="col-md-2 col-sm-12 p-1 text-center">
                                            <button class="btn btn-sm btn-light shadow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEditExperience{{ $experience->id }}" aria-expanded="false" aria-controls="collapseEditExperience{{$experience->id}}">
                                                Editar
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-12 p-1 text-center">
                                            <form>
                                                @csrf
                                                <input type="submit" class="btn btn-sm btn-danger shadow" formaction="{{ route('delete_experience', $experience->id) }}" formmethod="post" value="Remover">
                                                @method("DELETE")
                                            </form>
                                        </div>
                                    </div>
                                    <div class="collapse text-center" id="collapseEditExperience{{ $experience->id }}">
                                        <div class="container">
                                            <form action="{{ route('update_experience', $experience->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="row p-1">
                                                    <h3 class="text-center">Nova Experiência</h3>
                                                    <div class="mb-3 col-md-6 col-sm-12">
                                                        <label class="form-label">Cargo | Função</label>
                                                        <input type="text" class="form-control shadow" name="job_title" value="{{ $experience->job_title }}">
                                                    </div>
                                                    <div class="mb-3 col-md-6 col-sm-12">
                                                        <label class="form-label">Link Referência</label>
                                                        <input type="text" class="form-control shadow" name="link_reference" value="{{ $experience->link_reference }}" placeholder="Example: Linkedin">
                                                    </div>
                                                    <div class="mb-3 p-1">
                                                        <label class="form-label text-white">Descrição</label>
                                                        <textarea class="form-control shadow" name="description_experience" id="textareaExperience" rows="5" placeholder="Fale um pouco de sua experiência.">{{ $experience->description_experience }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="m-auto justify-content-center">
                                                    <button type="submit" class="btn btn-primary shadow">Salvar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="border-bottom border-dark">
                                </div>
                            @endforeach
                            <div class="justify-content-center">
                                <div class="p-1 text-center">
                                    <button class="btn btn-sm btn-primary shadow m-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAddExperience" aria-expanded="false" aria-controls="collapseAddExperience">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                            <div class="collapse text-center" id="collapseAddExperience">
                                <div class="container">
                                    <form action="{{ route('create_experience') }}" method="post">
                                        @csrf
                                        <div class="row p-1">
                                            <h3 class="text-center">Nova Experiência</h3>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Cargo | Função</label>
                                                <input type="text" class="form-control shadow" data-name='cleanAddExperience' name="job_title" value="" placeholder="Example: Web Developer">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Link Referência</label>
                                                <input type="text" class="form-control shadow" data-name='cleanAddExperience' name="link_reference" value="" placeholder="Example: Linkedin">
                                            </div>
                                            <div class="mb-3 p-1">
                                                <label class="form-label text-white">Descrição</label>
                                                <textarea class="form-control shadow" data-name='cleanAddExperience' name="description_experience" rows="5" placeholder="Fale um pouco de sua experiência."></textarea>
                                            </div>
                                        </div>
                                        <div class="m-auto justify-content-center">
                                            <button type="button" id="cleanFormExperience" class="btn btn-warning shadow">Cancelar</button>
                                            <button type="submit" class="btn btn-primary shadow">Salvar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tab Skills -->
                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                    <div class="container text-color mt-3 m-auto">
                        <h3 class="text-center p-2 mb-2">Skills</h3>
                        <hr class="border-bottom border-dark">
                        <div class="text-center d-flex p-1">
                            <div class="row p-3">
                                <div class="row col-4 p-3">
                                    <h4 class="text-center mb-2">Soft Skills</h4>
                                    <ul class="list-group list-group-flush text-center">
                                        @foreach($soft_skills as $soft_skill)
                                        <li class="list-group-item bg-transparent text-color">
                                            {{ $soft_skill->name }}
                                            <span class="badge text-success">
                                                <form>
                                                @csrf
                                                <input type="submit" class="btn btn-sm btn-outline-danger border-0 shadow" formaction="{{ route('delete_soft_skill', $soft_skill->id) }}" formmethod="post" value="Remover">
                                                @method("DELETE")
                                            </form>
                                        </span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="row col-8 p-3">
                                    <h4 class="text-center mb-2">Hard Skills</h4>
                                    @foreach($skills as $skill)
                                        <div class="col m-auto text-center p-3">
                                            <p class="rounded-2 p-2" style="color:{{ $skill->color_skill }};">{!! $skill->icon_skill !!}</p>
                                            <p>{{ $skill->name }}</p>
                                            <form>
                                                @csrf
                                                <input type="submit" class="btn btn-sm btn-outline-danger border-0 shadow" formaction="{{ route('delete_skill', $skill->id) }}" formmethod="post" value="Remover">
                                                @method("DELETE")
                                            </form>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid m-auto">
                            <div class="row text-center bg-skills rounded-2 shadow mb-3">
                                <div class="col-md-6 col-sm-12 p-2">
                                    <h3 class="text-center p-3">Soft Skill</h3>
                                    <form action="{{ route('create_soft_skill') }}" method="post">
                                        @csrf
                                        <div class="row p-3 ">
                                            <div class="mb-3 col-12">
                                                <label class="form-label">Descrição</label>
                                                <input type="text" class="form-control shadow" name="name" value="" placeholder="Example: Força de vontade ">
                                            </div>
                                            <div class="mb-3 col-1 m-auto">
                                                <button type="submit" class="btn btn-sm btn-success shadow">Salvar</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-6 col-sm-12 p-2">
                                    <h3 class="text-center p-3">Hard Skill</h3>
                                    <form action="{{ route('create_skill') }}" method="post">
                                        @csrf
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <label class="form-label">Descrição</label>
                                                <input type="text" class="form-control shadow" name="name" value="" placeholder="Example: HTML5">
                                            </div>
                                            <div class="col-sm-12 col-md-10">
                                                <label class="form-label">Icone</label>
                                                <input type="text" class="form-control shadow" name="icon_skill" value="" placeholder='Example: <i class="fab fa-html5 fa-3x"></i>'>
                                                <i class="p-3 mt-2">OBS: Utilize Font Awesome no campo icone. <a class="btn btn-sm btn-warning" href="https://fontawesome.com/v5.15/icons?d=gallery&p=3&m=free" target="_blank">Consulte aqui</a></i>
                                                <button type="submit" class="btn btn-sm btn-success shadow">Salvar</button>
                                            </div>
                                            <div class="col-sm-12 col-md-2 rounded mt-3">
                                                <label class="form-label">Color</label>
                                                <input type="color" class="form-control-xl shadow" name="color_skill" value="#25AF23">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tab Awards -->
                <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                    <div class="container text-color mt-3">
                        <h3 class="mb-1 text-center">Awards e Certifications</h3>
                        <hr class="border-bottom border-dark">
                        <div class="row justify-content-center">
                            @foreach($awards as $key => $award)
                                <div class="col-md-3 col-sm-12 mr-1 mb-1">
                                    <div class="card awards border-0 shadow text-center p-3">
                                        <img src="{{ env('APP_URL') }}/storage/{{ $award->certification }}" class="card-img-top rounded-custom p-1" alt="..." data-bs-toggle="modal" data-bs-target="#modalCertification{{ $key }}">
                                        <a class="m-auto p-3" target="_blank" href="{{ $award->link }}">{{ $award->name }}</a>
                                        <form>
                                            @csrf
                                            <input type="submit" class="btn btn-sm btn-outline-danger border-0 shadow" formaction="{{ route('delete_award', $award->id) }}" formmethod="post" value="Remover">
                                            @method("DELETE")
                                        </form>
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
                        <div class="row col">
                            <div class="col col-sm-12">
                                <h3 class="text-center m-2">Adicionar Conquistas</h3>
                                <form action="{{ route('create_award') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row col p-3">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="form-label">Curso ou Certificação</label>
                                            <input type="text" class="form-control shadow" placeholder="Example: NodeJS" name="name">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="form-label">Instituição</label>
                                            <input type="text" class="form-control shadow" name="institution" value="" placeholder="Example: Alura">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="mb-3 col-md-6 col-sm-12">
                                            <label class="form-label">Link da Certificação</label>
                                            <input type="text" class="form-control shadow" name="link"  value="" placeholder="https://www...">
                                        </div>
                                        <div class="mb-3 col-md-6 col-sm-12">
                                            <label class="form-label">Certificado</label>
                                            <input type="file" class="form-control shadow" name="certification"  value="" placeholder="img.jpg">
                                            <p class="p-3 bg-dark rounded-pill mt-2">OBS: Adicione apenas arquivos de imagem</p>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-1 m-auto">
                                        <button type="submit" class="btn btn-sm btn-primary shadow">Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tab Projects -->
                <div class="tab-pane fade" id="Projects" role="tabpanel" aria-labelledby="Projects-tab">
                    <div class="container-fluid text-color">
                        <div class="row text-center">
                            <h3 class="mt-3">Projetos</h3>
                            <div class="col-3 p-1 m-auto">
                                <button class="btn btn-sm btn-primary shadow m-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAddProject" aria-expanded="false" aria-controls="collapseAddProject">
                                    Adicionar
                                </button>
                            </div>
                        </div>
                        <div class="collapse text-center" id="collapseAddProject">
                            <div class="container text-color">
                                <form action="{{ route('create_project') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row p-1">
                                        <h3 class="text-center">Novo Projeto</h3>
                                        <div class="row p-1">
                                            <div class="mb-3 col-md-12 col-sm-12">
                                                <label  class="form-label">Nome Projeto</label>
                                                <input type="text" data-name="cleanAddProject" class="form-control shadow" name="title" value="" placeholder="Nome Projeto">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Link Projeto</label>
                                                <input type="text" data-name="cleanAddProject" class="form-control shadow" name="url_project" value="" placeholder="Example: GitHub">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label class="form-label">Link Web</label>
                                                <input type="text" data-name="cleanAddProject" class="form-control shadow" name="url_project_web" value="#" placeholder="Link Web">
                                            </div>
                                            <div class="mb-3 col-md-12 col-sm-12">
                                                <label class="form-label">Imagens Projeto</label>
                                                <input class="form-control shadow" data-name="cleanAddProject" type="file" name="img_project[]" multiple>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Sobre o Pojeto</label>
                                                <textarea class="form-control shadow" data-name="cleanAddProject" name="description" rows="5" placeholder="Texto..."></textarea>
                                            </div>
                                        </div>
                                        <div class="m-auto justify-content-center">
                                            <button type="button" id="cleanFormAddProject" class="btn btn-sm btn-warning shadow">Cancelar</button>
                                            <button type="submit" class="btn btn-sm btn-primary shadow">Salvar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row p-3">
                            @foreach($projects as $chave => $project)
                                @if($chave %2 == 0)
                                    <section class="container text-color rounded-custom">
                                        <div class="row p-3">
                                            <div class="col-md-6 col-sm-12 float-start m-auto">
                                                <div id="carousel{{ $chave }}" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        @foreach($project->imgProject as $key => $images)
                                                            <button type="button" data-bs-target="#carousel{{ $chave }}" data-bs-slide-to="{{ $key }}" aria-label="{{ $key }}" class="bg-secondary {{$key == 0 ? 'active' : '' }} " aria-current=" {{$key == 0 ? 'true' : '' }}"></button>
                                                        @endforeach
                                                    </div>
                                                    <div class="carousel-inner rounded shadow">
                                                        @foreach($project->imgProject as $key => $images)
                                                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                                                <img src="{{ env('APP_URL') }}/storage/{{ $images->img_project }}" class="d-block img-carousel">
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
                                            <div class="col-md-6 col-sm-12 float-end m-auto text-center">
                                                <h5 class="fw-bold text-success">{{ $project->title }}</h5>
                                                <strong><p style="white-space: pre-wrap;">{{ $project->description }}</p></strong>
                                                <a class="btn btn-sm btn-light mb-1 shadow" target="_blank" href="{{ $project->url_project_web }}" >Confira</a>
                                                <a class="btn btn-sm btn-light mb-1 shadow" target="_blank" href="{{ $project->url_project }}" >Projeto</a>
                                                <div class="col-sm-2 m-auto p-1 mt-3">
                                                    <form>
                                                        @csrf
                                                        <input type="submit" class="btn btn-sm btn-danger shadow" formaction="{{ route('delete_project', $project->id) }}" formmethod="post" value="Remover Projeto">
                                                        @method("DELETE")
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container mt-3">
                                            <hr class="border-bottom border-white">
                                        </div>
                                    </section>
                                @else
                                    <section class="container text-color rounded-custom">
                                        <div class="row p-3">
                                            <div class="col-md-6 col-sm-12 float-end m-auto text-center">
                                                <h5 class="fw-bold text-success">{{ $project->title }}</h5>
                                                <strong><p style="white-space: pre-wrap;">{{ $project->description }}</p></strong>
                                                <a class="btn btn-sm btn-light mb-1 shadow" target="_blank" href="{{ $project->url_project_web }}" >Confira</a>
                                                <a class="btn btn-sm btn-light mb-1 shadow" target="_blank" href="{{ $project->url_project }}" >Projeto</a>
                                                <div class="col-sm-2 m-auto p-1 mt-3">
                                                    <form>
                                                        @csrf
                                                        <input type="submit" class="btn btn-sm btn-danger shadow" formaction="{{ route('delete_project', $project->id) }}" formmethod="post" value="Remover Projeto">
                                                        @method("DELETE")
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 float-start m-auto">
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
                                        <div class="container mt-3">
                                            <hr class="border-bottom border-white">
                                        </div>
                                    </section>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- tab Interests -->
                <div class="tab-pane fade" id="interests" role="tabpanel" aria-labelledby="interests-tab">
                    <div class="container text-color">
                        <div class="row m-auto p-3">
                            <h3 class="mb-5 text-center">Interesses</h3>
                            <div class="text-center">
                                @foreach($interests as $interest)
                                    <strong><p style="white-space: pre-wrap;">{{ $interest->description }}</p></strong>
                                    <div class="row justify-content-center mt-1">
                                        <div class="col-md-1 col-sm-2 text-center">
                                            <button class="btn btn-sm btn-light shadow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEditInterests{{ $interest->id }}" aria-expanded="false" aria-controls="collapseEditInterests{{$interest->id}}">
                                                Editar
                                            </button>
                                        </div>
                                        <div class="col-md-1 col-sm-2 text-center">
                                            <form>
                                                @csrf
                                                <input type="submit" class="btn btn-sm btn-danger shadow" formaction="{{ route('delete_interest', $interest->id) }}" formmethod="post" value="Remover">
                                                @method("DELETE")
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="border-bottom border-dark">
                                    <div class="collapse text-center" id="collapseEditInterests{{$interest->id}}">
                                        <form action="{{ route('update_interest', $interest->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row p-3">
                                                <div class="mb-3">
                                                    <label class="form-label">Interests</label>
                                                    <textarea class="form-control" name="description"rows="5">{{ $interest->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="m-auto justify-content-center">
                                                <button type="submit" class="btn btn-primary shadow">Salvar</button>
                                            </div>
                                        </form>
                                        <hr class="border-bottom border-dark">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Adicinar Inreresses -->
                    <form action="{{ route('create_interest') }}" method="post">
                        @csrf
                        <div class="col-2 m-auto text-center">
                            <button class="btn btn-sm btn-primary shadow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInterests" aria-expanded="false" aria-controls="collapseInterests">
                                Adicionar
                            </button>
                        </div>
                        <div class="collapse text-color" id="collapseInterests">
                            <div class="mb-3 p-3">
                                <label class="form-label">Interests</label>
                                <textarea class="form-control" name="description" id="textareaInteresses" rows="5"></textarea>
                            </div>
                            <div class="col-4 m-auto">
                                <button type="button" id="limparTextarea" class="btn btn-warning shadow">Cancelar</button>
                                <button type="submit" class="btn btn-primary shadow">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- tab Contact -->
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="container text-color">
                        <div class="row col p-3">
                            <h3 class="mb-5 text-center">Contact</h3>
                            <hr class="border-bottom border-dark">
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
                                        <label class="form-label">Nome</label>
                                        <input type="text" class="form-control rounded-pill" name="name" placeholder="None" required>
                                    </div>
                                    <div class="col-md-6 p-1">
                                        <label class="form-label">Telefone</label>
                                        <input type="text" class="form-control rounded-pill" name="tel" placeholder="(21) 99999-9999" required>
                                    </div>
                                    <div class="col-12 p-1">
                                        <label class="form-label">E-mail</label>
                                        <input type="email" class="form-control rounded-pill" name="email" placeholder="email@email.com" required>
                                    </div>
                                    <div class="form-check mb-3 p-1 text-center">
                                        <label class="form-label">Mensagem</label>
                                        <textarea name="message" rows="5" class="form-control rounded" placeholder="Coloque aqui sua mensagem..." required></textarea>
                                    </div>
                                    <div class="col-12 p-1 text-center">
                                        <button type="submit" class="btn btn-sm btn-light shadow">Enviar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 d-sm-none d-md-block p-3 text-color m-auto">
                                {{--                                <iframe class="rounded-custom map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.86034076902!2d-43.41874938450831!3d-22.77056363875018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x996688796fd8c3%3A0x9c37e0468461879b!2sAv.%20Ant%C3%B4nio%20Borges%2C%20323%20-%20Jacutinga%2C%20Mesquita%20-%20RJ%2C%2026564-030!5e0!3m2!1spt-BR!2sbr!4v1635635568647!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>--}}
                                <div class="mb-2 text-center">
                                    <i class="fas fa-map-marker-alt"></i> <strong>Mesquita - RJ</strong><br>
                                    <i class="fas fa-phone-square-alt text-color"></i><strong> +55 (21) 98298-2487</strong><br>
                                    <a class="nav-link" href="https://api.whatsapp.com/send?phone=5521982982487" target="_blank"><i class="fab fa-whatsapp text-color"> </i><strong>WhatsApp</strong></a>
                                    <a class="nav-link" href="skype:joao.f.ramos"> <i class="fab fa-skype text-color"></i><strong> Skype</strong></a>
                                    <a class="nav-link" href="mailto:joao.ramos1988@outlook.com"> <i class="fas fa-envelope text-color"></i><strong> joao.ramos1988@outlook.com</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @if($messge = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Projeto inserido com sucesso! </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>

<!-- modal password -->
<div class="modal fade" id="password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="passwordLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="passwordLabel">Trocar Senha</h5><strong>{{ Auth::user()->name }}</strong>
            </div>
            <form action="{{route('update_password', Auth::user()->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control bg-secondary text-white" id="floatingPassword" data-name="updatePasswordAdmin" name="password" placeholder="Senha">
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control bg-secondary text-white" id="floatingPasswordConfirm" data-name="updatePasswordAdmin" name="password_confirmation" placeholder="Cofirmar senha">
                        <label for="floatingPasswordConfirm">Cofirmar senha</label>
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-sm btn-warning" id="clianFormUpdatePasswordAdmin" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal Create User -->
<div class="modal fade" id="createUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createUserLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="createUserLabel">Cadastro de Usuário</h5><strong><i class="fas fa-user"></i></strong>
            </div>
            <form method="POST" action="{{ route('admin_register') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control bg-secondary text-white @error('name') is-invalid @enderror"  id="floatingName" data-name="cresteUserAdmin" placeholder="Nome" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <label for="floatingName">Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control bg-secondary text-white @error('email') is-invalid @enderror" id="floatingEmail" data-name="cresteUserAdmin" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <label for="floatingEmail">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control bg-secondary text-white @error('password') is-invalid @enderror" placeholder="Senha" data-name="cresteUserAdmin" name="password" required autocomplete="new-password">
                        <label>Senha</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control bg-secondary text-white" data-name="cresteUserAdmin" placeholder="Confirmar senha" name="password_confirmation" required autocomplete="new-password">
                        <label>Confirmar senha</label>
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-sm btn-warning" id="clianFormCresteUserAdmin" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
