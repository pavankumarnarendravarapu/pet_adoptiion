<?php
require 'dbconfig/config.php';
?>
<html>
<head>
<link rel="stylesheet" href="main.css">
</head>
<body>
    <div class='a'>
      <h1>PET ADOPTION</h1>
      <ul class="h" type="none">
      <li><a class="s" href="logout.php">Logout</a></li>
     <!--<li><a class="s" href="Register">Register </a></li>-->
      <li><a class="s" href="about.html">About </a></li>
      </ul>
    </div>
	<div class="la">
    <form action="" method="post">
	 <label>Category :</label>
    <select>
    <?php
       $res=mysqli_query($con,"select * from adopt");
       while($row=mysqli_fetch_array($res)){
    ?>
    <option><?php echo $row["category"];?></option>
    <?php
    }
    ?>
    </select><br><br>
	<label>Breed :</label>
    <select>
    <?php
    $res=mysqli_query($con,"select * from adopt");
    while($row=mysqli_fetch_array($res)){
    ?>
    <option><?php echo $row["breed"];?></option>
    <?php
  }
  ?>
  </select><br><br>
   <label>Gender :</label>
  <select>
  <?php
       $res=mysqli_query($con,"select * from adopt");
       while($row=mysqli_fetch_array($res)){
  ?>
  <option><?php echo $row["gender"];?></option>
  <?php
  }
  ?>
  </select><br><br>
   <label>Color :</label>
  <select>
  <?php
       $res=mysqli_query($con,"select * from adopt");
       while($row=mysqli_fetch_array($res)){
  ?>
  <option><?php echo $row["color"];?></option>
  <?php
  }
  ?>
  </select><br><br>
   <label>Size :</label>
  <select>
  <?php
       $res=mysqli_query($con,"select * from adopt");
       while($row=mysqli_fetch_array($res)){
  ?>
  <option><?php echo $row["size"];?></option>
  <?php
  }
  ?>
  </select><br><br>

   <input type="submit" value="adopt">
    </form>
	</div>
</body>
</html>