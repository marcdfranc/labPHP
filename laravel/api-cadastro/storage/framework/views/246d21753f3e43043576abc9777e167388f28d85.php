;

<?php $__env->startSection('body'); ?>
    <div class="card border">
        <div class="card-body">
            <h5>products</h5>

            <?php if(count($products) > 0): ?>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->id); ?></td>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e($product->price); ?></td>
                                <td><?php echo e($product->stock); ?></td>
                                <td>
                                    <a href="/products/edit/<?php echo e($product->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/products/delete/<?php echo e($product->id); ?>" class="btn btn-danger btn-sm">Remove</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>                
            <?php endif; ?>
            <div class="card-footer">
                <a href="/products/new" class="btn btn-sm btn-primary" role="button">Add Product</a>
            </div>
        </div>
    </div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ['current' => 'products'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marcelo/Documents/sis/labPHP/laravel/cadastro/resources/views/products/index.blade.php ENDPATH**/ ?>