;

<?php $__env->startSection('body'); ?>
    <div class="card border">
        <div class="card-body">
            <h5>Categories</h5>

            <?php if(count($categories) > 0): ?>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($category->id); ?></td>
                                <td><?php echo e($category->name); ?></td>
                                <td>
                                    <a href="/categories/edit/<?php echo e($category->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/categories/delete/<?php echo e($category->id); ?>" class="btn btn-danger btn-sm">Remove</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>                
            <?php endif; ?>
            <div class="card-footer">
                <a href="/categories/new" class="btn btn-sm btn-primary" role="button">Add Category</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ['current' => 'categories'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marcelo/Documents/sis/labPHP/laravel/cadastro/resources/views/categories/index.blade.php ENDPATH**/ ?>