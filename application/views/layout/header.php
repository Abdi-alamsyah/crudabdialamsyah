<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="<?= base_url('assets/') ?>https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">BPF TI D</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>
                        <span class="nr-2 d-none d-lg-inline text-gray-600 small"></span>
                        <img class="img-profil rounded-circle" >
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <?php
                        if ($user['role'] == 'admin') { ?>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?=site_url('mahasiswa/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span>Mahasiswa</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?=site_url('prodi/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span>prodi</span>
                                </a>
                            </li>
                        <?php } else {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?=site_url('profil/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span>profil</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?=site_url('Auth/logout') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span>logout</span>
                                </a>
                            </li>
                        <?php
                        } ?>
                    </div>
                </li>
            </ul>
        </nav>
