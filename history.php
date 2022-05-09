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
            <?php include('partial/user-sidebar.php') ?>
            <div class="col-lg-9 ">
                <div class="user-content">
                    <div class="user-head d-flex">
                        <h4>Transition History</h4>
                    </div>
                    <div class="user--info">
                        <ul>
                            <li>
                                <a href="history-details.php">
                                    <div class="history done">
                                        <div class="calender">
                                            <h4>12</h4>
                                            <p>May</p>
                                        </div>
                                        <div class="desc">
                                            <h4>course-1</h4>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="amount">
                                            <h4>Rs. 500</h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="history-details.php">
                                    <div class="history done">
                                        <div class="calender">
                                            <h4>12</h4>
                                            <p>May</p>
                                        </div>
                                        <div class="desc">
                                            <h4>course-1</h4>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="amount">
                                            <h4>Rs. 500</h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="col-lg-12">
                            <nav aria-label="">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">2</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


<?php include('partial/footer.php') ?>