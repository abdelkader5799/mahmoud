<?php
include_once 'function/connect.php';
include_once 'includes/header.php';

$id = $_GET['id'];
$select_detail = "SELECT * FROM products WHERE id = $id";
$result_detail = $conn->query($select_detail);
$key_detail = $result_detail->fetch_assoc();
?>


    <style>
        img{
            width: 100%;
            margin-bottom: 50px;
        }
        .list li{
            list-style-type: none;
            line-height: 50px;
            
        }
        .describe{
            text-align:left;
            margin-top: 50px;
        }
        h4{
            color: #8b550f;
        }
        .card{
            margin-bottom: 50px;
            color: #666;
        }
    </style>
</head>

    <!--- contant---->
   
    <section class="icons">
    <div class="container">
    <div class="row">
        <div class="col-lg-5">
        <img src="image/<?php echo $key_detail['img']; ?>" alt="">
        </div>
        <div class="col-lg-7">
        <div class="describe">
        <h3><i class="fas fa-chair"></i>Consectetur Hampden</h3>
        <ul class="list">
            <li><?php echo $key_detail['name']; ?></li>
            
            <li><del><?php echo $key_detail['price']; ?></del> <?php echo $key_detail['discount']; ?></li>
        </ul>
        </div>
        </div>
        <div class="col-lg-12">
            <h4>description</h4>
        <div class="card">
            <div class="card-body">
            <?php echo $key_detail['description']; ?>
            </div>
          </div>
        </div>
        </div>
        </div> 
    </section>

    <!----the end--->
    <?php
    
    include 'includes/footer.php';
?>