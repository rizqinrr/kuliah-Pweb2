<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Prodi</th>
            <th>NIM</th>
        </tr>
        
        <?php
            foreach($data as $row){
            ?>
        <tr>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['nim']?></td>
            <td><?php echo $row['prodi']?></td>
        </tr>
        <?php
            };
            ?>
    </table>
</body>
</html>