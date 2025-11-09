

<?php $__env->startSection('title_page', 'Create subcategarey'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-4">
    <br><br>
    <div class="card shadow-lg p-4">
        <h3 class="text-center mb-4">Edit subcategarey</h3>

        <!-- Form to edit subcategarey -->
        <form action="<?php echo e(route('subcategarey.update', $subcategarey->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Use PUT method for updating the record -->

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $subcategarey->name)); ?>">
                    <?php $__errorArgs = ['name'];
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
                    <label for="slug">slug</label>
                    <input type="slug" class="form-control" id="slug" name="slug" value="<?php echo e(old('slug', $subcategarey->slug)); ?>">
                    <?php $__errorArgs = ['slug'];
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

            <div class=" mb-3">
                    <label for="categsrey_id">categsrey_id</label>
                    <input type="categsrey_id" class="form-control" id="categsrey_id" name="categsrey_id" value="<?php echo e(old('categsrey_id', $subcategarey->categsrey_id)); ?>">
                    <?php $__errorArgs = ['categsrey_id'];
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
                <label for="status">State</label>
                <select id="status" class="form-control" name="status">
                    <option value="1" <?php echo e(old('status', $subcategarey->status) == 1 ? 'selected' : ''); ?>>Active</option>
                    <option value="0" <?php echo e(old('status', $subcategarey->status) == 0 ? 'selected' : ''); ?>>Inactive</option>
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
                <label for="showonhome">showonhome</label>
               <select id="showonhome" class="form-control" name="showonhome">
                    <option value="1" <?php echo e(old('showonhome', $subcategarey->showonhome) == 1 ? 'selected' : ''); ?>>1</option>
                    <option value="0" <?php echo e(old('showonhome', $subcategarey->showonhome) == 0 ? 'selected' : ''); ?>>0</option>
                </select>
                <?php $__errorArgs = ['showonhome'];
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
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/subcategarey/edit.blade.php ENDPATH**/ ?>