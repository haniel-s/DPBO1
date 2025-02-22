<?php
require('petshop.php');

// 2. Menambahkan data
$petshop1 = new petshop('3211','Husky','Mamalia','12000','Husky.png');
$petshop2 = new petshop('9865','KatakBizer','Amfibi','13000','KatakBizer.png');
$petshop3 = new petshop('5687','Bebek','Unggas','24000','Bebek.png');

// Masukkan input ke array
$list = array(
    $petshop1->getid() . ' ' . $petshop1->getnama() . ' ' . $petshop1->getkategori() . ' ' . $petshop1->getharga() . ' ' . $petshop1->getfoto(),
    $petshop2->getid() . ' ' . $petshop2->getnama() . ' ' . $petshop2->getkategori() . ' ' . $petshop2->getharga() . ' ' . $petshop2->getfoto(),
    $petshop3->getid() . ' ' . $petshop3->getnama() . ' ' . $petshop3->getkategori() . ' ' . $petshop3->getharga() . ' ' . $petshop3->getfoto()
);

// 3. Mengubah data
$change = array_search('3211 Husky Mamalia 12000 Husky.png', $list);
if ($change !== false) {
    $list[$change] = '3211 Gajah Mamalia 15000 Gajah.png';
}

// 4. Menghapus data
$delete = array_search('5687 Bebek Unggas 24000 Bebek.png', $list);
if ($delete !== false) {
    unset($list[$delete]);
}
?>


<!-- 1. Menampilkan data -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petshop</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 95px;
            height: auto;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Data Petshop</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Foto</th>
        </tr>
        <?php foreach ($list as $string) {
            $data = explode(' ', $string, 5); // Ensure only 5 parts
            ?>
            <tr>
                <!-- menampilkan data -->
                <?php foreach ($data as $key => $value) {
                    if ($key == 4) { ?>
                        <td><img src="<?php echo htmlspecialchars($value); ?>" alt="<?php echo htmlspecialchars($data[1]); ?>"></td>
                    <?php } else { ?>
                        <td><?php echo htmlspecialchars($value); ?></td>
                    <?php } ?>
                <?php } ?>
            </tr>
        <?php } ?>

    </table>


<!-- 5. Mencari data berdasarkan nama -->
<h2 style="text-align:center;">Data Petshop yang dicari</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Foto</th>
        </tr>
        <?php 
        foreach ($list as $string) {
            if (strpos($string, 'KatakBizer') !== false) { // kalo KatakBizer print kalo bukan rausah
                $data = explode(' ', $string, 5);
                ?>
                <tr>
                    <?php foreach ($data as $key => $value) {
                        if ($key == 4) { ?>
                            <td><img src="<?php echo htmlspecialchars($value); ?>" alt="<?php echo htmlspecialchars($data[1]); ?>"></td>
                        <?php } else { ?>
                            <td><?php echo htmlspecialchars($value); ?></td>
                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php }
        } ?>
    </table>
</body>
</html>
