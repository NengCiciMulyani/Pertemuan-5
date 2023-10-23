<?php
    // konstanta Judul="Hitung Luas Lingkaran"
    define ("Judul", "Hitung Luas Lingkaran");
    
    // konstanta PHI=3.14
    define ("PHI", 3.14);
    
    echo Judul;
    $r=10;
    echo "<BR>Jari-jari : $r<BR>\n";
      
      $luas=PHI * $r * $r;
      echo "Luas Lingkaran = $luas";
?>
