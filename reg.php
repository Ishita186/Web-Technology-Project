<html>
<head>
	<title>Dummy Gallery</title>
	<link rel="stylesheet" href="BuddysStyles.css">
	<style>
      body{
        
        margin-top: 30px;
      }
      .reg{
        background-color:gray;
        margin: 20px;
        padding: 20px;
        border: 10px black solid;
        width: 1400px;
      }
      .btn{
        background-color: brown;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        margin-left: 30px;
      }
    </style>
</head>
<body>
	<div class="title ">
			<div class="headimg c1"><img src="images.jpeg" class="image" width="100" height="100" alt="image not found">
			</div>
			<div class="head c1"><p class="name">Buddy's Pizza</p></div>
			<div class="head c1">
				<a href="dummyproject.html" class="link">Home</a>
				<a href="menu.html" class="link">Menu</a>
				<a href="about.html" class="link">About Us</a>
				<a href="gallery.html" class="link">Gallery</a>
				<a href="franchise.html" class="link">Franchise</a>
				<a href="ordernow.html" class="link">Order Now</a>
				<a href="buddyslogin.html" class="link">Login</a>
			</div>
			<p style="color:white; text-align:center; font-family: Helvetica, sans-serif"> Registration </p>
		</div>
		<form method="POST" action="reg.php">
      <div class="reg">
 
		<table style="background-color:white;" width="350" border="0px" cellspacing="5" cellpadding="5" align="center">
		
		  <tr>
			<th width="90"><img src="images.jpeg" width="80" height="80" alt="image not found"></th>
			<th><h2 style="font-family:'Brush Script MT', cursive; font-size:30px">Buddy's Pizza<h2></th>
		  </tr>
		  
		  <tr></tr>
		  
		  <tr>
			<td>Name:</td>
			<td><input type="text" name="name" placeholder="Enter your Name " /></td>
		  </tr>
		  
		  <td>Username:</td>
			<td><input type="text" name="uid" placeholder="Enter your Username" /></td>
		  </tr>
		  
		  <tr>
			<td>Password:</td>
			<td><input type="password" name="pwd1" placeholder="Enter your Password" /></td>
		  </tr>
		  
		  <tr>
			<td>Re-type Password:</td>
			<td><input type="password" name="pwd2" placeholder="Enter your Password" /></td>
		  </tr>
		  
		  <!-- <tr>
			<td>Gender:</td>
			<td><input type="radio" name="gender">Male
			  <input type="radio" name="gender">Female
			</td>
		  </tr> -->
		  <!-- <tr>
			<td>Birthdate:</td>
			<td><input type="date" name="Birthdate"></td>
		  </tr> -->

		  <tr>
			<td>Email:</td>
			<td><input type="email" name="eid" placeholder="Enter your E-mail ID" /></td>
		  </tr>
		  <tr>
		  
			<td>Contact No:</td>
			<td><input type="number" name="num" /></td>
		  </tr>
		  
		  <tr>
			<td>Address:</td>
			<td><textarea name="add"></textarea></td>
		  </tr>
		  
		  <tr>
			<td><input type="submit" name="submit" value="Submit" class="btn"<a href="Dummy.html"></a></td>
			<td><input type="reset" name="reset" value="Reset" class="btn" /></td>
		  </tr>
		  
		  <tr><td><a href="buddyslogin.html">Already registered? Click here to Login</a></td>
		  </tr>
		</table>   </div>
	</form>
  
		
		<?php
  
  $conn = mysqli_connect("localhost", "root", "", "webtechproject");
    
  $name =  $_REQUEST['name'];
  $username = $_REQUEST['uid'];
  $password =  $_REQUEST['pwd1'];
  $Repwd = $_REQUEST['pwd2'];
//   $gender = $_REQUEST['gender'];
  $email = $_REQUEST['eid'];
  $Number = $_REQUEST['num'];
  $address = $_REQUEST['add'];
    
  $q = "INSERT INTO regdata  VALUES ('$name', 
      '$username','$password','$Repwd','$email','$Number','$address')";
    
  if(mysqli_query($conn, $q)){
    //   echo "<h3>data stored in a database successfully." 
    //       . " Please browse your localhost php my admin" 
    //       . " to view the updated data</h3>"; 

    //   echo nl2br("\n$first_name\n $last_name\n "
    //       . "$email\n $number\n $city \n $msg");
    echo "<h1>Successfully Registered!!</h1>";
    
  } 
  else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
    
  // Close connection
  mysqli_close($conn);
  ?>
		
		
		<div class="end">
			<div class="endblock1 c1"><p class="info">Timings</p>
				<pre class="pre">		 Monday - Sunday<br>
		 11:30 - 10:00</pre>
			</div>
												
			<div class="endblock c1"><p class="info">&nbsp;Stay&nbsp;Connected</p>
				<pre class="pre">               Follow us on social media channels</pre>
																	
			</div>
			<div class="endblock c1"><p class="info">Contact&nbsp;Us</p>
				<pre class="pre">           105-106, Kairos, Nr. Manav Mandir,
           Gurukul Road, Memnagar,
	   Ahmedabad - 380052<br><br>
	            +91 9925469600
			</div>
			<div class="c2">
			<br><br>
			<center>
				<a href="dummyproject.html" class="bottomlink">Home &nbsp;|</a> 
				<a href="menu.html" class="bottomlink">Menu &nbsp;|</a>  
				<a href="about.html" class="bottomlink">About Us &nbsp;|</a> 
				<a href="gallery.html" class="bottomlink">Gallery &nbsp;|</a> 
				<a href="franchise.html" class="bottomlink">Franchise &nbsp;|</a> 
				<a href="ordernow.html" class="bottomlink">Order Now &nbsp;|</a> 
				<a href="buddyslogin.html" class="bottomlink">Login &nbsp;|</a> 
			</center>
			</div>
		</div> 
		
	</div>
</body>

</html>