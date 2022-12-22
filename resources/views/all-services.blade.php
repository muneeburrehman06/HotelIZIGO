@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-4 col-4">
            <h4 class="page-title">Hospitality Services</h4>
        </div>
        <div class="col-sm-8 col-8 text-right m-b-20">
            <a href="{{ url('add-service') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add Service Detail</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Img</th>
                            <th>Service type</th>
                            <th>Parking</th>
                            <th>AC/Non-AC</th>
                            <th>Food</th>
                            <th>Bed Count</th>
                            <th>Phone</th>
                            <th>Rent</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                            <td>Accomodation</td>
                            <td>Yes</td>
                            <td>AC</td>
                            <td>Free Breakfast & Dinner</td>
                            <td>1</td>
                            <td>987654321</td>
                            <td>$ 25</td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('edit-service') }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" onclick="showConfirmMessage()"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                            <td>Organized Stay</td>
                            <td>Yes</td>
                            <td>Non-AC</td>
                            <td>Free Breakfast</td>
                            <td>2</td>
                            <td>978563421</td>
                            <td>$ 15</td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('edit-service') }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" onclick="showConfirmMessage()"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                            <td>Sleeping at home</td>
                            <td>No</td>
                            <td>Non-AC</td>
                            <td>Free Lunch</td>
                            <td>1</td>
                            <td>978563421</td>
                            <td>$ 20</td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('edit-service') }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" onclick="showConfirmMessage()"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                            <td>Holiday Colony</td>
                            <td>Yes</td>
                            <td>AC</td>
                            <td>Free Breakfast</td>
                            <td>4</td>
                            <td>978563421</td>
                            <td>$ 30</td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('edit-service') }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" onclick="showConfirmMessage()"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                            <td>Accomodations</td>
                            <td>Yes</td>
                            <td>Non-AC</td>
                            <td>Free Breakfast</td>
                            <td>2</td>
                            <td>978563421</td>
                            <td>$ 15</td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('edit-service') }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" onclick="showConfirmMessage()"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                            <td>Organized Stay</td>
                            <td>No</td>
                            <td>AC</td>
                            <td>Free Breakfast</td>
                            <td>2</td>
                            <td>978563421</td>
                            <td>$ 30</td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('edit-service') }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" onclick="showConfirmMessage()"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
