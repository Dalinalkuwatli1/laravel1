<?php $__env->startSection('content'); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #fff;
        padding: 40px 0;
    }
    .cart-item {
        border: 1px solid #e0e0e0;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 8px;
    }
    .cart-total {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        border: 1px solid #e0e0e0;
    }
    .checkout-btn {
        background-color: #f4c041;
        color: black;
        border: none;
        width: 100%;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4">Your Cart</h2>

    <div class="row">
        <div class="col-md-8">
            <?php if($order && $order->order_details->count()): ?>
                <?php $__currentLoopData = $order->order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="cart-item d-flex align-items-start mb-3">
                        <img src="<?php echo e(asset($item->product->image ?? 'images/default-product.png')); ?>" class="me-3" style="width: 100px; height: auto;" alt="Product Image">
                        <div>
                            <h5><?php echo e($item->product->name); ?></h5>
                            <p>SKU: <?php echo e($item->product->sku ?? 'N/A'); ?> <br> In Stock</p>

                            <div class="d-flex align-items-center">
                                <label class="me-2">Each:</label>
                                <span>$<?php echo e(number_format($item->price / $item->quantity, 2)); ?></span>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <label class="me-2">Quantity:</label>
                                <input type="number" value="<?php echo e($item->quantity); ?>" class="form-control form-control-sm" style="width: 60px;" readonly>
                            </div>
                            <div class="mt-2"><strong>Total: $<?php echo e(number_format($item->price, 2)); ?></strong></div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>Your cart is empty.</p>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <div class="cart-total p-3">
                <h5>Order Summary</h5>
                <p>Subtotal: <strong>$<?php echo e(number_format($order->total_price ?? 0, 2)); ?></strong></p>
                <p>Shipping: Free</p>
                <hr>
                <p><strong>Total: $<?php echo e(number_format($order->total_price ?? 0, 2)); ?></strong></p>
                <?php if($order && $order->order_details->count()): ?>
                    <a href="#" id="payNowBtn" class="btn checkout-btn mt-2">Pay Now</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('payNowBtn')?.addEventListener('click', function(e) {
    e.preventDefault();
    Swal.fire({
      icon: 'success',
      title: 'Thank you!',
      text: 'Thank you for purchasing our products. Our team will contact you within 24 hours.',
      confirmButtonText: 'OK'
    });
});
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('site.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/site/pages/cartshow.blade.php ENDPATH**/ ?>