<!DOCTYPE HTML>
<HTML lang="en">
<HEAD>
  <META charset="utf-8" />
  <TITLE>LucidSphere</TITLE>
  <META name="description" content="Ambient Metal" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="pics/logo_yt2.2_2.ico">

  <LINK rel="stylesheet" type="text/css" href="subscribe.css">
  <LINK rel="stylesheet" type="text/css" href="all.css">
</HEAD>

<BODY onload="setPlaySpeed()" class="subscribe">

<?php  
    
        $msg_OK="<p class='sub1'>Thanks for Subscribing!<br/>yo Check your inbox for the download linky!</p>";
        $msg_BAD="<p style='color:red; text-align:center;'>No cheating, either you subscribed once or you has not yet filled tha subscription form.</p>";
         session_start();

        $em= $_SESSION['email'];
        echo $em;
        
        if (empty($em)) {
        $msg="<p style='color:red; text-align:center;'>".$em."</p>".$msg_BAD;}
        else {$msg="<p class='sub1'>".$em."</p>".$msg_OK; $em=""; session_start(); $_SESSION['email']="";}
        

 ?>

  <video autoplay muted loop id="vid_bg">
    <source src="pics/Electric_Darkness.mp4" type="video/mp4">
  </video>

  <!-- SCRIPT -->
  <script>
  var vid = document.getElementById("vid_bg");

  function setPlaySpeed() {
      vid.playbackRate = 0.2;
  }
  </script> <!-- VIDI HÁTTÉR LASSÍTÓ SCRIPT -->

  <img id="ls_fonts2" src="pics/ls_fonts.png" alt="fonts" width=482 height=118>


  <div class="sub">
    
    <?php echo $msg; ?>
    
      
    </p>
   
        
  </div> <!-- SUBSCRIBE FORM -->

  <p class="clear_float">
    </p>

  <img id="logo2" src="pics/logo_HD3_low.png" alt="logo" width=159 height=159>

  <p class="disclmr">
    This is a subscription form to the LucidSphere free Ambient Metal music
    download and newsletter.<br>
    You will only receive an email, when there is a new track release
    (or an upcoming live performance).<br>
    Still, You can unsubscribe anytime you want.
  </p>


  <p class="clear_float">
    <br><br><br>
    </p>



    <hr class="basic">



</BODY>
</HTML>
