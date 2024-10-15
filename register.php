<?php include('layout/header.php'); ?>



    <!--Register Section-->
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Register</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="register-form">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="resgister-password" name="password" placeholder="Password" required/>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="resgister-confirm-password" name="confirmPassword" placeholder="Confirm Password" required/>
                </div>
                <div class="form-group">
                    <input type="sumbit" class="btn" id="register-btn" value="Register"/>
                </div>
                <div class="form-group">
                    <a id="login-url" class="btn">Do you have an account? Login</a>
                </div>
            </form>
        </div>
    </section>


<?php include('layout/footer.php'); ?>