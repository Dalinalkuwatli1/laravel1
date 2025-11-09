<?php $__env->startSection('title_page', 'Subcategory'); ?>
<?php $__env->startSection('content'); ?>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap 5 JS + Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-4"><br>
    <!-- Card to display subcategories -->
    <div class="card shadow-lg p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Subcategory List</h3>
            <a href="<?php echo e(route('subcategarey.create')); ?>" class="btn btn-danger">
                <i class="fas fa-plus-circle"></i> Add Subcategory
            </a>
        </div>

        <!-- Table to display subcategory data -->
        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered text-center">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Status</th>
                        <th scope="col">Show on Home</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $subcategareys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($show->name); ?></td>
                        <td><?php echo e($show->category->name); ?></td>
                        <td><?php echo e($show->slug); ?></td>
                        <td>
                            <span class="badge bg-<?php echo e($show->status == 'Active' ? 'success' : 'danger'); ?>">
                                <?php echo e($show->status); ?>

                            </span>
                        </td>
                        <td>
                            <span class="badge bg-<?php echo e($show->showonhome == 1 ? 'success' : 'danger'); ?>">
                                <?php echo e($show->showonhome == 1 ? 'Yes' : 'No'); ?>

                            </span>
                        </td>
                        <td class="d-flex justify-content-center">
                            <!-- Action buttons -->
                            <form action="<?php echo e(route('subcategarey.destroy', $show->id)); ?>" method="POST" class="me-2">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                            <a href="<?php echo e(route('subcategarey.edit', $show->id)); ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/subcategarey/index.blade.php ENDPATH**/ ?>