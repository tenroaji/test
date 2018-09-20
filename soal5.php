 
<?php
$a=37;
$b=2;
$t=hitung($a,$b);
echo "hasil = ".$t;


function hitung($c,$d){
	$c=$c*2;
	$d=$d*2;
	$e=tambah($c,$d);
return $e;	
}


function tambah($x,$y){
	$z=$x+$y;
	while($z<50){
		$x+=2;
		$y+=2;
		$z=hitung($x,$y);
	}
	return $z;
}
?>
