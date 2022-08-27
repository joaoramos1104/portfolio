<?php $__env->startSection('content'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 col-sm-12 p-3 m-auto">
            <h2>Login Administrador</h2>
            <form method="POST" action="<?php echo e(route('admin_login_submit')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3 mt-3">
                    <label for="email">E-mail:</label>
                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <label for="pwd">Senha:</label>
                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Digite sua senha">
                </div>
                <?php if(Session::get('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                        <strong><?php echo e(Session::get('error')); ?> </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Lembre-me</label>
                </div>
                <button type="submit" class="btn btn-sm btn-primary"><?php echo e(__('Login')); ?></button>
            </form>
        </div>
        <div class="col-md-6 col-sm-12 text-center m-auto">
            <h3>Entre para atualizar seu Portifólio</h3>
            <p>Matenha-se sempre atualizado.</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\portifolio\resources\views/auth/admin_login.blade.php ENDPATH**/ ?>