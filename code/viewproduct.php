<?php

$conn = mysqli_connect("localhost","root","","miu_coffeeshop");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
<html>

<head>
<style>

fieldset {

overflow: hidden

}

.some-class {

float: left;

clear: none;

}

label {

float: left;

clear: none;

display: block;
background-color: red;
color:green;
padding: 2px 1em 0 0;

}

input[type=radio],

input.radio {

background-color: red;
float: left;

clear: none;

margin: 2px 0 0 2px;

}
</style>
</head>

<body>

<form method="post" action="viewproduct.php">
  <?php
  echo "<h3>choose your size <h3>";

$query1="SELECT `id` ,`SizeName` FROM `size` ";
$result = $conn->query($query1);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row["id"];
    $name=$row["SizeName"];
   echo "<input type='radio' value='$id' name='staff'> $name<br />";

  }
} else {
  echo "0 results";
}
echo "<h3>choose your milk <h3>";
$query2="SELECT `id` ,`Type` FROM `milk_type` ";
$result2 = $conn->query($query2);
if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
     $id2=$row2["id"];
    $Typename=$row2["Type"];
   echo "<input type='radio' value='$id2' name='staff2'> $Typename<br />";

  }
} else {
  echo "0 results";
}

echo "<h3>choose your flavors <h3>";
$query3="SELECT `Id`, `FlavorName` FROM `flavors` ";
$result3 = $conn->query($query3);
if ($result3->num_rows > 0) {
  // output data of each row
  while($row3 = $result3->fetch_assoc()) {

    $id3=$row3["Id"];

    $FlavorName=$row3["FlavorName"];
   echo "<input type='radio' value='$id3' name='staff3'> $FlavorName<br />";

  }
} else {
  echo "0 results";
}





?>
<?php
echo "<h3>choose your beverages <h3>";
$query4="SELECT `DrinkId`, `DrinkType` FROM `beverages` ";
$result4 = $conn->query($query4);
if ($result4->num_rows > 0) {
  // output data of each row
  while($row4 = $result4->fetch_assoc()) {

    $id4=$row4["DrinkId"];

    $beverages=$row4["DrinkType"];


	 echo " <label for='A'> <input  type='radio'  value='$id4' name='staff4'>  $beverages <br />";
  }
} else {
  echo "0 results";
}




 ?>
 <input type="submit" value="Submit" >

</form>


</body>

</html>
