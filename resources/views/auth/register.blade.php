@section('title')
    Register
@endsection

@extends('layouts.app')

@section('content')

@section('content')

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        #form {
            max-width: 400px;
            padding: 20px;
            margin: 50px auto;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,0.1);
        }

        .box {}

        body {
        background-image: url('images/register.jpg'); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        }

        label {
            font-weight: normal;
            margin-bottom: 20px;
        }
    </style>

    <script>
        $(document).ready(function() {
            $("select").change(function() {
                $(this).find("option:selected").each(function() {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".box").hide();
                    }
                });
            }).change();
        });
    </script>
</head>

<body>
  <!-- Option 1: Bootstrap Bundle with Popper -->

  <div class="container-fluid">
    <div class="row" style="display: flex;" >
      
      <div class="col col-sm-8" id="form">
        <x-jet-validation-errors class="mb-4 alert alert-danger" role="alert"/>
        {{-- @error('email')
      <div class="alert alert-danger " role="alert">
          {{ $message }}
      </div>
      @enderror --}}
         <h2 style= "font-size: 30px; margin-bottom: 15px;" class="text-center"><strong> Register With Us!</strong></h2>

         <form method="POST" action="{{ route('register') }}">
          @csrf

            <div class="row mb-4">
              <label for="name" class="col-md-4 col-form-label" style="font-size: 12px"><strong>Name</strong></label>
              <div class="col-md-8">
                <input type="text" name="name" id="name" class="form-control" required>
              </div>
            </div>

            <fieldset class="row mb-3">
                <label class="col-form-label col-sm-4 pt-0" style="font-size: 12px"><strong>Gender</strong></label>
                  <div class="col-sm-8">

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inline_Radio1" value="0" required="">
                        <label class="form-check-label" for="inlineRadio1" name="gender"><strong>Male</strong></label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inline_Radio2" value="1" required="">
                      <label class="form-check-label" for="inlineRadio2" name="gender"><strong>Female</strong></label>
                    </div>
                  </div>
              </fieldset>

            <div class="row mb-4">
                <label for="inputEmail3" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Age</strong></label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="age" id="age" required="true">
                </div>
              </div>

            <div class="row mb-4">
              <label for="inputEmail3" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Email</strong></label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" id="email" required="true">

              </div>
            </div>

            <div class="row mb-4">
              <label for="inputPassword3" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Password</strong></label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" id="password" required="true">
              </div>
            </div>

            <div class="row mb-4">
              <label for="phone" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Phone number</strong></label>
              <div class="col-sm-8">
                <input type="tel" class="form-control" maxlength="11" required="true" name="phone" id="phone">
              </div>
            </div>

            <div class="row mb-4">
              <label for="address" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Address</strong></label>
              <div class="col-sm-8">
                <textarea class="form-control" required="true" name="address" id="address"></textarea>
              </div>
            </div>

            <div class="row mb-4">
              <label for="mealplan" class="col-sm-4 col-form-label" style="font-size: 12px"> <strong>Geo Location</strong> <span>(To better improve our services)<span></label>
              <div class="col-sm-8" style="
              display: flex;
              height: fit-content;
          ">

                <!--START DISTANCE CALCULATION -->

                {{-- <p id="demo1"></p> --}}
  
                 {{-- <form id="myform" name="myform" action="GeoLocation.php" method="POST"> --}}
                  
                  <input type="text" name="geolocation" id="location"  />
	
                  <input type="button" value="GetLocation" onclick="getlocation()"/><br/>
                  
                  {{-- <input type="submit" name="submit"/> --}}
                  {{-- </form> --}}

                  <script>
                    var variable1 = document.getElementById("demo1");
                    function getlocation() {
                      navigator.geolocation.getCurrentPosition(showLoc);
                    }
                    function showLoc(pos) {
                  
                    var lat=pos.coords.latitude;
                    var log=pos.coords.longitude;
                  
                   document.getElementById("location").value = lat+","+log;
                  
                      variable1.innerHTML =
                        "Latitude: " +
                        pos.coords.latitude +
                        "<br>Longitude: " +
                        pos.coords.longitude;
                    }
                  </script>
                  
                  {{-- <hr/>
                  
                  <?php
                  
                  if(isset($_POST["submit"]))
                  {
                   $email = $_POST['email'];
                   $mobile = $_POST['mobile'];
                   $mylocation = $_POST['location'];
                   
                   echo "Your Email is ".$email."<br/>";
                   echo "Your Mobile is ".$mobile."<br/>";
                   echo "Your Location is ".$mylocation;
                   }
                   ?> --}}
              
    
            <!--END DISTANCE CALCULATION -->
           
              </div>
            </div>

            <div class="row mb-4">
                  <label for="role" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Interest</strong></label>
                  <div class="col-sm-8">
                  <select class="form-select form-select-lg" name="role" required>
                      <option value="" style="font-size: 12px"><strong>Choose Your Interest</strong></option>
                      <option value="member" style="font-size: 12px"><strong>Get Meal</strong></option>
                      <option value="partner" style="font-size: 12px"><strong>Partner</strong></option>
                      <option value="volunteer" style="font-size: 12px"><strong>Volunteer</strong></option>
                      {{-- <option value="donor" style="font-size: 12px"><strong>Donor</strong></option> --}}
                  </select>
              </div>
            </div>

            <!-- Member box -->
          <div class="member box">

              <div class="row mb-4">
                  <label for="caregivername" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Care Giver Name</strong></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="member_caregiver_name" id="member_caregiver_name"  >
                    </div>
              </div>

              <div class="row mb-4">
                <label for="cgphone" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Care Giver Relationship</strong></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" maxlength="11" name="member_caregiver_relation" id="member_caregiver_relation"  >
                  </div>
              </div>

              <div class="row mb-4">
                <label for="cgphone" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Requestor Medical Condition<strong></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" maxlength="11" name="member_medical_condition" id="member_medical_condition" >
                  </div>
              </div>

              <div class="row mb-4">
                <label for="cgphone" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Medical Card ID</strong></label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" maxlength="11" name="member_medical_number" id="member_medical_number">
                  </div>
              </div>

            <div class="row mb-4">
              <label for="cgphone" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Meal Plan Duration (days)</strong></label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" maxlength="11" name="member_meal_duration" value="30"  readonly>
                </div>
            </div>

          </div>
            

            <!-- Partner box -->
            <div class="partner box">
              <div class="row mb-4">
                  <label for="partner" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Restaurant Name</strong></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="partnership_restaurant">
                    </div>
              </div>
              <div class="row mb-4">
                <label for="partner" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Partnership Duration</strong></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="partnership_duration" >
                  </div>
              </div>

              
            </div>

             

            <!-- Volunteer box -->
            <div class="volunteer box">
                <fieldset class="row mb-3">
                    <label class="col-form-label col-sm-4 pt-0" style="font-size: 12px"><strong>Volunteer Vaccination Status</strong></label>
                      <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="volunteer_vaccination" id="inlineRadio1" value="0" >
                            <label class="form-check-label" for="inlineRadio1"><strong>Yes</strong></label>
                        </div>
  
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="volunteer_vaccination" id="inlineRadio2" value="1" >
                          <label class="form-check-label" for="inlineRadio2"><strong>No</strong></label>
                        </div>
                      </div>
                  </fieldset>

              <div class="row mb-4">
                <label for="volunteer" class="col-sm-4 col-form-label" style="font-size: 12px"><strong>Volunteer Duration</strong></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="volunteer_duration" >
                  </div>
              </div>

              <fieldset class="row mb-3">
                <label class="col-form-label col-sm-4 pt-0" style="font-size: 12px"><strong>Available day</strong></label>
                  <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Monday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox1">Monday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Tuesday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox2">Tuesday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Wednesday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox3">Wednesday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Thursday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox4">Thursday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Friday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox5">Friday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Saturday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox6">Saturday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value ="Sunday"type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox7">Sunday</label>
                    </div>
                  </div>
              </fieldset>

              
            </div>

            {{-- <!-- Donor box -->
            <div class="donor box">
              <fieldset class="row mb-3">
                <label class="col-form-label col-sm-4 pt-0" style="font-size: 12px"><strong>Donation Plan</strong></label>
                  <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="donation_plan[]" value="Daiily Meal Plan" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox1" style="font-size: 12px"><strong>daily meal donation</strong></label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="donation_plan[]" value="Weekly Meal Plan" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox2" style="font-size: 12px"><strong>weekly meal donation</strong></label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="donation_plan[]" value="Monthly Meal Plan" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox3" style="font-size: 12px"><strong>monthly meal donation</strong></label>
                    </div>
                  </div>
              </fieldset>
            </div> --}}

            <button type="submit" class="btn btn-outline-primary" name="button2" style="float: right;"><strong>Register</strong>
            </button>
            <button type="reset" class="btn btn-outline-danger" style="float: right;margin-right: 20px;"><strong>Clear</strong></button>

        </form>

       

      </div>
    </div>
  </div>
</body>
		
@endsection