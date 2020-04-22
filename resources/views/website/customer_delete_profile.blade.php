@extends('layout/r_main')

@section('title')
Property Rental Managemnet System | Delete Profile
@endsection

@section('start')


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
@endsection

@section('middle')
 
<section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            
 @foreach ($users as $user)
                   <form method="post" action="/customer_delete_profile/{{ $user->username }}">
                                {{csrf_field()}}

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
                                <h6><img src="img/icons/phone-call.png" alt=""> {{ $user->phone }}</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> {{ $user->email }}</h6>
                                <h6>Total_Posts    : {{ $user->total_posts }}</h6>
                                <h6>Active_Posts   : {{ $user->active_posts }}</h6>
                                <h6>Pending_Posts  : {{ $user->pending_posts }}</h6>
                                <h6>Sold_Posts     : {{ $user->sold_posts }}</h6><br>
                                <button class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Confirm Delete</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
 
     </div>
    
 </form>
     @endforeach
        </div>
    </section>

@endsection