<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title >form</title>
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main-page.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-image:url(image/main-banner-1-1600x700.jpg);
            background-color: rgba(0, 0, 0, 0.39);
            background-size: cover;
            width: 100%;
            height: 100vh;

        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            
           
        }
    
        .contact-box{
            width: 500px;
            display: grid;
            position: absolute;
            grid-template-columns: repeat(1,100%);
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.39);
            padding: 25px 40px;
            left: 550px;
           
        }
        
        h2{
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        h2::after{
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translate(-50%);
            height: 4px;
            width: 50px;
            border-radius: 2px;
            background-color: #2ecc71;
        }
        
    </style>
</head>
<body>
    <!---- header of navbar---->
    
    <header>
        <div class="container-fliud"> 
         <div class="brand">
           <a href="main.php"><h1>e-commerce</h1></a>
         </div>
         <nav>
           <ul>
             <li><a href="#"> </a></li>
             <!--<li><a href="form.php">About us</a></li>-->
             <li><a href="login.php"> Login</a></li>
           </ul>
         </nav>
        </div>
      </header>
      <!----sign up--->
    <div class="container">
        <div class="contact-box">
           
            <form action="function/register.php" method="post">
                <h2>E-Commerce</h2>
            <label for="btn1"  class="form-label">full name</label>
            <input type="text" name="name" class="form-control" id="btn1"  placeholder="" required> 

            <label for="btn3" class="form-label">email</label>
            <input type="email" name="email" class="form-control" id="btn3"  placeholder="" required>

            <label for="btn4" class="form-label">telephone</label>
            <input type="text" name="phone" class="form-control" id="btn4"  placeholder="" required>

            <label for="btn5" class="form-label">birthday</label>
            <input type="date" name="birthday" class="form-control" id="btn5" required>

            <label for="btn6"  class="form-label">password</label>
            <input type="password" name="password" class="form-control" id="btn6"  placeholder="" required>

            <button type="submit" class="btn btn-primary" for="btn7" style="margin-top: 20px;">sign up</button>
            </form>
        </div>
    </div>
    
 <!----the end--->
 <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
     <h3 class="end">
         E-commerce Project 2021
     </h3>
    </div>
    </div>
    </div>
   </footer>
  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>