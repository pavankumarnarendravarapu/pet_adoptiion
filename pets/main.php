<?php
   session_start();
?>
<html>
<head>
        <link rel="stylesheet" type=text/css href="main.css" />
</head>
<body>
   <div class='a'>
      <h1>PET ADOPTION</h1>
      <ul class="h" type="none">
      <li><a class="s" href="logout.php">Logout</a></li>
     <!--<li><a class="s" href="Register">Register </a></li>-->
      <li><a class="s" href="About">About </a></li>
      </ul>
    </div>
	
    <div class="la">
	     <form>
		 <label>Category :</label>
		 <select name="Category" style="width:200px;">
		      <option value="Dogs">Dogs</option>
			  <option value="Cats">Cats</option>
			  <option value="Birds">Birds</option>
			  </select><br><br>
		 <label>Breed :</label>
		 <select name="Breed" style="width:200px;">
		      <option value="Dogs">Dogs</option>
			  <option value="Cats">Cats</option>
			  <option value="Birds">Birds</option>
			  </select><br><br>
	     <label>Color :</label>
		 <select name="Color" style="width:200px;">
		      <option value="Black">Black</option>
			  <option value="White">White</option>
			  <option value="Biscuit">Biscuit</option>
			  <option value="Mixed">Mixed</option>
			  </select><br><br>
	     <label>Gender :</label>
		 <select name="Gender" style="width:200px;">
		      <option value="Male">Male</option>
			  <option value="Female">Female</option>
			  </select><br><br>
		 <label>Size :</label>
		 <select name="Size" style="width:200px;">
		      <option value="Puppy">Puppy</option>
			  <option value="Big">Big</option>
			  </select><br><br>
		<input type="submit" value="Adopt">
	  </form>
	</div>

</body>
</html>