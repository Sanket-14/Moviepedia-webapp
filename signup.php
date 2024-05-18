<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="lf.css">
</head>

<?php 
    if ($_POST) {
        $conn = new mysqli("localhost","root","","moviepedia");

        $username = $_POST['username'];
        $mobnumber = $_POST['mobnumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $conn->query("insert into signupdata values('.$username.','.$mobnumber.','.$email.','.$password.','.$cpassword.')");
   
    }
 ?>  


<body style="background-image : linear-gradient(135deg,rgb(4, 4, 9), rgb(93, 101, 93), rgb(4, 4, 9));">
    <h1 style="text-align: center; color: aliceblue;" > MOVIEPEDIA </h1>
    <marquee behavior="" direction="left" style="color: aliceblue;"> <h3>Sign up For future updates and better experience </h3></marquee>
    <div style="border:5px solid #03e9f4  " class="loginbox">

        <h2>SignUp</h2>

        <form action="index.php" method="POST" >


            <div class="userbox">
                
                <input type="text" name="username" id="username" required>
                <label >Enter Username</label>
            </div>


            <div class="userbox">
                
                <input type="number" name="mobnumber" id="Mobile number" required>
                <label >Enter Mobile number</label>
            </div>


            <div class="userbox">
                
                <input type="email" name="email" id="username" required>
                <label >Enter Email</label>
            </div>


            <div class="userbox">
                
                <input type="password" id="password" name="password" required>
                <label >Password</label>
            </div>


            <div class="userbox">
                
                <input type="password" id="cpassword" name="cpassword" required>
                <label >Confirm Password</label>
            </div>
            <a href="index.php"><input type="submit"  ></a>
            
            

         <!-- <button style="background-color: aqua; border: 2px; border-radius: 4px;" ><a href="index.php">Home</a></button> -->



        </form>
    </div>
    <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/6422e82531ebfa0fe7f522f5/1gsk5lksd';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>



</body>

</html>
