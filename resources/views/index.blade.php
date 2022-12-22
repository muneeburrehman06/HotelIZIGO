@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill1">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <div>
                            <h6>Booking Requests</h6>
                            <h3 class="card_widget_header">9</h3>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <i class="fa fa-3x fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill2">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <div>
                            <h6>Active Bookings</h6>
                            <h3 class="card_widget_header">15</h3>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <i class="fa fa-3x fa-bed"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill3">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <div>
                            <h6>Total Bookings</h6>
                            <h3 class="card_widget_header">1072</h3>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <i class="fa fa-3x fa-book"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill4">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <div>
                            <h6>Total Earning</h6>
                            <h3 class="card_widget_header">$3614</h3>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <i class="fa fa-3x fa-wallet"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">

            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">EARNING</h4>
                </div>
                <div class="card-body">
                    <div id="apexcharts-revenue">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-inline-block">Bookings</h4>
                </div>
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-inline-block"> Recent Bookings</h4> <a href="{{ url('all-booking') }}" class="btn btn-primary float-right">View all</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Name</th>
                                    <th>Room type</th>
                                    <th>Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BKG-0001</td>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Denise</td>
                                    <td>Single</td>
                                    <td>987654321 </td>

                                </tr>
                                <tr>
                                    <td>BKG-0002</td>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> John</td>
                                    <td>Double</td>
                                    <td>987654321 </td>

                                </tr>
                                <tr>
                                    <td>BKG-0003</td>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Denise</td>
                                    <td>Single</td>
                                    <td>987654321 </td>

                                </tr>
                                <tr>
                                    <td>BKG-0004</td>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> John</td>
                                    <td>Double</td>
                                    <td>987654321 </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-inline-block">Hospitality Services </h4> <a href="{{ url('all-services') }}" class="btn btn-primary float-right">View all</a>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th>Img</th>
                                    <th>Service type</th>
                                    <th>AC/Non-AC</th>
                                    <th>Food</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>Accomodations</td>
                                    <td>AC</td>
                                    <td>Free Breakfast & Dinner</td>
                                </tr>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>Organized stay</td>
                                    <td>Non-AC</td>
                                    <td>Free Breakfast</td>
                                </tr>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>Sleeping at home</td>
                                    <td>Non-AC</td>
                                    <td>Free Lunch</td>
                                </tr>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>Accomodations</td>
                                    <td>AC</td>
                                    <td>Free Breakfast</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
