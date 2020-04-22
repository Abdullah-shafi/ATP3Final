<?php $__env->startSection('title'); ?>
Property Rental Managemnet System | All Property
<?php $__env->stopSection(); ?>


<!-- ##### Hero Area Start ##### -->
<?php $__env->startSection('start'); ?>
<div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your home</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/hero2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your dream house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/hero3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your perfect house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php $__env->stopSection(); ?>
 <!-- ##### Hero Area End ##### -->



 
 <!-- ##### Advance Search Area Start ##### -->
   <?php $__env->startSection('search'); ?> 
<div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search for your home</p>
                        </div>


<!-- Search Form -->
                        <form  method="post" action="/customer_all_property">
                            <?php echo e(csrf_field()); ?>

                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                         <input list="title" name="titles"class="form-control" type="text"placeholder="Title">
 
                                    <datalist id="title" >
                                          <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($property->title); ?>"/>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </datalist>
                                    </div>
                                </div> 
                        
                                <div class="col-12 col-md-4 col-lg-3">
                                     <div class="form-group">
                                    <input list="hosting-plan" name="areas" class="form-control" type="text"placeholder="Area">
 
                                    <datalist id="hosting-plan">
                                          <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($property->property_area); ?>"/>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </datalist>
                                </div>
                                </div>
                                
                                   <div class="col-12 col-md-4 col-lg-3">
                                     <div class="form-group">
                                    <input list="p_type" name="p_type" class="form-control" type="text" placeholder="P_type">
 
                                    <datalist id="p_type">
                                          
                                         <option value="apartment"/>  
                                         <option value="house"/> 
                                         <option value="bachelor"/> 
                                         <option value="flat"/> 

                                    </datalist>
                                </div>
                                </div>

                               <div class="col-12 col-md-4 col-lg-3">
                                     <div class="form-group">
                                    <input list="bed" name="bed" class="form-control" type="text" placeholder="BedRooms">
 
                                    <datalist id="bed">
                                          
                                         <option value="1"/>  
                                         <option value="2"/> 
                                         <option value="3"/> 
                                         <option value="4"/> 
                                         <option value="5+"/> 

                                    </datalist>
                                </div>
                                </div>

                                
                               <div class="col-12 col-md-4 col-lg-3">
                                     <div class="form-group">
                                    <input list="bath" name="bath" class="form-control" type="text" placeholder="BathRooms">
 
                                    <datalist id="bath">
                                          
                                         <option value="1"/>  
                                         <option value="2"/> 
                                         <option value="3"/> 
                                         <option value="4"/> 
                                         <option value="5+"/> 

                                    </datalist>
                                </div>
                                </div>
 
                             <div class="col-12 col-md-4 col-lg-3">
                                     <div class="form-group">
                                    <input list="feet" name="feets" class="form-control" type="text" placeholder="Sq_feet">
 
                                    <datalist id="feet">
                                          
                                         <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($property->feet); ?>"/>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                         
                                          

                                    </datalist>
                                </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                     <div class="form-group">
                                    <input list="price" name="prices" class="form-control" type="text" placeholder="price">
 
                                    <datalist id="price">
                                          
                                         <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($property->property_price); ?>"/>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                         
                                          

                                    </datalist>
                                </div>
                                </div>
                               
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ##### Advance Search Area End ##### -->
<?php $__env->stopSection(); ?>


<!-- #####  Properties Area Start ##### -->
<?php $__env->startSection('middle'); ?>
 <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>All Properties</h2>
                        <p>Here You Will Find All Kind of Properties.</p>
                    </div>
                </div>
            </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




            <div class="row">
<?php $__currentLoopData = $propertys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">

                            <form method="get" action="/customer_property_details/<?php echo e($property->property_id); ?>">
                                <?php echo e(csrf_field()); ?>


                              <button id="<?php echo e($property->property_id); ?>">
                                <img src="image/<?php echo e($property->image); ?>" alt="">
                    


                                    <div class="tag">
                                         <span><?php echo e($property->style); ?></span>
                                    </div>
                                    <div class="list-price">
                                       <p>TK.<?php echo e($property->property_price); ?></p>
                                     </div>

                               </button>
                            </form>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5><?php echo e($property->title); ?></h5>
                            <p class="location"><img src="img/icons/location.png" alt=""><?php echo e($property->property_area); ?></p>
                            
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="img/icons/bathtub.png" alt="">
                                    <span><?php echo e($property->bath); ?></span>
                                </div>
                                <div class="garage">
                                    <img src="img/icons/garage.png" alt="">
                                    <span><?php echo e($property->bed); ?></span>
                                </div>
                                <div class="space">
                                    <img src="img/icons/space.png" alt="">
                                    <span><?php echo e($property->feet); ?> sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </div>
           
        </div>

<div>
    <?php echo e($propertys->links()); ?>

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
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <section class="south-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h2>Client testimonials</h2>
                        <p>Clients Comment About Our System.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/feature6.jpg" alt="">
                                <p>Abdullah Shafi, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Good Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/feature6.jpg" alt="">
                                <p>Mahmudul, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Best Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/feature6.jpg" alt="">
                                <p>Arbab, <span>Customer</span></p>
                            </div>
                        </div>
                          <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Good Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/feature6.jpg" alt="">
                                <p>Anik, <span>Customer</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonials Area End ##### -->

 
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/r_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah Shafi\Desktop\try\laratest\resources\views/website/customer_all_property.blade.php ENDPATH**/ ?>