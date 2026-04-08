<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="product_images/large.png" />
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Online Stationary Store!</h1>
                    <p>We have the School supplies,Office supplies and also Art And Craft materials. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
            <div class="row">
            <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
            <a href="cart.php">
            <img src="product_images/pen.jpeg" alt="Pen">
            </a>
            <center>
            <div class="caption">
            <h3>Gel Unicorn Pen</h3>
            <p>Price: Rs. 449.00</p>
            <?php if(!isset($_SESSION['email'])){  ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php
           }
          else{
               if(check_if_added_to_cart(1)){
                  echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                  }else{
                 ?>
          <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
          <?php
        }
      }
    ?>
 </div>
 </center>
 </div>
 </div>
 <div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <a href="cart.php">
 <img src="product_images/craft.jpeg" width="180" height="180" alt="Craft product">
 </a>
 <center>
 <div class="caption">
 <h3>Multicolor Art & craft set</h3>
 <p>Price: Rs.150 </p>
 <?php if(!isset($_SESSION['email'])){  ?>
  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php
  }
  else{
        if(check_if_added_to_cart(2)){
              echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
              }else{
              ?>
              <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
              <?php
              }
           }
        ?>
     </div>
     </center>
     </div>
     </div>
     <div class="col-md-3 col-sm-6">
     <div class="thumbnail">
      <a href="cart.php">
      <img src="product_images/file.jpeg" width="170" height="170" alt="Office Supplies">
      </a>
      <center>
      <div class="caption">
      <h3>Office file</h3>
      <p>Price: Rs. 100.00</p>
      <?php if(!isset($_SESSION['email'])){  ?>
      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
      <?php
     }
  else{
  if(check_if_added_to_cart(3)){
                                 echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                               }else{
                      ?>
        <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
        <?php
             }
         }
     ?>
     </div>
     </center>
     </div>
     </div>
     <div class="col-md-3 col-sm-6">
     <div class="thumbnail">
     <a href="cart.php">
     <img src="product_images/books1.jpeg" width="160" height="160" alt="Book">
     </a>
     <center>
     <div class="caption">
     <h3>The Secret</h3>
     <p>Price: Rs. 185.00</p>
     <?php if(!isset($_SESSION['email'])){  ?>
     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
     <?php
     }
     else{
           if(check_if_added_to_cart(4)){
           echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
           }else{
      ?>
      <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
      <?php
           }
        }
      ?>
      </div>
      </center>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
         <a href="cart.php">
         <img src="product_images/notebook1.jpeg" width="200" height="200" alt="Notebook">
         </a>
         <center>
         <div class="caption">
         <h3>Classmet NoteBook</h3>
         <p>Price: Rs. 23.00</p>
         <?php if(!isset($_SESSION['email'])){  ?>
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
         <?php
       }
      else{
            if(check_if_added_to_cart(5)){
            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
          }else{
          ?>
      <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
      <?php
            }
         }
    ?>
    </div>
    </center>
    </div>
    </div>
    <div class="col-md-3 col-sm-6">
    <div class="thumbnail">
    <a href="cart.php">
    <img src="product_images/book2.jpeg" width="139" height="139" alt="Book">
     </a>
     <center>
     <div class="caption">
     <h3>Motivational Books</h3>
     <p>Price: Rs. 90.00</p>
     <?php if(!isset($_SESSION['email'])){  ?>
     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
     <?php
          }
          else{
                if(check_if_added_to_cart(6)){
                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
              }else{
       ?>
       <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
       <?php
             }
        }
     ?>
     </div>
     </center>
     </div>
     </div>
     <div class="col-md-3 col-sm-6">
     <div class="thumbnail">
     <a href="cart.php">
      <img src="product_images/youva.jpeg" width="140" height="140" alt="Notebook">
      </a>
      <center>
      <div class="caption">
      <h3>youva jumbo size Notebook</h3>
      <p>Price: Rs. 105.00</p>
      <?php if(!isset($_SESSION['email'])){  ?>
      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
       <?php
      }
      else{
            if(check_if_added_to_cart(7)){
            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
            }else{
            ?>
        <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
        <?php
             }
           }
         ?>
         </div>
         </center>
        </div>
       </div>
      <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
       <a href="cart.php">
       <img src="product_images/book3.jpeg" width="140" height="140" alt="Book">
      </a>
      <center>
    <div class="caption">
     <h3>A.P.J Book</h3>
    <p>Price: Rs. 124.00</p>
    <?php if(!isset($_SESSION['email'])){  ?>
       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
      <?php
     }
     else{
           if(check_if_added_to_cart(8)){
                                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        }else{
                         ?>
        <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
         <?php
             }
        }
      ?>
      </div>
      </center>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
      <a href="cart.php">
      <img src="product_images/craft1.jpeg" width="180" height="180" alt="Craft product">
      </a>
      <center>
      <div class="caption">
      <h3>craft papers</h3>
      <p>Price: Rs. 130.00</p>
      <?php if(!isset($_SESSION['email'])){  ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
           <?php
           }
           else{
                 if(check_if_added_to_cart(9)){
                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                    }else{
                   ?>
           <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
           <?php
                }
            }
           ?>
           </div>
           </center>
           </div>
           </div>
           <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
           <a href="cart.php">
           <img src="product_images/pencil.jpeg" width="180" height="180" alt="School products">
           </a>
           <center>
           <div class="caption">
          <h3>Pencile Box</h3>
          <p>Price: Rs. 50.00</p>
          <?php if(!isset($_SESSION['email'])){  ?>
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
         <?php
         }
         else{
                if(check_if_added_to_cart(10)){
                       echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                       }else{
                      ?>
          <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
          <?php
                }
              }
          ?>
         </div>
         </center>
         </div>
         </div>
         <div class="col-md-3 col-sm-6">
         <div class="thumbnail">
         <a href="cart.php">
         <img src="product_images/book5.jpeg" width="120" height="120" alt="Book">
         </a>
         <center>
         <div class="caption">
         <h3>The Goal</h3>
         <p>Price: Rs. 150.00</p>
         <?php if(!isset($_SESSION['email'])){  ?>
          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
          <?php
                }
                else{
                     if(check_if_added_to_cart(11)){
                          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                          }else{
                         ?>
         <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
          <?php
           }
         }
       ?>
      </div>
      </center>
     </div>
     </div>
     <div class="col-md-3 col-sm-6">
    <div class="thumbnail">
    <a href="cart.php">
    <img src="product_images/18.jpg" width="185" height="185" alt="School supplies">
    </a>
   <center>
   <div class="caption">
   <h3>Cessor</h3>
   <p>Price: Rs. 100.00</p>
   <?php if(!isset($_SESSION['email'])){  ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
     <?php
          }
          else{
                if(check_if_added_to_cart(12)){
                 echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                }else{
      ?>
      <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
      <?php
            }
         }
      ?>
     </div>
    </center>
    </div>
    </div>
   <div class="col-md-3 col-sm-6">
   <div class="thumbnail">
   <a href="cart.php">
   <img src="product_images/15.jpg" alt="PINK">
   </a>
  <center>
  <div class="caption">
  <h3>Paper pad</h3>
  <p>Price: Rs. 200.00</p>
  <?php if(!isset($_SESSION['email'])){  ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php
  }
  else{
       if(check_if_added_to_cart(12)){
       echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
       }else{
       ?>
     <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
     <?php
   }
}
?>
</div>
</center>
</div>
</div>
 <div class="col-md-3 col-sm-6">
 <div class="thumbnail">
 <a href="cart.php">
 <img src="product_images/compas.jpeg" width="180" height="180" alt="PINK">
 </a>
 <center>
 <div class="caption">
 <h3>Compas Box</h3>
 <p>Price: Rs. 120.00</p>
 <?php if(!isset($_SESSION['email'])){  ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 }else{
        if(check_if_added_to_cart(12)){
             echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
            }else{
   ?>
   <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
   <?php
         }
      }
   ?>
   </div>
   </center>
   </div>
  </div>
 <div class="col-md-3 col-sm-6">
  <div class="thumbnail">
  <a href="cart.php">
  <img src="product_images/Sketchpens.jpeg" width="180" height="180" alt="PINK">
  </a>
  <center>
  <div class="caption">
  <h3>Sketchpens</h3>
  <p>Price: Rs. 100.00</p>
  <?php if(!isset($_SESSION['email'])){  ?>
  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php
       }else{
       if(check_if_added_to_cart(12)){
       echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
       }else{
   ?>
   <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
  <?php
        }
      }
   ?>
   </div>
   </center>
   </div>
   </div> 
<div class="col-md-3 col-sm-6">
   <div class="thumbnail">
   <a href="cart.php">
   <img src="product_images/charcoalpencils.png" width="135" height="135" alt="PINK">
   </a>
  <center>
  <div class="caption">
  <h3>Charcoal Pencils</h3>
  <p>Price: Rs. 100.00</p>
  <?php if(!isset($_SESSION['email'])){  ?>
   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php
  }
  else{
       if(check_if_added_to_cart(12)){
       echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
       }else{
       ?>
     <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
     <?php
   }
}
?>
</div>
</center>
</div>
</div>

 
</div>
</div>
<br><br><br><br><br><br><br><br>
<footer class="footer">
<div class="container">
<center>
<p>Copyright &copy <a href="">Stationary Shop</a> Store. All Rights Reserved.</p>
<p></p>
</center>
</div>
</footer>
</div>
</body>
</html>
