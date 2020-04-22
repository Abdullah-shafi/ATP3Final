<?php $__env->startSection('title'); ?>
Property Rental Managemnet System | Password
<?php $__env->stopSection(); ?>

<!-- ##### Hero Area Start ##### -->
<?php $__env->startSection('start'); ?>


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Change Password</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
 <!-- ##### Hero Area End ##### -->


<?php $__env->startSection('middle'); ?>

<form method="post">
          <?php echo e(csrf_field()); ?>

          <center>
    <table>
    	 <tr><td><br></td></tr>
    	  <tr><td><br></td></tr>
    	   <tr><td><br></td></tr>
    	    <tr><td><br></td></tr>
    	     <tr><td><br></td></tr>

      <tr>
        <td><h2>New Password :  </h2></td>
        <td><h2><input type="text"  name="password" value=" "></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td><h2>Confirm Password : </h2></td>
        <td><h2><input type="text" name="confirm_password" value=""></h2></td>
      </tr>
 
  <tr><td><br></td></tr>
  <tr>
        <td></td>
        <td> <h2 style="color: red"> <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($err); ?> <br>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></h2></td>
      </tr>
 <tr><td><br></td></tr>
  <tr>
        <td></td>
        <td> <h2 style="color: red"> <?php echo e(session('msg')); ?> 
       </h2></td>
      </tr>

   <td></td>
        <td><button class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Change Password</button></td>
      </tr>

      <tr><td><br></td></tr>
    </table>
  </form>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout/r_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\Aweb\try\laratest\resources\views/website/customer_change_password.blade.php ENDPATH**/ ?>