<?php 
session_start();



if (isset($_SESSION['id'])  && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Your Voice</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
       </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <!-- <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p>long established fact that a reader will be </p>
                    </div>
                  </div>
               </div>
            </div>
         </div> -->
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/YourVoice.png" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li> <a href="index.html">Home</a> </li>
                              
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  <li><a class="buy" href="logout.php">Logout</a></li>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
       <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Commando</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>



<div class="about">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="about_box">
               <figure><img src="images/commando.jpg"/></figure>
            </div>
         </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="about_box">
               <h3>Director: Dilip Ghosh</h3>
               <b> Synopsis:</b> <p> The Chinese government incarcerates Karan, an Indian commando, accusing him of being an Indian spy, after he survives a plane crash in their territory. He must find a way to escape the enemy camp. </p><br>
               <b> Link To Trailer:</b> <p> <a href="https://youtu.be/sLIs-4oM3m4"> Commando(2013) - Official Trailer </a> </p><br>
               <b>Actor List :</b>
               <p>
                  <li>Vidyut Jammwal</li>
                  <li>Pooja Chopra</li>
                  <li>Jaideep Ahlawat</li></p>
                  <b> Personal Review:</b> <p>Amazing movie.....saw it accidently in 2020 on tv while an incredibly bored me was flipping the channels! Crushed on Vidyut Jamwal...he is amazing.. such a talented guy!!! </p>
                  <br>
                  <form action="commandosubmit.php" method="post">
                  <div class="col-md-12">
                     <textarea class="textarea" name="review" placeholder="Your Reviews"></textarea>
                 </div>
                 <div class=" col-md-12">
                     <button class="send" type="submit">Add Review</button>
               </div>
               </form> 
               </div>
                    
               </div> 
      </div>
   </div>
</div>

<!-- CHOOSE  -->
     
            <div class="copyright">
               <p>Copyright 2021 All Right Reserved By Your Voice </a></p>
            </div>
         
      </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>
<?php }else{
   header("Location:loginn.php");
}