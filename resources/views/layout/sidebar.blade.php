<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/auth/Pentecost_logo1.png') }}" alt="profile image">
   
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{\Auth::user()->name}}</p>
            <div class="dropdown" data-display="static">
              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#">
                <small class="designation text-muted">{{ \Auth::user()->roles->pluck('name')[0] ?? '' }}</small>
                <span class="status-indicator online"></span>
              </a>
            
            </div>
          </div>
        </div>
   
      </div>
    </li>
   
    <li class="nav-item {{ active_class(['programs/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#programs-pages" aria-expanded="{{ is_active_route(['programs/*']) }}" aria-controls="programs-pages">
        <i class="menu-icon mdi mdi-calendar-outline"></i>
        <span class="menu-title">Weekly Programs</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['programs/*']) }}" id="programs-pages">
        <ul class="nav flex-column sub-menu">
         
          <li class="nav-item {{ active_class(['programs/view/create']) }}">
            <a class="nav-link" href="{{ url('programs/view/create') }}">Add</a>
          </li>
          <li class="nav-item {{ active_class(['programs/view']) }}">
            <a class="nav-link" href="{{ url('/programs/view') }}"></i>View</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['Bible-Study/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#bible-pages" aria-expanded="{{ is_active_route(['Bible-Study/*']) }}" aria-controls="bible-pages">
        <i class="menu-icon mdi mdi-book-outline"></i>
        <span class="menu-title">Bible Study</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['Bible-Study/*']) }}" id="bible-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['Bible-Study/add']) }}">
            <a class="nav-link" href="{{ url('/Bible-Study/add') }}"></i>Add Topic</a>
          </li>
          <li class="nav-item {{ active_class(['Bible-Study/view']) }}">
            <a class="nav-link" href="{{ url('/Bible-Study/view') }}">View</a>
          </li>
         
        </ul>
      </div>
    </li>

    <li class="nav-item {{ active_class(['Financials']) }}">
      <a class="nav-link" href="{{ url('/Financials/index') }}">
        <i class="menu-icon mdi mdi-bank"></i>
        <span class="menu-title">Financials</span>
      </a>
    </li>


    <li class="nav-item {{ active_class(['cell/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#cell-pages" aria-expanded="{{ is_active_route(['cell/*']) }}" aria-controls="cell-pages">
        <i class="menu-icon mdi mdi-account-multiple"></i>
        <span class="menu-title">Cell</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['cell/*']) }}" id="cell-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['cell/add-cell']) }}">
            <a class="nav-link" href="{{ url('/cell/add-cell') }}"></i>Add Cell</a>
          </li>
          <li class="nav-item {{ active_class(['cell/view-cell']) }}">
            <a class="nav-link" href="{{ url('/cell/view-cell') }}">View Cell</a>
          </li>
         
          <li class="nav-item {{ active_class(['cell/add-cell-topic']) }}">
            <a class="nav-link" href="{{ url('/cell/add-cell-topic') }}">Add Topic</a>
          </li>
          <li class="nav-item {{ active_class(['cell/view-cell-topic']) }}">
            <a class="nav-link" href="{{ url('/cell/view-cell-topic') }}">View Topic</a>
          </li>
        </ul>
      </div>
    </li>

  

  

    @role('Admin')
    <li class="nav-item {{ active_class(['settings/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="{{ is_active_route(['settings/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">Settings</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['settings/*']) }}" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['settings/users']) }}">
            <a class="nav-link" href="{{ url('/settings/users') }}">Users</a>
          </li>
          <li class="nav-item {{ active_class(['settings/roles']) }}">
            <a class="nav-link" href="{{ url('/settings/roles') }}">Roles</a>
          </li>
       
        </ul>
      </div>
    </li>
    @endrole
  </ul>
</nav>