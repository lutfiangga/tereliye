<!-- data admin -->
<div class="content">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <a href="<?php echo site_url('User/create') ?>"> <button
                class="btn btn-lg btn-primary shadow-md mr-2 mt-5">Tambah
                Pengguna</button></a>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-0">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <h1 class="text-3xl font-medium leading-none mt-3">
                Data Admin
            </h1>
            <div class="flex mt-5 sm:mt-3 mb-3 ml-auto">
                <div class="dropdown w-1/2 sm:w-auto">
                    <button class="dropdown-toggle btn btn-pending w-full sm:w-auto" aria-expanded="false"
                        data-tw-toggle="dropdown">
                        <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export
                        <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a id="tabulator-print" href="<?php echo site_url('User/printAdmin') ?>"
                                    class="dropdown-item" target="_BLANK">
                                    <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                                </a>
                            </li>
                            <li>
                                <a id="tabulator-export-xlsx" href="<?php echo site_url('User/excelAdmin') ?>"
                                    class="dropdown-item">
                                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        <?php
        $no = 1;
        //$read yang diambil dari control function index
        foreach ($read_admin->result_array() as $row) {
            ?>
            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div class="intro-y col-span-12 md:col-span-6">
                        <div class=" intro-y col-span-12 md:col-span-6">
                            <div class="box">
                                <div class="flex flex-col lg:flex-row items-center p-5">
                                    <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                                        <div class="text-lg font-medium font-bold uppercase">
                                            <?php echo $row['id_user'] ?> |
                                            <?php echo $row['username'] ?>
                                        </div>
                                        <div class="text-slate-500 text-xxs mt-0.5">
                                            <em>
                                                <?php echo $row['level'] ?>
                                            </em>
                                        </div>
                                        <div class="text-slate-500 font-medium mt-0.5">
                                            <?php echo $row['password'] ?>
                                        </div>
                                    </div>
                                    <div class="flex mt-4 lg:mt-0">
                                        <a class="btn btn-primary w-24 mr-1 mb-2"
                                            href="<?php echo site_url('User/edit/' . $row['id_user']) ?>"> <i
                                                data-lucide="edit" class="w-4 h-4 mr-1"></i>Edit</a>
                                        <a class="btn btn-danger w-24 mr-1 mb-2"
                                            href="<?php echo site_url('User/delete/' . $row['id_user']) ?>"
                                            onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['username']; ?>')">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i>Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $no++;
        }
        ?>
    </div>
    <!-- end data admin -->
    <!-- data Pengguna -->
    <div class="grid grid-cols-12 gap-6 mt-0">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <h1 class="text-3xl font-medium leading-none mt-3">
                Data Pengguna
            </h1>
            <div class="flex mt-5 sm:mt-3 mb-3 ml-auto">
                <div class="dropdown w-1/2 sm:w-auto">
                    <button class="dropdown-toggle btn btn-pending w-full sm:w-auto" aria-expanded="false"
                        data-tw-toggle="dropdown">
                        <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export
                        <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a id="tabulator-print" href="<?php echo site_url('User/printAdmin') ?>"
                                    class="dropdown-item" target="_BLANK">
                                    <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                                </a>
                            </li>
                            <li>
                                <a id="tabulator-export-xlsx" href="<?php echo site_url('User/excelUser') ?>"
                                    class="dropdown-item">
                                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        <?php
        $no = 1;
        //$read yang diambil dari control function index
        foreach ($read_user->result_array() as $row) {
            ?>
            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div class="intro-y col-span-12 md:col-span-6">
                        <div class=" intro-y col-span-12 md:col-span-6">
                            <div class="box">
                                <div class="flex flex-col lg:flex-row items-center p-5">
                                    <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                                        <div class="text-lg font-medium font-bold uppercase">
                                            <?php echo $row['id_user'] ?> |
                                            <?php echo $row['username'] ?>
                                        </div>
                                        <div class="text-slate-500 text-xxs mt-0.5">
                                            <em>
                                                <?php echo $row['level'] ?>
                                            </em>
                                        </div>
                                        <div class="text-slate-500 font-medium mt-0.5">
                                            <?php echo $row['password'] ?>
                                        </div>
                                    </div>
                                    <div class="flex mt-4 lg:mt-0">
                                        <a class="btn btn-primary w-24 mr-1 mb-2"
                                            href="<?php echo site_url('User/edit/' . $row['id_user']) ?>"> <i
                                                data-lucide="edit" class="w-4 h-4 mr-1"></i>Edit</a>
                                        <a class="btn btn-danger w-24 mr-1 mb-2"
                                            href="<?php echo site_url('User/delete/' . $row['id_user']) ?>"
                                            onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['username']; ?>')">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i>Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $no++;
        }
        ?>
    </div>
    <!-- end data Pengguna -->
</div>