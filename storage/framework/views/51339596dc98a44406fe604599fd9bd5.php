

<?php $__env->startSection('title'); ?>
    Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container w-25 p-3 mt-5" style="background-color: #F0EBE3; border-radius:20px">
    <h3>Login-page</h3>
    <form action="<?php echo e(route('login.post')); ?>" method="post">
        <?php echo csrf_field(); ?>
        
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name='email'>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="password" class="form-control" name='password' >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>    



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ABT-139\Desktop\Training\Laravel\login-app\resources\views/login.blade.php ENDPATH**/ ?>