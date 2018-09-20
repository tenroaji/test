 
<?php
    $nilai = 5;
	
    for($i=1;$i<=$nilai;$i++){
		$b=$i;
        for($j=1;$j<=$i;$j++){
			echo $b," ";
            $b=$b+$nilai-$j;
        }
        echo "<br/>";
		
    }
	
$jml_baris = 5; //definisikan banyaknya baris
for($i=1;$i<=$jml_baris;$i++) { // looping baris segitiga
 for($j=1;$j<=$i;$j++){ // looping untuk isi segitiga per-barisnya
  if($j==1 || $j==$i){
   $value[$i][$j] = 1; // jika baris pertama definisikan 1
  }else{
   $value[$i][$j] = $value[$i-1][$j] + $value[$i-1][$j-1]; // rumus penjumlahan baris ke-2 dst
  }
  $segitiga .= $value[$i][$j]." "; 
 }
 $segitiga.= "<br>";
}
echo "<center>".$segitiga."</center>";





$jumlah = 5;

echo "</br></br>Segitiga Setengah : </br>";
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '*';
    }
    echo "</br>";
}

echo "</br></br>Segitiga Setengah Terbalik : </br>";
for($a=1; $a<=$jumlah; $a++){
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '*';
    }
    echo "</br>";
}

echo "</br></br>Segitiga Full : </br>";
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '*';
    }
    echo "</br>";
}
for($a=1; $a<=$jumlah; $a++){
    for($b=$jumlah; $b>=$a; $b-=1){
        echo '*';
    }
    echo "</br>";
}


echo "</br></br>Gabungan Segitiga : </br>";
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '*';
    }
    echo "</br>";
    for($b=$jumlah; $b>=$a; $b-=1){
        echo '*';
    }
    echo "</br>";
}
   
echo "</br></br>Segitiga Diamond : </br>";
for($a=1; $a<=$jumlah; $a++){
    for($b=$jumlah; $b>=$a; $b-=1){
        echo ' ';
    }
    for($c=1; $c<=$a; $c++){
        echo '* ';
    }
    echo "</br>";
}
for($a=1; $a<=$jumlah+1; $a++){
    echo '* ';
}
echo "</br>";
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo ' ';
    }
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '* ';
    }
    echo "</br>";
}



?>

<table>
<?php
function td($isi, $warna)
{
    echo "<td align='center' style='width:20px;height:20px;border:1px solid black;background-color:".$warna.";color:white'>".$isi."</td>";
}
$n = 9;

for($a=1;$a<=9;$a++)
{
    echo "<tr>";
    for($b=1;$b<=$n;$b++)
    {
        if(($b<=$a && $b+$a<=$n+1) || ($b>=$a && $b+$a>$n))
        {
            td("*", "black");
        }
        else
        {
            td("", "white");
        }
    }
    echo "</tr>";
}
?>
</table>