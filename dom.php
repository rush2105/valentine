<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">

    <title>Valentine Special</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Truculenta:wght@400;500;600&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <script defer src="https://cdn.rawgit.com/jwarby/jquery-awesome-cursor/master/dist/jquery.awesome-cursor.min.js"></script> -->
<script defer
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>
</head>
<body>
   <!-- header -->
   <header>
       <div class="logo">
           <img class="logo" src="logo.png" alt="">
       </div>
   </header>
 

    <div class="notice">
        <h4>Click Anywhere to Generate Heart </h4>
    </div>
    <div id="snowflakeContainer">
        <!-- <span class="snowflake"></span>
         -->
         <p class="snowflake"><i style="color: rgb(207, 14, 14);" class="fa fa-heart" aria-hidden="true"></i></p>
	<p class="snowflake"><i style="color: rgb(223, 4, 4);" class="fa fa-heart fa-2x" aria-hidden="true"></i></p>
	<p class="snowflake"><i style="color: rgb(238, 0, 0);" class="fa fa-heart fa-3x" aria-hidden="true"></i></p>
      </div>

<!-- SEND AUDIO TO LOVED ONE -->
<div class="send">
    <h4>Want to send Heart to loved<i style="color: rgb(207, 13, 62);" class="fa fa-heart"></i> one</h4>
     <form action="" method="post" id="form-name">
    <div class="single-box">

        <label for="name">Type Her /His Name</label>
        <input required type="text" name="name" id="name" value="" placeholder="Type Her/His Name">
    </div>
    <div class="single-box">

        <label for="yo-name">Type Your Name</label>
        <input required type="text" name="yo-name" id="yo-name" value="" placeholder="Type your Name">
    </div>
    <input id="hiden" type="hidden" name="thank_you_page" value="" type="text">

     <div class="submit-box">
         <input id="submit" type="submit" value="Generate Link">
     </div>
</form>

</div>



<div class="get-wished">
    <div class="ted">
        <img src="tes.png" alt="">
    </div>
    <div class="message">
        <p class="message-text"><span id="sender">me</span>Wishing a Valentine Day <i style="color: rgb(207, 13, 62);" class="fa fa-heart"></i>To <span id="receiver">
                    
        </span></p>
    </div>
</div>




    <script defer src="app.js"></script>
    <script src="http://www.kirupa.com/js/fallingsnow_v6.js"></script>
    <script src="http://www.kirupa.com/js/prefixfree.min.js"></script>
    <!-- <audio src="https://www.zedge.net/ringtone/8537acef-d778-369b-be98-ab10daa050b1" autoplay loop></audio> -->
    <audio src="heart.mp3" autoplay loop id="audio" type="audio/mp3"></audio>
    <script>
// $(document).ready(fu)

    </script>
</body>
</html>