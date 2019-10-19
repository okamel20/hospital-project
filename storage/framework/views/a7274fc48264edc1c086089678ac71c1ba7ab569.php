<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <a class="navbar-brand"><?php echo e(trans('admin.Dashboard')); ?></a>
    </div>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(adminUrl('profile')); ?>">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" target="_blank" href="<?php echo e(url('/')); ?>">
            <i class="material-icons">home</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(adminUrl('logout')); ?>">
            <i class="material-icons">logout</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
          </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>



