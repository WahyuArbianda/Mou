<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
      <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-briefcase"></i>
      </div>
      <div class="sidebar-brand-text mx-3">MOU APPS</div>
   </a>

   <hr class="sidebar-divider my-0">
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin'); ?>">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Dashboard</span>
      </a>
   </li>

   <hr class="sidebar-divider my-0">         
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('user'); ?>">
         <i class="fas fa-fw fa-user"></i>
         <span>Manage User</span>
      </a>
   </li>

   <hr class="sidebar-divider my-0">         
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('mou'); ?>">
         <i class="far fa-fw fa-calendar-check"></i>
         <span>Data MOU</span>
      </a>
   </li>

   <hr class="sidebar-divider my-0">         
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('pks'); ?>">
         <i class="fas fa-fw fa-calendar-check"></i>
         <span>Data PKS</span>
      </a>
   </li>

   <!-- <hr class="sidebar-divider">         
   <div class="sidebar-heading">
      Manage MOU
   </div>         
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMou" aria-expanded="true" aria-controls="collapseMou">
         <i class="fas fa-fw fa-folder-open"></i>
         <span>MOU</span>
      </a>

      <div id="collapseMou" class="collapse" aria-labelledby="headingMou" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">MOU</h6>
            <a class="collapse-item" href="#">Default MOU</a>
            <a class="collapse-item" href="#">Default MOU</a>
         </div>
      </div>
   </li>

   <hr class="sidebar-divider">         
   <div class="sidebar-heading">
      Manage PKS
   </div>         
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePKS" aria-expanded="true" aria-controls="collapsePKS">
         <i class="fas fa-fw fa-folder-open"></i>
         <span>PKS</span>
      </a>
      <div id="collapsePKS" class="collapse" aria-labelledby="headingPKS" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">MOU</h6>
            <a class="collapse-item" href="buttons.html">Default MOU</a>
            <a class="collapse-item" href="cards.html">Default MOU</a>
         </div>
      </div>
   </li> -->

            
   <hr class="sidebar-divider my-0">         
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
         <i class="fas fa-fw fa-sign-out-alt"></i>
         <span>Logout</span>
      </a>
   </li>         
   <hr class="sidebar-divider d-none d-md-block">   
   <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>
</ul>