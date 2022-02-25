
<?php
session_start();

if(!isset($_SESSION['email']))
{

header("Location:login.php");
}
else

 
{
  include_once 'function/connect.php';
  include 'includes/header.php';

 
  ?>


<!--------carousel---------->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="image/main-banner-1-1600x700.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="image/main-banner-2-1600x700.jpg" alt="Second slide">
          </div>
        </div>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
      </div>
  
<section class="icons">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="products"> <h2 >Featured Products</h2></div>
        </div>
        <?php 
        
$select_pro = "SELECT * FROM products";
$result_pro = $conn->query($select_pro);
foreach($result_pro as $kay_pro)
{        
?>  
 
        <!---one--->
        <div class="col-lg-4 col-md-6">
            <div class="one">
              <div class="vip">
                 <div class="overlay">
                     <div class="icons">
                           <a href="main.php"> <i class="far fa-store"></i></a>
                      </div>
                   </div>
                     <img src="image/<?php echo $kay_pro['img']; ?>" alt="">
                </div>
             <div>
                 <h3><?php echo $kay_pro['name']; ?></h3>
                <h4><?php echo $kay_pro['discount'];?><del> <?php echo $kay_pro['price'];?></del></h4>
                <a href="content.php?id=<?php echo $kay_pro['id']; ?>"><button type="button" class="btn btn-outline-info">details</button> </a>
              </div>
        

              </div>
          </div>
        <?php } ?>
    </section>
     
    <?php
    
    include 'includes/footer.php';}
?>
