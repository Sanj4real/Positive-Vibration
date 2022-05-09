<?php include("partial/header.php") ?>

<section class="event__listing padding-spacing">
    <div class="container">
        <div class="site-header text-start mx-0">
            <h3>Exam Checkout</h3>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="event__listing__block">
                    <div class="enroll-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Exam Title</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SET03</td>
                                    <td>Rs 250</td>
                                </tr>
                                <tr>
                                    <td>SET03</td>
                                    <td>Rs 250</td>
                                </tr>
                                <tr>
                                    <td>SET03</td>
                                    <td>Rs 250</td>
                                </tr>
                                <tr class="end">
                                    <td>Total Amount</td>
                                    <td>Rs 250</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="event__listing__block">
                    <div class=" enroll-block">
                        <h4>Choose Payment meyhod</h4>
                        <form id="checkout" onsubmit="return validateForm(this)" action="" method="post">
                            <ul id="payment">
                                <li>
                                    <input type="radio" name="payment" id="esewa" value="esewa">
                                    <label for="esewa">
                                        <span> <img src="img/payment/e-sewa.png" alt=""></span>
                                    </label>
                                </li>
                                <li>

                                    <input type="radio" name="payment" id="khalti" value="khalti">
                                    <label for="khalti">
                                        <span> <img src="img/payment/khalti.png" alt=""></span>
                                    </label>

                                </li>
                                <li>
                                    <input type="radio" name="payment" id="visa" value="visa">
                                    <label for="visa">
                                        <span> <img src="img/payment/visa.png" alt=""></span>
                                    </label>

                                </li>
                            </ul>

                            <div>
                                <input type="checkbox" name="agree" id="agree" value="yes" />
                                <label for="agree">I agree to the terms and conditions</label>
                                <div style="visibility:hidden; color:red" id="agree_chk_error">
                                    Can't proceed as you didn't agree to the terms!
                                </div>
                            </div>
                            <div class="all-button">
                                <button class="site-button">Pay </button>
                            </div>
                        </form>
                        <div>
                            <p>
                                <b>Note:</b> You will be redirected to respective website to compelete your purchase
                                securely.
                            </p>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<?php include("partial/footer.php") ?>