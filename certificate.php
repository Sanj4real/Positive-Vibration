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
                        <h4>Certificate</h4>
                    </div>
                    <div class="user--info">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="img">
                                    <a href="img/certificate/a-1.png" data-fancybox="gallery">
                                        <img src="img/certificate/a-1.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                               <div class="img">
                                    <a href="img/certificate/a-2.png" data-fancybox="gallery">
                                        <img src="img/certificate/a-2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                               <div class="img">
                                    <a href="img/certificate/a-3.png" data-fancybox="gallery">
                                        <img src="img/certificate/a-3.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                               <div class="img">
                                    <a href="img/certificate/a-4.png" data-fancybox="gallery">
                                        <img src="img/certificate/a-4.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                               <div class="img">
                                    <a href="img/certificate/a-5.png" data-fancybox="gallery">
                                        <img src="img/certificate/a-5.png" alt="">
                                    </a>
                                </div>
                            </div>
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
    </div>
</section>


<?php include('partial/footer.php') ?>