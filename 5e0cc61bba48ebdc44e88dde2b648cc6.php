<?php $__env->startSection('title_page', 'services'); ?>
<?php $__env->startSection('content'); ?>

    <br>
    <br>
    <br>
    <br><!-- Bootstrap 5 CSS -->


    <div class="container mt-4">
        <!-- Card to add services -->
        <div class="card shadow-lg p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>services List</h3>
                <a href="<?php echo e(route('services.create')); ?>" class="btn btn-danger btn-tone">
                    <i class="fas fa-user-plus"></i> Add services
                </a>
            </div>

            <!-- Table to display services data -->
            <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered text-center">
                    <thead class="table table-primary">
                        <tr>
                            <th scope="col">image</th>

                            <th scope="col">description</th>
                            <th scope="col">title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <img src="<?php echo e(asset($show->image)); ?>" alt="services  Avatar" class="rounded-circle"
                                        width="50" height="50">
                                </td>
                                <td><?php echo e($show->title); ?></td>
                                <td><?php echo e($show->description); ?></td>

                                <td>
                                    <span class="badge bg-<?php echo e($show->status == 1 ? 'success' : 'danger'); ?>">
                                        <?php echo e($show->status); ?>

                                    </span>
                                </td>

                                <td>
                                    <!-- Action buttons -->
                                    <form action="<?php echo e(route('services.destroy', $show->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger btn-sm me-2" type="submit">Delete</button>
                                    </form>
                                    <a href="<?php echo e(route('services.edit', $show->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/services/index.blade.php ENDPATH**/ ?>