<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="lf.css">
</head>



    
<body style="background-image : linear-gradient(135deg,rgb(4, 4, 9), rgb(93, 101, 93), rgb(4, 4, 9));">
    <h1 style="text-align: center; color: aliceblue;" > MOVIEPEDIA </h1>
    <marquee behavior="" direction="left" style="color: aliceblue;"> <h3>Log in For better experience </h3></marquee>
    <div style="border:5px solid #03e9f4  " class="loginbox">

        <h2>Login</h2>

        <form method="post" action="lf.php" >


            <div class="userbox">
                
                <input type="text" name="username" id="username" required>
                <label >Username</label>
            </div>


            <div class="userbox">
                
                <input type="password" id="password" name="password" required>
                <label >Password</label>
            </div>

           <a href="index.php">
           <input type="submit" name="login"> 
            </a>




        </form>
    </div>

    <?php
       $conn = new mysqli("localhost","root","","moviepedia");

       if(isset($_POST['login']))
       {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * from signupdata where username='$username' and password='$password'";
        $res = mysqli_query($conn,$sql);
        $count = mysqli_fetch_row($res);
        if($count > 0)
        {
            // echo"Login Successful";
            echo"<script>alert('Login Successful')</script>";
            echo"<script>window.location.href='index.php';</script>";
        }
        else
        {
            // echo "Invalid Details";
            echo"<script>alert('Invalid Details')</script>";
            echo"<script>window.location.href='lf.php';</script>";
        }
       }

    ?>
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
