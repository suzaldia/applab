  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href='/' class="brand-link">
      <img src="<?php echo e(asset('images/logo.png')); ?>" alt="AppLAB Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AppLAB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar"> 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href='/' class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-flask"></i>
              <p>
                Samples
              <span class="badge badge-info right"><?php echo e($samples ?? '0'); ?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-biohazard"></i>
              <p>
                Incidences
              </p>
            </a>
          </li>
          <li class="nav-header">ADMINISTRATION</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Management
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Users</p>
                  <?php use App\User; $users_count = User::all()->count(); ?>
                <span class="right badge badge-success"><?php echo e($users_count ?? '0'); ?></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-users-cog"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-user-lock"></i>
                  <p>Permissions</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('roles')); ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p> Maintenance tasks</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>Settings</p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fab fa-battle-net"></i>
                  <p>Types of processes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-vial"></i>
                  <p> Analytical techniques</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-th-list"></i>
                  <p>Incidence categories</p>
                </a>
              </li>
            </ul>
          </li>     
         </ul>
      </nav>
      <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/partials/sidebar.blade.php ENDPATH**/ ?>