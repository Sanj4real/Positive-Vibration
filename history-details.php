<?php include('partial/header.php') ?>

<section class="breadcrumb custom-breadcrumb">
    <div class="container">
        <nav style="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account information</li>
            </ol>
        </nav>
    </div>
</section>

<section class="user--dashboard">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 ">
                <nav class="sidebar">
                    <div class="sidebar__block">
                        <div class="sidebar-head">
                            <h4>Menu</h4>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item ">
                                <a href="account.php">My Account information</a>
                            </li>
                            <li class="nav-item">
                                <a href="enroll.php"> Enrolled Courses </a>
                            </li>
                            <li class="nav-item">
                                <a href="review.php"> Reviews </a>
                            </li>
                            <li class="nav-item active">
                                <a href="history.php"> Purchase History </a>
                            </li>
                            <hr>
                            <li class="nav-item">
                                <a href="account-edit.php"> Setting </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"> Logout </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 ">
                <div class="user-content">
                    <div class="user-head d-flex">
                        <h4>Checkout Summary</h4>
                        <a href="history.php">Back</a>
                    </div>
                    <div class="user--info">
                        <div class="cart__right">
                            <p>cart subtotal: <span>RS 4300</span></p>
                            <div class="total">
                                <p>cart Total: <b>RS 8000</b></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<?php include('partial/footer.php') ?>