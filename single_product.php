<?php

include('server/connection.php');

if(isset($_GET['product_id'])){

    $product_id = $_GET['product_id'];

        // Prepare the SQL query to fetch products
    $stmt = $conn->prepare("SELECT * FROM product WHERE product_id = ?");
    $stmt->bind_param("i",$product_id);

    // Execute the prepared statement
    $stmt->execute();

    // Fetch the result
    $product = $stmt->get_result();//[]


}else{
    header('location: index.php'); //Not able to retrive products
}




?>

<?php include('layout/header.php'); ?>


      <section class="container single-product my-5 pt-5">
        <div class="row mt-5">


        <?php while($row = $product->fetch_assoc()){?>

        
            


            <div class="col-lg-5 col-md-6 col-sm-12">
                <img class="img-fluid w-100 pb-1" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            </div>
   
            <div class="col-lg-6 col-md-12 col-12">
                <h6>Tops</h6>
                <h3 class="py-4"><?php echo $row['product_name']; ?></h3>
                <h2>$<?php echo $row['product_price']; ?></h2>

            <form method="POST" action="cart.php">
                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>
                <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>"/>
                <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>"/>
                <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>"/>
            

                <input type="number" name="product_quantity" value="1"/>
                <button class="buy-btn" type="submit"  name="add_to_cart">Add To Cart</button>
            </form>
                <h4 class="mt-5 mb-5">Product Details</h4>
                <span>The Details of this product will be displayed shortly</span>
            </div>
            
       
        <?php } ?>
        </div>
      </section>






<?php include('layout/footer.php'); ?>