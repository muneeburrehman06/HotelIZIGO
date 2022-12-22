@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Edit Hospitility Service</h4>
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
                                <option>Select</option>
                                <option>Accomodations</option>
                                <option selected>Organized Stay</option>
                                <option>Holiday Colony</option>
                                <option>Sleeping at Home</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Parking Facility</label>
                            <select class="select">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>AC/Non AC</label>
                            <select class="select">
                                <option>AC</option>
                                <option>Non Ac</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Food</label>
                            <select class="select">
                                <option>Select</option>
                                <option>Free Breakfast</option>
                                <option>Free Lunch</option>
                                <option selected>Free Dinner</option>
                                <option>Free Breakfast & Dinner</option>
                                <option>Free Welcome Drink</option>
                                <option>No Free Food</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Bed Count</label>
                            <select class="select">
                                <option>Select</option>
                                <option>1</option>
                                <option>2</option>
                                <option selected>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Wifi</label>
                            <select class="select">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Rent</label>
                            <input class="form-control" type="text" value="$100">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input class="form-control" type="text" value="xxxxxxxxxx">
                        </div>
                    </div>
                </div>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" name="filename">
                    <label class="custom-file-label">Choose file (Photo)</label>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea cols="30" rows="4" class="form-control">N/A</textarea>
                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
