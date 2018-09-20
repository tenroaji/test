<form method="POST" action="">
<label>INPUT STRING </label><input type="text" name="tes">
<br>
<input type="submit" name="ok">
</form>
<?php
if(isset($_POST['ok'])){
$string=$_POST['tes'];
$operator = array();
$angka = array();
$hasil=0;
$kali= array();
$tambah= array();
$bagi= array();
$kurang= array();
$a=$b=$c=$d=0;





//contoh rekursif dan funsi dalam fungsi
function lapar($string){
if (strlen($string) == 1){
	return;
}else {
for($i=0; $i<=strlen($string)-1; $i++)
	{
	if ($string[$i] == "*") { $kali[$a+1]=$i;}
	else if ($string[$i] == "/") {$bagi[$a+1]=$i;}
	else if ($string[$i] == "+"){$tambah[$a+1]=$i;}
	else if($string[$i] == "-"){$kurang[$a+1]=$i;}
	else { $angka[$i]= $angka[$i]=(int)$string[$i];
	$kata = (strlen($string)-1 == $i)?'=':'+';
	echo $angka[$i],$kata;
	}
	}
echo hitung($angka),"<BR>";
$hasil=(string)hitung($angka);
	}
return lapar($hasil);
	}

}

function hitung($angka){
$hasil=0;
 for($i=0; $i<=count($angka)-1; $i++)
{
	$hasil=$hasil+$angka[$i];
}
  return $hasil;
}

echo 'Inputan : ',$string,'<br>';
echo lapar($string);



?>