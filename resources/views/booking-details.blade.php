@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Booking Details</h4>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-start">
                            <div class="image-container">
                                <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />

                            </div>
                            <div class="userData ml-3">
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">John Doe</h2>
                                <h6 class="d-block">Phone Number: &nbsp;&nbsp;<span> xxxxxxxxxxxxx</span></h6>
                                <h6 class="d-block">Email: &nbsp;&nbsp;<span> john@doe.com</span></h6>
                                <h6 class="d-block">Address: &nbsp;&nbsp;<span> Canada</span></h6>
                            </div>
                            <div class="ml-auto">
                                <a href="#" class="bg-secondary text-white btn btn-lg btn-rounded">Accept</a>
                                <a href="#" class="bg-danger text-white btn btn-lg btn-rounded">Reject</a>
                            </div>

                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-sm-3 col-md-4 col-5">
                            <label style="font-weight:bold;">Room Type:</label>
                        </div>
                        <div class="col-md-8 col-6">
                            Single
                        </div>
                    </div>
                    <hr />


                    <div class="row">
                        <div class="col-sm-3 col-md-4 col-5">
                            <label style="font-weight:bold;">Total Rooms:</label>
                        </div>
                        <div class="col-md-8 col-6">
                            2
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-4 col-5">
                            <label style="font-weight:bold;">Booking Time:</label>
                        </div>
                        <div class="col-md-8 col-6">
                            10:00 am
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-4 col-5">
                            <label style="font-weight:bold;">Booking Date:</label>
                        </div>
                        <div class="col-md-8 col-6">
                            Feb. 01, 2021
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-4 col-5">
                            <label style="font-weight:bold;">Arrive Date:</label>
                        </div>
                        <div class="col-md-8 col-6">
                            Feb. 02, 2021
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-4 col-5">
                            <label style="font-weight:bold;">Depart Date</label>
                        </div>
                        <div class="col-md-8 col-6">
                            Feb. 03, 2021
                        </div>
                    </div>
                    <hr />

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
