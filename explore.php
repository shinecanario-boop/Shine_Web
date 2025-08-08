<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore - Your Perfect Destination</title>
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
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa; /* Light background */
            color: #333;
        }
        .navbar {
            background-color: #1a202c; /* Darker background for navbar */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand, .nav-link {
            color: #e2e8f0 !important; /* Light text for navbar */
            font-weight: 500;
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #cbd5e0 !important;
        }
        .carousel-item img {
            height: 600px; /* Fixed height for carousel images */
            object-fit: cover; /* Cover the area, crop if necessary */
            filter: brightness(0.7); /* Darken images slightly for text contrast */
        }
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.4); /* Semi-transparent background for caption */
            border-radius: 0.75rem; /* Rounded corners for caption */
            padding: 1rem 1.5rem;
        }
        .card {
            border: none;
            border-radius: 0.75rem; /* Rounded corners for cards */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden; /* Ensure image corners are rounded */
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        .card-img-top {
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
            height: 200px; /* Fixed height for card images */
            object-fit: cover;
        }
        .btn-primary {
            background-color: #4299e1; /* Blue primary button */
            border-color: #4299e1;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #3182ce;
            border-color: #3182ce;
        }
        .modal-content {
            border-radius: 1rem; /* Rounded corners for modal */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .form-control {
            border-radius: 0.5rem; /* Rounded corners for form inputs */
        }
        .footer {
            background-color: #2d3748; /* Darker footer */
            color: #e2e8f0;
            padding: 2rem 0;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
            margin-top: 3rem;
        }
         .modal-content form button:hover {
            background-color: #34495e;
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
<body class="antialiased">
  <!-- Header / Navbar -->
  <header>
    <div class="logo">🌍 PH Explorer </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Services.php">Services</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <!-- Changed login link to open modal -->
        <li><a href="login_page.php">Login</a></li>
        <li class="active"><a href="Explore.php">Explore!</a></li>
      </ul>
    </nav>
  </header>
     <!-- Main Carousel Section -->
    <section id="home" class="relative">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img2.jpg" class="d-block w-100" alt="Bago River">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-3xl font-bold mb-2">Cebu Island</h5>
                        <p class="text-lg">a stunning island destination that has a wide range of adventure, natural and historical attractions. Explore a city filled with colonial landmarks, soak up the sun at glorious beach resorts, spot multicolored aquatic creatures and travel around picture-perfect islands. </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img3.jpg"class="d-block w-100" alt="Kipot Falls">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-3xl font-bold mb-2">Coron Palawan Island</h5>
                        <p class="text-lg">Coron is known for its World War II-era wreck diving sites, limestone cliffs, crystal-clear waters, and white-sand beaches waiting to be discovered among many small islands.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img1.jpg" class="d-block w-100" alt="Manuel Araneta Cultural Center">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-3xl font-bold mb-2">Kalanggaman Island</h5>
                        <p class="text-lg">Kalanggaman Island is mostly flat, with a coastline marked by white sandy beaches. It's sandbar extends to the west of the island, the length of which changes depending on the season and the tide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!-- Tourist Destinations Section -->
    <section id="destinations" class="container mx-auto px-4 py-12">
        <h2 class="text-4xl font-extrabold text-center mb-10 text-gray-800">Popular Destinations in Phillipines</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Destination Card 1 -->
            <div class="card">
                <img src="img4.jpg" class="card-img-top" alt="Bago City Public Plaza">
                <div class="card-body p-6">
                    <h5 class="card-title text-2xl font-semibold mb-3 text-gray-700">BORACAY ISLAND</h5>
                    <p class="card-text text-gray-600">The most famous beach on the island, known for its fine, white sand and calm, shallow waters. </p>
                    <a href="#" class="btn btn-primary mt-4">Learn More</a>
                </div>
            </div>
            <!-- Destination Card 2 -->
            <div class="card">
                <img src="img5.jpg" class="card-img-top" alt="Buenos Aires Mountain Resort">
                <div class="card-body p-6">
                    <h5 class="card-title text-2xl font-semibold mb-3 text-gray-700">Biliran Island </h5>
                    <p class="card-text text-gray-600">Biliran is gaining recognition as a tourist destination, particularly for those seeking a less crowded and more nature-focused experience. It's known for its scenic beauty and is considered a great place to explore by scooter. </p>
                    <a href="#" class="btn btn-primary mt-4">Learn More</a>
                </div>
            </div>
            <!-- Destination Card 3 -->
            <div class="card">
                <img src="img6.jpg" card-img-top alt="Gen. Juan Araneta Monument">
                <div class="card-body p-6">
                    <h5 class="card-title text-2xl font-semibold mb-3 text-gray-700">Canigao Island</h5>
                    <p class="card-text text-gray-600">Canigao Island is uninhabited, featuring a lighthouse as its only significant man-made structure.</p>
                    <a href="#" class="btn btn-primary mt-4">Learn More</a>
                </div>
            </div>
            <!-- Destination Card 4 -->
            <div class="card">
                <img src="img7.jpg" class="card-img-top" alt="Rafael Salas Park and Nature Center">
                <div class="card-body p-6">
                    <h5 class="card-title text-2xl font-semibold mb-3 text-gray-700"><main>Siargao Island</main></h5>
                    <p class="card-text text-gray-600">Known for its world-class surf breaks, stunning beaches, and rich biodiversity, Siargao Island has become a haven for eco-conscious travelers looking to experience nature and support sustainable tourism.</p>
                    <a href="#" class="btn btn-primary mt-4">Learn More</a>
                </div>
            </div>
            <!-- Destination Card 5 -->
            <div class="card">
                <img src="img8.jpg" class="card-img-top" alt="Balay ni Tan Juan">
                <div class="card-body p-6">
                    <h5 class="card-title text-2xl font-semibold mb-3 text-gray-700">Badoc Island</h5>
                    <p class="card-text text-gray-600">it does have a small island within its borders called Badoc Island, which is known for its white sand beach and natural rock formations. </p>
                    <a href="#" class="btn btn-primary mt-4">Learn More</a>
                </div>
            </div>
            <!-- Destination Card 6 -->
            <div class="card">
                <img src="img9.jpg" class="card-img-top" alt="Local Delicacies">
                <div class="card-body p-6">
                    <h5 class="card-title text-2xl font-semibold mb-3 text-gray-700">Bataan Island</h5>
                    <p class="card-text text-gray-600">With its beautiful white sand beach and crystal-clear waters, the resort provides the perfect setting for a relaxing getaway.</p>
                    <a href="#" class="btn btn-primary mt-4">Learn More</a>
                </div>
            </div>
        </div>
    </section>


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
   


    <!-- About Us Section -->
    <section id="about" class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-extrabold text-center mb-8 text-gray-800"> Philippine Explorer</h2>
            <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto leading-relaxed">
                <p>Piliphine  Explorer is your ultimate guide to discovering the hidden gems and popular attractions of Philippines. We are passionate about showcasing the natural beauty, rich history, and vibrant culture of our beloved Country. Join us on a journey to explore breathtaking waterfalls, islands, and the warm hospitality of the locals.
            </p>
            <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto mt-4 leading-relaxed">
                Our mission is to provide comprehensive information and inspire travelers to experience the unique charm. Whether you're a nature lover, Island lover, Philippine island has something special for everyone.
            </p>
        </div>
    </section>
         


    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-blue-600 text-white rounded-t-lg">
                    <h5 class="modal-title text-2xl font-bold" id="loginModalLabel">Login to Your Account</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-6">
                    <form>
                        <div class="mb-4">
                            <label for="username" class="form-label text-gray-700 font-medium mb-2">Username</label>
                            <input type="text" class="form-control p-3 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" id="username" placeholder="Enter your username">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label text-gray-700 font-medium mb-2">Password</label>
                            <input type="password" class="form-control p-3 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" id="password" placeholder="Enter your password">
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label text-gray-600" for="rememberMe">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-full py-3 text-lg font-semibold">Login</button>
                    </form>
                    <div class="text-center mt-4 text-gray-600">
                        <p>Don't have an account? <a href="#" class="text-blue-600 hover:underline">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container mx-auto px-4">
            <p class="mb-2">&copy; 2025 Philippine Explorer. All rights reserved.</p>
            <p class="text-sm">Designed with ❤️ Philippines Explorer</p>
        </div>
    </footer>


    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



