<?php
$userEmail = "";
if(ISSET($_POST['subscribe'])){
    $userEmail = $_POST['email'];
    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
        $subject = "Thanks for subscribing !";
        $message = "Nunc tortor enim, auctor nec mi vel, feugiat eleifend elit. Suspendisse convallis finibus eros, ut pulvinar ligula condimentum vel. Nam porta nisi risus, id luctus turpis ullamcorper id. Mauris auctor orci leo, ut sollicitudin elit egestas volutpat. Ut tincidunt scelerisque euismod. Integer consectetur nibh quis felis elementum, vitae dapibus nisl ornare. Integer pellentesque aliquet odio id maximus. Duis justo quam, pretium nec lobortis tempor, congue ut ligula. Aenean nunc neque, dapibus at mattis nec, ornare in justo. Praesent pellentesque, tortor ac iaculis pulvinar, libero ante auctor ipsum, eget fermentum est turpis quis urna. Ut in tincidunt dui. Sed at faucibus turpis.";
        $sender = "From: rakeda1365@bbsaili.com";

        if(mail($userEmail,$subject,$message,$sender)){
            ?>
            <div class ="alert success-alert">
                <?php echo "Thanks for subscribing"; ?>
            </div>
            <?php
            $userEmail = "";        
        }else{
            ?>
            <div class="alert error-alert">
                <?php echo "Failed to subscribe !";?>
            </div>
            <?php    
        }
    }else{
        ?>
        <div class = "alert error-alert">
            <?php echo "Email not valid, please enter a valid email";?>
        </div>
        <?php
            
    }
}
?>