<?php 
include ("headfile.php"); 
include ("detectlogin.php");
?>
    <title>Registration Confirmation</title>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h1 class="header center orange-text">Registration Confirmation</h1>
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
                    include("db.php");

                    @$ownership=$_POST['ownership'];
                    @$service=$_POST['service'];
                    @$name=$_POST['name'];
                    @$profession=$_POST['profession'];
                    @$nic=$_POST['nic'];
                    @$address=$_POST['address'];
                    @$district=$_POST['district'];
                    @$division=$_POST['division'];
                    @$telno=$_POST['telno'];
                    @$comment_option=$_POST['comment_option'];
                    @$textarea1=$_POST['textarea1'];
                    //@$longi=$_GET['longi'];
                    //@$lati=$_GET['lati'];
                    @$longi='16.0';
                    @$lati='12.00';

                    
                    //write sql querry
                    $query="INSERT INTO sevices (type,serviceName,personName,profession,nic,address,district,division,mobile,comment,longi,lati) VALUES ('$ownership','$service','$name','$profession','$nic','$address','$district','$division',$telno,'$textarea1','$longi','$lati')";

                    //Execute SQL Querry
                    $result=mysqli_query($conn,$query); 
                    if(!$result){
                        echo die(mysqli_error($conn));

                    }else{
                        echo "<h5 class='center header col s12 light'>You have successfully registered details in the system!<br/></h5>";
                    }

                    ?>
          
                </div>
                <div class="col s12 m2 l2"></div>
            </div>

        </div>
        <div class="section">
        </div>
    </div>
<?php include("footfile.html"); ?>