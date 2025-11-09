<?php $__env->startSection('title_page', 'Usefull Links'); ?>
<?php $__env->startSection('content'); ?>

<br>
<br>
<br>
<br><!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap 5 JS + Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-4">
    <!-- Card to add link -->
    <div class="card shadow-lg p-4">
        <div class="d-flex justify-content-between align-items-center">
            <h3>Usefull Links List</h3>
            <a href="<?php echo e(route('usefullink.create')); ?>" class="btn btn-danger btn-tone">
                <i class="fas fa-plus"></i> Add Usefull Links
            </a>
        </div>

        <!-- Table to display links data -->
        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered text-center">
                <thead class="table table-primary">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">URL</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $usefullinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usefullink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($usefullink->title); ?></td>
                            <td><a href="<?php echo e($usefullink->url); ?>" target="_blank"><?php echo e($usefullink->url); ?></a></td>
                            <td>
                                <form action="<?php echo e(route('usefullink.destroy', $usefullink->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm me-2" type="submit">Delete</button>
                                </form>
                                <a href="<?php echo e(route('usefullink.edit', $usefullink->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/usefullink/index.blade.php ENDPATH**/ ?>