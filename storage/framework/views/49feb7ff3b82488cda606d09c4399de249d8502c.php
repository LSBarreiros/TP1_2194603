<?php $__env->startSection('title', 'Edit Student'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card mx-auto mb-5 mt-4 " pb-1 style="width: 50%;">
        <div class="card-header">
            <h3>Edit Student</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('students.update', $student)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($student->name); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo e($student->email); ?>" required>
                </div>
                <div class="form-group">
                    <label for="city_id">City</label>
                    <select class="form-control" id="city_id" name="city_id">
                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($city->id); ?>" <?php echo e($student->city_id == $city->id ? 'selected' : ''); ?>><?php echo e($city->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-4 mr-1">Update</button>
                <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary mt-4" role="button">Previous</a>
                
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lidiabarreiros/Documents/MAISONNEUVE/SESSION_04_HIVER23/CADRICIEL_WEB/TP1_Laravel_2194603/maisonneuve_2194603/resources/views/students/edit.blade.php ENDPATH**/ ?>