<?php
session_start();
$email = "";
$errors = array();
if (isset($_POST['email_valid'])) {
	 $email = $_POST['email'];
	 if (empty($email)) { array_push($errors, "Email is required"); }
	}
//finding domain name	
$domain = substr($email, strpos($email, '@') + 1);
//finding user name
$user = strstr($email, '@', true);

?>
<br>

<!DOCTYPE html>
<html>
<head>
	<title>Email details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Details</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	

    <!-- logged in user information -->
  
    	<p>Email Id: <strong><?php echo $email; ?></strong></p>
    	<p>Domain: <strong><?php echo $domain; ?></strong></p>
    	<p>User name: <strong><?php echo $user; ?></strong></p>
    	<p><?php echo $email ?> email id is <?php $db = mysqli_connect('localhost', 'root', '', 'email');
    	//Searching for domain in database to find wether it is free or paid
if (count($errors) == 0) {
    $query = "SELECT * FROM free WHERE name='$domain'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
     echo "free";
    }else {
      echo" paid";
    }
  }?></p>
    	<?php
// validating email address
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
} 
else {
    echo("$email is not a valid email address");
}

?>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    
</body>
</html>

