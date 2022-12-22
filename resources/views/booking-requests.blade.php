@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Booking Requests</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-toggle="tab"><b>Accomodations</b></a></li>
                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2" data-toggle="tab"><b>Organized Stay</b></a></li>
                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab3" data-toggle="tab"><b>Holiday Colony</b></a></li>
                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab4" data-toggle="tab"><b>Sleeping at Home</b></a></li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Room type</th>
                                    <th>Total Numbers</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Arrive</th>
                                    <th>Depart</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>Denise</td>
                                    <td>Single</td>
                                    <td>1</td>
                                    <td>2nd Feb 2019</td>
                                    <td>10:00am</td>
                                    <td>2nd Feb 2019</td>
                                    <td>3nd Feb 2019</td>
                                    <td><a href="https://dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4125242f28322432352437242f32012439202c312d246f222e2c">[email&#160;protected]</a> </td>
                                    <td>987654321 </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('booking-details') }}"><i class="fas fa-eye m-r-5"></i> View</a>
                                                <a class="dropdown-item text-success" href="#" onclick="showSuccessMessage()"><i class="fas fa-check m-r-5"></i> Accept</a>
                                                <a class="dropdown-item text-danger" href="#" onclick="showRejectMessage()"><i class="fas fa-ban m-r-5"></i> Reject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>John</td>
                                    <td>Single</td>
                                    <td>1</td>
                                    <td>2nd Feb 2019</td>
                                    <td>11:00am</td>
                                    <td>2nd Feb 2019</td>
                                    <td>3nd Feb 2019</td>
                                    <td><a href="https://dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="452f2a2d2b05203d24283529206b262a28">[email&#160;protected]</a> </td>
                                    <td>987654321 </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('booking-details') }}"><i class="fas fa-eye m-r-5"></i> View</a>
                                                <a class="dropdown-item text-success" href="#" onclick="showSuccessMessage()"><i class="fas fa-check m-r-5"></i> Accept</a>
                                                <a class="dropdown-item text-danger" href="#" onclick="showRejectMessage()"><i class="fas fa-ban m-r-5"></i> Reject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="solid-rounded-justified-tab2">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Room type</th>
                                    <th>Total Numbers</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Arrive</th>
                                    <th>Depart</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>Denise</td>
                                    <td>Single</td>
                                    <td>1</td>
                                    <td>2nd Feb 2019</td>
                                    <td>10:00am</td>
                                    <td>2nd Feb 2019</td>
                                    <td>3nd Feb 2019</td>
                                    <td><a href="https://dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4125242f28322432352437242f32012439202c312d246f222e2c">[email&#160;protected]</a> </td>
                                    <td>987654321 </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('booking-details') }}"><i class="fas fa-eye m-r-5"></i> View</a>
                                                <a class="dropdown-item text-success" href="#" onclick="showSuccessMessage()"><i class="fas fa-check m-r-5"></i> Accept</a>
                                                <a class="dropdown-item text-danger" href="#" onclick="showRejectMessage()"><i class="fas fa-ban m-r-5"></i> Reject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>John</td>
                                    <td>Single</td>
                                    <td>1</td>
                                    <td>2nd Feb 2019</td>
                                    <td>11:00am</td>
                                    <td>2nd Feb 2019</td>
                                    <td>3nd Feb 2019</td>
                                    <td><a href="https://dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="452f2a2d2b05203d24283529206b262a28">[email&#160;protected]</a> </td>
                                    <td>987654321 </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('booking-details') }}"><i class="fas fa-eye m-r-5"></i> View</a>
                                                <a class="dropdown-item text-success" href="#" onclick="showSuccessMessage()"><i class="fas fa-check m-r-5"></i> Accept</a>
                                                <a class="dropdown-item text-danger" href="#" onclick="showRejectMessage()"><i class="fas fa-ban m-r-5"></i> Reject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="solid-rounded-justified-tab3">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Room type</th>
                                    <th>Total Numbers</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Arrive</th>
                                    <th>Depart</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>Denise</td>
                                    <td>Single</td>
                                    <td>1</td>
                                    <td>2nd Feb 2019</td>
                                    <td>10:00am</td>
                                    <td>2nd Feb 2019</td>
                                    <td>3nd Feb 2019</td>
                                    <td><a href="https://dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4125242f28322432352437242f32012439202c312d246f222e2c">[email&#160;protected]</a> </td>
                                    <td>987654321 </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('booking-details') }}"><i class="fas fa-eye m-r-5"></i> View</a>
                                                <a class="dropdown-item text-success" href="#" onclick="showSuccessMessage()"><i class="fas fa-check m-r-5"></i> Accept</a>
                                                <a class="dropdown-item text-danger" href="#" onclick="showRejectMessage()"><i class="fas fa-ban m-r-5"></i> Reject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>John</td>
                                    <td>Single</td>
                                    <td>1</td>
                                    <td>2nd Feb 2019</td>
                                    <td>11:00am</td>
                                    <td>2nd Feb 2019</td>
                                    <td>3nd Feb 2019</td>
                                    <td><a href="https://dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="452f2a2d2b05203d24283529206b262a28">[email&#160;protected]</a> </td>
                                    <td>987654321 </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('booking-details') }}"><i class="fas fa-eye m-r-5"></i> View</a>
                                                <a class="dropdown-item text-success" href="#" onclick="showSuccessMessage()"><i class="fas fa-check m-r-5"></i> Accept</a>
                                                <a class="dropdown-item text-danger" href="#" onclick="showRejectMessage()"><i class="fas fa-ban m-r-5"></i> Reject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="solid-rounded-justified-tab4">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Room type</th>
                                    <th>Total Numbers</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Arrive</th>
                                    <th>Depart</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>Denise</td>
                                    <td>Single</td>
                                    <td>1</td>
                                    <td>2nd Feb 2019</td>
                                    <td>10:00am</td>
                                    <td>2nd Feb 2019</td>
                                    <td>3nd Feb 2019</td>
                                    <td><a href="https://dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4125242f28322432352437242f32012439202c312d246f222e2c">[email&#160;protected]</a> </td>
                                    <td>987654321 </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('booking-details') }}"><i class="fas fa-eye m-r-5"></i> View</a>
                                                <a class="dropdown-item text-success" href="#" onclick="showSuccessMessage()"><i class="fas fa-check m-r-5"></i> Accept</a>
                                                <a class="dropdown-item text-danger" href="#" onclick="showRejectMessage()"><i class="fas fa-ban m-r-5"></i> Reject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
                                    <td>John</td>
                                    <td>Single</td>
                                    <td>1</td>
                                    <td>2nd Feb 2019</td>
                                    <td>11:00am</td>
                                    <td>2nd Feb 2019</td>
                                    <td>3nd Feb 2019</td>
                                    <td><a href="https://dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="452f2a2d2b05203d24283529206b262a28">[email&#160;protected]</a> </td>
                                    <td>987654321 </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('booking-details') }}"><i class="fas fa-eye m-r-5"></i> View</a>
                                                <a class="dropdown-item text-success" href="#" onclick="showSuccessMessage()"><i class="fas fa-check m-r-5"></i> Accept</a>
                                                <a class="dropdown-item text-danger" href="#" onclick="showRejectMessage()"><i class="fas fa-ban m-r-5"></i> Reject</a>
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




    </div>
</div>

@endsection
