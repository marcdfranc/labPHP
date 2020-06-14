;

<?php $__env->startSection('body'); ?>
<div class="card border">
    <div class="card-body">
        <h5>Customers</h5>            
        <?php if(count($customers) > 0): ?>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Customer Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Mail</th>                            
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($customer->id); ?></td>
                            <td><?php echo e($customer->name); ?></td>
                            <td><?php echo e($customer->age); ?></td>
                            <td><?php echo e($customer->address); ?></td>
                            <td><?php echo e($customer->mail); ?></td>
                            <td>
                                <a href="/customers/edit/<?php echo e($customer->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/customers/delete/<?php echo e($customer->id); ?>" class="btn btn-danger btn-sm">Remove</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>           
        <?php endif; ?>
        <div class="card-footer">
             <a href="/customers/new" class="btn btn-sm btn-primary" role="button">Add Customer</a>
         </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app', ['current' => 'customers'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marcelo/Documents/sis/labPHP/laravel/cadastro/resources/views/customers/index.blade.php ENDPATH**/ ?>