<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/img/medicine.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Medplatform</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Auth::user()->userable_type == 'App\Medecin' ? '/img/doctor.png' : '/img/man.png'}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">
          @can ('isMedecin')
              Dr.
          @endcan
          {{Auth::user()->userable->first_name}} {{Auth::user()->userable->last_name}}
        </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <router-link to="/" class="nav-link" exact>
              <i class="nav-icon fas fa-home"></i>
              <p>
                Acceuil
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </router-link>
          </li>
          @can('isPatient')
            <li class="nav-item">
              <router-link to="/medecins" class="nav-link" exact>
                <i class="nav-icon fas fa-user-md"></i>
                <p>
                  mes medecins
                  {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/dossier" class="nav-link" exact>
                <i class="nav-icon fas fa-book-medical"></i>
                <p>
                  Dossier medicale
                  {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
              </router-link>
            </li>
          @elsecan('isMedecin')
            <li class="nav-item" >
              <router-link to="/patients" class="nav-link" exact>
                <i class="nav-icon fas fa-users"></i>
                <p>
                  mes patients
                  {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
              </router-link>
            </li>
            <li class="nav-item" >
              <router-link to="/rdv" class="nav-link" exact>
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  mes rendez-vous
                  {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
              </router-link>
            </li>
          @endcan
          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>