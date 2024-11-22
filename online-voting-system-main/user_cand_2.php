<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Candidate Status</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Table Styling */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        td {
            background-color: #fff;
        }

        /* Button Styling */
        .btn {
            padding: 6px 12px;
            font-size: 14px;
            margin: 2px 5px;
        }

        .btn-success {
            background-color: #28a745;
            border: 1px solid #28a745;
        }

        .btn-danger {
            background-color: #dc3545;
            border: 1px solid #dc3545;
        }

        /* Navbar Styling */
        .navbar-brand {
            color: white;
            font-weight: 600;
        }

        .navbar-nav .nav-link {
            color: white;
            font-weight: 600;
            text-align: center;
            font-size: 18px;
            padding: 12px 20px;
        }

        .navbar-nav .nav-link:hover {
            background-color: #555;
        }

        /* Footer Styling */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container-fluid" id="cont-3">
    <!-- Navbar Section -->
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

    <!-- Main Content Section -->
    <section style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    include('dbConnect.php');

                    // SQL query to fetch candidate details
                    $sql = "SELECT * FROM candidate_2nd ORDER BY id DESC";

                    // Prepare and execute the query
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();

                    // Fetch all the results
                    $rs = $stmt->fetchAll();

                    // Display the results in a table
                    echo "
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th>Sno.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Branch</th>
                                    <th>Roll No.</th>
                                    <th>Enroll ID</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                    ";

                    // Loop through each candidate and display their details
                    $i = 1;
                    foreach ($rs as $row) {
                        $cid = $row['id'];
                        $status = ($row['approve_status'] == 0) ? 'Pending' :
                                  (($row['approve_status'] == 1) ? 'Approved' : 'Rejected');
                        echo "
                            <tr>
                                <td>".$i."</td>
                                <td>".htmlspecialchars($row['name'])."</td>
                                <td>".htmlspecialchars($row['email'])."</td>
                                <td>".htmlspecialchars($row['mobile'])."</td>
                                <td>".htmlspecialchars($row['branch'])."</td>
                                <td>".htmlspecialchars($row['rollno'])."</td>
                                <td>".htmlspecialchars($row['enrollid'])."</td>
                                <td>".$status."</td>
                                <td>";

                                // Display action buttons based on approval status
                                if ($row['approve_status'] == 2) {
                                    echo '<a href="change_status_2nd.php?id='.$cid.'&status=1" class="btn btn-success">Approve</a>';
                                } elseif ($row['approve_status'] == 1) {
                                    echo '<a href="change_status_2nd.php?id='.$cid.'&status=2" class="btn btn-danger">Reject</a>';
                                } else {
                                    echo '<a href="change_status_2nd.php?id='.$cid.'&status=1" class="btn btn-success">Approve</a>';
                                    echo '<a href="change_status_2nd.php?id='.$cid.'&status=2" class="btn btn-danger">Reject</a>';
                                }
                        echo "</td>
                            </tr>
                        ";
                        $i++;
                    }
                    echo "</tbody></table>";
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 U VOTE. All Rights Reserved.</p>
    </footer>

    <!-- Optional JavaScript -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
