<?php
//system.out.println, printf

echo "Hello World";
// ada 3 tipe data umum 

$namavariabel = "Hello brodie";
$angka = 19.2235;

echo "<h1>$namavariabel</h1>";
echo "<br>";
echo $angka;
echo "<br>";
// operator
$a = 5;
$b = 6;
$c = "5";

echo $c;

echo "<br>";

if($a === $c){
    echo "true";
}else{
    echo "false";
}

echo "<br>";

// tanggal 
// d kecil tangal, d besar hari
// m besar nama bulan 
// y besar tahun yang angkanya langsung ribuyan, kalo y kecil ujungnya sj
date_default_timezone_set("Asia/Bangkok");
$today = date("D/M/Y h:i:s");
echo $today;


// SESSION 
// var global yang disimpan di dalam server
// sepanjang eksplor maka user pake session yang ada
// login dan register sederhana




?>