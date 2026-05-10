<?php
include 'includes/db.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Dentist Website </title>

    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
     

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

     
      <link rel="stylesheet" href="style2.css">
      

</head>
<body>

<header class="header fixed-top">

<div class="container">

    <div class="row align-items-center justify-content-between">

    <a href="#home" class="logo">dental<span>Care.</span></a>

    <nav class="nav">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
        
    </nav>
     <a href="#contact" class="btn">make appointment</a>
 
     
     <p style="text-align:center; margin: 5px;">
    <a href="admin_login.php" class="btn">Admin Panel</a>    
</p>
      <a href="check_appointment.php" class="btn">Check Appointment</a>
      <a href="cancel_appointment.php" class="btn">Cancel Appointment</a>


     <div id="menu-btn" class="fas fa-bars">

     </div>

    </div>

</div>

</header>



    <section class="home" id="home">
        <div class="container">
            <div class="row align-items-center">
             <div class="col-md-6">
                <div class="content text-center text-md-left">
                <h3>Let us brighten your smile</h3>
                <p>We aim to provide quality, gentle dental care.
                Your comfort and smile are our top priorities</p>
                <a href="#contact" class="btn">make appointment</a>
                </div>
             </div>
            </div>
        </div>
    </section>

    
<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <img src="image12.jpg" class="w-100 mb-4 mb-md-0" alt="">

            </div>
            <div class="col-md-6 content">
                <span>about us</span>
                <h3>True Healthcare For Your Family</h3>
                 <p>
                    Welcome to <strong>DentalCare</strong>, where your smile is our priority. Our clinic is committed to delivering high-quality dental services in a friendly and relaxing environment. With years of experience and a team of dedicated professionals, we offer a wide range of treatments including preventive care, cosmetic dentistry, pediatric care, root canals, and more.
                </p>
               
                <a href="#contact" class="btn">make appointment</a>

            </div>
        </div>

    </div>
</section>


    <section class="services" id="services">

        <h1 class="heading">Our Services</h1>
        <div class="box-container container">
            
            <div class="box">
                <img src="teeth.png" alt="">
                <h3>Alignment specialist</h3>
                <p style="text-align: justify;"> Our alignment specialists focus on correcting dental misalignments using modern orthodontic techniques. Whether it's braces, clear aligners, or other solutions, we help align your teeth for a healthier, more confident smile.
                </p>
            </div>
            <div class="box">
                <img src="image3.png" alt="">
                <h3>Cosmetic dentistry</h3>
                <p style="text-align: justify;">
                 Our cosmetic dentistry services are designed to enhance the appearance of your smile. 
                 From teeth whitening and veneers to smile makeovers, we use advanced techniques 
                  to give you a radiant, confident smile.</p>
            </div>
            <div class="box">
                <img src="image4.png" alt="">
                <h3>Oral Hygiene Experts</h3>
                 <p style="text-align: justify;">
    Our oral hygiene experts are committed to keeping your mouth healthy. With regular cleanings, 
    preventive care, and guidance on daily oral habits, we ensure long-lasting dental wellness.
</p>
            </div>
            <div class="box">
                <img src="teeth.png" alt="">
                <h3>Root Canal Specialist</h3>
             <p style="text-align: justify;">
    We provide painless and effective root canal treatments to save infected teeth. 
    Our specialists ensure your comfort while eliminating infection and restoring dental health.
</p>
            </div>
            <div class="box">
                <img src="teeth.png" alt="">
                <h3>Live Dental Advisory</h3>
                <p style="text-align: justify;">
    Connect with our dentists in real-time for advice, follow-ups, and quick consultations. 
    Our live dental advisory ensures professional help is always within your reach.
</p>
            </div>
            <div class="box">
                <img src="teeth.png" alt="">
                <h3>Cavity Inspection</h3>
                <p style="text-align: justify;">
    Early detection is key to preventing tooth decay. Our cavity inspection service uses 
    advanced tools to spot problems early and treat them before they worsen.
</p>
            </div>
        </div>
    </section>
    

    <section class="process">

        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="image6.jpeg" height="100px" width="100px" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p style="text-align: justify;">
    Our cosmetic dentistry process begins with a detailed consultation to understand your goals. 
    We then craft a personalized treatment plan, which may include teeth whitening, veneers, or reshaping. 
    Using advanced techniques and modern materials, we enhance your smile while ensuring comfort and long-lasting results.
</p>

            </div>

            <div class="box">
                <img src="image7.jpg" height="100px" width="100px" alt="">
                <h3>Pediatric Dentistry</h3>
               <p style="text-align: justify;">
    Our pediatric dentistry services focus on providing gentle, compassionate care for children. 
    We create a friendly and safe environment to ensure young patients feel at ease during their visits. 
    From routine check-ups to preventive treatments, our goal is to promote healthy dental habits from an early age.
</p>
                
            </div>

            <div class="box">
                <img src="image8.jpg"height="100px" width="100px" alt="">
                <h3>Dental Implants</h3>
                <p style="text-align: justify;">
    Our dental implant services provide a reliable and long-lasting solution for missing teeth. 
    We use advanced technology to carefully place implants that restore both function and appearance. 
    From initial consultation to final restoration, our team ensures personalized care to help you regain a confident smile.
</p>
                
            </div>

        </div>
    </section>
   

    <section class="reviews" id="reviews">
        <h1 class="heading">satisfied clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="image9.jpg" height="150px" width="120px">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, rerum!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <h3>John deo</h3>
                <span>satisfied client</span>
            </div>
            <div class="box">
                <img src="image9.jpg" height="150px" width="120px">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, rerum!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <h3>John deo</h3>
                <span>satisfied client</span>
            </div>
            <div class="box">
                <img src="images8.jpeg" height="150px" width="120px">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, rerum!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <h3>John deo</h3>
                <span>satisfied client</span>
            </div>

 </div>
    </section>
  

    <section class="contact" id="contact">
        <h1 class="heading">make appointment</h1>
        <form action="submit.php" method="post">
            <?php
            if (isset($_GET['message'])) {
                echo '<p class="message">' . htmlspecialchars($_GET['message']) . '</p>';
            }
            ?>
            
            <span>your name:</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required >
            <span>your email:</span>
            <input type="email" name="email" placeholder="enter your email" class="box">
            <span>your number:</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date:</span>
            <input type="datetime-local" name="date" class="box">
            <input type="submit" value="make appointment" name="submit" class="btn">

        </form>
    </section>



<section class="footer">
    <div class="box-container container">
        <div class="box">
            <i class="fas fa-phone"></i>
        <h3>phone number</h3>
        <p>+123-456-7890</p>
        <p>+111-222-3333</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>mumbai,india-400104</p>

        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>07:00am to 10:00pm</p>

        </div>

        <div class="box">
          <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>dentist1@gmail.com</p>
         <p>dentist2@gmail.com</p>
        </div>

    </div>
</section>

<script src="script.js"></script>


</body>
</html>