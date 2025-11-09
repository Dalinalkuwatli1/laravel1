<?php $__env->startSection('title_page', 'Contact Us List'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mt-4">
    <!-- Card to display messages -->
    <div class="card shadow-lg p-4 cardBox">
        <div class="d-flex justify-content-between align-items-center">
            <h3>Contact Us List</h3>
        </div>
        <div class="container mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $contactus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($show->name); ?></td>
                        <td><?php echo e($show->phone); ?></td>
                        <td><?php echo e($show->email); ?></td>


                                    <td><?php echo e($show->message); ?></td>


                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>

        <!-- Table to display contact us data -->

    </div>
</div>

<?php $__env->stopSection(); ?>




<style>
    .cardBox
    {
        margin-top: 100px;
    }
</style>

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/contactus/index.blade.php ENDPATH**/ ?>