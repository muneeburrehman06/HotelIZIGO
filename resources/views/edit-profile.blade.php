@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Edit Profile</h4>
        </div>
    </div>
    <form>
        <div class="card-box">
            <h3 class="card-title">Basic Informations</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-img-wrap">
                        <img class="inline-block" src="assets/img/user.jpg" alt="user">
                        <div class="fileupload btn">
                            <span class="btn-text">edit</span>
                            <input class="upload" type="file">
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name </label>
                                    <input class="form-control" type="text" value="John">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name </label>
                                    <input class="form-control" type="text" value="Doe">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Hotel Name</label>
                                    <input class="form-control" type="text" value="ABC">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box">
            <h3 class="card-title">Contact Informations</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" value="4487 Snowbird Lane">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control" value="New York">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" value="United States">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="izigo@email.com">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" value="631-889-3206">
                    </div>
                </div>

            </div>
        </div>
        <div class="card-box">
            <h3 class="card-title">Services Offered</h3>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox1" value="accomodations">
                                    <label class="form-check-label" for="inlineCheckbox1">Accomodations</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox2" value="trip">
                                    <label class="form-check-label" for="inlineCheckbox2">Organized Trip</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox4" value="home">
                                    <label class="form-check-label" for="inlineCheckbox4">Sleeping at Home</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox3" value="holiday">
                                    <label class="form-check-label" for="inlineCheckbox3">Holiday Colony</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center m-t-20">
            <button class="btn btn-primary submit-btn" type="button">Save</button>
        </div>
    </form>
</div>
@endsection
