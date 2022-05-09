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

<section class="banner user--dashboard">
    <div class="container">
        <div class="row">
            <?php include('partial/user-sidebar.php') ?>
            <div class="col-lg-9 ">
                <div class="user-content">
                    <div class="user-head d-flex">
                        <h4>Account Details</h4>
                        <a href="account-edit.php">Edit</a>
                    </div>
                    <div class="user--info">
                        <ul>
                            <li><b>Image:</b> <img src="img/products/p-2.jpg" alt=""></li>
                            <li><b>First Name:</b> Sanjay</li>
                            <li><b>Last Name:</b> Rawal</li>
                            <li><b>Address:</b> Newbaneshwor, Kathmandu</li>
                            <li><b>Contact:</b> 9861645565</li>
                            <li><b>Email:</b> sanjay@124gmail.com</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>




<?php include('partial/footer.php') ?>