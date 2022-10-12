<html>
<head>
	<title>Dummy Gallery</title>
    <link rel="stylesheet" href="BuddysStyles.css">
	
	<style>
   
    .login
    {
       background-color: white;
       color:darkviolet;
       box-shadow: 0 0 10px 0 black;
       border-radius: 5px;
       margin-top: 50;
	   margin-left: 565;
       font-size:larger;
       width:370px;
       height: 350px;
       padding: 10px;
       
    }
    ul.list{
        list-style-type: none;
        text-align:center;
        margin-left: 5px;
        padding-top: 10px;
        
    }
    ul.list li{
        width:250px;
        margin-bottom: 15px;
    }
    ul.list li input{
        width:300px;
        height: 20px;
        text-align: center;
        padding: 10px 0;
        border: none;
        background-color: #d3d3d3;
        border-radius: 5px;
    }
    ul.list li input[type="submit"]{
        background-color: #4690fb;
        color:#fff;
        height: 40px;
    }
    ul.list li:nth-child(5){
        color:red;
    }
    .userimg{
        background: url("userimg.jpg") no-repeat;
        width: 50px;
        height: 50px;
        background-size: 100%;
        position: absolute;
        margin-left:150px;
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
			<p style="color:white; text-align:center; font-family: Helvetica, sans-serif"> LOGIN </p>
		</div>
		<div class="loginmiddle">
			<form method="POST" action="login1.php">
				<div class=login>
					<div class="userimg"></div>
					<ul class=list>
						<li ><h2>Login</h2></li>
						<li><input type="text" name="Username" placeholder="Username" style="height:40px"></li>
						<li><input type="password" name="Password" style="height:40px"></li>
						<li><input type="submit" name="Submit" value="Submit"<a href="dummyproject.html"></a></li>
						<li><a href="WebRegistration.html" class="loginlink">Create an Account </a></li>
					</ul>
				</div> 
			</form>
		</div> 
		
		<?php
  
  $conn = mysqli_connect("localhost", "root", "", "webtechproject");
    
 
  $username = $_REQUEST['Username'];
  $password =  $_REQUEST['Password'];
 
    
  $q = "INSERT INTO loginform  VALUES (
      '$username','$password')";
    
  if(mysqli_query($conn, $q)){
    //   echo "<h3>data stored in a database successfully." 
    //       . " Please browse your localhost php my admin" 
    //       . " to view the updated data</h3>"; 

    //   echo nl2br("\n$first_name\n $last_name\n "
    //       . "$email\n $number\n $city \n $msg");
    echo "<h1>Successfully logged in!</h1>";
    
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