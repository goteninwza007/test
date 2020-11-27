<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ITF Lab</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070040_goten', '9yuGLlaPs1', 'it63070040_chaowat', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM market');
?>
<div class="container">
    <div class="display-3 text-center">Information</div>
    <a href="form.html" class="btn btn-success mb-3">Insert</a>
<table class="table table-striped table-bordered table-hover">
<thead>
  <tr>
  <th>Name</th>
  <th>Height</th>
  <th>Weight</th>
  <th>BMI</th>
  <th>Delete</th>
  </tr>
</thead>
<tbody>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></td>
    <td><?php echo $Result['height'];?></td>
    <td><?php echo $Result['weight'];?></td>
    <td><?php echo $Result['bmi'];?></td>
    <td>
      <a href ="delete.php?ID=<?php echo $Result['ID'];?>" class="btn btn-warning">Delete</a>
    </td>
  </tr>
<?php
}
?>
<tbody>
</table>
</div>
<?php
mysqli_close($conn);
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
