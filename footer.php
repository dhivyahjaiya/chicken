
<?php 

    $siteidentity1 = "SELECT * FROM siteidentity";
    $query_run1 = mysqli_query($db,$siteidentity1);
    $row1 = mysqli_fetch_array($query_run1);

?>

            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class=""><?php echo $row1['websitefooter']; ?></p>
                </div>
            </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

