<form method="POST" action="">
<label>INPUT STRING </label><input type="text" name="tes">
<br>
<input type="submit" name="ok">
</form>
<?php
if(isset($_POST['ok'])){
$string=$_POST['tes'];


//contoh rekursif dan funsi dalam fungsi


}

function calculate_string( $mathString ) {

    // trim white spaces
    //$mathString = trim($mathString);
	echo $mathString,'<br>';
    // remove any non-numbers chars; exception for math operators
    $mathString = ereg_replace ('[^0-9\+-\*\/\(\) ]', '', $mathString);
	echo $mathString,'<br>';
	
    $compute = create_function("", "return (" . $mathString . ");" );
    //echo $compute,'<br>';
	return 0 + $compute();

}


echo calculate_string($string); 


?>