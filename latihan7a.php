<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
    

<?php
    $hargabuku = "12.500";
    $buku = $_POST['jualbeli'];
    $diskon= 5/100;
    $total = $hargabuku * $buku;
    $hitungdiskon = 0;
    if($buku>20){
        echo "untuk pembelian lebih dari 20 buku, maka akan dapat potongan harga sebesar 5% dari total harga <br/>";
    $diskon = $total * (5/100);}
    $hargatotal = $total - $diskon;
   
    
    echo "harga buku per satuan adalah $hargabuku <br/>";
    echo "irwan membeli buku tulis sebanyak $buku <br/>";
    
    /* echo "diskon yang didapat irwan dari membeli 25 buku adalah $diskon <br/>";  */
    echo "total yang harus dibayar irwan adalah Rp.$hargatotal";
    
?>

<form action="form_latihan7a.php">
<button> <a href="form_latihan7a.php"></a>Hitung Ulang ?</button>
<input type="submit" value="Hitung Ulang ?">
</form>
</body>
</html>