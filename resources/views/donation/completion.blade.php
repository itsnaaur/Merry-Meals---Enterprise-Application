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
            background: url('{{url('/images/thank you.jpg')}}') center center/cover no-repeat;
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
                            <h4 class="fw-bold mb-3 text-center" style="font-size: 24px; ">THANK YOU FOR YOUR GENEROUS DONATION!</h4>
                            <p class="text-center fw-bold mb-5" style= "color: #0e6655; " >Your support means the world to us and makes 
                              a significant difference in the lives of those we serve. It's through contributions like yours that we are able to 
                              continue providing nutritious meals and essential support to seniors, elderly individuals, and persons with 
                              disabilities in our community. Your kindness and compassion inspire us every day. Thank you again for your invaluable 
                              support!</p>
                              <div class="text-center">
                            <span><a class="btn btn-primary btn-lg" href="/"><strong><- Return to Homepage</strong></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

@endsection