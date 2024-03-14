<table border="1" style="border-collapse: collapse;">
    <tr>
        <td>No</td>
        <td>Kode</td>
        <td>Nama</td>
        <td>Alamat</td>
    </tr>
    <?php
    $i = 1;
    foreach ($ambildtplg as $value) :
    ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $value->kd_pelanggan; ?></td>
            <td><?php echo $value->nama_pelanggan; ?></td>
            <td><?php echo $value->alamat_pelanggan; ?></td>
        </tr>
    <?php
        $i++;
    endforeach
    ?>
</table>