<?php include('layout/header.php'); ?>


    <!--Action Section-->
    <section class="my-5 py-5">
        <div class="row container mx-auto">
            <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
                <h3 class="font-weight-bold">Account Info</h3>
                <hr class="mx-auto">
                <div class="account-info">
                    <p>Name<span>John</span></p>
                    <p>Email<span>john@morgan.edu</span></p>
                    <p><a href="" id="order-btn">Your orders</a></p>
                    <p><a href="" id="logout-btn">Logout</a></p>
                </div>
            </div>
        </div>
    </section>


    <!--Order-->
    <section class="order container my-5 py-3">
        <div class="container mt-2">
            <h2 class="font-weight-bolde">Your Orders</h2>
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Date</th>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/tops1.avif"/>
                        <div>
                            <p class="mt-3">Crew T-Shirt</p>
                        </div>
                    </div>
                </td>
                <td>
                   <span>2022-7-5</span>
                </td>
            </tr>
        </table>      
    </section>

<?php include('layout/footer.php'); ?>