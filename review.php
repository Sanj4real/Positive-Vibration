<?php include('partial/header.php') ?>
<section class="breadcrumb custom-breadcrumb">
    <div class="container">
        <nav style="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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
                        <h4>Reviews</h4>
                    </div>
                    <div class="user--info">
                    </div>
                </div>
                <div class="no-order">
                    <p>There are no reviews placed yet</p>
                    <div class="all-button">
                        <a href="index.php" class="all-button">GO Back</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>




<?php include('partial/footer.php') ?>