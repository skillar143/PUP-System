<nav class="sb-topnav navbar navbar-expand navbar-dark"  style="background-color: maroon">
            <!-- Navbar Brand-->
            <img class="img-profile rounded-circle " style="height:50px" src="<?php echo e(asset('img/logo.png')); ?>">
            <a class="navbar-brand ps-3" href="index.html">PUP Administrationn</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo e(Auth::user()->name); ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
                        </li>
                                        
                        
                    </ul>
                </li>
            </ul>
        </nav>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>



<?php /**PATH C:\xampp\htdocs\projects\pup-loginsystem\resources\views/adminlayout/_topnav.blade.php ENDPATH**/ ?>