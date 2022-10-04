@section('title')
    Donation
@endsection
@extends('layouts.app')


@section('content')
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meals on Wheels - Donation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <style>
      @media (min-width: 1025px) {
    .h-custom {
        height: 100vh !important;
    }
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: 0.75em;
    padding-right: 0.75em;
}
.card-registration .select-arrow {
    top: 13px;
}

@media (min-width: 992px) {
    .card-registration-2 .bg-indigo {
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
    }
}
@media (max-width: 1000px) {
    .card-registration-2 .bg-indigo {
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
}

    </style>
  </head>
  <body>
  <section class="h-100 h-custom gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px; border:none;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6" >
                <div class="p-5">
                  <div class="p-5">
                  <h4 class="fw-bold mb-3 text-center" style="font-size:16px ; margin: 0 0 0 -50px ;">SENIORS <br>NEED YOU</h4>
                      <p class="text-center fw-light mb-5 mb-2" style="font-size:12px; margin:22px 0 0 -50px;">Your gift will help us support local programs that <br> keep seniors safe and living independently <br>nationwide.</p>
                      <form class="form-inline text-center mb-4 mb-2">
                      <div class="form-group" style="padding: 0 45px 0 25px ; color: grey; ">
                          <p style="font-size: 10px;">1 <br> DONATION</p>
                        </div>
                        <div class="form-group" style="padding-right:45px ;color: grey;">
                          <p style="font-size: 10px;">2 <br> BILLING</p>
                        </div>
                        <div class="form-group" style="padding-right:45px ;color: grey;">
                          <p style="font-size: 10px;">3 <br> PAYMENT</p>
                        </div>
                        <div class="form-group" style="padding-right:45px ;color: grey;">
                          <p style="font-size: 10px;">4 <br> COMPLETION</p>
                        </div>	
                      </form>
                      <form action="{{ route('saveDonationFee') }}" method="POST"
                      enctype="multipart/form-data">
                        @csrf
                      <div class="form-inline text-center mb-4 mb-2">
                        <div class="form-group" style="padding-right:25px ; padding-left:15px; color: grey;">
                        <input  type="radio"  id="option4" autocomplete="off" style="display:none;" >
                          <label class="btn" style="width:170px; height: 45px; font-weight:bold; background-color:#F5F5F5; " for="option4">$1000</label>
                        </div>
                        <div class="form-group" style="padding-right:25px ;color: grey;">
                          <input  type="radio"  id="option4" autocomplete="off" style="display:none;" >
                          <label class="btn" style="width:170px; height: 45px; font-weight:bold; background-color:#F5F5F5; " for="option4">$500</label>
                        </div>
                      </div>
                      <div class="form-inline text-center mb-4 mb-2">
                        <div class="form-group" style="padding-right:25px ; padding-left:15px;  color: grey;">
                        <input  name="donor_fee"  type="radio"  id="option4" autocomplete="off" style="display:none;" >
                          <label class="btn" style="width:105px; height: 45px; font-weight:bold; background-color:#F5F5F5; " for="option4">$300</label>
                        </div>
                        <div class="form-group" style="padding-right:25px ;color: grey;">
                          <input  type="radio"  id="option4" autocomplete="off" style="display:none;" >
                          <label class="btn" style="width:105px; height: 45px; font-weight:bold; background-color:#F5F5F5; " for="option4">$200</label>
                        </div>
                        <div class="form-group" style="padding-right:25px ;color: grey;">
                        <input type="radio"  id="option4" autocomplete="off" style="display:none;" >
                          <label class="btn" style="width:105px; height: 45px; font-weight:bold; background-color:#F5F5F5; " for="option4">$100</label>
                        </div>
                      </div>
                      <div class="form-inline text-center mb-4 mb-2">
                        <div class="form-group" style="padding-right:25px ; padding-left:15px;  color: grey;">
                        <input  type="radio"  id="option4" autocomplete="off" style="display:none;" >
                          <label class="btn" style="width:105px; height: 45px; font-weight:bold; background-color:#F5F5F5; " for="option4">$50</label>
                        </div>
                        <div class="form-group" style="padding-right:25px ;color: grey;">
                          <input  type="radio"  id="option4" autocomplete="off" style="display:none;" >
                          <label class="btn" style="width:105px; height: 45px; font-weight:bold; background-color:#F5F5F5; " for="option4">$25</label>
                        </div>  
                        <div class="form-group" style="padding-right:25px ;color: grey;">
                        <input type="radio"  id="option4" autocomplete="off" style="display:none;" >
                          <label class="btn" style="width:105px; height: 45px; font-weight:bold; background-color:#F5F5F5; " for="option4">Other</label>
                        </div>
                        <div class="row align-items-center pt-4 pb-3">
                          <div class="col-md-3 ps-5">
                            <h6 class="mb-0">$</h6>
                          </div>
                          <div class="col-md-9 pe-7">
                            <input name="donor_fee" type="text" class="form-control form-control-lg" />
                          </div>
                        </div>
                      </div>
                      <div class="form-check form-check-inline mb-4 pb-2" style="margin: 0 0 0 15px" >
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" >
                        <label class="form-check-label fw-normal" for="inlineCheckbox1" style="font-size: 10px;">I’m donating in honor of someone</label>
                      </div>
                      <div>
                      <div class="mb-2 pb-2">
                    <div class="form-outline" style="margin: 0 0 0 15px;">
                    <label class="form-label fw-normal" for="form3Examplev4">Tribute Type</label>
                      <input name="donor_tribute" type="text" id="form3Examplev4" class="form-control form-control-lg" style="width: 370px ;" />
                      
                    </div>
                  </div>
                  <div class="mb-4 pb-2">
                    <div class="form-outline" style="margin: 0 0 0 15px;">
                    <label class="form-label fw-normal" for="form3Examplev4">Honoree Name</label>
                      <input name="donor_honoree_name" type="text" id="form3Examplev4" class="form-control form-control-lg" style="width: 370px ;"/>
                      
                    </div>
                  </div>
                      </div>
                      <button type="submit" class="btn btn-light fw-bold " style="margin: 10px 0 0 150px; background-color: #3CB815; font-size: 10px; width: 80px;height: 30px;; color: #F5F5F5;" 
                    data-mdb-ripple-color="dark">NEXT</button>
                      </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
              <img style="height:750px; width: auto; border-radius: 7px; " src="{{url('/images/donation.jpg')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </body>
@endsection
