@extends('layout/r_main')

@section('title')
Property Rental Managemnet System | Password
@endsection

<!-- ##### Hero Area Start ##### -->
@section('start')


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Change Password</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
 <!-- ##### Hero Area End ##### -->


@section('middle')

<form method="post">
          {{csrf_field()}}
          <center>
    <table>
    	 <tr><td><br></td></tr>
    	  <tr><td><br></td></tr>
    	   <tr><td><br></td></tr>
    	    <tr><td><br></td></tr>
    	     <tr><td><br></td></tr>

      <tr>
        <td><h2>New Password :  </h2></td>
        <td><h2><input type="text"  name="password" value=" "></h2></td>
      </tr>
       <tr><td><br></td></tr>
      <tr>
        <td><h2>Confirm Password : </h2></td>
        <td><h2><input type="text" name="confirm_password" value=""></h2></td>
      </tr>
 
  <tr><td><br></td></tr>
  <tr>
        <td></td>
        <td> <h2 style="color: red"> @foreach($errors->all() as $err)
    {{$err}} <br>
  @endforeach</h2></td>
      </tr>
 <tr><td><br></td></tr>
  <tr>
        <td></td>
        <td> <h2 style="color: red"> {{session('msg')}} 
       </h2></td>
      </tr>

   <td></td>
        <td><button class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Change Password</button></td>
      </tr>

      <tr><td><br></td></tr>
    </table>
  </form>



@endsection



