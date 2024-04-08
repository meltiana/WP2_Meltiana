<html>

<head>
    <title>Tampil Data Matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspen="3">
                    Tampil Data Mata Kuliah
                </th>
            </tr>
            <tr>
                <td colspen="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</TH>
                <TH>:</TH>
                <TD>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <tr>
                <td colspen="3" align="center">
                    <a href="<?= base_url('matakulaih'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>