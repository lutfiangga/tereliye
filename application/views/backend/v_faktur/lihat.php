<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Invoice -->
    <div class="intro-y box overflow-hidden mt-5">
        <div class="border-b border-slate-200/60 dark:border-darkmode-400 text-center sm:text-left">
            <div class="px-5 pt-10 pb-3 sm:px-20 sm:py-5">
                <div class="text-primary font-semibold text-3xl">INVOICE</div>
                <div class="mt-2"> Receipt <span class="font-medium">#
                        <?php echo $lihat['id_kwitansi'] ?>
                    </span> </div>
            </div>
            <div class="flex flex-col lg:flex-row px-5 sm:px-20 pt-3 pb-10 sm:pb-10">
                <div>
                    <div class="text-base text-slate-500">Client Details</div>
                    <div class="text-lg font-medium text-primary mt-2 capitalize">
                        <?php echo $lihat['nama'] ?>
                    </div>
                    <div class="mt-1">
                        <?php echo $lihat['pekerjaan'] ?>
                    </div>
                    <div class="mt-1">
                        <?php echo $lihat['alamat'] ?>
                    </div>
                </div>
                <div class="lg:text-right mt-0 lg:mt-0 lg:ml-auto">
                    <div class="text-base text-slate-500">Payment to</div>
                    <div class="text-lg text-primary mt-2 font-semibold text-3xl">Tereliye</div>
                    <div class="mt-1">tereliye@bussiness.almaata.ac.id</div>
                </div>
            </div>
        </div>
        <div class="px-5 sm:px-16 py-10 sm:py-10">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">Uraian Tagihan</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-center whitespace-nowrap">Kode Kendaraan
                            </th>
                            <th class="border-b-2 dark:border-darkmode-400 text-center whitespace-nowrap">NPWP</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-center whitespace-nowrap">Virtual
                                Account
                            </th>
                            <th class="border-b-2 dark:border-darkmode-400 text-center whitespace-nowrap">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap w-32 capitalize">
                                    <?php echo $lihat['ket_uraian'] ?>
                                </div>
                            </td>
                            <td class="text-center border-b dark:border-darkmode-400 w-32 capitalize">
                                <?php echo $lihat['id_kendaraan'] ?>
                            </td>
                            <td class="text-center border-b dark:border-darkmode-400 w-32 capitalize">
                                <?php echo $lihat['id_wp'] ?>
                            </td>
                            <td class="text-center border-b dark:border-darkmode-400 w-32 font-medium capitalize">
                                <?php echo $lihat['kd_va'] ?>
                            </td>
                            <td class="text-center border-b dark:border-darkmode-400 w-32 font-medium capitalize">
                                <?php echo $lihat['status'] ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
            <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-base text-slate-500">Jumlah Bayar</div>
                <div class="text-xl text-primary font-medium mt-2">Rp
                    <?php
                    $nominal = $lihat['nominal'];

                    if (!is_null($nominal)) {
                        $formattedNominal = number_format($nominal, 0, ',', '.');
                        echo $formattedNominal;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Invoice -->
</div>
<!-- END: Content -->