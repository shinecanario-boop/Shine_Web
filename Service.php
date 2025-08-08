<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tourism Destination</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/dist/css/dist/css/bootstrap.css">
  <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css">
    <style>
   * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f9f9f9;
      color: #1d0e0e;
    }


    /* Navbar */
    header {
      background-color: #0c1014;
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: white;
    }


    header .logo {
      font-size: 22px;
      font-weight: bold;
    }


    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }


    nav a {
      text-decoration: none;
      color: white;
      font-weight: 500;
    }


    nav li.active a {
      color: orange;
    }
    .container {
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
     .header {
      text-align: right;
      margin-bottom: 20px;
    }
    .header h1 {
      margin: 0;
      color: #333;
    }
    .header p {
      margin: 5px 0 0;
      color: #666;
      font-size: 0.9em;
    }
    .plan-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-sizing: border-box;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
    }
    .plan-card.highlight {
            border-color: #007bff;
            background-color: #e6f2ff;
    }
    .plan-card h2 {
            margin-top: 0;
            color: #007bff;
     }
        .plan-card .price {
            font-size: 2em;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .plan-card ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
        }
        .plan-card ul li {
            margin-bottom: 5px;
            color: #555;
        }
        .plan-card button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            width: 100%;
        }
        .plan-card button:hover {
            background-color: #0056b3;
        }
        .plan-card.highlight button {
            background-color: #007bff;
        }
        p {
          text-align: center;
        }
         
        .bd-placeholder-img {
           font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
           -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
         }


          @media (min-width: 768px) {
           .bd-placeholder-img-lg {
             font-size: 3.5rem;
          }
        }


         .img1 {
           display: inline-block;
          border-radius: 100%;
       }
       
     
    </style>
</head>
<body>
    <!-- Header / Navbar -->
  <header>
    <div class="logo">🌍 PH Explorer</div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="#">Services</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <!-- Changed login link to open modal -->
        <li><a href="login_page.php">Login</a></li>
        <li><a href="Explore.php">Explore!</a></li>
      </ul>
    </nav>
  </header>
 




        <div class="container">
        <div class="header">
            <h1 style="text-align:center; font-family: calibri; font-size:30px;">Services</h1>
            <p style="text-align:center; font-family: calibri; font-size:20px;">Your trusted partner for  Tourist Destinations!</p>
   </div>    




       <div  class="plan-card">
            <h2>Free</h2>
            <div class="price">$0/booking</div>
            <ul>
                <li>3 consultations included</li>
                <li>3 bookings included</li>
                <li>On-Site Support</li>
                <li>Limited Help center access</li>
            </ul>
            <button>Send Us Query</button>
        </div>
         <div class="plan-card">
            <h2>Undecided Yet?</h2>
            <div class="price">$15/booking</div>
            <ul>
                <li>Free 20 Consultations</li>
                <li>Free 20 Bookings</li>
                <li>On-Site Support</li>
                <li>Help center access</li>
            </ul>
            <button>Get Started</button>
        </div>
         <div class="plan-card highlight">
            <h2>Book Now!</h2>
            <div class="price">$29/booking</div>
            <ul>
                <li>Unlimited Consultation</li>
                <li>Unlimited Booking</li>
                <li>Unlimited Support via Email</li>
                <li>Help Center Access</li>
            </ul>
            <button>Contact Us</button>
   
        </div>
    </div>


        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4"> <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                    <title>Placeholder</title>
                <img style="height: 200px; width:200px; border-radius:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR112-tebWe0JcXNJjuq1xwOtJtOHgQ2bBB-A&s" alt="">
                </svg>
                <h2 class="fw-normal">Rabin Josh Angeles</h2>
                <p>Artist</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4"> <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                    <title>Placeholder</title>
                    <img style="height: 200px; width:200px; border-radius:100%;" src="https://static.tvtropes.org/pmwiki/pub/images/daniel1.png" alt="">
                </svg>
                <h2 class="fw-normal">Daniel Padilla</h2>
                <p>Artist</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4"> <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                    <title>Placeholder</title>
                    <img style="height: 200px; width:200px; border-radius:100%;" src="https://www.shutterstock.com/editorial/image-editorial/M5TcUfw1Naj3k3yeMTI3NDQ=/alden-richards-440nw-14924384dq.jpg" alt="">
                </svg>
                <h2 class="fw-normal">Alden Richard</h2>
                <p>Artist</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
        </div>
        <!-- Login Modal -->
        <div id="loginModal" class="modal">


    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      © 2025 LeyteSamar/OTHERcountriesTD Inc.
    </footer>
    <br>
  </div>
</div>
</body>
  </div>
</div>


</body>
</html>.

