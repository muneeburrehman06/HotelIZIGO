<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"></li>
                <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                    <a href="{{ url('/') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                </li>

                <li class="{{ (request()->is('booking-requests')) ? 'active' : '' }}">
                    <a href="{{ url('booking-requests') }}"><i class="fas fa-briefcase" aria-hidden="true"></i><span> Booking Requests</span></a>
                </li>

                <li class="{{ (request()->is('all-booking') || request()->is('add-booking') || request()->is('edit-booking')) ? 'active' : '' }}">
                    <a href="{{ url('all-booking') }}"><i class="fas fa-suitcase" aria-hidden="true"></i><span> Bookings</span></a>
                </li>

                <li class="{{ (request()->is('all-customers') || request()->is('add-customer') || request()->is('edit-customer')) ? 'active' : '' }}">
                    <a href="{{ url('all-customers') }}"><i class="fas fa-users" aria-hidden="true"></i> <span> Customers </span></a>
                </li>

                <li class="{{ (request()->is('all-services') || request()->is('add-service') || request()->is('edit-service')) ? 'active' : '' }}">
                    <a href="{{ url('all-services') }}"><i class="fas fa-key" aria-hidden="true"></i> <span> Hospitality Services </span></a>
                </li>
                <li class="{{ (request()->is('chat')) ? 'active' : '' }}">
                    <a href="{{ url('chat') }}"><i class="fas fa-comments"></i> <span>Chats</span></a>
                </li>
                <li class="{{ (request()->is('notifications')) ? 'active' : '' }}">
                    <a href="{{ url('notifications') }}"><i class="fas fa-bell"></i> <span>Notifications</span></a>
                </li>
                <li class="{{ (request()->is('edit-profile')) ? 'active' : '' }}">
                    <a href="{{ url('edit-profile') }}"><i class="fas fa-user"></i> <span>Profile Settings </span></a>
                </li>
                <li class="{{ (request()->is('change-password')) ? 'active' : '' }}">
                    <a href="{{ url('change-password') }}"><i class="fas fa-cog"></i> <span>Change Password</a>
                </li>
            </ul>
        </div>
    </div>
</div>
