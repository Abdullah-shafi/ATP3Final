<?php $__env->startSection('title'); ?>
Property Rental Managemnet System |Edit Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('start'); ?>


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Edit Profile</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('middle'); ?>
 
<section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Edit Profile</h2>
                        
                    </div>
                </div>
            </div>
 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="image/<?php echo e($user->c_image); ?>" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <center>
        
         <form method="post">
          <?php echo e(csrf_field()); ?>

    <table>
      <tr>
        <td><h2>Id : </h2></td>
        <td><h2><input type="text" readonly name="id" value="<?php echo e($user->customer_id); ?>"></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td><h2>UserName:</h2></td>
        <td><h2><input type="text" readonly name="uname" value="<?php echo e($user->username); ?>"></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td><h2>Name : </h2></td>
        <td><h2><input type="text" name="name" value="<?php echo e($user->name); ?>"></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td><h2>Email :</h2></td>
        <td><h2><input type="email" name="email" value="<?php echo e($user->email); ?>"></h2></td>
      </tr>
      <tr><td><br></td></tr>
       <tr>
        <td><h2>Mobile_No:</h2></td>
        <td><h2><input type="number" name="phone" value="<?php echo e($user->phone); ?>"></h2></td>
      </tr>

  <tr><td><br></td></tr>
  <tr>
        <td></td>
        <td> <h2 style="color: red"> <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($err); ?> <br>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></h2></td>
      </tr>
 

   <td></td>
        <td><button class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Update</button></td>
      </tr>
    </table>
  </form>

         </center>
                    </div>
                </div>

     </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/r_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah Shafi\Desktop\try\laratest\resources\views/website/customer_edit_profile.blade.php ENDPATH**/ ?>