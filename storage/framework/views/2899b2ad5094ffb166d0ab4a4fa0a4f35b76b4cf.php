<?php $__env->startSection('content'); ?>

        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <img style="width: 100%;    margin-bottom: 40px;" src="<?php echo e(asset('public/assets/images/'.$setting->dark_logo)); ?>" alt="navbar brand" class="navbar-brand">
                <div class="login-form">

                    <form action="<?php echo e(route('back.login.submit')); ?>" method="POST">

                        <?php echo csrf_field(); ?>

                        <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="form-group form-floating-label">
                            <input id="username" name="login_email" type="email" class="form-control input-border-bottom" value="<?php echo e(old('login_email')); ?>">
                            <label for="username" class="placeholder"><?php echo e(__('Email Address')); ?></label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input id="password" name="login_password" type="password" class="form-control input-border-bottom">
                            <label for="password" class="placeholder"><?php echo e(__('Password')); ?></label>
                            
                        </div>

                        <div class="row justify-content-center form-sub m-0">
                            <a href="<?php echo e(route('back.forgot')); ?>" class="link float-right"><?php echo e(__('Forget Password ?')); ?></a>
                        </div>

                        <div class="form-action mb-3">
                            <button type="submit" class="btn btn-secondary  btn-login"><?php echo e(__('Sign In')); ?></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nzocgvvlkplb/public_html/auroraexperiences.gigvie.com/resources/views/back/auth/login.blade.php ENDPATH**/ ?>