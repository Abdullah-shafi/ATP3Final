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
                        <h3 class="breadcumb-title">Upload Property</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('middle'); ?>
 
<section class="meet-the-team-area section-padding-100-0">
       <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                      <h2>Upload Property</h2>
                        
                    </div>
                </div>
            </div>


       <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                 

                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                       
                        <center>
        
         <form method="post" enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>

    <table>
      <tr>
       
        <td><h2> <input type="Text" id="details" name="title" placeholder="Title"></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
      
        <td><h2><input type="Text" id="details" name="place" placeholder="Place" required=""></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        
        <td><h2><select id="detail" name="type">
                   
                   <option value="appartment">Appartment</option>
                   <option value="room">Room</option>
                   <option value="duplex">Duplex</option>
                   <option value="bachelor">Bachelor</option>
                </select>
              </h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
   
        <td><h2><select id="detail" name="style">
                  <option value="sell">Sell</option>
                  <option value="rent">Rent</option>
                </select>
              </h2></td>
      </tr>
      <tr><td><br></td></tr>
       <tr>
        
        <td><h2> <input type="Number" id="details" name="price" placeholder="Price" min="0" required=""></h2></td>
      </tr>
 <tr><td><br></td></tr>
       <tr>
        
        <td><h2>  <input type="Number" id="details" name="bed" placeholder="Bed" required=""></h2></td>
      </tr>
       <tr><td><br></td></tr>
       <tr>
        
        <td><h2>  <input type="Number" id="details" name="bath" placeholder="Bath" required=""></h2></td>
      </tr>
       <tr><td><br></td></tr>
       <tr>
        
        <td><h2>  <input type="Number" id="details" name="feet" placeholder="Sq.ft"></h2></td>
      </tr>
       <tr><td><br></td></tr>
       <tr>
        
        <td><h2> <input type="Number" id="details" name="floor" placeholder="Floor" required=""></h2></td>
      </tr> <tr><td><br></td></tr>
       <tr>
        
        <td><textarea style="font-size: 14px;" name="description" id="details"rows="3" cols="33"  placeholder="Description"></textarea></td>
      </tr>
       <tr><td><br></td></tr>
       <tr>
        
        <td> <h4 align="center">Picture:<input type="file" name="pic"  required=""></h4></td>
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
        
        <td> <h4><?php echo e(session('msg')); ?></h4></td>
      </tr>
 <tr>
        
        <td><button class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Upload</button>
   </td>
      </tr>





    </table>
  </form>

         </center>
                    </div>
                </div>

     </div>

                        
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/r_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah Shafi\Desktop\try\laratest\resources\views/website/customer_upload_property.blade.php ENDPATH**/ ?>