<?php

$conn = mysqli_connect('ihost.it.kmitl.ac.th', 'it63070040_goten', '9yuGLlaPs1', 'it63070040_chaowat', 3306);
$sql = 'DELETE FROM market WHERE ID = '.$_GET['ID'].'';

if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

if (mysqli_query($conn, $sql)) {
  echo "<center><font size='10' color='lightgreen'><br><br><br><br>Successful.</font></center>";
  echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=http://www.it.kmitl.ac.th/~it63070040/index.php'>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>