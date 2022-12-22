@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Edit Booking</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Service type</label>
                            <select class="select">
                                <option value="">Select</option>
                                <option value="accomodations">Accomodations</option>
                                <option value="trip" selected>Organized Stay</option>
                                <option value="holiday">Holiday Colony</option>
                                <option value="home">Sleeping at Home</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Name</label>
                            <select class="select">
                                <option>Select</option>
                                <option selected>Jennifer Robinson</option>
                                <option>Terry Baker</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Room type</label>
                            <select class="select">
                                <option>Select</option>
                                <option>Single</option>
                                <option selected>Double</option>
                                <option>Quad</option>
                                <option>King</option>
                                <option>Suite</option>
                                <option>Villa</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Total numbers</label>
                            <select class="select">
                                <option>Select</option>
                                <option>1</option>
                                <option>2</option>
                                <option selected>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date</label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Time</label>
                            <div class="time-icon">
                                <input type="text" class="form-control" id="datetimepicker3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Arrive </label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Depart </label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Email</label>
                            <input class="form-control" type="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Phone Number</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" name="filename">
                    <label class="custom-file-label">Choose file (Photo)</label>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea cols="30" rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="display-block">Booking Status</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="product_active" value="option1" checked>
                        <label class="form-check-label" for="product_active">
                        Active
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="product_inactive" value="option2">
                        <label class="form-check-label" for="product_inactive">
                        Inactive
                        </label>
                    </div>
                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

