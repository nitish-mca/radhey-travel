<?php include('./includes/header.php')?>

<body>
    <!-- header-start -->
    <?php include('./includes/nav.php') ?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Bus Timings</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <?php if($_REQUEST['source'] != 'delhi'): ?>
            <div>
                <h3> Sukal Bazar (RaiBarely) - Lucknow - Delhi </h3>


                <table>
                    <tr>
                        <td>Sukal Bazaar</td>
                        <td>4:00 PM</td>
                    </tr>
                    <tr>
                        <td>Inhona</td>
                        <td> 4:30 PM </td>
                    </tr>
                    <tr>
                        <td>MaharajGanj</td>
                        <td>5:00 PM </td>
                    </tr>
                    <tr>
                        <td>RaiBarely</td>
                        <td>5:30 PM </td>
                    </tr>
                    <tr>
                        <td>Lucknow</td>
                        <td>8:00 PM </td>
                    </tr>
                    <tr>
                        <td>Kapasahera Border (Delhi/Gurugram)</td>
                        <td>5:00 AM </td>
                    </tr>
                </table>

            </div>
            <?php endIf;?>
            <?php if($_REQUEST['source']== 'delhi'): ?>
            <div>
                <h3> Sukal Bazar (RaiBarely) - Lucknow - Delhi </h3>
                <table>
                    <tr>
                        <td>Kapasahera Border (Delhi/Gurugram)</td>
                        <td>8:00 PM </td>
                    </tr>
                    <tr>
                        <td>Lucknow</td>
                        <td>4:00 AM </td>
                    </tr>
                    <tr>
                        <td>RaiBarely</td>
                        <td>5:00 AM </td>
                    </tr>
                    <tr>
                        <td>MaharajGanj</td>
                        <td>5:30 AM </td>
                    </tr>
                    <tr>
                        <td>Inhona</td>
                        <td>6:00 AM </td>
                    </tr>
                    <tr>
                        <td>Sukal Bazaar</td>
                        <td>6:30 AM</td>
                    </tr>

                </table>

            </div>
            <?php endIf;?>
        </div>
    </section>


    <?php include('./includes/footer.php')?>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
    </script>
</body>

</html>