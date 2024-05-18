
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body >
    <h1 style="text-align: center; color:aliceblue ;" > MOVIEPEDIA </h1>
    
    <?php 
    if ($_POST) {
        $conn = new mysqli("localhost","root","","moviepedia");

        $name = $_POST['name'];
        $mob = $_POST['mob'];
        $email = $_POST['email'];
        $query = $_POST['query'];

        $conn->query("insert into response values('.$name.','.$mob.','.$email.','.$query.')");
        
        echo ("<marquee style='color:aliceblue' direction='left'> <h3> Thankyou for contacting us </h3></marquee>");
   
    }
 ?>
    

    <br><br><br><br><br>
    <form action="form.php" method="post" style="text-align: center; position: absolute; width: 30%; height: 200px; margin-left: 35%;" >
        <div  class="form-group" >
            <label for="pwd" style="color: aliceblue;">Name:</label>
            <input name="name" style="color: black; border:2px solid black ;"  class="form-control" id="pwd"  required>
        </div>
        <div class="form-group" >
            <label for="pwd" style="color: aliceblue;">Mobile no.</label>
            <input name="mob" style="color: black; border:2px solid black ;" type="number"  class="form-control" id="pwd" required>
        </div>
        <div class="form-group">
            <label for="email " style="color: aliceblue;">Email address:</label>
            <input name="email" style="color: black; border:2px solid black ;"  type="email"  class="form-control" id="email" required>
        </div>
        <div class="form-group">
            <label for="pwd" style="color: aliceblue;">Your Query:</label>
            <textarea name="query" style="color: black; border:2px solid black ;" class="form-control" name="" id="pwd" cols="50" rows="6" required></textarea>
        </div>
        <br><br>
       <input type="submit" style="background-color: aqua; border: 2px; border-radius: 4px;" onclick="alert('Thankyou for your valuable feedback your request will be processed soon')">
       <button style="background-color: aqua; border: 2px; border-radius: 4px;" ><a href="index.php">Home</a></button>
    </form>

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