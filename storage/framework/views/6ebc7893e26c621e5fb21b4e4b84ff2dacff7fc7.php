<?php $__env->startSection('title', 'View Students'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3>View Students</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($student->id); ?></td>
                            <td><?php echo e($student->name); ?></td>
                            <td><?php echo e($student->email); ?></td>
                            <td><?php echo e($student->city->name); ?></td>
                            <td>
                              
                                <a href="<?php echo e(route('students.edit', $student)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                <form action="<?php echo e(route('students.destroy', $student)); ?>" method="POST" class="d-inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php echo e($students); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lidiabarreiros/Documents/MAISONNEUVE/SESSION_04_HIVER23/CADRICIEL_WEB/TP1_Laravel_2194603/maisonneuve_2194603/resources/views/students/index.blade.php ENDPATH**/ ?>