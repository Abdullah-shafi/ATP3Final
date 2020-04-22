@extends('layout/main_id')
@section('title')
Property Rental Managemnet System |Details
@endsection

@section('start')


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
@endsection

@section('middle')
 
<section class="meet-the-team-area section-padding-100-0">
	@foreach ($propertys as $property)
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Title: {{ $property->title }}</h2>
                        
                    </div>
                </div>
            </div>
 
            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="../abc/image/{{ $property->image }}" alt="">
                        </div>
                        
                    </div>
                </div>

     </div>
<center>
              <h4>Price: {{ $property->property_price }} <br>
              <h4>Area: {{ $property->property_area}} <br>
             <h4> Style: {{ $property->style }}<br>
              <h4>Bed: </i> {{ $property->bed }} <br>
             <h4> Bath: {{ $property->bath }}<br> 
             <h4> Sqt_feet:{{ $property->feet }}  sq. ft<br>

            <h4>Floor:{{ $property->floor }}th<br>
              <h4>p_type:{{ $property->p_type }}<br>
           <h4> Description:{{ $property->description }}</h4>
            <br><br>
            
         <a href="tel:{{ $property->phone }}"> <button style="background-color:green;height: 30px;width: 120px; " id="{{ $property->phone }} ">Call</button></a> 

        <a href="mailto:{{ $property->email }}"> <button style="background-color:red;height: 30px;width: 120px; " id="{{ $property->email }} ">Email</button></a>
            
<!-- 
              <script>

document.getElementById("{{ $property->phone }} ").addEventListener("click", function() {
  alert("<a href={{ $property->phone }}></a> ");
});
document.getElementById("{{ $property->email }} ").addEventListener("click", function() {
  alert("{{ $property->email }} ");
});

</script> -->
  
 </center>
<br>
     @endforeach
        </div>
    </section>

@endsection