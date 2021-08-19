<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add free email domain</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Add free email domains</h2>
  </div>
  
  <form method="post" action="add.php">
 
   <div class="input-group">
      <label>Enter Email Domain</label>
      <input type="text" name="domain" value=" ">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="email_valid">submit</button>
    </div>
  </form>
</body>
</html>