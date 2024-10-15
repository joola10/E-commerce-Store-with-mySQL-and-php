<?php
session_start();

include('server/connection.php');
// Initialize the total to 0 if it's not set
if (!isset($_SESSION['total'])) {
    $_SESSION['total'] = 0;
}

if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['cart'])) {
        $product_array_ids = array_column($_SESSION['cart'], "product_id"); 
        if (!in_array($_POST['product_id'], $product_array_ids)) {
            $product_id = $_POST['product_id'];
            $product_array = array(
                'product_id' => $product_id,
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_image' => $_POST['product_image'],
                'product_quantity' => $_POST['product_quantity'] 
            );

            $_SESSION['cart'][$product_id] = $product_array;

            // Update total
            $_SESSION['total'] += $product_array['product_price'] * $product_array['product_quantity'];
        } else {
            echo '<script>alert("Already in Cart")</script>';
        }
    } else { // First Product
        $product_id = $_POST['product_id'];
        $product_array = array(
            'product_id' => $product_id,
            'product_name' => $_POST['product_name'],
            'product_price' => $_POST['product_price'],
            'product_image' => $_POST['product_image'],
            'product_quantity' => $_POST['product_quantity'] 
        );

        $_SESSION['cart'][$product_id] = $product_array; 

        // Initialize total
        $_SESSION['total'] = $product_array['product_price'] * $product_array['product_quantity'];
    }
} elseif (isset($_POST['remove_product'])) {
    $product_id = $_POST['product_id'];
    if (isset($_SESSION['cart'][$product_id])) {
        // Deduct from total
        $_SESSION['total'] -= $_SESSION['cart'][$product_id]['product_price'] * $_SESSION['cart'][$product_id]['product_quantity'];
        unset($_SESSION['cart'][$product_id]);

        // If cart is empty after removal, reset the total to 0
        if (empty($_SESSION['cart'])) {
            $_SESSION['total'] = 0;
        }
    }
} elseif (isset($_POST['edit_quantity'])) {
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];
    
    if (isset($_SESSION['cart'][$product_id])) {
        // Update total
        $current_quantity = $_SESSION['cart'][$product_id]['product_quantity'];
        $price = $_SESSION['cart'][$product_id]['product_price'];

        // Adjust total
        $_SESSION['total'] += ($product_quantity - $current_quantity) * $price;

        // Update quantity
        $_SESSION['cart'][$product_id]['product_quantity'] = $product_quantity;
    }
}
?>





<?php include('layout/header.php'); ?>


<!--Cart-->
<section class="cart container my-5 py-5">
    <div class="container mt-5">
        <h2 class="font-weight-bold">Your Cart</h2>
    </div>

    <?php if (!empty($_SESSION['cart'])) { ?>
    <table class="mt-5 pt-5">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>SubTotal</th>
        </tr>

        <?php foreach($_SESSION['cart'] as $key => $value) { ?>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/<?php echo $value['product_image']; ?>"/>
                        <div>
                            <p><?php echo $value['product_name']; ?></p>
                            <small><span>$</span><?php echo $value['product_price']; ?></small>
                            <br>
                            <form method="POST" action="cart.php"> 
                                <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>"/>
                                <input type="submit" name="remove_product" class="remove-btn" value="Remove" />
                            </form>
                        </div>
                    </div>
                </td>
                <td>
                    <form method="POST" action="cart.php"> 
                        <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>"/>
                        <input type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>" min="1" />
                        <input type="submit" name="edit_quantity" class="edit-btn" value="edit" />
                    </form>
                </td>
                <td>
                    <span>$<?php echo $value['product_price'] * $value['product_quantity']; ?></span>
                </td>
            </tr>
        <?php } ?>
    </table>

    <div class="cart-total">
        <table>   
            <tr>
                <td>Total</td>
                <td>$ <?php echo number_format($_SESSION['total'], 2); ?></td>
            </tr>
        </table>
    </div>
    <?php } else { ?>
        <p>Your cart is empty.</p>
        <div class="cart-total">
            <table>   
                <tr>
                    <td>Total</td>
                    <td>$ 0.00</td>
                </tr>
            </table>
        </div>
    <?php } ?>

    <div class="checkout-container">
        <form method="POST" action="checkout.php">
            <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout" />
        </form>
    </div>
</section>




<?php include('layout/footer.php'); ?>