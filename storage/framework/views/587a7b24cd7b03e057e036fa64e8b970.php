
<?php $__env->startSection('content'); ?>

<?php if(session()->has('message')): ?>
<div class="alert alert-success">
    <?php echo e(session()->get('message')); ?>

</div>
<?php endif; ?>
<div class="row">
            <div class="col-2"></div>
            <div class="col-15"></div>
                <div class="card">
                    <div class="card-body">
                        <strong>Student List</strong>
                        <a href="<?php echo e(route('login')); ?>"  class="btn btn-primary btn-xs float-end py-0 mx-1">Logout</a>
                        <a href="<?php echo e(route('student.create')); ?>" class="btn btn-primary btn-xs float-end py-0 mx-1">Create Student</a>
                        <table class="table table-responsive table-bordered table-stripped" style="margin-top:10px;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Department</th>
                                    <th>Year</th>
                                    <th>Joining Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($student->name); ?></td>
                                    <td><?php echo e($student->email); ?></td>
                                    <td><?php echo e($student->address); ?></td>
                                    <td><?php echo e($student->phone); ?></td>
                                    <td><?php echo e($student->department); ?></td>
                                    <td><?php echo e($student->year); ?></td>
                                    <td><?php echo e($student->joining_date); ?></td>
                                    <td><span type="button" class="btn <?php echo e($student->is_active ==1?'btn-success':'btn-danger'); ?> btn-xs py-0"><?php echo e($student->is_active == 1?'Active':'InActive'); ?></span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="<?php echo e(route('student.show',$student->id)); ?>" class="btn btn-primary btn-xs py-0 mx-1">Show</a>
                                            <a href="<?php echo e(route('student.edit',$student->id)); ?>" class="btn btn-warning btn-xs py-0 mx-1">Edit</a>
                                            <form action="<?php echo e(route('student.delete',$student->id)); ?>" method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                            </form>
                                        </div>
                                       
                                        
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($students->links()); ?>

                    </div>
            </div>
</div>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lakshmanan_1\student_app\Std_app\resources\views/index.blade.php ENDPATH**/ ?>