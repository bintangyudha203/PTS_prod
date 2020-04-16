<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Tests</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/tests') ?>">List Test</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/tests/add') ?>">Buat Test</a>
        </div>
    </li>
</ul>
