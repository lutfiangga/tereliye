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
                        <th>Kode</th>
                        <th>Username</th>
                        <th>Kode Kendaraan</th>
                        <th>Merek</th>
                        <th>Pemilik Kendaraan</th>
                        <th>NPWP</th>
                        <th>No KTP</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
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
                            <td class="w-40 whitespace-nowrap">
                                <div class="flex items-center justify-center ">
                                    <?php echo $row['id_user'] ?>
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
                                    <?php echo $row['merk'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-wrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['pemilik'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['id_wp'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['no_ktp'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-wrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['nama'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-wrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['alamat'] ?>
                                </div>
                            </td>
                            <td class="w-40 whitespace-wrap">
                                <div class="flex items-center justify-center">
                                    <?php echo $row['pekerjaan'] ?>
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