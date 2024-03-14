<!-- BEGIN: Content -->
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-5">
        <div class="text-primary font-semibold text-3xl mr-auto">
            <?= $sub; ?>
        </div>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="<?php echo site_url('Userwp/create') ?>">
                <button class="btn btn-primary shadow-md mr-2">Tambah NPWP</button></a>
        </div>
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <input id="tabulator-html-filter-value" type="text"
                        class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search..." autocomplete="off"
                        autofocus>
                </div>
                <div class="mt-2 xl:mt-0">
                    <button id="tabulator-html-filter-go" type="button"
                        class="btn btn-primary w-full sm:w-16">Go</button>
                    <button id="tabulator-html-filter-reset" type="button"
                        class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</button>
                </div>
            </form>
            <div class="flex mt-5 sm:mt-0">
                <div class="dropdown w-1/2 sm:w-auto">
                    <button class="dropdown-toggle btn btn-pending w-full sm:w-auto" aria-expanded="false"
                        data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i
                            data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a id="tabulator-print" href="<?php echo site_url('Userwp/print') ?>"
                                    class="dropdown-item" target="_BLANK">
                                    <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                                </a>
                            </li>
                            <li>
                                <a id="tabulator-export-xlsx" href="<?php echo site_url('Userwp/excel') ?>"
                                    class="dropdown-item">
                                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table id="wajib-pajak-table" class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="text-center whitespace-nowrap">No</th>
                            <th class="text-center whitespace-wrap">NPWP</th>
                            <th class="text-center whitespace-wrap">No KTP</th>
                            <th class="text-center whitespace-wrap">Kendaraan</th>
                            <th class="text-center whitespace-wrap">Nama</th>
                            <th class="text-center whitespace-wrap">Alamat</th>
                            <th class="text-center whitespace-wrap">Pekerjaan</th>
                            <th class="text-center whitespace-nowrap">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        //$read yang diambil dari control function index
                        foreach ($read->result_array() as $row) {
                            if ($row['id_user'] == $this->session->userdata('id_user')) {
                                ?>
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <div class="flex items-center justify-center capitalize">
                                            <?php echo $no ?>
                                        </div>
                                    </td>
                                    <td class="w-40 whitespace-nowrap">
                                        <div class="flex items-center justify-center capitalize">
                                            <?php echo $row['id_wp'] ?>
                                        </div>
                                    </td>
                                    <td class="w-40 whitespace-nowrap">
                                        <div class="flex items-center justify-center capitalize">
                                            <?php echo $row['no_ktp'] ?>
                                        </div>
                                    </td>
                                    <td class="w-40 whitespace-nowrap">
                                        <div class="flex items-center justify-center capitalize">
                                            <?php echo $row['id_kendaraan'] ?>
                                        </div>
                                    </td>
                                    <td class="w-40 whitespace-wrap">
                                        <div class="flex items-center justify-center capitalize">
                                            <?php echo $row['nama'] ?>
                                        </div>
                                    </td>
                                    <td class="w-40 whitespace-wrap">
                                        <div class="flex items-center justify-center capitalize">
                                            <?php echo $row['alamat'] ?>
                                        </div>
                                    </td>
                                    <td class="w-40 whitespace-wrap">
                                        <div class="flex items-center justify-center capitalize">
                                            <?php echo $row['pekerjaan'] ?>
                                        </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3"
                                                href="<?php echo site_url('Userwp/edit/' . $row['id_wp']) ?>"> <i
                                                    data-lucide="edit" class="w-4 h-4 mr-1"></i> Edit </a>
                                            <a class="flex items-center text-danger"
                                                href="<?php echo site_url('Userwp/delete/' . $row['id_wp']) ?>"
                                                onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['id_wp'], ' ', $row['nama']; ?>')">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                            <?php
                                            $no++;
                            }
                        }
                        ?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
        </div>
    </div>
</div>
<!-- END: Content -->
<script>
    document.getElementById('tabulator-html-filter-go').addEventListener('click', function () {
        var value = document.getElementById('tabulator-html-filter-value').value.toLowerCase();
        var table = document.getElementById('wajib-pajak-table');
        var rows = table.getElementsByTagName('tr');

        for (var i = 0; i < rows.length; i++) {
            var cells = rows[i].getElementsByTagName('td');
            var found = false;

            if (rows[i].parentNode.tagName.toLowerCase() === 'tbody') {
                for (var j = 0; j < cells.length; j++) {
                    var cellText = cells[j].textContent || cells[j].innerText;

                    if (cellText.toLowerCase().includes(value)) {
                        found = true;
                        break;
                    }
                }

                if (found) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }
    });

    document.getElementById('tabulator-html-filter-reset').addEventListener('click', function () {
        document.getElementById('tabulator-html-filter-value').value = '';
        var table = document.getElementById('wajib-pajak-table');
        var rows = table.getElementsByTagName('tr');

        for (var i = 0; i < rows.length; i++) {
            if (rows[i].parentNode.tagName.toLowerCase() === 'tbody') {
                rows[i].style.display = '';
            }
        }
    });
</script>