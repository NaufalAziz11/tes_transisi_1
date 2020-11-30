<?php
// nomor 1
//(1)
$nilai = [72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86];
$hasil = array_sum($nilai);
$jumlah_nilai = count($nilai);
$rata_rata = $hasil / $jumlah_nilai;

echo "Nilai : 72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86";
echo "<br><br>(1) Rata-rata dari nilai diatas adalah : ";
echo round($rata_rata);

// (2)
rsort($nilai);
echo "<br><br>(2) 7 nilai tertinggi : ";
for ($i = 0; $i < 7; $i++) {

    echo "$nilai[$i],";
}

//(3)
sort($nilai);
echo "<br><br>(3) 7 nilai terendah : ";
for ($i = 0; $i < 7; $i++) {

    echo "$nilai[$i],";
}
// nomor 2

$kata = "TranSISI";
$huruf = 'a-z';
echo "<br><br>jumlah huruf kecil dalam kata : ";
echo  similar_text($kata, 'transisi');



echo "Unigram : ";
echo substr("Jakarta, adalah, ibukota, negara, Republik, Indonesia", 0) . "<br>";
echo "Bigram : ";
echo substr("Jakarta, adalah, ibukota, negara, Republik, Indonesia", 0, 7);
echo substr("Jakarta, adalah, ibukota, negara, Republik, Indonesia", 8, 16);
echo substr("Jakarta, adalah, ibukota, negara, Republik, Indonesia", 25, 17);
echo substr("Jakarta, adalah, ibukota, negara, Republik, Indonesia", 43) . "<br>";
// echo "Trigram : ";
// echo substr("Jakarta, adalah, ibukota, negara, Republik, Indonesia", 0, 7);
// echo substr("Jakarta, adalah, ibukota, negara, Republik, Indonesia", 8, 7) . "<br>";
// echo substr("Jakarta, adalah, ibukota, negara, Republik, Indonesia", 8, 12) . "<br>";
// echo substr("Jakarta, adalah, ibukota, negara, Republik, Indonesia", 43) . "<br>";
