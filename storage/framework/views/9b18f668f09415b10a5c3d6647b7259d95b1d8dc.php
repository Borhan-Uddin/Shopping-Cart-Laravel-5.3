<?php $__env->startSection('content'); ?>
<div class="row" >
 <div class="container-fluid">
	<div class="col-md-4 col-md-offset-4">
    	<h1>Sign In</h1>
        <?php if(count($errors)>0): ?>
        	<div class="alert alert-danger">
            	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                	<p><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        	</div>
        <?php endif; ?>
        <form action="/signin" method="post" style="max-height:1500px">
        	<div class="form-group">
            	<label for="email">E-Mail</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            
            <div class="form-group">
            	<label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
            <?php echo e(csrf_field()); ?>

            <p>Don't have an account?<a href="/signup">Sign Up here</a></p>
        </form>
     </div>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>