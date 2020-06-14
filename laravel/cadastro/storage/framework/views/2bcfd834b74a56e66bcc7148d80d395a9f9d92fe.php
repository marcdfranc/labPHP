<?php $__env->startSection('body'); ?>
    <div class="card border">
        <div class="card-header">
            <h5>New Customer</h5>
        </div>
        <div class="card-body">
            <form action="/customers" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Customer Name</label>
                    <input class="form-control <?php echo e($errors->has('name')? "is-invalid" : ""); ?>" type="text" name="name" id="name" placeholder="Customer Name">
                    <?php if($errors->has('name')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('name')); ?>

                        </div>                        
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input class="form-control <?php echo e($errors->has('age')? "is-invalid" : ""); ?>" type="text" name="age" id="age" placeholder="Age">
                    <?php if($errors->has('age')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('age')); ?>

                        </div>                        
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control <?php echo e($errors->has('address')? "is-invalid" : ""); ?>" type="text" name="address" id="address" placeholder="Adress">
                    <?php if($errors->has('address')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('address')); ?>

                        </div>                        
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="mail">Mail</label>
                    <input class="form-control <?php echo e($errors->has('mail')? "is-invalid" : ""); ?>" type="text" name="mail" id="mail" placeholder="Adress">
                    <?php if($errors->has('mail')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('mail')); ?>

                        </div>                        
                    <?php endif; ?>
                </div>                

                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <a href="/customers" class="btn btn-danger btn-sm" role="button">Cancel</a>
            </form>
        </div>

        
        
        <?php if($errors->any()): ?>
            <div class="card-footer">                
                <div class="alert alert-danger" role="alert">
                    <span>Error!</span>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ['current' => 'customers'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marcelo/Documents/sis/labPHP/laravel/cadastro/resources/views/customers/create.blade.php ENDPATH**/ ?>