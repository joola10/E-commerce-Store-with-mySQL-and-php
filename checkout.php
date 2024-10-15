<?php
session_start();

if( isset($_SESSION['cart']) && !empty($_SESSION['cart']) && isset($_POST['checkout']) ) {
    // Allow user to proceed with checkout
    echo "Proceeding to checkout...";
} else {
    // Send user back to homepage
    header('location: index.php');
    exit(); // Always good to call exit after header redirection
}
?>

<?php include('layout/header.php'); ?>


    <!--Checkout Section-->
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="font-weight-bold">Check Out</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="checkout-form" method="POST" action="server/place_order.php">
                <!-- Name -->
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required/>
                </div>
                <!-- Email -->
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="checkout-email" name="email" placeholder="Email" required/>
                </div>
                <!-- Phone No -->
                <div class="form-group">
                    <label>Phone No</label>
                    <input type="text" class="form-control" id="checkout-phone" name="phone" placeholder="Phone" required/>
                </div>
                <!-- Address -->
                <div class="form-group">
                    <label>Shipping Address</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Shipping Address" required/>
                </div>
                <!-- City -->
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required/>
                </div>
               
                <!-- Submit Button -->
                <div class="form-group">
                    <p>Total Amount : $<?php echo $_SESSION['total']?></p>
                    <input type="submit" class="btn btn-primary" id="checkout-btn" name="place_order" value="Place Order"/>
                </div>
            </form>
        </div>
    </section>
    









<?php include('layout/footer.php'); ?>