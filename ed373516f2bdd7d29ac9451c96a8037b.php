<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: sans-serif;
            background-color: #fff;
            padding: 40px;
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

        .price-original {
            text-decoration: line-through;
            color: #999;
            margin-right: 8px;
        }

        .price-discount {
            color: red;
        }

        .checkout-btn {
            background-color: #f4c041;
            color: black;
            border: none;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Your Cart</h2>

        <div class="row">
            <div class="col-md-8">
                <?php if($order->order_details && $order->order_details->count()): ?>
                    <?php $__currentLoopData = $order->order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="cart-item d-flex align-items-start mb-3 border p-3 rounded">
                            <img src="<?php echo e(asset( $item->product->image)); ?>" class="me-3"
                                style="width: 100px;" alt="Product Image">
                            <div>
                                <h5><?php echo e($item->product->name); ?></h5>
                                <p>SKU: <?php echo e($item->product->sku ?? 'N/A'); ?> <br> In Stock</p>
                                <div class="d-flex align-items-center">
                                    <label class="me-2">Each:</label>
                                    <span>$<?php echo e(number_format($item->price, 2)); ?></span>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <label class="me-2">Quantity:</label>
                                    <input type="number" value="<?php echo e($item->quantity); ?>"
                                        class="form-control form-control-sm" style="width: 60px;" readonly>
                                </div>
                                <div class="mt-2"><strong>Total:
                                        $<?php echo e(number_format($item->price * $item->quantity, 2)); ?></strong></div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p>لا توجد منتجات في هذه السلة.</p>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <div class="p-3 border rounded bg-light">
                    <h5>Order Summary</h5>
                    <p>Subtotal: <strong>$<?php echo e(number_format($order->total_price, 2)); ?></strong></p>
                    <p>Shipping: Free</p>
                    <hr>
                    <p><strong>Total: $<?php echo e(number_format($order->total_price, 2)); ?></strong></p>
                    <a id="payNowBtn" href="#" class="btn btn-warning w-100 mt-2">Pay Now</a>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('payNowBtn').addEventListener('click', function(e) {
    e.preventDefault();
    Swal.fire({
        icon: 'success',
        title: 'شكراً لك!',
        text: 'شكراً لشراء المنتجات من عندنا. فريقنا سيتواصل معك خلال 24 ساعة.',
        confirmButtonText: 'حسناً'
    });
});
</script>

</html>



<?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/site/pages/cartdetails.blade.php ENDPATH**/ ?>