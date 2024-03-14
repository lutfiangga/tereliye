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
    header("Content-Disposition: attachment; filename=Data User.xls");
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
                            <th>Kode User</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        //$read yang diambil dari control function index
                        foreach ($read_user->result_array() as $row) {
                            ?>
                            <tr>
                                <td>
                                    <div style="text-align: center;">
                                        <?php echo $no ?>
                                    </div>
                                </td>
                                <td>
                                    <div style="text-align: center;">
                                        <?php echo $row['id_user'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div style="text-align: center;">
                                        <?php echo $row['username'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div style="text-align: center;">
                                        <?php echo $row['password'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div style="text-align: center;">
                                        <?php echo $row['level'] ?>
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