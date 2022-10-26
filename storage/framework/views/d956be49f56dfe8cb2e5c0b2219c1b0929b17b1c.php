<div class="page-main-header">
  <div class="main-header-right row m-0">
    <div class="main-header-left" style="width: 600px !important">
      <?php if(auth()->user()): ?> <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div> <?php endif; ?>
      <div class="logo-wrapper">
        <a href="<?php echo e(route('index')); ?>">
        <div class="d-flex justify-content-center items-center">
          <a href="<?php echo e(route('index')); ?>" class="align-self-center"><img class="img-fluid logo-mobile" src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="" width="55" height="55"></a>
          <div class="d-flex flex-column text-center" style="margin-left: 5px; color: #168eea;">
            <h3 style="font-weight: bold;">QUEZON CITY UNIVERSITY</h3>
            <span style="margin-top: -13px;">(Former Quezon City Polytechnic University)</span>
          </div>
        </div>
      </div>
      <div class="dark-logo-wrapper">
        <a href="<?php echo e(route('index')); ?>">
        <div class="d-flex justify-content-center items-center">
          <a href="<?php echo e(route('index')); ?>" class="align-self-center"><img class="img-fluid logo-mobile" src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="" width="55" height="55"></a>
          <div class="d-flex flex-column text-center" style="margin-left: 5px; color: #168eea;">
            <h3 style="font-weight: bold;">QUEZON CITY UNIVERSITY</h3>
            <span style="margin-top: -13px;">(Former Quezon City Polytechnic University)</span>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
        <li>
            <div class="mode"><i class="fa fa-moon-o"></i></div>
        </li>
        <li class="onhover-dropdown p-0">
          <?php if(auth()->guard()->guest()): ?>
            <button class="btn btn-primary-light" type="button" onclick="document.location = '<?php echo e(route('login')); ?>'"><i data-feather="log-in"></i>Login</button>
          <?php else: ?>
          <button class="btn btn-primary-light" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>Logout</button>
          <?php endif; ?>
        </li>
      </ul>
    </div>
    <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
  </div>
</div>

<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
  <?php echo csrf_field(); ?>
</form><?php /**PATH G:\xampp\htdocs\Laravel\librarySystem\resources\views/app/layouts/partials/header.blade.php ENDPATH**/ ?>