<?php include 'header.php';
$conn = mysqli_connect("localhost","root","","gmshop") OR die("Connection Failed!!!");
$sql = "SELECT * FROM gmdata";
$query = mysqli_query($conn,$sql) OR die("Unable to store data!!!");

 ?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="gm1.css">
  <style>
      body{
        background: url(bg.jpg) no-repeat;
        background-size: cover;
      }
  </style>
</head>
<body>
  <br>
  <div class="search" width="80px" height="100px" align="center">
  	<form action="display.php" method="post" align="right">
  			<input type="text" name="search" placeholder="Search..." ><br><br>
  			<input class = "btn" type="submit" value="Search">
  	</form>
  </div>
  <br><br>
  <table border="1px" style="width:100%; color:white;">
    <tr bgcolor="red">

    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>قد</th>
    <th>نستوڼی</th>
    <th>شانه</th>
    <th>یخن</th>
    <th>بغل</th>
    <th>دامن</th>
    <th>تمبان</th>
    <th>پاڅه</th>
    <th>قول</th>
    <th>کف</th>


  </tr>
    <?php
    while($row=mysqli_fetch_assoc($query)){
    ?>
      <tr>
          <td> <?php echo $row['ID'];?> </td>
          <td> <?php echo $row['Name'];?> </td>
          <td> <?php echo $row['Address'];?> </td>
          <td> <?php echo $row['Phone'];?> </td>
          <td> <?php echo $row['Qad'];?> </td>
          <td> <?php echo $row['Arm'];?> </td>
          <td> <?php echo $row['Shana'];?> </td>
          <td> <?php echo $row['Yakhan'];?> </td>
          <td> <?php echo $row['Baghal'];?> </td>
          <td> <?php echo $row['Daman'];?> </td>
          <td> <?php echo $row['Tumban'];?> </td>
          <td> <?php echo $row['Pancha'];?> </td>
          <td> <?php echo $row['Qawl'];?> </td>
          <td> <?php echo $row['Cuff'];?> </td>

      
      </tr>
      <?php
      //echo "<pre>";
      //print_r($row);
      //echo "</pre>";
    }

     ?>
  </table>
</body>
</html>




<?php



/*echo "<table border='1px'>";
  foreach($row as $v1){
      echo "<tr>";
    foreach($v1 as $key){
                echo "<td>" . $key . "</td>";
    }
    echo "</tr>";

  }
  echo "</table>";*/

/*for($r=0; $r < count($query); $r++){
  echo "<tr><td>";
  for($c=0; $c < count($query); $c++){
    echo $query[$r][$c];
  }
  echo "</td></tr>";
}*/
?>

<?php


?>
