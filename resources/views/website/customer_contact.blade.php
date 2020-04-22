@extends('layout/r_main')

@section('title')
Property Rental Managemnet System | Home
@endsection

@section('start')


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
@endsection

@section('middle')
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
                        <center>@foreach ($images as $image)<h2><img src="image/{{ $image->c_image }}" alt="Avatar" style="border-radius: 50%;width:40px;"> {{ $image->name }} @endforeach</center>




                            <div style="border: 2px solid #C2BCBB;
                     height: 300px;overflow: scroll; display: flex;
                     flex-direction: column-reverse;">

                        <form method="post"  >
                                {{csrf_field()}} 
                     
                            @foreach ($users as $user)
                                     
                            @if ($user->from=='admin')
                             <p align="left"><span style="background-color:#C2BCBB;color:black;  border: 2px solid #C2BCBB;border-radius: 25px;">
                           {{ $user->msg }}</span></p><br>

                            @else
                           
                           <p align="right"><span style="background-color:DodgerBlue;color:black;  border: 2px solid DodgerBlue;border-radius: 25px;">
                           {{ $user->msg }}</span></p><br>
                            @endif
                              @endforeach
                             
            
                            <div class="form-group1" >
                               <center><textarea style="font-size: 14px;" name="message" id="message"rows="3" cols="90"  placeholder="Your Message"></textarea></center> 
                            </div>
                                @foreach($errors->all() as $err)
                                {{$err}} <br>
                                @endforeach
                            <center><button style="padding-top: 0px ; margin: 0px" type="submit" class="btn south-btn">Send Message</button></center><br>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection