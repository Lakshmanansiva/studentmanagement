
<?php $__env->startSection('content'); ?>
<!--<?php if($errors->any()): ?> 
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-danger">
        <?php echo e($error); ?>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?> -->
<h6><a class ="text-light" href="<?php echo e(route('student.index')); ?>">Back to List</a></h6>
 <div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Create New Student</p>
                <form action="<?php echo e(route('student.store')); ?>" class="was-validated" method="POST" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="form-group has-validation">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control <?php echo e($errors->has('name')?'is-invalid':''); ?>" required value="<?php echo e(old('name')); ?>">
                        <?php if($errors->has('name')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-validation">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control <?php echo e($errors->has('email')?'is-invalid':''); ?>"required value="<?php echo e(old('email')); ?>">
                        <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-validation">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control <?php echo e($errors->has('address')?'is-invalid':''); ?>" required value="<?php echo e(old('address')); ?>">
                        <?php if($errors->has('address')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('address')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-validation">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control <?php echo e($errors->has('phone')?'is-invalid':''); ?>" required value="<?php echo e(old('phone')); ?>">
                        <?php if($errors->has('phone')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('phone')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-validation">
                        <label for="department">Department</label>
                        <input type="text" name="department" id="department" class="form-control <?php echo e($errors->has('department')?'is-invalid':''); ?>" required value="<?php echo e(old('department')); ?>">
                        <?php if($errors->has('department')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('department')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-validation">
                        <label for="year">Year</label>
                        <input type="text" name="year" id="year" class="form-control <?php echo e($errors->has('year')?'is-invalid':''); ?>" required value="<?php echo e(old('year')); ?>">

                        <?php if($errors->has('year')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('year')); ?></strong>
                        </span>
                        <?php endif; ?>
                    
                    </div>
                    <div class="form-group has-validation">
                        <label for="joining_date">Joining date</label>
                        <input type="date" name="joining_date" id="joining_date" class="form-control <?php echo e($errors->has('joining_date')?'is-invalid':''); ?>" required value="<?php echo e(old('joining_date')); ?>">
                        <?php if($errors->has('joining_date')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('joining_date')); ?></strong>
                        </span>
                        <?php endif; ?>
                    <div class="form-group has-validation">
                        <label for="is_active">Active</label><br>
                        <input type="checkbox" name="is_active" id="is_active" class = "<?php echo e($errors->has('is_active')?'is-invalid':''); ?>" value="1" required <?php echo e(old('is_active')=='1'?'checked':''); ?>">
                        <?php if($errors->has('is_active')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('is_active')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Student</button>
                </form>
            </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lakshmanan_1\student_app\Std_app\resources\views/create.blade.php ENDPATH**/ ?>