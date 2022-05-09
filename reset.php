<?php include('partial/header.php') ?>
<section class="breadcrumb custom-breadcrumb">
    <div class="container ">
        <nav style="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="account.php">Account information</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reset</li>
            </ol>
        </nav>
    </div>
</section>

<section class="banner user--dashboard">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 ">
                <nav class="sidebar">
                    <div class="sidebar__block">
                        <div class="sidebar-head">
                            <h4>Menu</h4>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item active">
                                <a href="account.php">My Account information</a>
                            </li>
                            <li class="nav-item">
                                <a href="enroll.php"> Enrolled Courses </a>
                            </li>
                            <li class="nav-item">
                                <a href="review.php"> Reviews </a>
                            </li>
                            <li class="nav-item">
                                <a href="order.php"> Purchase History </a>
                            </li>
                            <hr>
                            <li class="nav-item">
                                <a href="certificate.php"> Cerificate </a>
                            </li>
                            <li class="nav-item active">
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
                    <div class="user-head setting-wrap">
                        <ul>
                            <li > <a href="account-edit.php">setting</a></li>
                            <li class="active"> <a href="reset.php">Reset password</a></li>
                        </ul>
                    </div>
                    <div class="user--info contact__form">
                        <form action="">
                            <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label for="confirm-password">Current Password</label>
                                    </div>
                                    <div class="password">
                                        <input class="form-control " type="password" id="confirm-password"
                                            placeholder="Your password">
                                        <div class="form-alert-icon" onclick="showPassword('confirm-password',this);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label for="confirm-password">New Password</label>
                                    </div>
                                    <div class="password">
                                        <input class="form-control " type="password" id="confirm-password"
                                            placeholder="Your password">
                                        <div class="form-alert-icon" onclick="showPassword('confirm-password',this);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label for="confirm-password">Confirm new Password</label>
                                    </div>
                                    <div class="password">
                                        <input class="form-control " type="password" id="confirm-password"
                                            placeholder="Confirm password">
                                        <div class="form-alert-icon" onclick="showPassword('confirm-password',this);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-lg-12">
                                    <div class="buttons-group m-0 all-button">
                                        <button class="site-button all-button" role="button">Update
                                        </button>
                                        <button class="site-button all-button cancel" role="button">cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>




<?php include('partial/footer.php') ?>