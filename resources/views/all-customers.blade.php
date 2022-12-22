@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Customers</h4>
        </div>
        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ url('add-customer') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add Customer</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th style="width:20%;">Name</th>
                            <th style="width:20%;">Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Total Bookings</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Denise</td>
                            <td><a href="https://dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="adc9c8c3c4dec8ded9c8dbc8c3deedc8d5ccc0ddc1c883cec2c0">[email&#160;protected]</a> </td>
                            <td>987654321 </td>
                            <td>Canada</td>
                            <td>2</td>
                            <td><span class="custom-badge status-red">Inactive</span></td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('edit-customer') }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" onclick="showConfirmMessage()"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Smith</td>
                            <td><a href="https://dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="adc9c8c3c4dec8ded9c8dbc8c3deedc8d5ccc0ddc1c883cec2c0">[email&#160;protected]</a> </td>
                            <td>568654322 </td>
                            <td>Canada</td>
                            <td>3</td>
                            <td><span class="custom-badge status-blue">Active</span></td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('edit-customer') }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
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
