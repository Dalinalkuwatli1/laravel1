<?php $__env->startSection('title_page', 'Blog List'); ?>

<?php $__env->startSection('content'); ?>
<br>
<br>
<br><br><br><br><br>
<div class="container mt-4">
    <!-- Card to add blogs -->
    <div class="card shadow-lg p-4">
        <div class="d-flex justify-content-between align-items-center">
            <h3>Blog List</h3>
            <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-danger btn-tone">
                <i class="fas fa-plus"></i> Add Blog
            </a>
        </div>

        <!-- Table to display blog data -->
        <div class="table-responsive mt-3">
          <table class="table table-striped table-bordered text-center">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Content</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td>
                    <?php if($show->image): ?>
                        <img src="<?php echo e(Storage::url($show->image)); ?>" alt="Blog Image" class="rounded-circle" width="50" height="50">
                    <?php else: ?>
                        <span class="text-muted">No Image</span>
                    <?php endif; ?>
                </td>
                <td><?php echo e($show->name); ?></td>
                <td><?php echo e($show->content); ?></td>
                <td>
                    <span class="badge bg-<?php echo e($show->status == 1 ? 'success' : 'danger'); ?>">
                        <?php echo e($show->status == 1 ? 'Active' : 'Inactive'); ?>

                    </span>
                </td>
                <td><?php echo e($show->created_at->format('d M Y')); ?></td>
                <td>
                    <a href="<?php echo e(route('blog.edit', $show->id)); ?>" class="btn btn-primary btn-sm me-2">Edit</a>
                    <form action="<?php echo e(route('blog.destroy', $show->id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/blog/index.blade.php ENDPATH**/ ?>