;

<?php $__env->startSection('body'); ?>
    <div class="card border">
        <div class="card-body">
            <form action="/products/edit/<?php echo e($product->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php if($category->id == $product->category_id): ?> selected="selected" <?php endif; ?>><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input class="form-control" value="<?php echo e($product->name); ?>" type="text" name="name" id="name" placeholder="Product Name">
                </div>
				
				<div class="form-group">
					<label for="price">Price</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">$</div>
						</div>
						<input type="text" value="<?php echo e($product->price); ?>" class="form-control" id="price" name="price" placeholder="$ Price">
					</div>
				</div>
				<div class="form-group">
					<label for="stock">Stock</label>
					<input class="form-control" value="<?php echo e($product->stock); ?>" type="number" name="stock" id="stock" placeholder="Stock">
				</div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <a href="/products" type="button" class="btn btn-danger btn-sm" role="button">Cancel</a>
            </form>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ['current' => 'product'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marcelo/Documents/sis/labPHP/laravel/cadastro/resources/views//products/edit.blade.php ENDPATH**/ ?>