<?php
session_start();

 include'dbconn.php'; 

if($_SERVER['REQUEST_METHOD']== 'POST'){
	$user_name = $_POST['user'];
	
	$rate = $_POST['rate'];
	$concern = $_POST['concern'];

$sql ="INSERT INTO `feedback` (`user`, `rate`, `concern`) VALUES ('$user_name', '$rate', '$concern')";
    $result = mysqli_query($conn, $sql);
    if($result){
        
        echo "Data has been entered";
        }
        else{
        echo "Data not entered due to.....>" . mysqli_error($conn);
        }
 }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/feesty.css">
    <title>feedback</title>
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
    <input type="text" name="search" id="search">
    <button class="btn btn-sm">Search</button>
</div>



    </nav>
  
  <br>
        <div id="comp-kmiory4k1" class="_1Z_nJ" data-testid="richTextElement"><h1 class="font_4" style="text-align:center;line-height:1.25em;font-size:72px"><span class="color_11"><span style="font-weight: bold;">WinLinsys</span></span></h1></div>
<div id="comp-kmiuzhfk" class="_1Z_nJ" data-testid="richTextElement"><h1 class="font_0" style="text-align:center;line-height:1.67em;font-size:22px"><span style="font-family:niconne,fantasy"><span class="color_18">Let's succeed together</span></span></h1></div>
<div id="comp-kmiory4k2" class="_1Z_nJ" data-testid="richTextElement"><p class="font_7" style="text-align:center;line-height:1.67em;font-size:20px"><span class="color_11">Learning the Fun Way</span></p></div>

<br>
<?php    
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
echo'
<section class="feedback">
    <h2 class="textcentre"style="text-align:center;line-height:1.67em;font-size:22px">feedback</h2>
    <hr>
    <form action="" method="POST">
    <div class="form">
        <input type="text"class="form-control" name="user" id="UserName"placeholder="Enter Your Name">

       
        <input type="text" class="form-control" name="rate"id="rating"placeholder="rate out of 10">
            <textarea class="form input" class="form-control"name="concern" id="concern"cols="150"rows="10"placeholder="Ellaborate Your Concern"></textarea>
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
        </form>
            </section>';}
            else{
                echo'you must login first';
            }
?>

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
    <br>
    <br>
            <footer class="background">
                <p class="text-footer">
                Copyright &copy; 2027 www.WinLinsys.com- All rights reserved
                </p>
            </footer>
</body>
</html>
