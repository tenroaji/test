<form method="post" action="#">
<input type="number" name="isi" />
<input type="submit" name="submit" value="proses" />
<?php 
if (isset($_POST['submit'])){
$a = $_POST['isi'];
$d = strlen($a);
$b = 0;
$c = 0;
while($b < $d){

$c = $c + substr($a,$b,1);
$b=$b+1;

if ($d != 1){
	if ($b == $d){
		echo "<br> $c";
		$d = strlen($c);
		$a = $c;
		$c = 0;
		$b = 0;
	}
} else {
break;
}
}
}
?>