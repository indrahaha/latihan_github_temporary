<?php
    $siswa = array('Abdul'=> array(45,32,15),
                    'Budi'=> array(70,85,60),
                    'Tri'=> array(65,75,80)
                   );
    $hasil1 =  number_format(($siswa['Abdul'][0] +$siswa['Abdul'][1] + $siswa['Abdul'][2]) / 3);   
    $hasil2 =  number_format(($siswa['Budi'][0] +$siswa['Budi'][1] + $siswa['Budi'][2]) / 3);
    $hasil3 =  number_format(($siswa['Tri'][0] +$siswa['Tri'][1] + $siswa['Tri'][2]) / 3);        
    echo "Nilai rata-rata dari Abdul adalah $hasil1 <br/>"; 
    echo "Nilai rata-rata dari Budi adalah $hasil2 <br/>";
    echo "Nilai rata-rata dari Tri adalah $hasil3 <br/>";         
?>