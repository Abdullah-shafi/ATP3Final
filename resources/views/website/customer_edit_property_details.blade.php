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
<form method="post">
          {{csrf_field()}}
          <center>
    <table>
      <tr>
        <td><h2>Title:  </h2></td>
        <td><h2><input type="text"  name="title" value=" {{ $property->title }}"></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td><h2>Price:</h2></td>
        <td><h2><input type="text" name="property_price" value="{{ $property->property_price }}"></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td><h2>Area: </h2></td>
        <td><h2><input type="text" name="property_area" value="{{ $property->property_area}}"></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td><h2>Style :</h2></td>
        <td><h2><select name="style">
                                            <option>rent</option>
                                            <option>sell</option>
                                           
                                        </select>
</h2></td>
      </tr>
      <tr><td><br></td></tr>
       <tr>
        <td><h2>Bed:</h2></td>
        <td><h2><input type="number" name="bed" value="{{ $property->bed }}"></h2></td>
      </tr>
        <tr><td><br></td></tr>
       <tr>
        <td><h2>Bath:</h2></td>
        <td><h2><input type="number" name="bath" value="{{ $property->bath }}"></h2></td>
      </tr>
        <tr><td><br></td></tr>
       <tr>
        <td><h2>Sqt_Feet:</h2></td>
        <td><h2><input type="number" name="feet" value="{{ $property->feet }}"></h2></td>
      </tr>
      <tr><td><br></td></tr>
       <tr>
        <td><h2>Floor:</h2></td>
        <td><h2><input type="number" name="floor" value="{{ $property->floor }}"></h2></td>
      </tr>
      <tr><td><br></td></tr>
       <tr>
        <td><h2>Description:</h2></td>
        <td><h2><input type="text" name="description" value="{{ $property->description }}"></h2></td>
      </tr>
  <tr><td><br></td></tr>
  <tr>
        <td></td>
        <td> <h2 style="color: red"> @foreach($errors->all() as $err)
    {{$err}} <br>
  @endforeach</h2></td>
      </tr>
 

   <td></td>
        <td><button class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Update</button></td>
      </tr>

      <tr><td><br></td></tr>
    </table>
  </form>

         </center>
                    </div>
                </div>

     </div>
     @endforeach
        </div>
    </section>

@endsection