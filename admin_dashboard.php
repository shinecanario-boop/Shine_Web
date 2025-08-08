<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login_page.php");
    exit();
}


// Database connection
$conn = new mysqli("localhost", "root", "", "tourismdestination");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard</title>


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <nav class="bg-dark text-white p-3" style="width: 220px; min-height: 100vh;">
      <h4>🌐 World Explorer </h4>
      <ul class="nav flex-column mt-4">
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white active">Dashboard</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Inquiry</a></li>
        <hr class="text-white" />
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Services</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Contact</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Explore</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white">Footer</a></li>
      </ul>
      <div class="mt-auto">
        <form action="logout.php" method="POST">
          <button type="submit" class="btn btn-outline-light btn-sm">Sign out</button>
        </form>
      </div>
    </nav>


    <!-- Main Content -->
    <main class="flex-grow-1 p-4">
      <h2>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?>!</h2>
      <p>This is your admin dashboard.</p>


      <h4 class="mt-4 mb-3">List of Inquiry</h4>


      <div class="d-flex flex-wrap gap-3">
        <!-- Inquiry Table -->
        <div style="flex: 1; min-width: 300px;">
          <table id="inquiryTable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM inquiry ORDER BY created_at DESC";
              $result = $conn->query($sql);
              $counter = 1;


              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      $rowJson = htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8');
                      echo "<tr onclick='showInquiry($rowJson)'>";
                      echo "<td>" . $counter++ . "</td>";
                      echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
                      echo "<td><button class='btn btn-primary btn-sm' onclick='event.stopPropagation(); showInquiry($rowJson)'>View</button></td>";
                      echo "</tr>";
                  }
              } else {
                  echo "<tr><td colspan='4'>No inquiries found.</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>


        <!-- Inquiry Detail Panel -->
        <div id="inquiryDetails" class="border rounded p-3 bg-light" style="flex: 1; min-width: 300px; display: none;">
          <h5>From: <span id="detailName"></span></h5>
          <p><strong>Email:</strong> <span id="detailEmail"></span></p>
          <p><strong>Contact:</strong> <span id="detailContact"></span></p>
          <p><strong>Date:</strong> <span id="detailDate"></span></p>
          <p><strong>Message:</strong></p>
          <div class="border p-2 bg-white" id="detailMessage"></div>
        </div>
      </div>
    </main>
  </div>


  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


  <script>
    $(document).ready(function () {
      $('#inquiryTable').DataTable({
        "pagingType": "simple_numbers",
        "lengthChange": false,
        "pageLength": 10,
        "info": false,
        "searching": true,
        "order": [[0, 'asc']]
      });
    });


    function showInquiry(data) {
      document.getElementById("inquiryDetails").style.display = "block";
      document.getElementById("detailName").textContent = data.name || "Anonymous";
      document.getElementById("detailEmail").textContent = data.email || "N/A";
      document.getElementById("detailContact").textContent = data.contact_number || "N/A";
      document.getElementById("detailDate").textContent = data.created_at || "N/A";
      document.getElementById("detailMessage").textContent = data.message || "No message.";
    }
  </script>
</body>
</html>

