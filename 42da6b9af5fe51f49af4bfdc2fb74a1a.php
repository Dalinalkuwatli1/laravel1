<?php $__env->startSection('title_page', 'Products'); ?>
<?php $__env->startSection('content'); ?>

<br>
<br>
<br>
<br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-4">
    <div class="card shadow-lg p-4">
        <div class="d-flex justify-content-between align-items-center">
            <h3>Product List</h3>
            <a href="<?php echo e(route('product.create')); ?>" class="btn btn-danger btn-tone">
                <i class="fas fa-plus-circle"></i> Add Product
            </a>
        </div>

        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered text-center">
                <thead class="table table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Price</th>
                        <th scope="col">Compare Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Track Quantity</th>
                        <th scope="col">Category</th>
                        <th scope="col">Subcategory</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Status</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Show on Home</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <img src="<?php echo e(asset($product->image)); ?>" alt="product image" class="rounded-circle" width="50" height="50">
                            </td>
                            <td><?php echo e($product->title); ?></td>
                            <td><?php echo e($product->slug); ?></td>
                            <td><?php echo e($product->price); ?></td>
                            <td><?php echo e($product->compare_price); ?></td>
                            <td><?php echo e($product->qty); ?></td>
                            <td><?php echo e($product->track_qty); ?></td>
                            <td><?php echo e($product->category->name); ?></td>
                            <td><?php echo e($product->subcategory ? $product->subcategory->name : 'N/A'); ?></td>
                            <td><?php echo e($product->brand ? $product->brand->name : 'N/A'); ?></td>
                            <td>
                                <span class="badge bg-<?php echo e($product->status == 'active' ? 'success' : 'danger'); ?>">
                                    <?php echo e(ucfirst($product->status)); ?>

                                </span>
                            </td>
                            <td>
                                <span class="badge bg-<?php echo e($product->is_featured ? 'success' : 'secondary'); ?>">
                                    <?php echo e($product->is_featured ? 'Yes' : 'No'); ?>

                                </span>
                            </td>
                            <td>
                                <span class="badge bg-<?php echo e($product->showonhome ? 'success' : 'secondary'); ?>">
                                    <?php echo e($product->showonhome ? 'Yes' : 'No'); ?>

                                </span>
                            </td>
                            <td><?php echo e($product->created_at->format('d M Y')); ?></td>
                            <td>
                                <form action="<?php echo e(route('product.destroy', $product->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm me-2" type="submit">Delete</button>
                                </form>
                                <a href="<?php echo e(route('product.edit', $product->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/dashboard/product/index.blade.php ENDPATH**/ ?>