<?php $__env->startSection('title_page', 'categarey'); ?>
<?php $__env->startSection('content'); ?>

<br>
<br>
<br>
<br>

    <div class="container mt-4">
        <!-- Card to add categary -->
        <div class="card shadow-lg p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>categarey List</h3>
                <a href="<?php echo e(route('categarey.create')); ?>" class="btn btn-danger btn-tone">
                    <i class="fas fa-user-plus"></i> Add categarey
                </a>
            </div>

            <!-- Table to display categarey data -->
            <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered text-center">
                    <thead class="table table-primary">
                        <tr>

                            <th scope="col">Name</th>
                            <th scope="col">slug</th>
                            <th scope="col">Status</th>
                            <th scope="col">showonhome</th>
                            <th scope="col">Options</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categareys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                                <td><?php echo e($show->name); ?></td>
                                <td><?php echo e($show->id); ?></td>
                                <td><?php echo e($show->slug); ?></td>
                                <td>
                                    <span class="badge bg-<?php echo e($show->status == 'Active' ? 'success' : 'danger'); ?>">
                                        <?php echo e($show->status); ?>

                                    </span>
                                </td>
                                <td>
                                <form  action="<?php echo e(route('categarey.destroy',$show->id)); ?>" method="POST">
                                   <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <div class = "formClass">
                                    <button class="btn btn-danger btn-sm me-2" type="submit">Delete</button>
                                   </form>
                                   <a href="<?php echo e(route('categarey.edit',$show->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    </div>

                                                 </td>
                                    <!-- Action buttons -->

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<style>

</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/categarey/index.blade.php ENDPATH**/ ?>