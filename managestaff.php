<html>
    <head>
        
        <title>MANAGE STAFF</title>
        <link rel="stylesheet" href="managestaff.css">
    </head>
    <body>
        <nav>
        
        
        </nav>
      
    
    </body>
<div class="ManagestaffPhp">
<h1> MANAGE STAFF</h1>
<?php
$conn = mysqli_connect("localhost","root","","project");
if(!$conn)

{
    echo "database not connected";

}
$sql="SELECT * FROM `staff`";
$data=mysqli_query($conn,$sql);
 if(mysqli_num_rows($data) > 0){
    echo "<table border=1>";
    echo"<tr>";
    echo "<th>name</th>";
    echo "<th>email</th>";
    echo "<th>phone number</th>";
    echo "<th>user id</th>";
    echo "<th>delete</th>";
    echo "<th>edit</th>";
    

    echo"</tr>";
     while($row=mysqli_fetch_assoc($data)){
        echo "<tr>";
        echo "<td>".$row['staff_name']."</td>";
        echo "<td>".$row['staff_email']."</td>";
        echo "<td>".$row['phone_no']."</td>";
        echo "<td>".$row['staff_id']."</td>";
        echo "<td> <button> delete</button></td>";
        echo "<td> <button> edit</button></td>";
        echo "</tr>";
        
     }
    echo "</table>";
 }
 ?>
 </div>
 </html>
 