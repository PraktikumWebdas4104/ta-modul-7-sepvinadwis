<?php 

include "$koneksi";
$query=mysqli_query($koneksi,"SELECT * FROM mahasiswa ORDER BY DESC");

 ?>
<form action="#" method="POST">
    <TABLE border="1">
        <tr>
            <th> Nama</th>
            <th> Nim</th>
            <th> Aksi</th>
        </tr>
        
        <?php 
            if (mysqli_num_rows($query)>0) { ?>
                <?php 
                    $no=1;
                    while ($data = mysql_fetch_array($query)) {
                 ?>
            <tr>
                <td> <?php echo $no; ?></td>
                <td> <?php echo $data['nama'] ?></td>
                <td> <?php echo $data['nim'] ?></td>

                <td>
                    <a href ="#">delete</a>
                    <a href ="#">update</a>
                </td>
            </tr>

            <?php $no++; }?>
            <?php } ?>
    </TABLE>
    <a href="datamhsbr.php">tambah data </a>
</form>
