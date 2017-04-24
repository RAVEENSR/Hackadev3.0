<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m12 l12">
                <?php 
                if (isset($_SESSION['c_userid'])) {
                    echo "<h5 class='right black-text'>Name: ".$_SESSION['c_userFName']." ".$_SESSION['c_userSName']."/ Customer Id: ".$_SESSION['c_userid']."</h5>";
                } 
                ?>
            </div>
        </div>
    </div>
</div>