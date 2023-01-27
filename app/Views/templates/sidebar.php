     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
             <div class="sidebar-brand-icon rotate-n-15">
                 <i class="fas fa-code"></i>
             </div>
             <div class="sidebar-brand-text mx-3">Dashboard </div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item">
             <a class="nav-link" href="index.html">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span>Dashboard</span></a>
         </li>

         <!-- jika yang login admin, tampilakan user management -->
         <?php if (in_groups('admin')) : ?>

             <!-- Divider -->
             <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                 User Management
             </div>

             <!-- Nav Item - Pages Collapse Menu -->


             <!-- Nav Item - user list -->
             <li class="nav-item">
                 <a class="nav-link" href="<?= base_url('admin'); ?>">
                     <i class="fas fa-users"></i>
                     <span>User List</span></a>
             </li>
         <?php endif; ?>



         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             Profil
         </div>

         <!-- Nav Item - Pages Collapse Menu -->


         <!-- Nav Item - Utilities Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                 <i class="fas fa-fw fa-wrench"></i>
                 <span>Utilities</span>
             </a>
             <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom Utilities:</h6>
                     <a class="collapse-item" href="utilities-color.html">Colors</a>
                     <a class="collapse-item" href="utilities-border.html">Borders</a>
                     <a class="collapse-item" href="utilities-animation.html">Animations</a>
                     <a class="collapse-item" href="utilities-other.html">Other</a>
                 </div>
             </div>
         </li>


         <!-- Nav Item - Charts -->
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('user'); ?>">
                 <i class="fas fa-user"></i>
                 <span>My Profil</span></a>
         </li>

         <!-- Nav Item - Tables -->
         <li class="nav-item">
             <a class="nav-link" href="tables.html">
                 <i class="fas fa-user-edit"></i>
                 <span>Edit Profil</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Nav Item - Tables -->
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('logout'); ?>">
                 <i class="fas fa-sign-out-alt"></i>
                 <span>Logout</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

     </ul>
     <!-- End of Sidebar -->