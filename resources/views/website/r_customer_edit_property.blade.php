@extends('layout/r_main')

@section('title')
Property Rental Managemnet System | Home

@endsection


<!-- ##### Hero Area Start ##### -->
@section('start')


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Edit Prperty</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
 <!-- ##### Hero Area End ##### -->






<!-- ##### Featured Properties Area Start ##### -->
@section('middle')
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
@foreach($propertys as $property)
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">

                            <!-- <form method="" action="/customer_property_details/{{$property->property_id}}"> -->
                                <!-- {{csrf_field()}} -->

                              <!-- <button id="{{$property->property_id}}"> -->
                                <a href="/customer_edit_property_details/{{$property->property_id}} ">
                                <img src="image/{{$property->image}}" alt="">
                    


                                    <div class="tag">
                                         <span>{{$property->style}}</span>
                                    </div>
                                    <div class="list-price">
                                       <p>TK.{{$property->property_price}}</p>
                                     </div>
                              </a>
                               <!-- </button>
                            </form> -->
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>{{$property->title}}</h5>
                            <p class="location"><img src="img/icons/location.png" alt="">{{$property->property_area}}</p>
                            
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="img/icons/bathtub.png" alt="">
                                    <span>{{$property->bath}}</span>
                                </div>
                                <div class="garage">
                                    <img src="img/icons/garage.png" alt="">
                                    <span>{{$property->bed}}</span>
                                </div>
                                <div class="space">
                                    <img src="img/icons/space.png" alt="">
                                    <span>{{$property->feet}} sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               @endforeach 
            </div>

            <div>
    {{$propertys->links()}}
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
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Welcome To our System, {{session('uname')}}</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">You Can Search Property Here:</h6>
                        <a href="r_customer_home" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    

 
    @endsection