<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url('Admin/index')?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url('Admin/users');?>"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-user-circle"></i>
        <span>Manage Users</span>
    </a>
    <a class="nav-link collapsed" href="<?php echo base_url('Admin/category');?>"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-id-card"></i>
        <span> Category</span>
    </a>
    <a class="nav-link collapsed" href="<?php echo base_url('Admin/pages');?>"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span> Pages</span>
    </a>
    <a class="nav-link collapsed" href="<?php echo base_url('Admin/products');?>"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span> Products</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="<?php echo base_url();?>assets/utilities-color.html">Colors</a>
            <a class="collapse-item" href="<?php echo base_url();?>assets/utilities-border.html">Borders</a>
            <a class="collapse-item" href="<?php echo base_url();?>assets/utilities-animation.html">Animations</a>
            <a class="collapse-item" href="<?php echo base_url();?>assets/utilities-other.html">Other</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menus
</div>

<!-- Nav Item - Pages Collapse Menu -->

<li class="nav-item">
<?php

    foreach ( $menus as $row ) {
    ?>
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages<?php echo $row["id"]?>"
        aria-expanded="true" aria-controls="collapsePages">
       
        <i class="fas fa-fw fa-folder"></i>
        <span><?php echo $row['menu_name']?></span>
    </a>
    <div id="collapsePages<?php echo $row["id"]?>" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <?php

            foreach ( $page as $row2 ) {
                if (is_array($row2) && $row2["menu_id"] == $row["id"])
            {
            ?>
            <a class="collapse-item" href="<?php echo base_url('admin/prac_page?id='.$row2["id"]);?>"><?php echo $row2['page_name']?>
            </a>
              
            <?php }}?>
        </div>
    </div>
    <?php }?>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="<?php echo base_url();?>assets/img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="<?php echo base_url();?>assets/https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
</div>

</ul>