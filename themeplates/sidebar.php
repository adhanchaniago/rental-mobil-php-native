<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Beranda
            </a>
            <a class="nav-link" href="?p=order">
                <div class="sb-nav-link-icon"><i class="fas fa-order"></i></div>
                Order
            </a>
            <a class="nav-link" href="?p=mobil">
                <div class="sb-nav-link-icon"><i class="fas fa-car"></i></div>
                Mobil
            </a>
            <a class="nav-link" href="?p=user">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Kelola Users
            </a>
            <a class="nav-link" href="logout.php">
                <div class="sb-nav-link-icon"><i class="fas fa-logout"></i></div>
                Logout
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        <?= $_SESSION['nama']; ?>
    </div>
    </nav>