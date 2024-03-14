<!DOCTYPE html>
<html>

<head>
    <title>Export
        <?= $judul; ?>
    </title>
</head>

<body>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Kendaraan Saya.xls");
    ?>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
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
                            <th>Kode Kendaraan</th>
                            <th>No BPKB</th>
                            <th>No STNK</th>
                            <th>Pemilik Kendaraan</th>
                            <th>Merek Kendaraan</th>
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
                                <td class="w-40 whitespace-nowrap">
                                    <div class="flex items-center justify-center capitalize">
                                        <?php echo $row['id_kendaraan'] ?>
                                    </div>
                                </td>
                                <td class="w-40 whitespace-nowrap">
                                    <div class="flex items-center justify-center capitalize">
                                        <?php echo $row['no_bpkb'] ?>
                                    </div>
                                </td>
                                <td class="w-40 whitespace-nowrap">
                                    <div class="flex items-center justify-center capitalize">
                                        <?php echo $row['no_stnk'] ?>
                                    </div>
                                </td>
                                <td class="w-40 whitespace-wrap">
                                    <div class="flex items-center justify-center capitalize">
                                        <?php echo $row['pemilik'] ?>
                                    </div>
                                </td>
                                <td class="w-40 whitespace-wrap">
                                    <div class="flex items-center justify-center capitalize">
                                        <?php echo $row['merk'] ?>
                                    </div>
                                </td>
                                <td class="w-40 whitespace-nowrap">
                                    <div class="flex items-center justify-center capitalize">
                                        <?php echo $row['jenis'] ?>
                                    </div>
                                </td>
                                <td class="w-40 whitespace-nowrap">
                                    <div class="flex items-center justify-center capitalize">
                                        <?php echo $row['no_pol'] ?>
                                    </div>
                                </td>
                                <td class="w-40 whitespace-nowrap">
                                    <div class="flex items-center justify-center capitalize">
                                        <?php echo $row['no_kerangka'] ?>
                                    </div>
                                </td>
                                <td class="w-40 whitespace-nowrap">
                                    <div class="flex items-center justify-center capitalize">
                                        <?php echo $row['no_mesin'] ?>
                                    </div>
                                </td>
                                <td class="w-40 whitespace-nowrap">
                                    <div class="flex items-center justify-center capitalize">
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
</body>

</html>