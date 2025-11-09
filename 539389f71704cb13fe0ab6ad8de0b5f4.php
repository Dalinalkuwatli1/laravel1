<?php $__env->startSection('title_page', 'Setting'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-4">
    <!-- Card to display settings -->
    <div class="card shadow-lg p-4"><br>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Settings List</h3>
            <a href="<?php echo e(route('setting.create')); ?>" class="btn btn-danger btn-tone">
                <i class="fas fa-user-plus"></i> Add Setting
            </a>
        </div>

        <!-- Table to display setting data -->
        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered text-center">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Company Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Address</th>
                        <th scope="col">About Company</th>
                        <th scope="col">Feb</th>
                        <th scope="col">LinkedIn</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($show->company_name); ?></td>
                            <td><?php echo e($show->phone); ?></td>
                            <td><?php echo e($show->email); ?></td>
                            <td>
                                <!-- Assuming logo is a URL -->
                                <img src="<?php echo e(asset('storage/' .$show->logo)); ?>" alt="Company Logo" width="50" height="50" class="rounded-circle">
                            </td>
                            <td><?php echo e($show->address); ?></td>
                            <td><?php echo e($show->about_company); ?></td>
                            <td><?php echo e($show->feb); ?></td>
                            <td><?php echo e($show->linkedin); ?></td>

                            <td class="d-flex justify-content-center">
                                <!-- Action buttons -->
                                <form action="<?php echo e(route('setting.destroy', $show->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm me-2" type="submit">Delete</button>
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

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/setting/index.blade.php ENDPATH**/ ?>