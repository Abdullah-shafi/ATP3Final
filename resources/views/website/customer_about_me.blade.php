@extends('layout/r_main')

@section('title')
Property Rental Managemnet System | Profile
@endsection

@section('start')


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">About Me</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
@endsection

@section('middle')
 
<section class="meet-the-team-area section-padding-100-0" style="padding: 20px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2 style="color: red">My Profile</h2>
                        
                    </div>
                </div>
            </div>
 @foreach ($users as $user)
            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="image/{{ $user->c_image }}" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize.png" alt="">
                                <h2>{{ $user->name }}</h2>
                                <p>UserName:{{ $user->username }}</p>
                            </div>
                            <div class="address">
                                <h3><img src="img/icons/phone-call.png" alt=""> {{ $user->phone }}</h3>
                                <h3><img src="img/icons/envelope.png" alt=""> {{ $user->email }}</h3>
                                <h3>Total_Posts    : {{ $user->total_posts }}</h3>
                                <h3>Active_Posts   : {{ $user->active_posts }}</h3>
                                <h3>Pending_Posts  : {{ $user->pending_posts }}</h3>
                                <h3>Sold_Posts     : {{ $user->sold_posts }}</h3>
                            </div>
                            
                        </div>
                    </div>
                </div>

     </div>
     @endforeach
        </div>
    </section>

@endsection