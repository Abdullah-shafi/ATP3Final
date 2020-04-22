<?php $__env->startSection('title'); ?>
Property Rental Managemnet System | Delete_property

<?php $__env->stopSection(); ?>


<!-- ##### Hero Area Start ##### -->
<?php $__env->startSection('start'); ?>


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Delete/Sold Prperty</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
 <!-- ##### Hero Area End ##### -->






<!-- ##### Featured Properties Area Start ##### -->
<?php $__env->startSection('middle'); ?>
 <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>My Uploaded Properties</h2>
                        
                    </div>
                </div>
            </div>





            <div class="row">
<?php $__currentLoopData = $propertys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">

                            <!-- <form method="" action="/customer_property_details/<?php echo e($property->property_id); ?>"> -->
                                <!-- <?php echo e(csrf_field()); ?> -->

                              <!-- <button id="<?php echo e($property->property_id); ?>"> -->
                                
                                <img src="image/<?php echo e($property->image); ?>" alt="">
                    


                                    <div class="tag">
                                         <span><?php echo e($property->style); ?></span>
                                    </div>
                                    <div class="list-price">
                                       <p>TK.<?php echo e($property->property_price); ?></p>
                                     </div>
                            
                               <!-- </button>
                            </form> -->
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5><?php echo e($property->title); ?></h5>
                            <p class="location"><img src="img/icons/location.png" alt=""><?php echo e($property->property_area); ?></p>
                            
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                
                                <div class="bathroom">
                                    <img src="img/icons/bathtub.png" alt="">
                                    <span><?php echo e($property->bath); ?></span>
                                </div>
                                <div class="garage">
                                    <img src="img/icons/garage.png" alt="">
                                    <span><?php echo e($property->bed); ?></span>
                                </div>
                              

                                 <div class="space">
                                   <a href="/customer_delete_property/<?php echo e($property->property_id); ?> " >  <button class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Delete/sold</button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </div>

            <div>
    <?php echo e($propertys->links()); ?>

</div>

          
        </div>  


    </section>
    <!-- ##### Featured Properties Area End ##### -->


<!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(img/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Welcome To our System, <?php echo e(session('uname')); ?></h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">You Can Search Property Here:</h6>
                        <a href="r_customer_home" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    

 
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/r_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah Shafi\Desktop\try\laratest\resources\views/website/r_customer_delete_property.blade.php ENDPATH**/ ?>