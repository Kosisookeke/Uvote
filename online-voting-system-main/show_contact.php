<?php
// Start the session at the very beginning of the file
session_start();

// Include the database connection
include('dbConnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U VOTE - Contact Messages</title>
    
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        /* General Body Styling */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f9fa;
        }

        /* Navbar Styling */
        .navbar {
            padding: 10px;
            background-color: #343a40;
        }

        .navbar-brand {
            color: white !important;
            font-weight: 600;
            font-size: 1.8rem;
        }

        .navbar-toggler {
            border: 1px solid white;
        }

        .navbar-nav .nav-item .nav-link {
            color: white;
            font-weight: 600;
            font-size: 18px;
            text-transform: capitalize;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-item .nav-link:hover {
            background-color: #555;
            border-radius: 5px;
        }

        /* Main Section Styling */
        section {
            padding: 40px 0;
            background-color: #ffffff;
            margin-top: 20px;
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #343a40;
        }

        /* Table Styling */
        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #343a40;
            color: white;
        }

        td {
            background-color: #f1f1f1;
        }

        /* Footer Section Styling */
        #footersection {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 1200px) {
            .navbar-nav .nav-item .nav-link {
                font-size: 16px;
            }
            h1 {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 768px) {
            .navbar-nav .nav-item .nav-link {
                font-size: 15px;
                padding: 10px 12px;
            }
            h1 {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 576px) {
            .navbar-nav .nav-item .nav-link {
                font-size: 14px;
                padding: 8px 10px;
            }
            h1 {
                font-size: 1.4rem;
            }
        }

    </style>
</head>
<body>

<div class="container-fluid" id="cont-3">
    <header id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href="index.html">U VOTE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="user_suggestion.php">Suggestions</a></li>
                    <li class="nav-item"><a class="nav-link" href="show_contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="user_details_year.php">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="user_cand_year.php">Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Section for Contact Messages Table -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Messages</h1>

                    <?php 
                    // Fetch contact messages from the database
                    $sql = "SELECT * FROM contact ORDER BY id DESC";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $rs = $stmt->fetchAll();

                    echo "
                    <table>
                        <tr>
                            <th>Sno.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    ";

                    $i = 1;
                    foreach ($rs as $row) {
                        echo "
                        <tr>
                            <td>".$i."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['message']."</td>
                        </tr>
                        ";
                        $i++;
                    }
                    echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer Section -->
    <footer id="footersection">
        <p>&copy; 2024 U VOTE. All Rights Reserved.</p>
    </footer>

</div>

<!-- Bootstrap and jQuery JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
