<?php 
include ("headfile.php"); 
include ("detectlogin.php");
?>
    <title>Log out</title>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text">Log Out</h1>
            <div class="row center">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m2 l2"></div>
                <div class="col s12 m8 l8">
                    <?php
                        unset($_SESSION['basket']);
                        unset($_SESSION['c_userid']);
                        unset($_SESSION['c_userFName']);
                        unset($_SESSION['c_userSName']);
                        session_unset();
                        session_destroy();
                        echo "<h5>You have successfully logged out!</h5>";

                    ?>

                </div>
                <div class="col s12 m2 l2"></div>
            </div>

        </div>
        <div class="section">
        </div>
    </div>
<?php include("footfile.html"); ?>