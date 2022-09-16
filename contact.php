<?php
include "db_connection.php";

// if post is set to submit then only i can enter data and store the same.
if(isset($_POST['submit'])){

    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $subject= $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `queries` (name,email,subject,message) VALUES('$name','$email','$subject','$message') ";
    $result = mysqli_query($con,$sql);// to store data in database
    if (!$result) {
        echo "something went wrong ". mysqli_error($con);
    }
    else {
      echo "<script type='text/javascript'>alert('message sent successfully!')</script>";
      header('index.html #home');
        }         
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!--========== SCROLL REVEAL ========== 
    <script src="https://unpkg.com/scrollreveal"></script>-->

    <title>Contact</title>
    <style>
      
      #cbutt{
        color: grey;
        padding: 10px 28px; 
        background:transparent;
      }
      #cbutt:hover .icon {
        margin-left: var(--mb-0-5);
        transition: 0.3s;
        transform: translateX(8px);
      }
      #cbutt:hover{
        color: #fff;
        background-color: navy;
      }

      #contact-Location{
        cursor: pointer;
      }
      a{
        text-decoration: none;
        color: grey;
      }
      a:hover{
        font-size: 15px;
      }
    </style>
  </head>
  <body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">BMM</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list grid">
            <li class="nav__item">
              <a href="index.php #home" class="nav__link active-link">
                <i class="uil uil-estate nav__icon"></i>Home
              </a>
            </li>
            <!--
            <li class="nav__item">
              <a href="index.php #about" class="nav__link">
                <i class="uil uil-user nav__icon"></i>About
              </a>
            </li>
            <li class="nav__item">
              <a href="index.php #skills" class="nav__link">
                <i class="uil uil-file-info-alt nav__icon"></i>Skills
              </a>
            </li>
            <li class="nav__item">
              <a href="index.php #services" class="nav__link">
                <i class="uil uil-bag-alt nav__icon"></i>Services
              </a>
            </li>
            <li class="nav__item">
              <a href="index.php #portfolio" class="nav__link">
                <i class="uil uil-scenery nav__icon"></i>Portfolio
              </a>
            </li> --->
            <li class="nav__item">
              <a href="#contact" class="nav__link">
                <i class="uil uil-message nav__icon"></i>Contactme
              </a>
            </li>
          </ul>
          <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>
        <div class="nav__btns">


          <!--Theme change button-->
          <abbr title="change theme"><i class="uil uil-moon change-theme" id="theme-button" ></i></abbr>

          <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-apps"></i>
          </div>
        </div>
      </nav>
    </header>



     <!--==================== CONTACT ME ====================-->
     <section class="contact section" id="contact">
        <h2 class="section__title">Contact Me</h2>
        <span class="section__subtitle">Get in touch</span>
        
        <div class="contact__container container grid">
          <div>

            <div class="contact__info">
              <i class="uil uil-phone contact__icon"></i>
              <div>
                <h3 class="contact__title">Call me</h3>
                <span>or Whatsapp</span> <br>
                <span class="contact__subtitle" ><strong> +91 7760247049 </strong></span>
              </div>
            </div>

            <div class="contact__info">
              <i class="uil uil-envelope contact__icon"></i>
              <div>
                <h3 class="contact__title">Email</h3>
                <span class="contact__subtitle"><a href="mailTo:bmannangi34@gmail.com"><strong> bmannangi34@gmail.com </strong></a></span>
              </div>
            </div>

            <div class="contact__info" id="contact-Location"   data-bs-toggle="modal" data-bs-target="#examplemodalc">
              <i class="uil uil-location-point contact__icon"></i>
              <div >
                <h3 class="contact__title">Location</h3>
                <span class="contact__subtitle"><address> Uttarakannada - Karnataka - India</address></span>
              </div>
            </div>
          </div>

            

          <form action="#" method="post" class="contact__form grid">
                <div class="contact__inputs grid">
                     <div class="contact__content">
                        <input type="text" name="name" class="contact__input" placeholder="Name" required>
                        </div>
                        <div class="contact__content">
                            <input type="email" name="email" class="contact__input" placeholder="Email" required>
                        </div>
                    </div>

                        <div class="contact__content">
                            <input type="text" name="subject" class="contact__input" placeholder="Subject" required>
                        </div>
                        <div class="contact__content">
                            <textarea name="message" cols="30" class="contact__input" rows="5" placeholder="Describe..."></textarea>
                        </div>
                            <div class="buttons">
                                <button type="submit" name="submit" value="submit" style="border-radius:10px" class="cbutt" id="cbutt" >Send Message <i class="uil uil-message icon"></i></button>
                            </div>
                      </form>
                  </div>
      </section>

   


       <!--=========Location Modal===========-->


    <div class="modal fade" id="examplemodalc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width:800px ;">
        <div class="modal-content" style="width:800px ;">
        <!--  
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portfolio Project</h5> 
          </div>--->

          <div class="modal-body">
          <div style="overflow:hidden;max-width:100%;width:1200px;height:550px;">
        <div id="embed-map-display" style="height:100%; width:100%;max-width:100%;">
            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Sirsi,+Uttara+Kannada,+Karnataka,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
        </div>
        <a class="google-map-code-enabler" href="https://www.embed-map.com" id="get-data-for-embed-map">https://www.embed-map.com</a>
          <style>
        #embed-map-display img{
            max-width:none!important;
            background:none!important;
            font-size: inherit;
            font-weight:inherit;
        }

    </style>
        </div>

          </div>
        </div>
      </div>
    </div>

    



    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__bg">
        <div class="footer__container container grid">
          <div>
            <h1 class="footer__title">Basavaraj</h1>
            <span class="footer__subtitle">Frontend Developer</span>
          </div>

          <ul class="footer__links">
            <li>
              <a href="index.php #home" class="footer__link">Home</a>
            </li>

            <li>
              <a href="index.php #portfolio" class="footer__link">Portfolio</a>
            </li>

            <li>
              <a href="contact.php #contact" class="footer__link">ContactMe</a>
            </li>
          </ul>

          <div class="footer__socials">
            <a href="#" target="_blank" class="footer__social">
              <i class="uil uil-instagram"></i>
            </a>
            <a href="#" target="_blank" class="footer__social">
              <i class="uil uil-twitter-alt"></i>
            </a>
            <a href="#" target="_blank"class="footer__social">
              <i class="uil uil-linkedin"></i>
            </a>
          </div>
        </div>

        <p class="footer__copy">&#169; BasavarajOfficial. All rights reserved</p>
      </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
      <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
      </a>
    
    <!--==================== SWIPER JS ====================-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>

    
    <!--========== SCROLL REVEAL ==========
    <script src="https://unpkg.com/scrollreveal"></script>
    -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    
  </body>
</html>
