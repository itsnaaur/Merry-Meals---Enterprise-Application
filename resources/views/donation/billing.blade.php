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
            font-size: 14px;
            padding: 15px;
            width: 100%;
        }

        .input-control input:focus {
            outline: 0;
        }

        .input-control.success input {
            border-color: #3CB815;
        }

        .input-control.error input {
            border-color: #FCC74F;
        }

        .input-control .error {
            color: #FCC74F;
            height: 13px;
        }

        body {
            background: url('{{ url("/images/donate.jpg") }}') no-repeat center center fixed;
            background-size: cover;
        }

        .gradient-background {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 15px;
            padding: 30px;
        }

        .form-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .center-heading {
            text-align: center;
        }

        .form-inline-horizontal {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            margin-bottom: 20px;
        }

        .form-group-inline {
            text-align: center;
        }
    </style>
</head>
<body>
<section class="h-100 h-custom gradient-custom-2">
    <div class="container py-5 h-100 form-center">
        <div class="card card-registration card-registration-2 gradient-background" style="border-radius: 15px; border:none;">
            <div class="card-body p-0">
                <div class="row g-0">
                    <div class="col-lg-12">
                        <div class="p-5">
                        <h4 class="fw-bold mb-3 text-center" style="font-size: 24px; ">BILLING INFORMATION</h4>
                            <div class="form-inline-horizontal mb-4 mb-2">
                                <div class="form-group-inline">
                                    <p style="font-size: 10px;"><strong>1 <br> DONATION</strong></p>
                                </div>
                                <div class="form-group-inline">
                                    <p style="font-size: 10px;color: black;"><strong>2 <br> BILLING</strong></p>
                                </div>
                                <div class="form-group-inline">
                                    <p style="font-size: 10px;"><strong>3 <br> PAYMENT</strong></p>
                                </div>
                                <div class="form-group-inline">
                                    <p style="font-size: 10px;"><strong>4 <br> COMPLETION</strong></p>
                                </div>
                            </div>
                            <form id="form" action="{{ route('saveBilling') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="input-control form-outline form-white">
                                            <label class="form-label fw-normal" for="donor_first_name" style="font-size: 14px;"><strong>First Name</strong></label>
                                            <input name="donor_first_name" type="text" id="donor_first_name" class="form-control form-control-lg" />
                                            <div class="error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="input-control form-outline form-white">
                                            <label class="form-label fw-normal" for="donor_last_name" style="font-size: 14px;"><strong>Last Name</strong></label>
                                            <input name="donor_last_name" type="text" id="donor_last_name" class="form-control form-control-lg" />
                                            <div class="error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="input-control form-outline form-white">
                                            <label class="form-label fw-normal" for="donor_address" style="font-size: 14px;"><strong>Address</strong></label>
                                            <input name="donor_address" type="text" id="donor_address" class="form-control form-control-lg" />
                                            <div class="error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="input-control form-outline form-white">
                                            <label class="form-label fw-normal" for="donor_city" style="font-size: 14px;"><strong>City</strong></label>
                                            <input name="donor_city" type="text" id="donor_city" class="form-control form-control-lg" />
                                            <div class="error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="input-control form-outline form-white">
                                            <label class="form-label fw-normal" for="donor_state" style="font-size: 14px;"><strong>State</strong></label>
                                            <input name="donor_state" type="text" id="donor_state" class="form-control form-control-lg" />
                                            <div class="error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="input-control form-outline form-white">
                                            <label class="form-label fw-normal" for="donor_country" style="font-size: 14px;"><strong>Country</strong></label>
                                            <input name="donor_country" type="text" id="donor_country" class="form-control form-control-lg" />
                                            <div class="error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="input-control form-outline form-white">
                                            <label class="form-label fw-normal" for="donor_email" style="font-size: 14px;"><strong>Email</strong></label>
                                            <input name="donor_email" type="text" id="donor_email" class="form-control form-control-lg" />
                                            <div class="error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="input-control form-outline form-white">
                                            <label class="form-label fw-normal" for="donor_phone" style="font-size: 14px;"><strong>Phone</strong></label>
                                            <input name="donor_phone" type="text" id="donor_phone" class="form-control form-control-lg" />
                                            <div class="error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="submit" class="btn btn-light btn-lg" style="background-color: #3CB815; color: white;"><strong>Continue</strong></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
@endsection