;

<?php $__env->startSection('body'); ?>
    <div class="card border">
        <div class="card-body">
            <form action="/categories/edit/<?php echo e($category->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Catregory Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="<?php echo e($category->name); ?>" placeholder="Category Name">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <button type="button" class="btn btn-danger btn-sm">Cancel</button>
            </form>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ['current' => 'categories'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marcelo/Documents/sis/labPHP/laravel/cadastro/resources/views/categories/edit.blade.php ENDPATH**/ ?>