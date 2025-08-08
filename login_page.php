<?php include 'db_connection.php'; ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS (for additional styling and responsiveness) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            body {
            font-family: Arial, sans-serif;
            background: white;
            color: #444;
            margin: 0;
            padding: 0;
            }
            .login-container {
            max-width: 900px;
            margin: 50px auto;
            display: flex;
            justify-content: center; /* center horizontally */
            padding: 0 20px;
            }
            form {
            width: 320px;
            border: 1px solid #eee;
            padding: 40px 20px 20px 20px;
            background: #fafafa;
            border-radius: 4px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
            position: relative;
            font-size: 14px;
            position: relative;
            padding: 40px 20px 20px 20px;
            background-image: url('https://img.freepik.com/premium-photo/3d-illustration-plane-flies-around-planet-earth_715074-689.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color: black;


            }
            form::before {
            content: "";
            position: absolute;
            top: 20px;
            left: 50%;
            width: 150px;
            height: 150px;
            background-image: url('https://clipartcraft.com/images/blue-logo-1.png');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            opacity: 0.1;
            transform: translateX(-50%);
            pointer-events: none;
            z-index: 0;
            }
            h3 {
            margin-bottom: 15px;
            font-weight: 600;
            position: relative;
            z-index: 1;
            }
            input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 3px;
            border: 1px solid #ccc;
            font-size: 14px;
            position: relative;
            z-index: 1;
            }
            .btn {
            padding: 8px 16px;
            margin: 10px 5px 0 5px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
            position: relative;
            z-index: 1;
            }
            .btn-login {
            background-color: #007bff;
            color: white;
            }
            .btn-close {
            background-color: #ffc107;
            color: black;
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
  </style>
</head>
<body>
    <!-- Header / Navbar -->
        <header>
            <div class="logo">🌐 TourismPH</div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Services.php">Services</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li class="active"><a href="login_page.php">Login</a></li>
                    <li><a href="explore.php">Explore!</a></li>
                </ul>
            </nav>
        </header>




        <div class="login-container">
        <form method="POST" action="login.php" id="loginForm">
            <h3>LOGIN</h3>
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <br />
            <button type="button" class="btn btn-close" onclick="window.location.href='index.php'"></button>
            <button type="submit" class="btn btn-login">Login</button>
        </form>
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


            </body>
        </html>
