<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="<?= base_url(); ?>assets/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $sub; ?>
    </title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="py-5">
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="" class="w-6" src="<?= base_url(); ?>assets/dist/images/logo.svg">
                <span class="text-white text-lg ml-3"> Tereliye </span>
            </a>
            <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <ul class="border-t border-white/[0.08] py-5 hidden">
            <li>
                <a href="<?php echo site_url('Admin_home') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                    <div class="menu__title"> Beranda </div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('User') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="box"></i> </div>
                    <div class="menu__title"> Data Pengguna </div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Data_kendaraan') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="truck"></i> </div>
                    <div class="menu__title"> Data Kendaraan Pengguna </div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Wajib_pajak') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="layout"></i> </div>
                    <div class="menu__title"> Data Pengguna Wajib Pajak </div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Tagihan') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                    <div class="menu__title"> Data Tagihan Pengguna Wajib Pajak </div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('auth/logout') ?>" class="menu">
                    <div class="menu__icon"> <i data-lucide="Power"></i> </div>
                    <div class="menu__title"> Logout </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <div class="border-b border-white/[0.08] -mt-10 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
        <div class="top-bar-boxed flex items-center">
            <!-- BEGIN: Logo -->
            <a href="" class="-intro-x hidden md:flex">
                <img alt="Tereliye" class="w-6" src="<?= base_url(); ?>assets/dist/images/logo.svg">
                <span class="text-white text-lg ml-3"> Tereliye </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                <ol class="breadcrumb breadcrumb-light">
                    <li class="breadcrumb-item"><a href="#">
                            <?= $judul; ?>
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?= $sub; ?>
                    </li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                    role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="<?= $username; ?>" src="<?= base_url(); ?>assets/dist/images/user.png">
                </div>
                <div class="dropdown-menu w-56">
                    <ul
                        class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                        <li class="p-2">
                            <div class="flex items-center">
                                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                                    role="button" aria-expanded="false" data-tw-toggle="dropdown">
                                    <img alt="<?= $username; ?>" src="<?= base_url(); ?>assets/dist/images/user.png">
                                </div>
                                <div class="ml-4">
                                    <div class="font-medium capitalize">
                                        <?= $username; ?>
                                    </div>
                                    <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">
                                        <em>
                                            <?= $level; ?>
                                        </em>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="<?php echo site_url('auth/logout') ?>" class="dropdown-item hover:bg-white/5"> <i
                                    data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->
    <!-- BEGIN: Top Menu -->
    <nav class="top-nav">
        <ul>
            <li>
                <a href="<?php echo site_url('Admin_home') ?>" class="top-menu">
                    <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="top-menu__title"> Beranda </div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('User') ?>" class="top-menu">
                    <div class="top-menu__icon"> <i data-lucide="box"></i> </div>
                    <div class="top-menu__title"> Data Pengguna </div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Data_kendaraan') ?>" class="top-menu">
                    <div class="top-menu__icon"> <i data-lucide="truck"></i> </div>
                    <div class="top-menu__title"> Data Kendaraan Pengguna </div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Wajib_pajak') ?>" class="top-menu">
                    <div class="top-menu__icon"> <i data-lucide="layout"></i> </div>
                    <div class="top-menu__title"> Data Pengguna Wajib Pajak </div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Tagihan') ?>" class="top-menu  top-menu--active">
                    <div class="top-menu__icon"> <i data-lucide="credit-card"></i> </div>
                    <div class="top-menu__title"> Data Tagihan Pengguna Wajib Pajak </div>
                </a>
            </li>
        </ul>
    </nav>
    <!-- END: Top Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <?php echo $contents ?>
        </div>
    </div>
    <!-- END: Content -->

    <!-- BEGIN: JS Assets-->
    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="<?= base_url(); ?>assets/dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>