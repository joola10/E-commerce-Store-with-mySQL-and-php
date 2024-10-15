<?php

include('server/connection.php'); // Include the database connection

// Prepare the SQL query to fetch 4 products
$stmt = $conn->prepare("SELECT * FROM product ");


// Execute the prepared statement
$stmt->execute();

// Fetch the result
$products = $stmt->get_result();//[]


?>



<?php include('layout/header.php'); ?>
<!--Product Size Utilization-->
<style>
    .product img{
        width: 90%;
        height: auto;
        box-sizing: border-box;
        object-fit: cover;
    }
</style>



    <!--Featured-->
<section id="featured" class="my-5 py-5">
    <div class="container text-center mt-5 py-5">
        <h3>Our Products</h3>
        <hr class="mx-auto">
        <p>Check out all our products</p>
    </div>
    <div class="row mx-auto container-fluid">

        <?php while($row = $products->fetch_assoc()) { ?>

        <div onclick="window.location.href='single_product.php?product_id=<?php echo $row['product_id']; ?>';" class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" alt="<?php echo htmlspecialchars($row['product_name']); ?>"/>
            <h5 class="p-name"><?php echo htmlspecialchars($row['product_name']); ?></h5>
            <h4 class="p-price">$<?php echo number_format($row['product_price'], 2); ?></h4>
            <button class="buy-btn"><a href="single_product.php?product_id=<?php echo $row['product_id']; ?>">Buy Now</a></button>
        </div>

        <?php } ?>
                  
    </div>
</section>



<?php include('layout/footer.php'); ?>