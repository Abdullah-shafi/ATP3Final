<?php $__env->startSection('title'); ?>
Property Rental Managemnet System | Delete Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('start'); ?>


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Delete Profile</h3>
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
            
 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <form method="post" action="/customer_delete_profile/<?php echo e($user->username); ?>">
                                <?php echo e(csrf_field()); ?>


            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="image/<?php echo e($user->c_image); ?>" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize.png" alt="">
                                <h2><?php echo e($user->name); ?></h2>
                                <p>UserName:<?php echo e($user->username); ?></p>
                            </div>
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> <?php echo e($user->phone); ?></h6>
                                <h6><img src="img/icons/envelope.png" alt=""> <?php echo e($user->email); ?></h6>
                                <h6>Total_Posts    : <?php echo e($user->total_posts); ?></h6>
                                <h6>Active_Posts   : <?php echo e($user->active_posts); ?></h6>
                                <h6>Pending_Posts  : <?php echo e($user->pending_posts); ?></h6>
                                <h6>Sold_Posts     : <?php echo e($user->sold_posts); ?></h6><br>
                                <button class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Confirm Delete</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
 
     </div>
    
 </form>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/r_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\Aweb\try\laratest\resources\views/website/customer_delete_profile.blade.php ENDPATH**/ ?>