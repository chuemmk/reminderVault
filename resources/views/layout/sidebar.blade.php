{{-- <aside class="left-sidebar" data-sidebarbg="skin5">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a href="{{route('profile.dashboard')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Authentication </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('user.login')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('user.register')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register </span></a></li>
                    </ul>
                </li>
               
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('note.index')}}" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Notes</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('notetype.index')}}" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Note Type</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('event.index')}}" aria-expanded="false"><i class="mdi mdi-calendar-check"></i><span class="hide-menu">Schedule</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('noti.index')}}" aria-expanded="false"><i class="mdi mdi-check-all"></i><span class="hide-menu">Notification</span></a></li>
        </nav>
    </div>
</aside> --}}


<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('profile.view')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('note.index')}}">
          <i class="bi bi-journals"></i>
          <span>Note</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('notetype.index')}}">
          <i class="bi bi-hdd-stack"></i>
          <span>Note Type</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('event.index')}}">
          <i class="bi bi-calendar3"></i>
          <span>Event</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('noti.index')}}">
          <i class="bi bi-menu-up"></i>
          <span>Notification</span>
        </a>
      </li>
      
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('profile.dashboard')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('user.register')}}">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('user.login')}}">
          <i class="bi bi-box-arrow-left"></i>
          <span>Log In</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('user.login')}}">
          <i class="bi bi-box-arrow-right"></i>
          <span>Log out</span>
        </a>
      </li>

    </ul>
</aside>