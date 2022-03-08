<?php
$ar_buah = ["Jambu", "Mangga","Melon","Semangka" ];
// cetak buah ke index ke 2
echo $ar_buah[2];
// cetak jumlah buah
echo '<br/>Jumlah Buah ' . count($ar_buah);
// cetak seluruh buah
 echo '<ol>';
foreach($ar_buah as $buah){
 echo '<li>'. $buah .'</li>';
 }
 echo '</ol>';
 // tambahkan buah
 $ar_buah[]="Alpukat";
 // hapus buah index ke 1
 unset($ar_buah[1]);
 // ubah buah index ke 2 menjadi Manggis
 $ar_buah[2]="Rambutan";
 // cetak seluruh buah dengan index nya
 echo '<ul>';
 foreach($ar_buah as $k => $v){
 echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
 }
 echo '</ul>';
 ?>
