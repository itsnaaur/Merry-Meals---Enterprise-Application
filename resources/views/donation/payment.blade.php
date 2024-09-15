@extends('layouts.app')

@section('title')
    Donation Payment
@endsection

@section('content')
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meals on Wheels - Donation Payment</title>
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

        body {
            background: url('{{ url("/images/donate.jpg") }}') center top/cover no-repeat;
            /* Adjust 'top' instead of 'center center' to start from the top */
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 15px;
            width: 100%;
            max-width: 800px; /* Adjust the max-width value as needed */
            margin: 0 auto; /* Centers the form horizontally */
        }

        .card {
            width: 100%; /* Ensures the card fills the container width */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .btn-pay {
            background-color: #3CB815;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container py-5 h-custom">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card form-container">
                    <div class="card-body">
                        <h2 class="form-title">Payment Information</h2>
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                            @csrf
                            <div class="form-group">
                                <label for="cardholder_name">Card Holder's Full Name</label>
                                <input id="cardholder_name" class="form-control" type="text" name="cardholder_name">
                            </div>
                            <div class="form-group">
                                <label for="card_number">Credit Card Number</label>
                                <input id="card_number" class="form-control card-number" type="text" name="card_number" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="card_type">Card Type</label>
                                <input id="card_type" class="form-control" type="text" name="card_type">
                            </div>
                            <div class="form-group">
                                <label for="cvc">CVC</label>
                                <input id="cvc" class="form-control card-cvc" type="text" name="cvc" autocomplete="off" placeholder="ex. 311">
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="expiry_month">Expiration Month</label>
                                    <input id="expiry_month" class="form-control card-expiry-month" type="text" name="expiry_month" placeholder="MM">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="expiry_year">Expiration Year</label>
                                    <input id="expiry_year" class="form-control card-expiry-year" type="text" name="expiry_year" placeholder="YYYY">
                                </div>
                            </div>
                            <div class="text-center">
                            <span><a class="btn btn-primary btn-lg" href="/completion"><strong>Pay Now</strong></a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function() {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = [
                        'input[type=email]',
                        'input[type=password]',
                        'input[type=text]',
                        'input[type=file]',
                        'textarea'
                    ].join(', '),

                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');
                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });
    </script>
</body>
@endsection