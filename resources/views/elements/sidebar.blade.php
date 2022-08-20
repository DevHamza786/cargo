<!--**********************************
  Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        {{-- <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >+ New Event</a> --}}
        <ul class="metismenu" id="menu">
            <li class="{{ $action == 'dashboard' ? 'mm-active' : '' }}"><a class="has-arrow ai-icon" href="{{ route('dashboard') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="{{ $action == 'tracking_table' ? 'mm-active' : '' }}"><a class="has-arrow ai-icon" href="{{ route('track') }}">
                <i class="flaticon-381-internet"></i>
                <span class="nav-text">Tracking</span>
            </a>
            <li class="{{ $action == 'subadmin' ? 'mm-active' : '' }}"><a class="has-arrow ai-icon" href="{{ route('subadmin') }}">
                <i class="flaticon-381-user"></i>
                <span class="nav-text">Sub Admin</span>
            </a>
        </li>
        </ul>
    </div>
</div>
<!--**********************************
  Sidebar end
***********************************-->
