<?php include('layout/header.php'); ?>

      <!---Home-->
      <section id="home">
        <div class="container"> 
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best Prices</span> This Fall</h1>
            <p>EShop Offers Best and FAST SHIPPING</p>
            <button>Shop Now</button>
        </div>
      </section>

    <!--Brand-->
    <section id="brand" class="container my-5">
      <div class="row justify-content-center">
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <img class="img-fluid" src="assets/imgs/brand1.jpeg" alt="Brand 1">
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <img class="img-fluid" src="assets/imgs/brand2.jpeg" alt="Brand 2">
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <img class="img-fluid" src="assets/imgs/brand3.jpeg" alt="Brand 3">
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
              <img class="img-fluid" src="assets/imgs/brand4.jpeg" alt="Brand 4">
          </div>
      </div>
    </section>

    <!--New—--> 
    <section id="new" class="w-100"> 
      <div class=" row p-0 m-0">
        <!--One-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/1.jpeg"/>
          <div class="details">
            <h2>TOPS</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
        <!--Two-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/2.jpeg"/>
          <div class="details">
            <h2>BUTTOMS</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
        <!--Three-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/3.jpeg"/>
          <div class="details">
            <h2>80% OFF Shoes</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
      </div>
    </section>
    

    <!--Featured-->
    <section id="featured" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Top Sellers</h3>
        <hr class="mx-auto">
        <p>Here you can check out our top products</p>
      </div>
      <div class="row mx-auto container-fluid">

    <?php include('server/get_featured_products.php'); ?>
    
    <?php while($row = $featured_products->fetch_assoc()) { ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
            <a href="<?php echo "single_product.php?product_id=". $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
        </div>

    <?php }?>

</div>

    </section>


    <!--Tops-->
    <section id="featured" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Best Selling Tops</h3>
        <hr class="mx-auto">
        <p>Here you can check out our best tops </p>
      </div>
      <div class="row mx-auto container-fluid">

      <?php include('server/get_featured_products.php'); ?>

      <?php if ($featured_products->num_rows > 0) { // Check if there are products to display ?>
          <?php while ($row = $featured_products->fetch_assoc()) { ?>
              <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                  <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                  <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
                  <a href="<?php echo "single_product.php?product_id=". $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
              </div>
          <?php } ?>
      <?php } else { ?>
          <p>No featured products available at the moment.</p>
      <?php } ?>


        
        </div>
      </div>
    </section>


    <!--Shoes-->
    <section id="featured" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Best Selling Shoes</h3>
        <hr class="mx-auto">
        <p>Here you can check out our amazing shoes</p>
      </div>
      <div class="row mx-auto container-fluid">

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fuild mb-3" src="assets/imgs/shoes5.jpeg"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Dunk Low Retro</h5>
          <h4 class="p-price">$94.87</h4>
          <button class="buy-btn">Buy Now</button>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fuild mb-3" src="assets/imgs/shoes1.jpeg"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Women's X4 Training Shoes</h5>
          <h4 class="p-price">$139.99</h4>
          <button class="buy-btn">Buy Now</button>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fuild mb-3" src="assets/imgs/shoes2.jpeg"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"> RS-X Peb Running Shoes</h5>
          <h4 class="p-price">$69.56</h4>
          <button class="buy-btn">Buy Now</button>
        </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fuild mb-3" src="assets/imgs/shoes4.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Jordan 4 Retro Bred</h5>
            <h4 class="p-price">$397.51</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      </div>
    </section>

    
<?php include('layout/footer.php'); ?>