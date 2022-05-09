<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="footer__block footer--top">
                    <ul>
                        <li>
                            <a href="tel:+ 12788942345">+ 12788942345</a><span>|</span><a
                                href="mailto:motive@gmail.com">motive@gmail.com</a>
                        </li>
                        <li>

                            <ul>
                                <li class="footer--first"> follow:</li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-linked-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="footer__block">
                    <div class="footer__head">
                        <a href="index.php">
                            <img src="img/logo/foot-logo.png" alt="">
                        </a>
                    </div>
                    <!-- <div class="footer__content">
                        <p>It is a long established fact that a reader will be dTstracted by the readable content of a
                            page when looking at its layout. </p>
                    </div> -->

                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="footer__block">
                    <div class="footer__head">
                        <h4>Feature Links</h4>
                    </div>
                    <div class="footer__content">
                        <ul>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Career</a>
                            </li>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Career</a>
                            </li>
                            <li>
                                <a href="#">Contacts</a>
                            </li>
                            <li>
                                <a href="#">
                                    Events
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="footer__block  footer--last">
                    <div class="footer__head">
                        <h4>All Courses</h4>
                    </div>
                    <div class="footer__content">
                        <ul>
                            <li>
                                <a href="#">Marketing Mastery – The Last Marketing Course You’ll Ever Need</a>
                            </li>
                            <li>
                                <a href="#">
                                    How To Be a Wholesale Distributor
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="footer__block footer--last">
                    <div class="footer__head">
                        <h4>Become a member</h4>
                    </div>
                    <ul>
                        <li>
                            <a href="#">contact Now</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer--bottom text-center text-white">
                    <p>All Right Reserved NBC 2021 | Developed By : Softbenzinfosys Pvt Ltd
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- library -->
<script src="app/js/jquery.min.js"></script>
<script src="app/js/bootstrap.bundle.min.js"></script>
<script src="app/js/jquery.fancybox.min.js"></script>
<!-- slick -->
<script type="text/javascript" src="app/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.0.0/noframework.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="app/js/script.js"></script>
</body>

<script>
// payment

function validateForm() {

    var isFormValid = true;

    if (document.querySelectorAll('[type="checkbox"]:checked').length < 1) {
        alert('Please check at least 1 checkbox');
        isFormValid = false;
    }

    if (document.querySelectorAll('[name="q2"]:checked').length < 1) {
        alert('Please select a radio option');
        isFormValid = false;
    }

    return isFormValid;
}

$(document).ready(function() {


    $('#payment li input').on('click', function() {
        $("#payment li .active").removeClass('active');
        $("#payment li").addClass('active');

    });


    if (window.location.pathname === '/positive-vibration/index.php' || window.location.pathname ===
        '/positive-vibration/') {
        $("body").addClass("home");
    } else {
        $("body").addClass("Pages");
    }
});
</script>

</html>