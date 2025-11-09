<?php $__env->startSection('title_page', 'Admins'); ?>
<?php $__env->startSection('content'); ?>

<br><br><br><br><!-- Bootstrap 5 CSS -->

<div class="container mt-4">
    <!-- Card to add admins -->
    <div class="card shadow-lg p-4">
        <div class="d-flex justify-content-between align-items-center">
            <h3>Admin List</h3>
            <a href="<?php echo e(route('admins.create')); ?>" class="btn btn-danger btn-tone">
                <i class="fas fa-user-plus"></i> Add Admins
            </a>
        </div>

        <!-- Table to display admin data -->
        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered text-center">
                <thead class="table table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <!-- Image with fallback -->
                            <img src="<?php echo e(asset('storage/'.$show->image ?? 'images/default-avatar.png')); ?>" alt="admin Avatar" class="rounded-circle" width="50" height="50">
                        </td>
                        <td><?php echo e($show->name); ?></td>
                        <td><?php echo e($show->email); ?></td>
                        <td><?php echo e($show->phone); ?></td>
                        <td>
                            <span class="badge bg-<?php echo e($show->status == 'Active' ? 'success' : 'danger'); ?>">
                                <?php echo e($show->status); ?>

                            </span>
                        </td>
                        <td><?php echo e($show->created_at->format('d M Y')); ?></td>
                        <td>
                            <!-- Action buttons -->
                            <form action="<?php echo e(route('admins.destroy',$show->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger btn-sm me-2" type="submit">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                            <a href="<?php echo e(route('admins.edit',$show->id)); ?>" class="btn btn-primary btn-sm">
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

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/admins/index.blade.php ENDPATH**/ ?>