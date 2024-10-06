
<?php $__env->startSection("title","Register"); ?>
<?php $__env->startSection("content"); ?>
        <main class="mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session()->get('User Created success')); ?>

                            
                            </div>
                        <?php endif; ?>
                        <?php if(session()->has('error')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session()->get('error')); ?>

                            
                            </div>
                        <?php endif; ?>
                        <div class="card">
                            <h3 class="card-header text-center">Register</h3>
                            <div class="card-body">
                                <form method="POST" action="<?php echo e(route('register.post')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="name"
                                                id="name" class="form-control" name="name"  autofocus>
                                        <?php if($errors->has('name')): ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" placeholder="Email"
                                                id="email" class="form-control" name="email"  autofocus>
                                        <?php if($errors->has('email')): ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Password"
                                                id="password" class="form-control" name="password"  autofocus>
                                        <?php if($errors->has('password')): ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-dark btn-block">Sign up</button>                                  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("default", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lakshmanan_1\student_app\Std_app\resources\views/auth/registration.blade.php ENDPATH**/ ?>