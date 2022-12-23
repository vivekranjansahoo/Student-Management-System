<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech web  </title>
   
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial;
}
header{
    width:100%;
    height: 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    z-index: 99;
    box-shadow: 0 0 10[px] #000;
    background: rgba(0,0,0,0.5);
}
#chk1{
    display: none;
     
     
}
i{
    color: #fff;
    cursor: pointer;
}
header .logo{
    flex: 1;
    color: aqua;
     
    margin-left: 50px;
    text-transform: uppercase;
    font-size: 15px;
}
header .search-box{
    flex: 1;
    position: relative;
}
.search-box input{
    width:100%;
    height: 40px;
    border: none;
    outline: none;
    background:#f2f2f2;
    border-radius: 30px;
    color:gray;
    font-size: 16px;
    padding-left: 5px;
    padding-right: 40px;
    text-align: center;
     
}
 
.search-box button{
    cursor: pointer;
    width:40px;
    height: 40px;
    border-radius: 30px;
    border:none;
    position: absolute;
    top:0;
    right: 0;
    transform: scale(0.9);
    background: black;
    color: #fff;
}
header ul {
    flex:2;
    display: flex;
    justify-content: space-evenly;
}
header ul li{
    list-style: none;
}
header ul li a{
    text-decoration: none;
    color:aqua;
    font-weight: 600;
    text-transform: uppercase;
    padding: 10px 15px;
}
header ul li a:hover{
    border-bottom: 2px solid cadetblue;
}
header .menu{
    font-size: 2.5em;
    display: none;
}
@media(max-width:1000px){
    .search-box button{
        position: absolute;
    }
    header ul{
        position: fixed;
        top:100px;
        right: -100%;
        background: rgba(0,0,0,0.5);
        height: calc(100vh - 100px);
        width:50%;
        flex-direction: column;
        align-items: center;
        transition: right 0.5s linear;
    }
     
    header .menu{
        display: block;
        width:100px;
        text-align: center;
    }
    #chk1:checked ~ ul{
        right: 0;
        
    }
  
}

.content-wrapper{
    position: relative;
    display: inline-block;
    width: 100%;
}
.text-wrapper{
    position: absolute;
    z-index: 999;
    margin: auto;
    left: 50px;
    text-align: center;
    top: 30%;
    width: 60%;
    color: #f2f2f2;
}
.text-wrapper h3{
    text-align: left;
}
.carousel-item{
    height: 600px;
    margin-left: 2px;
    
}

    </style>
</head>
<body>
    <header>
        <input type ="checkbox" name ="" id ="chk1">
        <div class="logo"><h1>Tech WEB</h1></div>
           
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Register</a></li>
                <li><a href="admin">Admin Login</a></li>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                      
                </li>
            </ul>
             <div class="search-box">
                <form>
                    <input type ="text" name ="search" id ="srch" placeholder="Search">
                    <button type ="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="menu">
                <label for="chk1">
                    <i class="fa fa-bars"></i>
                </label>
            </div>
            <div>
            
    </header>
 
    <div class="content-wrapper">
     <img src="img/bg.jpg" class="rounded" alt="Cinque Terre" width="100%" height="950">
     <div class="text-wrapper"><h3>“Sometimes it pays to stay in bed on Monday, rather than spending the rest of the week debugging Monday’s code.”<br>
         – Dan Salomon <br><br>“ Code is like humor. When you have to explain it, it’s bad.” <br>– Cory House<br>
        <br>“Optimism is an occupational hazard of programming: feedback is the treatment. “<br>- Kent Beck</h3></div>
     </div>
<br><br>
    <!-- Carousel wrapper -->
<div id="carouselMaterialStyle" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true"
      aria-label="Slide 1"></button>
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner rounded-5 shadow-4-strong">
    <!-- Single item -->
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100"
        alt="Sunset Over the City" />
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="img/2.jpg" class="d-block w-100"
        alt="Canyon at Nigh" />
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100"
        alt="Cliff Above a Stormy Sea" />
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->

</div>

      <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card bg-image hover-zoom">
                    <img src="img/7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>

            </div>
            <div class="col">
                <div class="card bg-image hover-zoom">
                    <img src="img/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                  
            </div>
            <div class="col">
                <div class="card bg-image hover-zoom">
                    <img src="img/8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some more quick example text for the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card bg-image hover-zoom">
                    <img src="img/9.jpg" class="card-img-top " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-white mt-5">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 link-grayish">
          <i class="fa fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-grayish">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-grayish">
          <i class="fa fa-google"></i>
        </a>
        <a href="" class="me-4 link-grayish">
          <i class="fa fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-grayish">
          <i class="fa fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-grayish">
          <i class="fa fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-grayish"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fa fa-home me-3 text-grayish"></i> Odisha, NY 10012, India</p>
            <p>
              <i class="fa fa-envelope me-3 text-grayish"></i>
              info@example.com
            </p>
            <p><i class="fa fa-phone me-3 text-grayish"></i>9876543211 </p>
            <p><i class="fa fa-print me-3 text-grayish"></i> Vivek</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Tech WEb</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

    
</body>
</html>