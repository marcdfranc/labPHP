<?php $__env->startSection('body'); ?>

    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
						<h5 class="card-title">Add Product</h5>
						<p class="card-text">Add your products here. Don't forget to add the categories before.</p>
						<a href="/products" class="btn btn-primary">Add new Product</a>
					</div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
						<h5 class="card-title">Add Categories </h5>
						<p class="card-text">Add your the categories of your products.</p>
						<a href="/categories" class="btn btn-primary">Add new category</a>
					</div>
					
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ['current' => 'home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marcelo/Documents/sis/labPHP/laravel/api-cadastro/resources/views/index.blade.php ENDPATH**/ ?>