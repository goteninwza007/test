<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070040_goten', '9yuGLlaPs1', 'it63070040_chaowat', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi = $weight / (($height/100)**2);



$sql = "INSERT INTO market (name , height, weight, bmi) VALUES ('$name', '$height', '$weight', '$bmi')";


if (mysqli_query($conn, $sql)) {
  echo "<center><font size='10' color='lightgreen'><br><br><br><br>Successful.</font></center>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=http://www.it.kmitl.ac.th/~it63070040/index.php'>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
