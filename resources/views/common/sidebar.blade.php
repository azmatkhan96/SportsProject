<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon ">
            <i class="fas fa-fw fa-tachometer-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DashBoard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
@can('isAdmin')
    

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-gamepad"></i>
            <span>Registration Forms</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Forms:</h6>
                <a class="collapse-item" href="{{route('matchForm')}}">Add New Tournament</a>
                <a class="collapse-item" href="{{route('teamForm')}}">Add New Team</a>
                <a class="collapse-item" href="{{route('team-Score')}}">Teams Score</a>
                
            </div>
        </div>
    </li>
 @endcan

     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-trophy"></i>
            <span>Tournaments</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="{{route('show-match')}}">Matches Lists</a>

              @can('isAdmin')
              <a class="collapse-item" href="{{route('show-player')}}">Players Lists</a>
              @endcan 
               
                <a class="collapse-item" href="{{route('show-Score')}}">Score Table</a>
            </div>
        </div>
    </li>

  
</ul>