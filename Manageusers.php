<html>
    <head>
        <link rel="stylesheet" href="Manageusers.css">
        <title>MANAGE USERS</title>
    </head>
    <body>
        <nav>
        
        
        </nav>
      
    
    </body>
    <div class="ManageusersPhp">
    <h1> MANAGE USERS</h1>
<?php
$conn = mysqli_connect("localhost","root","","project");
if(!$conn)

{
    echo "database not connected";

}
$sql="SELECT * FROM `register`";
$data=mysqli_query($conn,$sql);
 if(mysqli_num_rows($data) > 0){
    echo "<table border=1>";
    echo"<tr>";
    echo "<th>name</th>";
    echo "<th>email</th>";
    echo "<th>number</th>";
    echo "<th>userid</th>";
    echo "<th> delete </th>";

    echo"</tr>";
     while($row=mysqli_fetch_assoc($data)){
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['number']."</td>";
        echo "<td>".$row['userid']."</td>";
        echo "<td><button>delete</button></td>";
        echo "</tr>";
        
     }
     echo "</table>";
 }
 ?>
 </div>
 </html>
