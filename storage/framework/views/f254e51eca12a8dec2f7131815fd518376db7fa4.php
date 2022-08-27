<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-3 p-3">
                <form method="POST" action="<?php echo e(route('password.email')); ?>">
                    <?php echo csrf_field(); ?>
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Digite o e-mail cadastrado">
                    <div id="emailHelp" class="form-text">Entre cmo e-mail para recuperação de senha.</div>
                    <button type="submit" class="btn btn-sm btn-warning mt-3"><?php echo e(__('Send Password Reset Link')); ?></button>
                    <a class="btn btn-sm btn-secondary mt-3" href="<?php echo e(route('login')); ?>">Login</a>
                </form>
                <?php if(session('status')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Aviso! </strong>  <?php echo e(session('status')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-sm-12 text-center m-auto">
                <h3>Recupere sua senha</h3>
                <p>Com um click você recupera seu acesso, você receberá um email.</p>
                <p> Siga os passos e matenha-se sempre atualizado.</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\portifolio\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>