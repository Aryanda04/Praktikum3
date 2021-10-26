<?php
$nama_barang = array("Telur", "Bensin", "Deterjen", "Tepung Terigu", "Beras","Kacang Tanah");
$nomor = array(1, 2, 3, 4, 5, 6);
$berat = array(5, 1, 1, 1.5, 20, 0.5);
$stok = array(90, 0, 0, 20, 0, 110);
?>

<!DOCTYPE html>
<html style="background-color:#ffffff;">

<head>
    <style>
        *{
            font-family: 'Courier New', Monospace;
            color: black;
        }
    </style>
    
</head>
<body>

<h2 style="Color:#000000">Toko Pak Joy </h2>

    <table class="father" border='1' style="border-radius:0px;">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Berat(kg)</th>
            <th>Berat(g)</th>
            <th>Berat(mg)</th>
            <th>Berat(liter)</th>
            <th>Stok</th>
        </tr>
        <?php for ($i=0; $i < 6; $i++) { ?>
        <?php $color;
        if ($stok[$i] == 0) {
        $color = "style='background-color: red;'";
        }else{
        $color = "style='background-color: #ffffff;'";
        } ?>        
        <tr>
            <td> <?php echo $nomor[$i]; ?> </td>
            <td> <?php echo $nama_barang[$i]; ?> </td>
            <td> <?php echo $berat[$i]; ?> </td>
            <td> <?php echo $berat[$i] * 1000; ?> </td>
            <td> <?php echo $berat[$i] * 1000000; ?> </td>
            <td> <?php if ($nama_barang[$i] == "Bensin" || $nama_barang[$i]=="Deterjen"){
            echo $berat[$i];
            }
            else {
                echo "-";
            }?>
            <td <?= $color ?>><?php if ($stok[$i] == 0 ){
            echo "kosong";
            }
            else {
                echo $stok[$i];
            }?>
            </td>
        </tr>
        <?php } ?>   


    </table>
    <h5 style="Color:#000000">oleh : <br> Aryanda Rizky Pratama <br> 105219038</h5>

</body>
</html> 
