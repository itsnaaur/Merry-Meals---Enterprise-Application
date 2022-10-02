@section('title')
    Delivery Status - Volunteer
@endsection

@extends('Users.Volunteer.layouts.app')

@section('content')
<div id="fh5co-services-section">
    <div class="container">
        <div class="row">
            <div class="delivery-volunteer">
                <div class="col-md-12 offset-md-0">
                    <div class="mt-5 p-4">
                        <h1 class="text-secondary text-center mb-5 display-5">
                            Delivery Status - Volunteer
                        </h1>
                        <div class="row">
                            <div class="mb-5 col-md-12">
                                <a href="ordermealsagain" class="btn btn-primary">
                                    Order Meal
                                </a>
                            </div>
                            <table class="table table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Member Name</th>
                                        <th>Meal Name</th>
                                        <th>Order date</th>
                                        <th>Order Time</th>
                                        <th>Cook Status</th>
                                        <th>Delivery Status</th>
                                        <th>Arrival Status</th>
                                        <th>Confirm Receive</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>1.</td>
                                        <td>Made Rawan</td>
                                        <td>Ayam Betutu</td>
                                        <td>18 Sep 2022</td>
                                        <td>09.20 am</td>
                                        <td>Cooked</td>
                                        <td>Delivered</td>
                                        </td>
                                        <td>
                                        <a href="#arrived" class="btn btn-primary">Arrive</a>
                                        </td>
                                        <td>Received</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Kadek Seneng</td>
                                        <td>Nasi Jinggo</td>
                                        <td>19 Sep 2022</td>
                                        <td>09.01 am</td>
                                        <td>Cooked</td>
                                        <td>Delivered</td>
                                        </td>
                                        <td>
                                        <a href="#arrived" class="btn btn-primary">Arrive</a>
                                        </td>
                                        <td>Received</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Gusti Agung</td>
                                        <td>Nasi Kotak</td>
                                        <td>20 Sep 2022</td>
                                        <td>08.58 am</td>
                                        <td>Cooked</td>
                                        <td>Delivered</td>
                                        </td>
                                        <td>
                                        <a href="#arrived" class="btn btn-primary">Arrive</a>
                                        </td>
                                        <td>Received</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Bagus Pande</td>
                                        <td>Nasi Goreng</td>
                                        <td>21 Sep 2022</td>
                                        <td>09.21 am</td>
                                        <td>Cooked</td>
                                        <td>Delivered</td>
                                        </td>
                                        <td>
                                        <a href="#arrived" class="btn btn-primary">Arrive</a>
                                        </td>
                                        <td>Received</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Made Satya</td>
                                        <td>Nasi Bebek Betutu</td>
                                        <td>22 Sep 2022</td>
                                        <td>10.38 am</td>
                                        <td>Cooked</td>
                                        <td>Delivered</td>
                                        </td>
                                        <td>
                                        <a href="#arrived" class="btn btn-primary">Arrive</a>
                                        </td>
                                        <td>Received</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection