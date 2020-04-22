<?php $__env->startSection('title'); ?>
Property Rental Managemnet System | Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('start'); ?>


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('middle'); ?>
    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Contact info</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 19 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09 AM - 14 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="img/icons/phone-call.png" alt=""> +8801303574620</h6>
                            <h6><img src="img/icons/envelope.png" alt=""> office@gmail.com</h6>
                            <h6><img src="img/icons/location.png" alt=""> KA/137,Progoty Saroni,Kuratuli,<br>Kuril , Dhaka</h6>
                        </div>
                    </div>
                </div>
                <!-- Contact Form Area -->


                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <center><?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><h2><img src="image/<?php echo e($image->c_image); ?>" alt="Avatar" style="border-radius: 50%;width:40px;"> <?php echo e($image->name); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></center>




                            <div style="border: 2px solid #C2BCBB;
                     height: 300px;overflow: scroll; display: flex;
                     flex-direction: column-reverse;">

                        <form method="post"  >
                                <?php echo e(csrf_field()); ?> 
                     
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                            <?php if($user->from=='admin'): ?>
                             <p align="left"><span style="background-color:#C2BCBB;color:black;  border: 2px solid #C2BCBB;border-radius: 25px;">
                           <?php echo e($user->msg); ?></span></p><br>

                            <?php else: ?>
                           
                           <p align="right"><span style="background-color:DodgerBlue;color:black;  border: 2px solid DodgerBlue;border-radius: 25px;">
                           <?php echo e($user->msg); ?></span></p><br>
                            <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             
            
                            <div class="form-group1" >
                               <center><textarea style="font-size: 14px;" name="message" id="message"rows="3" cols="90"  placeholder="Your Message"></textarea></center> 
                            </div>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($err); ?> <br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <center><button style="padding-top: 0px ; margin: 0px" type="submit" class="btn south-btn">Send Message</button></center><br>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/r_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\Aweb\try\laratest\resources\views/website/customer_contact.blade.php ENDPATH**/ ?>