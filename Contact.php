<?php include 'db_connection.php';?>
<?php
// Simple PHP form handler with service prefill
$name = $email = $contact = $message = "";
$success = $error = "";
$prefillMessage = "";


// If service parameter in URL, prepare prefill message
if (isset($_GET['service'])) {
    $service = htmlspecialchars(urldecode($_GET['service']));
    $prefillMessage = "Hi, I am interested in your service: " . $service . ". Please provide more information.";
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_submit'])) {
    $email = htmlspecialchars(trim($_POST["email"]));
    $contact = htmlspecialchars(trim($_POST["contact"]));
    $message = htmlspecialchars(trim($_POST["message"]));


    if (empty($email) || empty($contact) || empty($message)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        // Here you can add code to save to DB or send email
        $success = "Thank you for your feedback!";
        // Clear fields after success
        $email = $contact = $message = "";
        $prefillMessage = "";
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact - Perfect Escape</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
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
    .contact-container {
      max-width: 900px;
      margin: 50px auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 40px;
      padding: 0 20px;
    }
    .contact-text {
      flex: 1;
      text-align: center;
    }
    .contact-text h2 {
      font-weight: normal;
      font-size: 2.5rem;
      margin-bottom: 10px;
    }
    .contact-text p {
      font-size: 0.9rem;
      color: #555;
      max-width: 300px;
      margin: 0 auto;
      line-height: 1.3;
    }
    form {
      flex: 1;
      max-width: 350px;
      border: 1px solid #eee;
      padding: 20px;
      background: #fafafa;
      display: flex;
      flex-direction: column;
      gap: 15px
    }
     bd-placeholder-img {
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
    <div class="logo">🌍TravelPH</div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Services.php">Services</a></li>
        <li class="active"><a href="Contact.php">Contact</a></li>
        <!-- Changed login link to open modal -->
        <li><a href="#" id="loginBtn">Login</a></li>
        <li><a href="Explore.php">Explore!</a></li>
      </ul>
    </nav>
  </header>




    <br>


    <main role="main" class="container">
        <div class="container marketing">


            <?php if ($success): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php elseif ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>


            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="" style="margin-left: 40%;">
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="message" placeholder="Message/Feedback" required><?php
                        echo htmlspecialchars($message ?: $prefillMessage);
                    ?></textarea>
                    <label for="message">Message/Feedback</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>" required>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="contact" placeholder="Contact Number" value="<?php echo htmlspecialchars($contact); ?>" required>
                    <label for="contact">Contact Number</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="contact_submit">Send</button>
                <hr class="my-4">
                <small class="text-muted">By clicking Send, you agree to the terms of use.</small>
            </form>


            <hr class="featurette-divider">


             <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4"> <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                    <title>Placeholder</title>
                <img style="height: 200px; width:200px; border-radius:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvZWQP9Ux-h_H0PsmUIoGy3XvA1kMFAwPsVw&" alt="">
                </svg>
                <h2 class="fw-normal">Ms. Romi</h2>
                <p>Exicutive Derictor</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4"> <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                    <title>Placeholder</title>
                    <img style="height: 200px; width:200px; border-radius:100%;" src="https://static1.personalitydatabase.net/2/pdb-images-prod/6433bb39/profile_images/829ffcff55d44fe88823425a7a66ecc8.png" alt="">
                </svg>
                <h2 class="fw-normal">Ms. Mira</h2>
                <p>Founder</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4"> <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                    <title>Placeholder</title>
                    <img style="height: 200px; width:200px; border-radius:100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBRfuftdg3APmYcCOHJgv8mxTqsX52M2-LwA&" alt="">
                </svg>
                <h2 class="fw-normal">Ms. Zoey</h2>
                <p>Manager.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
        </div>


    <!-- FOOTER -->
    <footer class="container text-center my-4">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2025 LeyteSamarTD Inc.</p>
    </footer>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
