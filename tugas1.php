<?php
    $daftarList = array("list" => array( 
        array('name' => 'Ayam Gorang', 'price' => '13000'),
        array('name' => 'Ayam Bakar', 'price' => '15000'),
        array('name' => 'Ayam Sayur', 'price' => '13000'),
        array('name' => 'Tempe Gorang', 'price' => '1000'),
        array('name' => 'Tahu Gorang', 'price' => '1000'),
        array('name' => 'Soto', 'price' => '3000'),
        array('name' => 'Nasi Putih', 'price' => '5000'),
        array('name' => 'Es Teh', 'price' => '4000'),
        array('name' => 'Es Tebu', 'price' => '5000')
    ));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <style>p.indent{ padding: 2em;}</style>

    <title>Tugas 1 PHP | Muhammad Rizwan</title>
</head>
<body>
    <h1>Daftar Menu</h1>
    <ul>
        <?php
            foreach($daftarList['list'] as $dataList){
        ?>
            <li>
                <?php echo $dataList['name'];?> &Tab; = Rp. <?php echo $dataList['price'];?>
            </li>
        <?php
        }
        ?>
    </ul>
    
</body>
</html>