;

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <div class="p-3">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
        <div class="col-md-12">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="Profile-tab" data-bs-toggle="tab" data-bs-target="#Profile" type="button" role="tab" aria-controls="Profile" aria-selected="true">Perfil</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="false">Experiência | Educação</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="false">Habilidades</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards" type="button" role="tab" aria-controls="awards" aria-selected="false">Certificações | Conquistas</button>
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

            <!-- Tabs -->
            <div class="tab-content" id="myTabContent">
                <!-- tab Profile -->
                <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="Profile-tab">
                    <div class="container">
                        <h3 class=" text-center text-white mt-3">Perfil</h3>
                        <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <div class="col-md-5 col-sm-12 m-auto text-center text-white">
                                <span class=""><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo e(env('APP_URL')); ?>/storage/<?php echo e($profile->img_profile); ?>" alt="..." style="width: 200px; height: 200px;" /></span>
                                <h3><?php echo e($profile->name); ?> | <?php echo e($profile->tag_name); ?></h3>
                                <p><?php echo e($profile->description); ?></p>
                            </div>
                            <div class="col-md-7 d-sm-none d-md-block m-auto p-3">
                                <img src="<?php echo e(env('APP_URL')); ?>/storage/<?php echo e($profile->img_header); ?>" class="img-fluid rounded-custom" alt="header2.png">
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-1 col-sm-2 text-center">
                                    <button class="btn btn-sm btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEditProfile<?php echo e($profile->id); ?>" aria-expanded="false" aria-controls="collapseEditProfile<?php echo e($profile->id); ?>">
                                        Editar
                                    </button>
                                </div>
                                <div class="col-md-1 col-sm-2 text-center">
                                    <form>
                                        <?php echo csrf_field(); ?>
                                        <input type="submit" class="btn btn-sm btn-danger" formaction="/admin/profiles/<?php echo e($profile->id); ?>" formmethod="post" value="Remover">
                                        <?php echo method_field("DELETE"); ?>
                                    </form>
                                </div>
                            </div>
                            <div class="collapse text-center" id="collapseEditProfile<?php echo e($profile->id); ?>">
                                <div class="container">
                                    <form action="/admin/profiles/<?php echo e($profile->id); ?>" method="post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="row p-1 text-white">

                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <input id="id" type="hidden" class="form-control" value="<?php echo e($profile->id); ?>">
                                                <label for="name" class="form-label">Nome</label>
                                                <input type="text" class="form-control" name="name" id="name" value="<?php echo e($profile->name); ?>">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="tag_profile" class="form-label">Tag Perfil</label>
                                                <input type="text" class="form-control" name="tag_name" id="tag_profile" value="<?php echo e($profile->tag_name); ?>">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="img_profile" class="form-label">Imagem Perfil</label>
                                                <input class="form-control" type="file" name="img_profile" id="img_profile">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="img_header" class="form-label">Imagem Header</label>
                                                <input class="form-control" type="file" name="img_header" id="img_header">
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Sobre</label>
                                                <textarea class="form-control" name="description" id="description" rows="5"><?php echo e($profile->description); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer m-auto justify-content-center">
                                            <button type="button" class="btn btn-warning">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr class="border-bottom border-white">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="row text-center">
                                <div class="col-3 p-1 m-auto">
                                    <button class="btn btn-sm btn-primary m-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAddProfile" aria-expanded="false" aria-controls="collapseAddProfile">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        <div class="collapse text-center" id="collapseAddProfile">
                            <div class="container">
                                <form action="/admin/profiles/" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row p-1 text-white">
                                        <h3 class="text-center">Perfil</h3>
                                        <div class="row p-1">
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <input id="id" type="hidden" class="form-control" value="">
                                                <label for="name" class="form-label">Nome</label>
                                                <input type="text" data-name="cleanAddProfile" class="form-control" name="name" id="name" value="" placeholder="Example: Pedro Silva">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="tag_profile" class="form-label">Tag Perfil</label>
                                                <input type="text" data-name="cleanAddProfile" class="form-control" name="tag_name" id="tag_profile" value="" placeholder="Example: Web Developer">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="img_profile" class="form-label">Imagem Perfil</label>
                                                <input class="form-control" data-name="cleanAddProfile" type="file" name="img_profile" id="img_profile">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="img_header" class="form-label">Imagem Header</label>
                                                <input class="form-control" data-name="cleanAddProfile" type="file" name="img_header" id="img_header">
                                            </div>
                                            <div class="mb-3">
                                                <label for="about" class="form-label">Sobre</label>
                                                <textarea class="form-control" data-name="cleanAddProfile" name="description" id="about" rows="5" placeholder="Texto..."></textarea>
                                            </div>
                                        </div>
                                        <div class="m-auto justify-content-center">
                                            <button type="button" id="clianFormAddProfile" class="btn btn-sm btn-warning">Cancelar</button>
                                            <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
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
                            <h3 class=" text-center m-auto">Educação</h3>
                            <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $educ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 text-center">
                                <p class="fw-bold">Educação</p>
                                <h5><?php echo e($educ->institution); ?></h5>
                                <h5><?php echo e($educ->type_course); ?></h5>
                                <h6><?php echo e($educ->course); ?></h6>
                                <p><?php echo e($educ->time_course); ?></p>
                                <div class="row justify-content-center">
                                    <div class="col-md-1 col-sm-2 text-center">
                                        <button class="btn btn-sm btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEditEducation<?php echo e($educ->id); ?>" aria-expanded="false" aria-controls="collapseEditEducation<?php echo e($educ->id); ?>">
                                            Editar
                                        </button>
                                    </div>
                                    <div class="col-md-1 col-sm-2 text-center">
                                        <form>
                                            <?php echo csrf_field(); ?>
                                            <input type="submit" class="btn btn-sm btn-danger" formaction="/admin/education/<?php echo e($educ->id); ?>" formmethod="post" value="Remover">
                                            <?php echo method_field("DELETE"); ?>
                                        </form>
                                    </div>
                                </div>
                                <div class="collapse text-center" id="collapseEditEducation<?php echo e($educ->id); ?>">
                                    <div class="container">
                                        <form action="/admin/education/<?php echo e($educ->id); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <div class="row p-3">
                                                    <h3 class="text-center">Educação</h3>
                                                    <div class="mb-3 col-6">
                                                        <input id="id" type="hidden" class="form-control" value="<?php echo e($educ->id); ?>">
                                                        <label for="institution" class="form-label">Instituição</label>
                                                        <input type="text" class="form-control" name="institution" id="institution" value="<?php echo e($educ->institution); ?>">
                                                    </div>
                                                    <div class="mb-3 col-6">
                                                        <label for="course" class="form-label">Curso</label>
                                                        <input type="text" class="form-control" name="course" id="cource" value="<?php echo e($educ->course); ?>">
                                                    </div>
                                                    <div class="mb-3 col-6">
                                                        <label for="tag_profile" class="form-label">Nível do Curso</label>
                                                        <input type="text" class="form-control" name="type_course" id="type_course" value="<?php echo e($educ->type_course); ?>">
                                                    </div>
                                                    <div class="mb-3 col-6">
                                                        <label for="time_course" class="form-label">Período</label>
                                                        <input type="text" class="form-control" name="time_course" id="time_course" value="<?php echo e($educ->time_course); ?>">
                                                    </div>
                                                    <div class="mb-3 col-6">
                                                        <label for="status" class="form-label">Status</label>
                                                        <input type="text" class="form-control" name="status" id="status" value="<?php echo e($educ->status); ?>">
                                                    </div>
                                                </div>
                                                <div class="m-auto justify-content-center">
                                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                                <hr class="border-bottom border-white">
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="row justify-content-end">
                                <div class="col-1 m-3">
                                    <button class="btn btn-sm btn-primary m-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAddEducation" aria-expanded="false" aria-controls="collapseAddEducation">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                            <div class="collapse text-center" id="collapseAddEducation">
                                <div class="container">
                                    <form action="/admin/education/" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="row p-1">
                                            <h3 class="text-center">Educação</h3>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="institution" class="form-label">Instituição</label>
                                                <input type="text" class="form-control" data-name='cleanAddEducation' name="institution" id="institution" value="" placeholder="Example: Estácio de Sá">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="course" class="form-label">Curso</label>
                                                <input type="text" class="form-control" data-name='cleanAddEducation' name="course" id="cource" value="" placeholder="Example: Sistema da Informação">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="type_course" class="form-label">Nível do Curso</label>
                                                <input type="text" class="form-control" data-name='cleanAddEducation' name="type_course" id="type_course" value="" placeholder="Example: Bacharelado ou Tecnologo">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="time_course" class="form-label">Período</label>
                                                <input type="text" class="form-control" data-name='cleanAddEducation' name="time_course" id="time_course" value="" placeholder="Example: 2020 - 2025">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <select class="form-select"  name="status" id="status">
                                                    <option value="1">Cursando</option>
                                                    <option value="2">Concluído</option>
                                                    <option value="3">Interronpido</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="m-auto justify-content-center">
                                            <button type="button" id="clianFormEducation" class="btn btn-warning">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-3 rounded-custom banner m-auto">
                        <div class="row text-white col p-4">
                            <h3 class=" text-center m-auto">Experiência</h3>
                            <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12 text-center">
                                    <p class="fw-bold">Experinêcia</p>
                                    <h5><?php echo e($experience->job_title); ?></h5>
                                    <p style="white-space: pre-wrap;"><?php echo e($experience->description_experience); ?></p>
                                    <a href="<?php echo e($experience->link_reference); ?>" target="_blank" class="btn btn-sm btn-light rounded shadow">Veja mais</a>
                                    <div class="row justify-content-center mt-1">
                                        <div class="col-md-1 col-sm-2 text-center">
                                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEditExperience<?php echo e($experience->id); ?>" aria-expanded="false" aria-controls="collapseEditExperience<?php echo e($experience->id); ?>">
                                                Editar
                                            </button>
                                        </div>
                                        <div class="col-md-1 col-sm-2 text-center">
                                            <form>
                                                <?php echo csrf_field(); ?>
                                                <input type="submit" class="btn btn-sm btn-danger" formaction="/admin/experiences/<?php echo e($experience->id); ?>" formmethod="post" value="Remover">
                                                <?php echo method_field("DELETE"); ?>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="collapse text-center" id="collapseEditExperience<?php echo e($experience->id); ?>">
                                        <div class="container">
                                            <form action="/admin/experiences/<?php echo e($experience->id); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <div class="row p-1">
                                                    <h3 class="text-center">Nova Experiência</h3>
                                                    <div class="mb-3 col-md-6 col-sm-12">
                                                        <label for="job_title" class="form-label">Cargo | Função</label>
                                                        <input type="text" class="form-control" name="job_title" id="job_title" value="<?php echo e($experience->job_title); ?>">
                                                    </div>
                                                    <div class="mb-3 col-md-6 col-sm-12">
                                                        <label for="link_reference" class="form-label">Link Referência</label>
                                                        <input type="text" class="form-control" name="link_reference" id="link_reference" value="<?php echo e($experience->link_reference); ?>" placeholder="Example: Linkedin">
                                                    </div>
                                                    <div class="mb-3 p-1">
                                                        <label for="textareaExperience" class="form-label text-white">Descrição</label>
                                                        <textarea class="form-control" name="description_experience" id="textareaExperience" rows="5" placeholder="Fale um pouco de sua experiência."><?php echo e($experience->description_experience); ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="m-auto justify-content-center">
                                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="border-bottom border-white">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="row justify-content-end">
                                <div class="col-1 m-3">
                                    <button class="btn btn-sm btn-primary m-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAddExperience" aria-expanded="false" aria-controls="collapseAddExperience">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                            <div class="collapse text-center" id="collapseAddExperience">
                                <div class="container">
                                    <form action="/admin/experiences/" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="row p-1">
                                            <h3 class="text-center">Nova Experiência</h3>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="job_title" class="form-label">Cargo | Função</label>
                                                <input type="text" class="form-control" data-name='cleanAddExperience' name="job_title" id="job_title" value="" placeholder="Example: Web Developer">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="link_reference" class="form-label">Link Referência</label>
                                                <input type="text" class="form-control" data-name='cleanAddExperience' name="link_reference" id="link_reference" value="" placeholder="Example: Linkedin">
                                            </div>
                                            <div class="mb-3 p-1">
                                                <label for="textareaExperienceNew" class="form-label text-white">Descrição</label>
                                                <textarea class="form-control" data-name='cleanAddExperience' name="description_experience" id="textareaExperienceNew" rows="5" placeholder="Fale um pouco de sua experiência."></textarea>
                                            </div>
                                        </div>
                                        <div class="m-auto justify-content-center">
                                            <button type="button" id="clianFormExperience" class="btn btn-warning">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tab Skills -->
                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                    <div class="container mt-3 m-auto">
                        <h3 class="text-white text-center p-2 mb-2">Habilidades</h3>
                        <hr class="border-bottom border-info">
                        <div class="text-center d-flex text-white p-3">
                            <div class="row col justify-content-center">
                                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class=" col-2 mt-2">
                                        <?php echo $skill->icon_skill; ?>

                                        <p><?php echo e($skill->name); ?></p>
                                        <form>
                                            <?php echo csrf_field(); ?>
                                        <input type="submit" class="btn btn-sm btn-danger" formaction="/admin/skills/<?php echo e($skill->id); ?>" formmethod="post" value="Remover">
                                            <?php echo method_field("DELETE"); ?>
                                        </form>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="row m-auto text-white">
                            <h3 class="text-center p-3">Novas Habilidades</h3>
                            <form action="/admin/skills/" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3 col-10 m-auto">
                                    <label for="tag_profile" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="name" id="name" value="" placeholder="Example: HTML5">
                                </div>
                                <div class="mb-3 col-10 m-auto">
                                    <label for="tag_profile" class="form-label">Icone</label>
                                    <input type="text" class="form-control" name="icon_skill" id="icon_skill" value="" placeholder='Example: <i class="fab fa-html5 fa-3x"></i>'>
                                    <p class="p-3">OBS: Utilize Font Awesome no campo icone. <a class="btn btn-sm btn-warning" href="https://fontawesome.com/v5.15/icons?d=gallery&p=3&m=free" target="_blank">Consulte aqui</a></p>
                                </div>
                                <div class="mb-3 col-1 m-auto">
                                    <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- tab Awards -->
                <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                    <div class="container mt-3 m-auto">
                        <h3 class="mb-1 text-center text-white">Conquistas e Certificações</h3>
                        <hr class="border-bottom border-dark">
                        <div class="row col text-white">
                            <div class="col col-sm-12 text-center">
                                <span class="me-1"><i class="fas fa-trophy text-warning"></i></span>
                                <ul class="nav mb-0 justify-content-center">
                                    <?php $__currentLoopData = $awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="nav-item">
                                            <a class="nav-link awards" target="_blank" href="<?php echo e($award->link); ?>"><?php echo e($award->name); ?> - <?php echo e($award->institution); ?></a>
                                            <form>
                                                <?php echo csrf_field(); ?>
                                                <input type="submit" class="btn btn-sm btn-danger" formaction="/admin/awards/<?php echo e($award->id); ?>" formmethod="post" value="Remover">
                                                <?php echo method_field("DELETE"); ?>
                                            </form>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="row col text-white">
                            <div class="col col-sm-12">
                                <h3 class="text-center m-2">Adicionar Conquistas</h3>
                                <form action="/admin/awards/" method="post">
                                <?php echo csrf_field(); ?>
                                    <div class="row col p-3">
                                        <div class="col-md-6 col-sm-12">
                                            <label for="name" class="form-label">Curso ou Certificação</label>
                                            <input type="text" class="form-control" placeholder="Example: NodeJS" name="name" id="name">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="name" class="form-label">Instituição</label>
                                            <input type="text" class="form-control" name="institution" id="institution" value="" placeholder="Example: Alura">
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="mb-3 col">
                                            <label for="link" class="form-label">Link da Certificação</label>
                                            <input type="text" class="form-control" name="link" id="link" value="" placeholder="https://www...">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-1 m-auto">
                                        <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tab Projects -->
                <div class="tab-pane fade" id="Projects" role="tabpanel" aria-labelledby="Projects-tab">
                    <div class="container-fluid">
                        <div class="row text-center text-white">
                            <h3 class="mt-3">Projetos</h3>
                            <div class="col-3 p-1 m-auto">
                                <button class="btn btn-sm btn-primary m-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAddProject" aria-expanded="false" aria-controls="collapseAddProject">
                                    Adicionar
                                </button>
                            </div>
                        </div>
                        <div class="collapse text-center" id="collapseAddProject">
                            <div class="container">
                                <form action="<?php echo e(route('storeProjects')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row p-1 text-white">
                                        <h3 class="text-center">Perfil</h3>
                                        <div class="row p-1">
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <input id="id" type="hidden" class="form-control" value="">
                                                <label for="title" class="form-label">Nome Projeto</label>
                                                <input type="text" data-name="cleanAddProject" class="form-control" name="title" id="" value="" placeholder="Nome Projeto">
                                            </div>
                                            <div class="mb-3 col-md-6 col-sm-12">
                                                <label for="url_project" class="form-label">Link Projeto</label>
                                                <input type="text" data-name="cleanAddProject" class="form-control" name="url_project" id="url_project" value="" placeholder="Example: GitHub">
                                            </div>
                                            <div class="mb-3 col-md-12 col-sm-12">
                                                <label for="img_project" class="form-label">Imagens Projeto</label>
                                                <input class="form-control" data-name="cleanAddProject" type="file" name="img_project[]" id="img_project" multiple>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Sobre o Pojeto</label>
                                                <textarea class="form-control" data-name="cleanAddProject" name="description" id="description" rows="5" placeholder="Texto..."></textarea>
                                            </div>
                                        </div>
                                        <div class="m-auto justify-content-center">
                                            <button type="button" id="clianFormAddProject" class="btn btn-sm btn-warning">Cancelar</button>
                                            <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row p-3">
                            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chave => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($chave %2 == 0): ?>
                            <section class="container rounded-custom art-cont">
                                <div class="row p-3">
                                    <div class="col-md-6 col-sm-12 float-start m-auto">
                                        <div id="carousel<?php echo e($chave); ?>" class="carousel slide" data-bs-ride="carousel<?php echo e($chave); ?>">
                                            <div class="carousel-indicators">
                                                <?php $__currentLoopData = $project->imgProject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <button type="button" data-bs-target="#carousel<?php echo e($chave); ?>" data-bs-slide-to="<?php echo e($key); ?>" class="<?php echo e($key == 0 ? 'active' : ''); ?>" aria-current="true" aria-label="Slide 1"></button>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="carousel-inner rounded shadow">
                                                <?php $__currentLoopData = $project->imgProject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
                                                    <img src="<?php echo e(env('APP_URL')); ?>/storage/<?php echo e($images->img_project); ?>" class="d-block img-fluid" alt="..." style="width: 100%; height: 300px;">
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?php echo e($chave); ?>" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel<?php echo e($chave); ?>" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 float-end text-white m-auto text-center">
                                        <h5 class="fw-bold"><?php echo e($project->title); ?></h5>
                                        <p style="white-space: pre-wrap;"><?php echo e($project->description); ?></p>
                                        <a class="btn btn-sm btn-light mb-1 shadow" target="_blank" href="<?php echo e($project->url_project); ?>" >Confira</a>
                                    </div>
                                    <div class="col-md-1 col-sm-2 m-auto">
                                        <form>
                                            <?php echo csrf_field(); ?>
                                            <input type="submit" class="btn btn-sm btn-danger" formaction="/admin/projects/<?php echo e($project->id); ?>" formmethod="post" value="Remover">
                                            <?php echo method_field("DELETE"); ?>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            <?php else: ?>
                            <section class="container rounded-custom art-cont2">
                                    <div class="row p-3">
                                        <div class="col-md-6 col-sm-12 float-end text-white m-auto text-center">
                                            <h5 class="fw-bold"><?php echo e($project->title); ?></h5>
                                            <p style="white-space: pre-wrap;"><?php echo e($project->description); ?></p>
                                            <a class="btn btn-sm btn-light mb-1 shadow" target="_blank" href="<?php echo e($project->url_project); ?>" >Confira</a>
                                        </div>
                                        <div class="col-md-6 col-sm-12 float-start m-auto">
                                            <div id="carousel<?php echo e($chave); ?>" class="carousel slide" data-bs-ride="carousel<?php echo e($chave); ?>">
                                                <div class="carousel-indicators">
                                                    <?php $__currentLoopData = $project->imgProject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <button type="button" data-bs-target="#carousel<?php echo e($chave); ?>" data-bs-slide-to="<?php echo e($key); ?>" class="<?php echo e($key == 0 ? 'active' : ''); ?>" aria-current="true" aria-label="Slide 1"></button>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <div class="carousel-inner rounded shadow">
                                                    <?php $__currentLoopData = $project->imgProject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
                                                            <img src="<?php echo e(env('APP_URL')); ?>/storage/<?php echo e($images->img_project); ?>" class="d-block img-fluid" alt="..." style="width: 100%; height: 300px;">
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?php echo e($chave); ?>" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carousel<?php echo e($chave); ?>" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-sm-2 m-auto">
                                                <form>
                                                    <?php echo csrf_field(); ?>
                                                    <input type="submit" class="btn btn-sm btn-danger" formaction="/admin/projects/<?php echo e($project->id); ?>" formmethod="post" value="Remover">
                                                    <?php echo method_field("DELETE"); ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <!-- tab Interests -->
                <div class="tab-pane fade" id="interests" role="tabpanel" aria-labelledby="interests-tab">
                    <div class="container">
                        <div class="row text-white m-auto p-3">
                            <h3 class="mb-5 text-center">Interesses</h3>
                            <div class="text-center">
                                <?php $__currentLoopData = $interests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p style="white-space: pre-wrap;"><?php echo e($interest->description); ?></p>
                                        <div class="row justify-content-center mt-1">
                                            <div class="col-md-1 col-sm-2 text-center">
                                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEditInterests<?php echo e($interest->id); ?>" aria-expanded="false" aria-controls="collapseEditInterests<?php echo e($interest->id); ?>">
                                                    Editar
                                                </button>
                                            </div>
                                            <div class="col-md-1 col-sm-2 text-center">
                                                <form>
                                                    <?php echo csrf_field(); ?>
                                                    <input type="submit" class="btn btn-sm btn-danger" formaction="/admin/interests/<?php echo e($interest->id); ?>" formmethod="post" value="Remover">
                                                    <?php echo method_field("DELETE"); ?>
                                                </form>
                                            </div>
                                        </div>
                                    <hr class="border-bottom border-white">
                                    <div class="collapse text-center" id="collapseEditInterests<?php echo e($interest->id); ?>">
                                        <form action="/admin/interests/<?php echo e($interest->id); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="row p-3">
                                                <div class="mb-3">
                                                    <label for="about" class="form-label">Interesses</label>
                                                    <textarea class="form-control" name="description" id="textareaEditInteresses" rows="5"><?php echo e($interest->description); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="m-auto justify-content-center">
                                                <button type="submit" class="btn btn-primary">Salvar</button>
                                            </div>
                                        </form>
                                        <hr class="border-bottom border-white">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Adicinar Inreresses -->
                    <form action="/admin/interests/" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="col-2 m-auto text-center">
                            <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInterests" aria-expanded="false" aria-controls="collapseInterests">
                                Adicionar
                            </button>
                        </div>
                        <div class="collapse text-center" id="collapseInterests">
                            <div class="mb-3 p-3">
                                <label for="textareaInteresses" class="form-label text-white">Interesses</label>
                                <textarea class="form-control" name="description" id="textareaInteresses" rows="5"></textarea>
                            </div>
                            <div class="col-4 m-auto">
                                <button type="button" id="limparTextarea" class="btn btn-warning">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </form>
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
                </div>

            </div>
        </div>
    </div>
    <?php if($messge = Session::get('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Projeto inserido com sussesso! </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
</div>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joaor\Área de Trabalho\portifolio\resources\views//admin/admin.blade.php ENDPATH**/ ?>