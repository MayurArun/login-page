

<?php $__env->startSection('title'); ?>
    register
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="container w-25 p-3 mt-5" style="background-color: #F0EBE3; border-radius:20px">
    <h3>Register-page</h3>
    <form action="<?php echo e(route('register.post')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name='name'>
          </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name='email'>
        </div>
        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="password" class="form-control" name='password' >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ABT-139\Desktop\Training\Laravel\login-app\resources\views/register.blade.php ENDPATH**/ ?>