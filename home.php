<?php 
    $jsondata = file_get_contents("./json/list.json");
    $json = json_decode($jsondata,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="./css/style.css">
    <title>Home</title>
</head>
<body>
    <header>
      <nav>
        <div id="logo">
            <h1>Electronic store</h1>
        </div>
        <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="checkout.php">Checkout</a></li>
                <li><a href="login.html">Sign Out</a></li>
        </ul>
      </nav>
    </header>
    <section class="grid">
        <div class="container">
            <div class="title">
                <h3>Laptop</h3>
            </div>
            <div class="grid-box">
                <?php 
                foreach ($json as $key => $value) { 
                    // echo $key . "<br>";
                    
                    if($value["category"] == "laptop"){

                ?>
                <div class="bg1">
                    <img src="<?php echo $value["image"];?>" alt="" class="image">
                    <div class="name">
                        
                        <h1>
                            <?php
                                echo $value["name"]."<br>";                           
                            ?>
                        </h1> 
                        <form action="addcart.php" method="POST">
                        <button type="submit" class="btn btn-primary" title="Add To Cart" >
                           <i class="fas fa-shopping-basket"></i>
                           <input type="hidden" name="id" value="<?=$value["id"];?>" />
                           <input type="hidden" name="name" value="<?=$value["name"];?>" />
                           <input type="hidden" name="category" value="<?=$value["category"];?>" />
                           <input type="hidden" name="price" value="<?=$value["price"];?>" />
                           <h4>Add To Cart</h4>
                        </button>
                    </form>
                    </div>
                </div>
                <?php
                }
            }
         ?>
                </div>

                <div class="title">
                <h3>Camera</h3>
            </div>
            <div class="grid-box">
                <?php 
                foreach ($json as $key => $value) { 
                    //echo $key . "<br>";
                   
                    if($value["category"] == "camera"){

                ?>
                <div class="bg1">
                    <img src="<?php echo $value["image"];?>" alt="" class="image">
                    <div class="name">
                        
                        <h1>
                            <?php
                                echo $value["name"]."<br>";                           
                            ?>
                        </h1>
                        <form action="addcart.php" method="POST">
                        <button type="submit" class="btn btn-primary" title="Add To Cart" >
                           <i class="fas fa-shopping-basket"></i>
                           <input type="hidden" name="id" value="<?=$value["id"];?>" />
                           <input type="hidden" name="name" value="<?=$value["name"];?>" />
                           <input type="hidden" name="category" value="<?=$value["category"];?>" />
                           <input type="hidden" name="price" value="<?=$value["price"];?>" />
                           <h4>Add To Cart</h4>
                        </button>
                    </form>
                    </div>
                </div>
                <?php
                }
            }
         ?>
                </div>

                <div class="title">
                <h3>Headphones</h3>
            </div>
            <div class="grid-box">
                <?php 
                foreach ($json as $key => $value) { 
                    //echo $key . "<br>";
                   
                    if($value["category"] == "headphone"){

                ?>
                <div class="bg1">
                    <img src="<?php echo $value["image"];?>" alt="" class="image">
                    <div class="name">
                        
                        <h1>
                            <?php
                                echo $value["name"]."<br>";                           
                            ?>
                        </h1>
                        <form action="addcart.php" method="POST">
                        <button type="submit" class="btn btn-primary" title="Add To Cart" >
                           <i class="fas fa-shopping-basket"></i>
                           <input type="hidden" name="id" value="<?=$value["id"];?>" />
                           <input type="hidden" name="name" value="<?=$value["name"];?>" />
                           <input type="hidden" name="category" value="<?=$value["category"];?>" />
                           <input type="hidden" name="price" value="<?=$value["price"];?>" />
                           <h4>Add To Cart</h4>
                        </button>
                    </form>
                    </div>
                </div>
                <?php
                }
            }
        ?>
                </div>
            
            </div>
    </section>
    <footer>
        <p>Copyright &copy; 2020</p>
    </footer>
    
</body>
</html>