<?php $__env->startSection('title_page', 'Create services'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-4">
    <br><br>
    <div class="card shadow-lg p-4">
        <h3 class="text-center mb-4">Edit services</h3>

        <!-- Form to edit services -->
        <form action="<?php echo e(route('services.update', $services->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Use PUT method for updating the record -->

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="description">description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo e(old('description', $services->description)); ?>">
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="title">title</label>
                    <input type="title" class="form-control" id="title" name="title" value="<?php echo e(old('title', $services->title)); ?>">
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>


            <div class="mb-3">
                <label for="status">status</label>
                <select id="status" class="form-control" name="status">
                    <option value="1" <?php echo e(old('status', $services->status) == 1 ? 'selected' : ''); ?>>Active</option>
                    <option value="0" <?php echo e(old('status', $services->status) == 0 ? 'selected' : ''); ?>>Inactive</option>
                </select>
                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <div class="mb-3">
                <label for="image">Profile Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <?php if($services->image): ?>
                    <div class="mt-2">
                        <img src="<?php echo e(asset($services->image)); ?>" class="img-thumbnail" width="100">
                    </div>
                <?php endif; ?>
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/services/edit.blade.php ENDPATH**/ ?>