<?php $__env->startSection('title'); ?>
Property Rental Managemnet System |Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('start'); ?>


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(/img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Property Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('middle'); ?>
 
<section class="meet-the-team-area section-padding-100-0">
	<?php $__currentLoopData = $propertys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>
 
            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="../abc/image/<?php echo e($property->image); ?>" alt="">
                        </div>
                        
                    </div>
                </div>

     </div>
<form method="post">
          <?php echo e(csrf_field()); ?>

          <center>
    <table>
      <tr>
        <td><h2>Title:  </h2></td>
        <td><h2><input type="text"  name="title" value=" <?php echo e($property->title); ?>"></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td><h2>Price:</h2></td>
        <td><h2><input type="text" name="property_price" value="<?php echo e($property->property_price); ?>"></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td><h2>Area: </h2></td>
        <td><h2><input type="text" name="property_area" value="<?php echo e($property->property_area); ?>"></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td><h2>Style :</h2></td>
        <td><h2><select name="style">
                                            <option>rent</option>
                                            <option>sell</option>
                                           
                                        </select>
</h2></td>
      </tr>
      <tr><td><br></td></tr>
       <tr>
        <td><h2>Bed:</h2></td>
        <td><h2><input type="number" name="bed" value="<?php echo e($property->bed); ?>"></h2></td>
      </tr>
        <tr><td><br></td></tr>
       <tr>
        <td><h2>Bath:</h2></td>
        <td><h2><input type="number" name="bath" value="<?php echo e($property->bath); ?>"></h2></td>
      </tr>
        <tr><td><br></td></tr>
       <tr>
        <td><h2>Sqt_Feet:</h2></td>
        <td><h2><input type="number" name="feet" value="<?php echo e($property->feet); ?>"></h2></td>
      </tr>
      <tr><td><br></td></tr>
       <tr>
        <td><h2>Floor:</h2></td>
        <td><h2><input type="number" name="floor" value="<?php echo e($property->floor); ?>"></h2></td>
      </tr>
      <tr><td><br></td></tr>
       <tr>
        <td><h2>Description:</h2></td>
        <td><h2><input type="text" name="description" value="<?php echo e($property->description); ?>"></h2></td>
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

      <tr><td><br></td></tr>
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
<?php echo $__env->make('layout/main_id', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah Shafi\Desktop\try\laratest\resources\views/website/customer_edit_property_details.blade.php ENDPATH**/ ?>