<html>
<head>
	<title>Dummy Gallery</title>
	<link rel="stylesheet" href="BuddysStyles.css">
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
			<p style="color:white; text-align:center; font-family: Helvetica, sans-serif"> Franchise </p>
		</div>
		<div class="franchisemiddle">
			<div class="franchiseDiv c1"> 
				<img src="headpizza.jfif" height="500" width="650" alt="image not found">
			</div>
			
			<div class="franchiseDiv c1">
				<p class="franchisepara"><b>Opportunity Shared</b></p>
				<p class="franchisepara1"><i><b>
				If you are dreaming of owning your own business, you have found the most successful of Indian franchises, Buddy's Pizza. We offer a proven 
				business model to help our franchisees craft the most delicious pizza at unbelievable prices. A promising opportunity and a proven brand.
				<i></b></p>
			</div>
			
			<div class="franchiseDiv c1"><p class="franchisepara"><b>Here are some of the resources we provide:</b></p>
				<p><i><b>
				<ul class="franchisepara2">
				 <li>Hiring, training and retaining top talent in your market</li>
				 <li>Quality Assurance</li>
				 <li>Innovative marketing strategies</li>
				 <li>Professional branding</li>
				 <li>Customer service</li>
				 <li>Financial awareness</li>
				 <li>Ongoing education</li></ul>
				</b></i></p>
			</div>
			
			<div class="franchiseDiv c1"> <img src="restaurant.jpg" height="500" width="650" alt="image not found"></div>
			
			<div class="franchiseDiv1 c1"> <p class="franchisepara" style="text-align:center"><b>Join the Buddy's Pizza Franchise Family</b><p></div>
			
			<div class="franchiseDiv2 c1">
			<form method="post" action="franchise.php">
		
			<h1>Enter your details</h1>
			  
				<input type="text" name="name" placeholder=" First Name" style="height:50px; width:300px">
				<input type="text" name="sname" placeholder="Last Name" style="height:50px; width:300px"><br><br>
			    <input type="email" name="eid" placeholder="Email Id"style="height:50px; width:300px">
			    <input type="number" name="num" placeholder="Contact Number" style="height:50px; width:300px"><br><br>
			    <input type="text" name="cname" placeholder="City" style="height:50px; width:300px"><br><br>
				<input type="texr" name="msg" placeholder="Write your message" style="height:200px; width:600px"><br><br> 
			    <input type="submit" name="submit" value="Send Message" class="btn" style="height:50px; width:200px">   
		  </form>
		</div>
		</div>
		<?php
  
  $conn = mysqli_connect("localhost", "root", "", "webtechproject");
    
  $first_name =  $_REQUEST['name'];
  $last_name = $_REQUEST['sname'];
  $email =  $_REQUEST['eid'];
  $number = $_REQUEST['num'];
  $city = $_REQUEST['cname'];
  $msg = $_REQUEST['msg'];
    
  $q = "INSERT INTO franchisedata  VALUES ('$first_name', 
      '$last_name','$email','$number','$city','$msg')";
    
  if(mysqli_query($conn, $q)){
    //   echo "<h3>data stored in a database successfully." 
    //       . " Please browse your localhost php my admin" 
    //       . " to view the updated data</h3>"; 

    //   echo nl2br("\n$first_name\n $last_name\n "
    //       . "$email\n $number\n $city \n $msg");
    echo "<h1>Successfully Saved!!</h1>";
    
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
	

		
		
		
		


