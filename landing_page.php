<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    
   
    

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">



    <link rel="stylesheet" href="landing_styles.css">
    
    <title>FundMyStartup</title>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="./img/Logo.jpeg" alt="" class="logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Setup</a></li>
                <li><a href="#">Info</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Contact</a></li>
                <div class="bx bx-moon" id="darkmode"></div>
            </ul>
        </div>

        
        <div class="content">
            <div class="Logo">
            <img src="./img/Logo.jpeg" alt="" class="Logo"> 
            </div>          
            <p class="text-big">We provide a platform for individuals and organizations to seek financial support for their projects, businesses, or personal needs, as well as 
                for investers to invest in various coming age startups </p>
            <div>
                <a href="home.html" class="login-btn">Log In</a>
                <a href="home.html" class="login-btn">Sign Up</a>
            </div>
        </div>
    </div>

    <section class="section" id="about">
        <div class="paras">
      <p class="sectionTag"> What is FundMyStartup ?</p>
      <p class="sectionSubTag"> FundMyStartup is a platform or a website that connects entrepreneurs and startups with 
        potential investors who are interested in funding their ideas or businesses. The platform allows startups to create
         a profile and pitch their ideas to a large pool of investors who can provide funding or investment in exchange for
          a percentage of equity in the startup.  </p>
          <br>
      <p class="sectionTag2">FundMyStartup also offers resources and tools to help startups with business planning, 
        financial modeling, and investor outreach. The platform serves as a way for startups to access funding and for
         investors to discover new investment opportunities</p>
      
      </div>
        <div class="thumb-nail">
          <img src="img/Logo.jpeg" alt="photo" class="fluid">
        </div>
      </section> 


    <section class = "review" id="review">
    <h1 class="heading">Customers <span>Review</span></h1>
  <div class="swiper review-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide box">
            <img src="img/pic-1.jpg" width="20%">
            <p>"Succesfully invested in my first ever FinTech company with FundMyStartup, loved the smooth and hassle free process"</p>
                <h3>Vinay Bajwa</h3>
                <div class="rating">
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star "></i>
               </div>

        </div>

        <div class="swiper-slide box">
            <img src="img/pic-2.jpg" width="20%">
            <p>"Start-ups like these build hope in the future of Funding and investing in India, Kudos to the entire team!!"</p>
                <h3>Ashok Singhania</h3>
                  <div class="rating">
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star "></i>
                   </div>

        </div>

        <div class="swiper-slide box">
            <img src="img/pic-3.jpg" width="20%">
            <p>"Raising money can be a real pain in the neck, especially for new startups, but I\'m happy its 
                not the case anymore !"</p>
                <h3>Shantanu Ghosh</h3>
                <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half "></i>
               </div>

        </div>

        <div class="swiper-slide box">
            <img src="img/pic-4.png" width="20%">
            <p>"Succesfully raised my first seed round through FundMyStartup, never thought it can be this easy !"</p>
                <h3>Riya Sharma</h3>
                <div class="rating">
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star "></i>
               </div>

        </div>

        <div class="swiper-slide box">
            <img src="img/pic-5.jpg" width="20%">
            <p>"Found my dream Investors on board for my jewellery brand through FundMyStarup, couldnt be more thankful."</p>
                <h3>Ankiti bose</h3>
                <div class="rating">
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star checked"></i>
                      <i class="fa fa-star "></i>
               </div>

        </div>



    </div>
  </div>

    </section>
   
    
    <div class="container">
        <h1 class="heading"> Our <span>Partners</span></h1>  
      <section class="partners-logos slider">
        <div class="our-clients">
            <ul>
              <li> <img src="img/gdsc_logo.png" width="30px"> </li>
              <li> <img src="img/mit_logo.jpg" width="15%"> </li>
              <!-- <li> <img src="img/nike.jpg" width="15%"></li>
              <li> <img src="img/Swiggy.png" width="15%"> </li>  -->
            </ul>
          </div>
      </section>
    </div>
      

      

   
    <div class="copyright">
        <p>&#169; FundMyStartup All Right Reserved.</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
';
?>