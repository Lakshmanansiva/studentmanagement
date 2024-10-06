
<?php $__env->startSection('content'); ?>
<div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Student details</p>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="<?php echo e($student->name); ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="<?php echo e($student->email); ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value="<?php echo e($student->address); ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" value="<?php echo e($student->phone); ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" value="<?php echo e($student->department); ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" class="form-control" value="<?php echo e($student->year); ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="joining_date">Joining date</label>
                    <input type="date" class="form-control" value="<?php echo e($student->joining_date); ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="is_active" >Active</label><br>
                    <input type="checkbox" <?php echo e($student->is_active=='1'?'checked':''); ?> readonly />
                </div>
                <a href="<?php echo e(route('student.index')); ?>" class="btn btn-primary">Back</a>
            </div>
</div>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lakshmanan_1\student_app\Std_app\resources\views/show.blade.php ENDPATH**/ ?>