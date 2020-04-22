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
                    <div class="section-heading">
                        <h2>Title: <?php echo e($property->title); ?></h2>
                        
                    </div>
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
<center>
              <h4>Price: <?php echo e($property->property_price); ?> <br>
              <h4>Area: <?php echo e($property->property_area); ?> <br>
             <h4> Style: <?php echo e($property->style); ?><br>
              <h4>Bed: </i> <?php echo e($property->bed); ?> <br>
             <h4> Bath: <?php echo e($property->bath); ?><br> 
             <h4> Sqt_feet:<?php echo e($property->feet); ?>  sq. ft<br>

            <h4>Floor:<?php echo e($property->floor); ?>th<br>
              <h4>p_type:<?php echo e($property->p_type); ?><br>
           <h4> Description:<?php echo e($property->description); ?></h4>
            <br><br>
            
         <a href="tel:<?php echo e($property->phone); ?>"> <button style="background-color:green;height: 30px;width: 120px; " id="<?php echo e($property->phone); ?> ">Call</button></a> 

        <a href="mailto:<?php echo e($property->email); ?>"> <button style="background-color:red;height: 30px;width: 120px; " id="<?php echo e($property->email); ?> ">Email</button></a>
            
<!-- 
              <script>

document.getElementById("<?php echo e($property->phone); ?> ").addEventListener("click", function() {
  alert("<a href=<?php echo e($property->phone); ?>></a> ");
});
document.getElementById("<?php echo e($property->email); ?> ").addEventListener("click", function() {
  alert("<?php echo e($property->email); ?> ");
});

</script> -->
  
 </center>
<br>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main_id', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\Aweb\try\laratest\resources\views/website/customer_property_details.blade.php ENDPATH**/ ?>