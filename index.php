<?php
   if (!file_exists('config.php')){
                                   header('location: setup/index.php');
                                   exit();
                                  }
   $e=$_GET['e'];
   if ($e=="1"){
                echo "
                      <script type='text/javascript'>
                      alert('That log in info is not correct');
                      </script>
                     ";
               }
  ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <title>LetsMail</title> 
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">  
  <META name="robots" content="noindex, nofollow"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  </head>
  <body style="background-color:#FFFFFF; font-family: sans-serif; font-weight:800; color:#000000;">
  <center>
  <img src="images/logo.png" style="margin-top:20px;">
  </center>  
  <br>
 
 <center>
  <h2>Log into your account below</h2>
 </center>
 <br>
 <form method="post" action="dologin.php" onsubmit="return checkform();">
 <table align="center" style="font-size:28px; font-weight:normal;">
 <tr><td>Admin Name: </td><td><input type="text" style="width:150px;" name="AdminName" id="AdminName" required></td></tr>
 <tr><td>Password: </td><td><input type="password" style="width:150px;" name="Password" id="Password" required></td></tr>
 <tr><td colspan="2" height="30"><center><input type="submit" value="Log In" style="background-color:#FFFFFF; font-size:16px; padding:4px; width:250px; border:4px solid #000000; border-radius:4px; cursor:pointer;"></td></tr>
 </table>
 </form>
 <br>&nbsp;<br>
  <center>
   <a href="#" onclick="lostPassword(); return false;" style="color:#AA0000;">Forgot your password?</a>
  </center>
 <br>&nbsp;<br> 
 
 <div id="Blanket" style="position:fixed; left:0px; top:0px; width:100%; height:100%; background-color:#000000; z-index:99998; opacity:0.65; display:none;">
  </div>
  
  
  <div id="ContentPopUpContainer" style="display:none; position:absolute; left:50%; margin-left:-300px !important; top:100px;  background-color:#ffffff; border:3px solid #000000; width:600px; ; z-index: 99999; height:175px;">
   <div style="position: absolute; right: -20px; top: -20px;"><a href="#" onclick="$('#ContentPopUp').html(''); $('#ContentPopUpContainer').css('display','none'); $('#Blanket').css('display','none');"><img src="images/close_2.png" border="0"></a></div>
   <div id="ContentPopUp" style="position:relative; top:10px;">
   </div>
   <br>&nbsp;<br>
  </div>
  
</div>  
 
 <script type="text/javascript">

function lostPassword(){
                     $.post('lostpassword.php',
                                                  function(data) {
                                                                  
                                                                  $('#ContentPopUp').html(data);
                                                                  $('#Blanket').css('display', 'block');
                                                                  $('#ContentPopUpContainer').css('display', 'block');
                                                                  
                                                                 });
                   }
</script>   


