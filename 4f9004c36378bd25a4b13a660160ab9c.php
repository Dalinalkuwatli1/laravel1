<?php $__env->startSection('title_page', 'users'); ?>
<?php $__env->startSection('content'); ?>

<br>
<br>
<br>
<br><!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap 5 JS + Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container mt-4">
        <!-- Card to add users -->
        <div class="card shadow-lg p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>user List</h3>
                <a href="<?php echo e(route('users.create')); ?>" class="btn btn-danger btn-tone">
                    <i class="fas fa-user-plus"></i> Add Users
                </a>
            </div>

            <!-- Table to display user data -->
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
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <img src="<?php echo e(asset('storage/'.$show->image)); ?>" alt="user Avatar" class="rounded-circle" width="50"
                                        height="50">
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
                                <td><?php echo e($show->quota); ?></td>
                                <td>
                                    <!-- Action buttons -->
                                   <form action="<?php echo e(route('users.destroy',$show->id)); ?>" method="POST">
                                   <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm me-2" type="submit">Delete</button>
                                   </form>
                                   <a href="<?php echo e(route('users.edit',$show->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/users/index.blade.php ENDPATH**/ ?>