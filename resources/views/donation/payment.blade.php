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
.input-control {
      display: flex;
      flex-direction: column;
    }

    .input-control input {
      border: 2px solid #f0f0f0;
      border-radius: 4px;
      display: block;
      font-size: 12px;
      padding: 10px;
      width: 100%;
    }

    .input-control input:focus {
      outline: 0;
    }

    .input-control.success input {
      border-color: #3CB815;
    }

    .input-control.error input {
      border-color: #F65005;
    }

    .input-control .error {
      color: #F65005;
      height: 13px;
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
                      </form>
                      <form id="form" action="{{ route('getCompletion')}}">
                      <h4 class="fw-bold mb-4 pb-3" style="padding: 40px 0 20px 15px; font-size: 12px ;">PAYMENT INFORMATION</h4>
                      <div class="mb-4 pb-2" style="margin:0 0 0 15px; width: 350px;" >
                        <div class="input-control form-outline form-white">
                          <label class="form-label fw-normal" for="card_holder_name">Card Holder's Full Name</label>
                          <input type="text" id="card_holder_name" class="form-control form-control-lg"  />
                          <div class="error"></div>
                        </div>
                      </div>
                      <div class="mb-4 pb-2" style="margin:0 0 0 15px; width: 350px;" >
                        <div class="input-control form-outline form-white">
                          <label class="form-label fw-normal" for="credit_card_number">Credit Card Number</label>
                          <input type="text" id="credit_card_number" class="form-control form-control-lg"  />
                          <div class="error"></div>
                        </div>
                      </div>
                      <div class="mb-4 pb-2" style="margin:0 0 0 15px; width: 350px;" >
                        <div class="input-control form-outline form-white">
                          <label class="form-label fw-normal" for="card_type">Card Type</label>
                          <input type="text" id="card_type" class="form-control form-control-lg"  />
                          <div class="error"></div>
                        </div>
                      </div>
                      <div class="row" style="margin: 0 0 0 1px;">
                        <div class="col-md-5 mb-4 pb-2">
                          <div class="input-control form-outline form-white">
                            <label class="form-label fw-normal" for="credit_card_exp">Credit Card Experition</label>
                            <input type="text" id="credit_card_exp" class="form-control form-control-lg"  />
                            <div class="error"></div>
                            
                          </div>
                        </div>
                        <div class="col-md-7 mb-4 pb-2">
                          <div class="input-control form-outline form-white">
                            <label class="form-label fw-normal" for="cvv">CVV</label>
                            <input type="text" id="cvv" class="form-control form-control-lg" style="width: 175px; "/>
                            <div class="error"></div>
                          </div>
                        </div>
                      </div>
                      <p class="fw-normal" style="font-size:12px ; margin: 20px 0 60px 15px; color:black">You’ll receive an email updates related to Meals on Wheels</p>
                     
                      <button type="submit" class="btn btn-light fw-bold " style="margin: 50px 0 0 150px; background-color: #3CB815; font-size: 10px; width: 80px;height: 30px; color: #F5F5F5;" 
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
<script>
  const form = document.getElementById('form');
  const card_holder_name = document.getElementById('card_holder_name');
  const credit_card_number = document.getElementById('credit_card_number');
  const card_type = document.getElementById('card_type');
  const credit_card_exp = document.getElementById('credit_card_exp');
  const cvv = document.getElementById('cvv');

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    validateInputs();
  });

  const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
  };

  const setSuccess = (element) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
  };


  const validateInputs = () => {
    const card_holder_name_value = card_holder_name.value.trim();
    const credit_card_number_value = credit_card_number.value.trim();
    const card_type_value = card_type.value.trim();
    const credit_card_exp_value = credit_card_exp.value.trim();
    const cvv_value = cvv.value.trim();

    if (card_holder_name_value === '') {
      setError(card_holder_name, '');
      return false;
    } else {
      setSuccess(card_holder_name);
    }

    if (credit_card_number_value === '') {
      setError(credit_card_number, '');
      return false;
    } else {
      setSuccess(credit_card_number);
    }

    if (card_type_value === '') {
      setError(card_type, '');
      return false;
    } else {
      setSuccess(card_type);
    }

    if (credit_card_exp_value === '') {
      setError(credit_card_exp, '');
      return false;
    } else {
      setSuccess(credit_card_exp);
    }

    if (cvv_value === '') {
      setError(cvv, '');
      return false;
    } else {
      setSuccess(cvv);
    } form.submit();

  };
</script>
  </body>
@endsection
