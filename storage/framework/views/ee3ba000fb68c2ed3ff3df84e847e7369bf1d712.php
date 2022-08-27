;
<div class="container">
    <div class="p-3">
        <div class="col-md-12">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="Profile-tab" data-bs-toggle="tab" data-bs-target="#Profile" type="button" role="tab" aria-controls="Profile" aria-selected="true">Perfil</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="false">Experiência</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="false">Habilidades</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">Projetos</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="interests-tab" data-bs-toggle="tab" data-bs-target="#interests" type="button" role="tab" aria-controls="interests" aria-selected="false">Interesses</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contato</button>
                </li>
            </ul>
            <!-- Conteudo das Tabs -->
            <div class="tab-content" id="myTabContent">
                <!-- tab Profile -->
                <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="Profile-tab">
                    <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                        <div class="col-md-5 col-sm-12 m-auto text-center text-white">
                            <span class=""><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src=" /storage/<?php echo e($profile->img_profile); ?>" alt="..." style="width: 200px; height: 200px;" /></span>
                            <h3><?php echo e($profile->name); ?> | <?php echo e($profile->tag_name); ?></h3>
                            <p><?php echo e($profile->description); ?></p>
                        </div>
                        <div class="col-md-7 d-sm-none d-md-block m-auto p-3">
                            <img src="/storage/<?php echo e($profile->img_header); ?>" class="img-fluid" alt="header2.png"">
                        </div>-->
                        <!-- Button trigger modal profile -->
                        <div class="col-2 m-auto text-center">
                            <button type="button" class="btn btn-lg btn-light" data-bs-toggle="modal" data-bs-target="#modalProfile" >Editar</button>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>


                <!-- tab experience -->
                <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                    <div class="container mt-3 rounded-custom banner m-auto">
                        <div class="row text-white col p-4">
                            <h3 class=" text-center m-auto">Experiência e Educação</h3>
                            <div class="col-md-6 col-sm-12 text-center border-end border--white">
                                <p class="fw-bold">Educação</p>
                                <h5>Universidade Estácio de Sá</h5>
                                <h5>Graduação Tecnológica</h5>
                                <h6>Analise e Desenvolvimento de Sistemas - Cursando</h6>
                                <p>2020 - 2022</p>
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p class="fw-bold">Experiência</p>
                                <h5>Analista / Técinico de Suporte TI</h5>
                                <h5>Web Developer jr</h5>
                                <p>Trabalho a pouco mais de 8 anos na área de Tecnologia da Informação, e durante esse período tive a oportunidade de aprender, desenvolver e compartilhar experiencias com colegas de equipe.</p>
                                <a href="https://linkedin.com/in/joao-f-ramos1104" target="_blank" class="btn btn-sm btn-light rounded shadow">Veja mais</a>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal Experience -->
                    <div class="col-2 mt-3 m-auto text-center">
                        <button type="button" class="btn btn-lg btn-light" data-bs-toggle="modal" data-bs-target="#modalExperience" >Editar</button>
                    </div>
                </div>


                <!-- tab Skills -->
                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                    <div class="container mt-3 m-auto">
                        <div class="row p-3">
                            <div class="col m-auto">
                                <h3 class="text-white text-center p-2 mb-2">Habilidades</h3>
                                <hr class="border-bottom border-info">
                                <div id="carousel4" class="carousel slide" data-bs-ride="carousel4">
                                    <div class="carousel-inner rounded">
                                        <div class="carousel-item active">
                                            <div class="row p-1 text-white">
                                                <div class="col-md-2 col-sm-2 d-flex justfy-content-center p-2">
                                                    <div class="text-center m-auto">
                                                        <i class="fab fa-html5 fa-3x"></i>
                                                        <h6>HTML5</h6>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 d-flex justfy-content-center p-2">
                                                    <div class="text-center m-auto">
                                                        <i class="fab fa-css3-alt fa-3x"></i>
                                                        <h5>CSS3</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 d-flex justfy-content-center p-2">
                                                    <div class="text-center m-auto">
                                                        <i class="fab fa-js-square fa-3x"></i>
                                                        <h5>JavaScript</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 d-flex justfy-content-center p-2">
                                                    <div class="text-center m-auto">
                                                        <i class="fab fa-angular fa-3x"></i>
                                                        <h5>Angular</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 d-flex justfy-content-center p-2">
                                                    <div class="text-center m-auto">
                                                        <i class="fab fa-php fa-3x"></i>
                                                        <h5>PHP</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 d-flex justfy-content-center p-2">
                                                    <div class="text-center m-auto">
                                                        <i class="fab fa-node-js fa-3x"></i>
                                                        <h5>NodeJS</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="row p-1 text-white">
                                                <div class="col-md-2 col-sm-2 d-flex justfy-content-center p-2">
                                                    <div class="text-center m-auto">
                                                        <i class="fab fa-laravel fa-3x"></i>
                                                        <h5>Laravel</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 d-flex justfy-content-center p-2">
                                                    <div class="text-center m-auto">
                                                        <i class="fab fa-git fa-3x"></i>
                                                        <h5>Git</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 d-flex justfy-content-center p-2">
                                                    <div class="text-center m-auto">
                                                        <i class="fas fa-database fa-3x"></i>
                                                        <h5>Banco de Dados</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 d-flex justfy-content-center p-2">
                                                    <div class="text-center m-auto">
                                                        <i class="fas fa-sync fa-3x text-success"></i>
                                                        <h5>Em breve...</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn float-start" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="btn float-end" type="button" data-bs-target="#carousel4" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-3 text-center text-white m-auto">
                            <h3 class="mb-5">Conquistas e Certificações</h3>
                            <hr class="border-bottom border-dark">
                            <ul class="nav flex-column mb-0">
                                <span class="me-1"><i class="fas fa-trophy text-warning"></i></span>
                                <li class="nav-item">
                                    <a class="nav-link awards" target="_blank" href="https://ude.my/UC-JX3VVIWM">Desenvolvimento web - Udemy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link awards" target="_blank" href="https://hcode.com.br/certificates/202003PHP700005E6AD81738BA2">PHP - Udemy/Hcode</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link awards" target="_blank" href="https://ude.my/UC-fe15b81c-b60b-4d0c-9637-a55bb366fa1b">Laravel - Udemy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link awards" target="_blank" href="https://ude.my/UC-2fcc4d80-16ab-42e7-9b9c-0d3605997871">Banco de dados e SQL - Udemy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link awards" target="_blank" href="#">Python do Basico ao Avançado - Udemy</a>
                                </li>
                                <br>
                                <li>
                                    <span class="me-1"><i class="fas fa-sync text-success"></i></span>
                                    Em breve novas conquistas...!
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Button trigger modal Experience -->
                    <div class="col-2 mt-3 m-auto text-center">
                        <button type="button" class="btn btn-lg btn-light" data-bs-toggle="modal" data-bs-target="#modalExperience" >Editar</button>
                    </div>
                </div>


                <!-- tab Projects -->
                <div class="tab-pane fade" id="Projects" role="tabpanel" aria-labelledby="Projects-tab">
                    <div class="container-fluid">
                        <!-- Button trigger modal Projects -->
                        <div class="col-2 mt-3 m-auto text-center">
                            <button type="button" class="btn btn-lg btn-light" data-bs-toggle="modal" data-bs-target="#modalProjects" >Novo</button>
                        </div>
                        <div class="row p-3">
                            <section class="col-md-6 rounded-custom art-cont">
                                <div class="row p-3">
                                    <div class="col-md-6 col-sm-12 float-start m-auto">
                                        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner rounded shadow">
                                                <div class="carousel-item active">
                                                    <img src="assets/img/proj-1/1.jpg" class="d-block img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/proj-1/2.jpg" class="d-block img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/proj-1/3.jpg" class="d-block img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/proj-1/4.jpg" class="d-block img-fluid" alt="..." style="width: 100%; height: 200px;">
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
                                        <h5 class="fw-bold">Projeto Lista de compras</h5>
                                        <p>Com esse App é possivel cadastrar cliente e gerar lista de compras realizados pelo WhatsApp com intuito de facilitar mantendo um controle para entrega Delivery com geração de relatórios.</p>
                                        <button class="btn btn-sm btn-light mb-1 shadow">Confira</button>
                                    </div>
                                    <div class="row col m-auto justify-content-center">
                                        <button class="col-2 m-1 btn btn-sm btn-danger mb-1 shadow">Remover</button>
                                        <button class="col-2 m-1 btn btn-sm btn-light mb-1 shadow">Editar</button>
                                    </div>
                                </div>
                            </section>
                            <section class="col-md-6 rounded-custom art-cont">
                                <div class="row p-3">
                                    <div class="col-md-6 col-sm-12 float-start m-auto">
                                        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner rounded shadow">
                                                <div class="carousel-item active">
                                                    <img src="assets/img/proj-1/1.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/proj-1/2.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/proj-1/3.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/proj-1/4.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 100%; height: 200px;">
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
                                        <h5 class="fw-bold">Projeto Lista de compras</h5>
                                        <p>Com esse App é possivel cadastrar cliente e gerar lista de compras realizados pelo WhatsApp com intuito de facilitar mantendo um controle para entrega Delivery com geração de relatórios.</p>
                                        <button class="btn btn-sm btn-light mb-1 shadow">Confira</button>
                                    </div>
                                    <div class="row col m-auto justify-content-center">
                                        <button class="col-2 m-1 btn btn-sm btn-danger mb-1 shadow">Remover</button>
                                        <button class="col-2 m-1 btn btn-sm btn-light mb-1 shadow">Editar</button>
                                    </div>
                                </div>
                            </section>

                            <section class="col-md-6 rounded-custom art-cont2">
                                <div class="row p-3">
                                    <div class="col-md-6 col-sm-12 float-start text-white m-auto text-center">
                                        <h5 class="fw-bold">Projeto Help Desk</h5>
                                        <p>Com essa aplicação e possível abrir tickets de chamados em diferentes categorias com notificação por e-mail e geração de relatorios.</p>
                                        <button class="btn btn-sm btn-light mb-1 shadow">Confira</button>
                                    </div>
                                    <div class="col-md-6 col-sm-12 float-end m-auto">
                                        <div id="carousel2" class="carousel slide" data-bs-ride="carousel2">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner rounded shadow">
                                                <div class="carousel-item active">
                                                    <img src="assets/img/article2.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/article2.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/article2.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row col m-auto justify-content-center">
                                        <button class="col-2 m-1 btn btn-sm btn-danger mb-1 shadow">Remover</button>
                                        <button class="col-2 m-1 btn btn-sm btn-light mb-1 shadow">Editar</button>
                                    </div>
                                </div>
                            </section>
                            <section class="col-md-6 rounded-custom art-cont2">
                                <div class="row p-3">
                                    <div class="col-md-6 col-sm-12 float-start text-white m-auto text-center">
                                        <h5 class="fw-bold">Projeto Help Desk</h5>
                                        <p>Com essa aplicação e possível abrir tickets de chamados em diferentes categorias com notificação por e-mail e geração de relatorios.</p>
                                        <button class="btn btn-sm btn-light mb-1 shadow">Confira</button>
                                    </div>
                                    <div class="col-md-6 col-sm-12 float-end m-auto">
                                        <div id="carousel2" class="carousel slide" data-bs-ride="carousel2">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner rounded shadow">
                                                <div class="carousel-item active">
                                                    <img src="assets/img/article2.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/article2.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/article2.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 100%; height: 200px;">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row col m-auto justify-content-center">
                                        <button class="col-2 m-1 btn btn-sm btn-danger mb-1 shadow">Remover</button>
                                        <button class="col-2 m-1 btn btn-sm btn-light mb-1 shadow">Editar</button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>


                <!-- tab Interests -->
                <div class="tab-pane fade" id="interests" role="tabpanel" aria-labelledby="interests-tab">
                    <div class="container">
                        <div class="row text-white m-auto p-3">
                            <h3 class="mb-5 text-center">Interesses</h3>
                            <hr class="border-bottom border-dark">
                            <div class="text-center">
                                <p>Além de Técnico estou entrando no setor de Desenvolvimento Web e sou amante de novas tecnologias e Sistemas open source e games, focado em aprender, desenvolver e compartilhar.</p>
                                <p>No tempo livre, exploro os mais recentes avanços tecnológicos no mundo do desenvolvimento e novidades em tecnologias, buscando aprimorar meu conhecimento e ser um ótimo profissional.</p>
                                <p>Quando forçado ao isolamento devido a pandemia, eu sigo uma série de filmes de ficção científica, fantasia, um pouco de jogos e animes.</p>
                                <p class="mb-0">Pretendo crescer profissionalmente e ser bem-sucedido, sempre colocado o bem-estar da família em primeiro lugar.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal Experience -->
                    <div class="col-2 mt-3 m-auto text-center">
                        <button type="button" class="btn btn-lg btn-light" data-bs-toggle="modal" data-bs-target="#modalInterests" >Editar</button>
                    </div>
                </div>

                <!-- tab Contact -->
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="container">
                        <div class="row col text-white p-3">
                            <h3 class="mb-5 text-center">Contato</h3>
                            <hr class="border-bottom border-dark">
                            <div class="col-md-6 p-3">
                                <h4 class="text-center mb-2">Deixe sua mensagem</h4>
                                <form class="row g-3">
                                    <div class="col-md-6 p-1">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control rounded-pill" id="nome" placeholder="None">
                                    </div>
                                    <div class="col-md-6 p-1">
                                        <label for="sobrenome" class="form-label">Sobrenome</label>
                                        <input type="text" class="form-control rounded-pill" id="sobrenome" placeholder="Sobrenome">
                                    </div>
                                    <div class="col-12 p-1">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control rounded-pill" id="email" placeholder="email@email.com">
                                    </div>
                                    <div class="form-check mb-3 p-1 text-center">
                                        <label id="mensagers_label" for="mensager" class="form-label">Mensagem</label>
                                        <textarea id="mensager" name="mensager" rows="5" class="form-control rounded" placeholder="Coloque aqui sua mensagem..."></textarea>
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
                    <!-- Button trigger modal Experience -->
                    <div class="col-2 mt-3 m-auto text-center">
                        <button type="button" class="btn btn-lg btn-light" data-bs-toggle="modal" data-bs-target="#modalContact" >Editar</button>
                    </div>
                </div>


            </div>
        </div>
    </div>
 </div>





<!-- Modal Profile -->
<div class="modal fade" id="modalProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalProfileLabel" aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalProfileLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="/admin/<?php echo e($profile->id); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row p-3">

                        <div class="mb-3 col-6">
                            <input id="id" type="hidden" class="form-control" value="<?php echo e($profile->id); ?>">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo e($profile->name); ?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="tag_profile" class="form-label">Tag Perfil</label>
                            <input type="text" class="form-control" name="tag_name" id="tag_profile" value="<?php echo e($profile->tag_name); ?>">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="img_profile" class="form-label">Imagem Perfil</label>
                            <input class="form-control" type="file" name="img_profile" id="img_profile">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="img_header" class="form-label">Imagem Header</label>
                            <input class="form-control" type="file" name="img_header" id="img_header">
                        </div>
                        <div class="mb-3">
                            <label for="about" class="form-label">Sobre</label>
                            <textarea class="form-control" name="description" id="about" rows="5"><?php echo e($profile->description); ?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joaor\Área de Trabalho\laravel\portifolio\resources\views//admin/admin.blade.php ENDPATH**/ ?>