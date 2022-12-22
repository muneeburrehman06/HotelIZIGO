
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
                            <label style="font-weight:bold;">Depart Date:</label>
                        </div>
                        <div class="col-md-8 col-6">
                            Feb. 03, 2021
                        </div>
                    </div>
                    <hr />

                    <div class="row mb-3">
                        <div class="col-sm-7">
                            <label style="font-weight:bold;">Rating:</label>
                            <br>

                            <div class="float-left">
                                <div class="float-left" style="width:120px; line-height:1;">
                                    <div style="height:9px; margin:5px 0;">Communication </div>
                                </div>
                                <div class="float-left" style="width:180px;">
                                    <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="float-right" style="margin-left:10px;">1</div>
                            </div>
                            <div class="float-left">
                                <div class="float-left" style="width:120px; line-height:1;">
                                    <div style="height:9px; margin:5px 0;">Cleanliness </div>
                                </div>
                                <div class="float-left" style="width:180px;">
                                    <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="float-right" style="margin-left:10px;">1</div>
                            </div>
                            <div class="float-left">
                                <div class="float-left" style="width:120px; line-height:1;">
                                    <div style="height:9px; margin:5px 0;">Accuracy </div>
                                </div>
                                <div class="float-left" style="width:180px;">
                                    <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="float-right" style="margin-left:10px;">0</div>
                            </div>
                            <div class="float-left">
                                <div class="float-left" style="width:120px; line-height:1;">
                                    <div style="height:9px; margin:5px 0;">Location </div>
                                </div>
                                <div class="float-left" style="width:180px;">
                                    <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="float-right" style="margin-left:10px;">0</div>
                            </div>
                            <div class="float-left">
                                <div class="float-left" style="width:120px; line-height:1;">
                                    <div style="height:9px; margin:5px 0;">Value </div>
                                </div>
                                <div class="float-left" style="width:180px;">
                                    <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="float-right" style="margin-left:10px;">0</div>
                            </div>
                        </div>
                        <div class="col-sm-5"></div>

                    </div>
                    <hr>
                    <label style="font-weight:bold;">Review:</label>
                    <br>
                    <div class="review-block-title">This was nice in buy</div>
                    <div class="review-block-description">This was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                    <hr>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
