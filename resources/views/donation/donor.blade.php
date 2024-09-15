@extends('layouts.app')

@section('title')
    Donation
@endsection

@section('content')
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meals on Wheels - Donation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <style>
        .gradient-custom-2 {
            background: url('{{url('/images/donate.jpg')}}') center center/cover no-repeat;
            /* Replace with your actual path to the background image */
            height: 80vh;
            /* Adjust height as needed */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card-registration {
            background-color: rgba(255, 255, 255, 0.7);
            /* Adjust background color opacity as needed */
            border-radius: 15px;
            border: none;
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
            border-color: #3cb815;
        }

        .input-control.error input {
            border-color: #fcc74f;
        }

        .input-control .error {
            color: #fcc74f;
            height: 13px;
        }
        .form-group-inline {
            text-align: center;
        }
    </style>
</head>

<body>
    <section class="gradient-custom-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-registration">
                        <div class="card-body p-5">
                            <h4 class="fw-bold mb-3 text-center" style="font-size: 24px; ">SENIORS AND INDIVIDUALS IN NEED</h4>
                            <p class="text-center fw-light mb-5" style= "color: #0e6655;" ><strong>Your generosity ensures they receive nutritious meals when they need them most.</strong></p>
                            <form id="form" action="{{ route('saveDonationFee') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="text-center mb-4">
                                <div class="text-center mb-4">
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="option1" name="donor_fee" value="1000">
                                      <label class="form-check-label" for="option1" style="font-size: 16px;">$1000</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="option2" name="donor_fee" value="500">
                                      <label class="form-check-label" for="option2" style="font-size: 16px;">$500</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="option3" name="donor_fee" value="300">
                                      <label class="form-check-label" for="option3" style="font-size: 16px;">$300</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="option4" name="donor_fee" value="200">
                                      <label class="form-check-label" for="option4" style="font-size: 16px;">$200</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="option5" name="donor_fee" value="100">
                                      <label class="form-check-label" for="option5" style="font-size: 16px;">$100</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="option6" name="donor_fee" value="50">
                                      <label class="form-check-label" for="option6" style="font-size: 16px;">$50</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="option7" name="donor_fee" value="25">
                                      <label class="form-check-label" for="option7" style="font-size: 16px;">$25</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="option8" name="donor_fee" value="Other">
                                      <label class="form-check-label" for="option8" style="font-size: 16px;">Other</label>
                                  </div>
                              </div>
                            </div>
                                <div class="mb-3">
                                    <input type="number" id="donor_fee" name="donor_fee" class="form-control form-control-lg" placeholder="Enter amount" required>
                                    <div class="error"></div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" id="donor_tribute" name="donor_tribute" class="form-control form-control-lg" placeholder="Tribute Type" required>
                                    <div class="error"></div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" id="donor_honoree_name" name="donor_honoree_name" class="form-control form-control-lg" placeholder="Honoree Name" required>
                                    <div class="error"></div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-light fw-bold" style="background-color: #3cb815; color: #ffffff;">NEXT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

@endsection