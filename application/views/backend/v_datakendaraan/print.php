<style>
    h2 {
        padding-top: 60px;

    }

    th,
    td {
        white-space: nowrap;
        padding: 8px;
    }
</style>

<div style="text-align: center; margin-top: 8px;">
    <h2 class="text-lg font-medium">
        <?= $judul; ?>
    </h2>
</div>
<div style="display: flex; justify-content: center;">
    <div>
        <div>
            <table border="1" style="margin: 0 auto; width: 80%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Kode Kendaraan</th>
                        <th>No BPKB</th>
                        <th>No STNK</th>
                        <th>Pemilik Kendaraan</th>
                        <th>Merk Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>No Polisi</th>
                        <th>No Kerangka</th>
                        <th>No Mesin</th>
                        <th>Masa Berlaku</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    //$read yang diambil dari control function index
                    foreach ($read->result_array() as $row) {
                        ?>
                        <tr>
                            <td class="w-40">
                                <div class="flex">
                                    <?php echo $no ?>
                                </div>
                            </td>
                            <td class="text-center whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['username'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['id_kendaraan'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['no_bpkb'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['no_stnk'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-wrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['pemilik'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['merk'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['jenis'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['no_pol'] ?>
                                </div>
                            </td>
                            <td class="w-40">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['no_kerangka'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['no_mesin'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['masa_berlaku'] ?>
                                </div>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.print();
</script>