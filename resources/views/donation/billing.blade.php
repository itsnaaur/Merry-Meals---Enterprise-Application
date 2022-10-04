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
                        <h4 class="fw-bold mb-4 pb-3" style="padding: 40px 0 20px 15px; font-size: 12px ;">BILLING INFORMATION</h4>
                      </form>
                      
                      {{-- form billing--}}
                      <form action="{{ route('donation#getPayment')}}" method="POST">
                        @csrf
                      <div class="row" style="margin: 0 0 0 2px ;">
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="form-outline form-white">
                            <label class="form-label fw-normal" for="form3Examplea7">First Name</label>
                            <input name="donor_first_name" type="text" id="form3Examplea7" class="form-control form-control-lg"style="background-color: #F5F5F5; border:none; border-radius:8px;" />
                          </div>
                        </div>
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="form-outline form-white">
                            <label class="form-label fw-normal" for="form3Examplea7">Last Name</label>
                            <input name="donor_last_name" type="text" id="form3Examplea7" class="form-control form-control-lg"style="background-color: #F5F5F5; border:none; border-radius:8px;" />
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin: 0 0 0 2px ;">
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="form-outline form-white">
                            <label class="form-label fw-normal" for="form3Examplea7">Address</label>
                            <input name="donor_address" type="text" id="form3Examplea7" class="form-control form-control-lg"style="background-color: #F5F5F5; border:none; border-radius:8px;" />
                          </div>
                        </div>
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="form-outline form-white">
                            <label class="form-label fw-normal" for="form3Examplea7">City</label>
                            <input name="donor_city" type="text" id="form3Examplea7" class="form-control form-control-lg"style="background-color: #F5F5F5; border:none; border-radius:8px;" />
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin: 0 0 0 2px ;">
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="form-outline form-white">
                            <label class="form-label fw-normal" for="form3Examplea7">State</label>
                            <input name="donor_state" type="text" id="form3Examplea7" class="form-control form-control-lg"style="background-color: #F5F5F5; border:none; border-radius:8px;" />
                          </div>
                        </div>
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="form-outline form-white">
                            <label class="form-label fw-normal" for="form3Examplea7">Country</label>
                            <input name="donor_country" type="text" id="form3Examplea7" class="form-control form-control-lg"style="background-color: #F5F5F5; border:none; border-radius:8px;" />
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin: 0 0 0 2px ;">
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="form-outline form-white">
                            <label class="form-label fw-normal" for="form3Examplea7">Email</label>
                            <input name="donor_email" type="email" id="form3Examplea7" class="form-control form-control-lg"style="background-color: #F5F5F5; border:none; border-radius:8px;" />
                          </div>
                        </div>
                        <div class="col-md-6 mb-5 pb-2">
                          <div class="form-outline form-white">
                            <label class="form-label fw-normal" for="form3Examplea7">Phone</label>
                            <input name="donor_phone" type="number" id="form3Examplea7" class="form-control form-control-lg"style="background-color: #F5F5F5; border:none; border-radius:8px;" />
                          </div>
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-light fw-bold " style="margin: 50px 0 0 170px; background-color: #3CB815; font-size: 10px; width: 80px;height: 30px;; color: #F5F5F5;" 
                    data-mdb-ripple-color="dark">NEXT</button>
                      </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
              <img style="height:700px; width: auto; border-radius: 7px; " src="{{url('/images/donation.jpg')}}">
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