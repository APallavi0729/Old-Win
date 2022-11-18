<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutsh.css">
  
    <title>about</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap');
*{
    margin: 0;
    padding: 0;
}
.logo{
    width: 20%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.logo img{
    width: 33%;
    border: 3px solid white;
    border-radius: 50px;

}
.navbar{
    display: flex;
    align-items: center;
    justify-content: center;
    position: sticky;
    top: 0%;
    cursor: pointer;
   
}
.nav-list{
    width:70%;
    /*background-color: wheat;*/
    display: flex;
    align-items: center;  
}
.nav-list li{
list-style: none;

padding: 26px 30px;
}
.nav-list li a{
    font-size: large;
    text-decoration: none;
    color: rgb(245, 247, 247);
}
.nav-list li a:hover{
    color: grey;
}
.rightnav{
    /*background-color: violet;*/
    width: 30%;
    text-align: right;
}
#search{
    padding: 5px;
    font-size: 17px;
    border: 2px solid grey;
    border-radius: 9px;
 
}
.background{
   background: rgba(0, 0, 0, 0.7) url('../project1/abstract-9v.jpg');
   
  background-size: cover;
  background-blend-mode: darken;
}
.btn{
    padding: 8px 20px;
    margin: 7px 3px;
    border: 2px solid white;
    border-radius: 8px;
    background: none;
    color: white;
    cursor: pointer;
}
.btn-sm{
    padding: 6px 10px;
    vertical-align: middle;
   
    }
    .social-media__wrapper {
    margin: 0 auto;
    width: 90%;
    padding-left: 0;
    display: flex;
    text-align: right;
    max-width: 1600px;
}
.social-media__section {
    height: 48px;
    line-height: 48px;
    margin-top: 48px;
    padding: 0;
}
.social-media__link, .social-media__text {
    color: #000;
    margin-right: 16px;
}
.space{
    margin-left: auto;
}
.Section{
    background-color: rgb(92, 91, 91);
    height: 350px;
    width: 1400px;
}

 Small devices (landscape phones, 576px and up)
@media (min-width: 576px) { ... }

 Medium devices (tablets, 768px and up)
@media (min-width: 768px) { ... }

 Large devices (desktops, 992px and up)
@media (min-width: 992px) { ... }

 Extra large devices (large desktops, 1200px and up)
@media (min-width: 1200px) { ... }
 Extra small devices (portrait phones, less than 576px)
@media (max-width: 575.98px) { ... }

Small devices (landscape phones, less than 768px)
@media (max-width: 767.98px) { ... }

 Medium devices (tablets, less than 992px)
@media (max-width: 991.98px) { ... }

 Large devices (desktops, less than 1200px)
@media (max-width: 1199.98px) { ... }
        </style>
</head>
<body>
    <nav class="navbar background">
        <ul class="nav-list">
           
            <div class="logo"><img src="https://th.bing.com/th/id/OIP.cxqhgfYobV7-e18rlUCbuwHaHa?w=180&h=180&c=7&o=5&pid=1.7" alt="logo"></div>
        
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
           
            <li><a href="Syllabus.php">Syllabus</a></li>
        </ul>
        <div class="rightnav">

   


<?php
   session_start();
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
       echo'<p>Welcome '. $_SESSION['email'] . '</p>
  <ul> <li> <a href="logout.php"><button class="btn btn-sm">Logout</button></a></li></ul> '; }
  else{
      echo ' <ul> <li> <a href="login.php"><button class="btn btn-sm">Login</button></a></li></ul>';
  }
?>

          
        </div>
         </nav>
         



<div class="space">
<div id="comp-kmiotf2s2" class="_1Z_nJ" data-testid="richTextElement"><h1 class="font_6" style="text-align:center;line-height:1.35em;font-size:30px"><span class="color_18"><span style="font-weight: bold;">WinLinsys Technologies</span></span></h1></div>
<hr>
<div id="comp-kmiotf2s3" class="_1Z_nJ" data-testid="richTextElement"><p class="font_8" style="text-align:center;line-height:1.75em;font-size:20px"><span class="color_15">Solve these question paper</span></p></div>
<br>

</div>
     
       



             
<br>
<br>         
<br>
<br>         
<br>
<br>         
<br>
<br>         
<br>
<br>         
<br>
<br>         
<br>
<br>         
<br>
<br>         
<br>
<br>         
<br>
<br>     
<br>
<br>
<br>
<br>
<br>
<div class="social-media__wrapper x-hidden-focus">
    <span id="social-media-header" class="social-media__text x-hidden-focus">Also Follow Us...</span>
    <a id="social-media-linkedin" class="social-media__link" href="" aria-label="Linkedin" title="Linkedin">
        <picture class="lazy" style="opacity: 1;">
            <source type="image/png" media="(-ms-high-contrast: white-on-black)" srcset="https://blobs.officehome.msocdn.com/images/content/images/linkedin-hc-77fefd2418.png">
            <img class="social-media__link--image" aria-hidden="true" alt="" src="https://blobs.officehome.msocdn.com/images/content/images/linkedin-refresh-02734a460c.png">
        </picture>
    </a>
    <a id="social-media-facebook" class="social-media__link" href="" aria-label="Facebook" title="Facebook">
        <picture class="lazy" style="opacity: 1;">
            <source type="image/png" media="(-ms-high-contrast: white-on-black)" srcset="https://blobs.officehome.msocdn.com/images/content/images/facebook-hc-b6ac21c866.png">
            <img class="social-media__link--image" aria-hidden="true" alt="" src="https://blobs.officehome.msocdn.com/images/content/images/facebook-refresh-090a700c0f.png">
        </picture>
    </a>
    <a id="social-media-twitter" class="social-media__link" href="" aria-label="Twitter" title="Twitter">
        <picture class="lazy" style="opacity: 1;">
            <source type="image/png" media="(-ms-high-contrast: white-on-black)" srcset="https://blobs.officehome.msocdn.com/images/content/images/twitter-hc-e34f4d31bc.png">
            <img class="social-media__link--image" aria-hidden="true" alt="" src="https://blobs.officehome.msocdn.com/images/content/images/twitter-refresh-93ca1a80ff.png">
        </picture>
    </a>
    <a id="social-media-instagram" class="social-media__link" href="" aria-label="Instagram" title="Instagram">
        <picture class="lazy" style="opacity: 1;">
            <source type="image/png" media="(-ms-high-contrast: white-on-black)" srcset="https://blobs.officehome.msocdn.com/images/content/images/instagram-hc-9fd0f4b194.png">
            <img class="social-media__link--image" aria-hidden="true" alt="" src="https://blobs.officehome.msocdn.com/images/content/images/instagram-refresh-5d315a943e.png">
        </picture>
    </a>
    <a id="social-media-office-blogs-link" class="social-media__link" href="" aria-label="Office blogs" title="Office blogs">
        <picture class="lazy" style="opacity: 1;">
            <source type="image/png" media="(-ms-high-contrast: white-on-black)" srcset="https://blobs.officehome.msocdn.com/images/content/images/blog-hc-bcc394c1aa.png">
            <img class="social-media__link--image x-hidden-focus" aria-hidden="true" alt="" src="https://blobs.officehome.msocdn.com/images/content/images/blog-33305b0d90.png">
        </picture>
    </a>
</div>
</div>
<br>
<br>
<br>
    <footer class="background">
        <p class="text-footer">
        Copyright &copy; 2027 www.WinLinsys.com- All rights reserved
        </p>
    </footer>



</body>
</html>

