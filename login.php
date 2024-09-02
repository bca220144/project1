<html>
    <head><link rel="stylesheet" href="login.css">
    <title>
        login page
    </title>
</head>
<div class="LoginContainer">
    <body>
        
        <form  class="LoginForm" action="" method="post">
            
            <h1><u>LOG IN</u>
        </h1>
         <input class="LoginInput" type="email" name="email" placeholder="enter your email">
         <input  class="LoginInput" type="password" name="password" placeholder="enter your password">
         <input class="LoginSubmit" type="submit" name="submit" value="login">
    </form>
    </body>
    </div>
</html>
<?php
$conn = mysqli_connect("localhost","root","","project");
if(!$conn)

{
    echo "database not connected";

}
if(isset($_POST['submit']))
{
   
    $name=$_POST['email'];
    $password=$_POST['password'];

$sql="SELECT * FROM `login` WHERE `email`='$name' AND `password`='$password'";
$data=mysqli_query($conn,$sql);
if($data)
{
    if(mysqli_num_rows($data) > 0){
        {
            $value=mysqli_fetch_assoc($data);
            if($value['user_code']==1){
                header('Location: tchr.html');
                exit();
            }
          
             else if($value['user_code']==0){
                header('Location: studentdashbrd.html');
                exit();
            }
            else{
                header('Location:dashboard.html');
                exit();
            }

        }
    

    
   
}
else{
    echo "<script>alert( 'user not found')</script>" ;
}
}

}
else{
    echo "<script>alert( 'form not submitted')</script>" ;
}


?>
