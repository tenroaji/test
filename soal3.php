<body>
<form method="post" action="#">
<input type="number" name="nilai">
<input type="submit" name="submit" value="proses">
</form>
</body>
<?php 
if (isset($_POST['submit'])){
$d = $_POST['nilai'];
$a=1;
$b=0;
while ($a <= $d){
 $c = $a + $b;
 $b = $a;
 $a = $c;
 if ($c == $d){
  $e = 1;
  break;
 }else{
  $e = 0;
 }
}
if ($e != 1){
 echo "<br> $d Bukan Bilangan Fibonanci";
}else if ($e == 1){
 echo "<br> $d Bilangan Fibonanci";
}
}
?>