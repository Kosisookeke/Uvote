<?php 
include("dbConnect.php");

$sql = "SELECT candidate, COUNT(*) as result FROM `users_2nd` GROUP BY candidate";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rs = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Results</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }

        .container {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .card-5 {
            border: 2px solid #5f1178;
            padding: 30px;
            margin-top: 5%;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-5 h2 {
            font-size: 2rem;
            color: #5f1178;
            margin-bottom: 20px;
        }

        .progress {
            height: 30px;
            border-radius: 20px;
            margin-top: 15px;
        }

        .progress-bar {
            text-align: center;
            line-height: 30px;
            font-weight: bold;
            color: #fff;
            border-radius: 20px;
        }

        .progress-bar-animated {
            animation: progress 1s ease-in-out infinite;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .card-5 {
                width: 90%;
                padding: 20px;
            }

            .card-5 h2 {
                font-size: 1.5rem;
            }

            .progress-bar {
                font-size: 0.875rem;
            }
        }

        /* Footer Section */
        #footersection {
            margin-top: 50px;
            padding: 20px 0;
            text-align: center;
            background-color: #5f1178;
            color: #fff;
        }

        #footersection a {
            color: #fff;
            text-decoration: none;
        }

        #footersection a:hover {
            text-decoration: underline;
        }

        /* Animation for progress bars */
        @keyframes progress {
            0% { width: 0%; }
            100% { width: 100%; }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-5">
                    <h2><strong>Voting Results</strong></h2>
                    <hr>

                    <?php foreach($rs as $row): ?>
                        <div class="result-item">
                            <strong><?php echo $row['candidate']; ?> = <?php echo $row['result']; ?> votes</strong>
                            
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated"
                                     role="progressbar" 
                                     aria-valuenow="<?php echo $row['result']; ?>"
                                     aria-valuemin="0" 
                                     aria-valuemax="1000" 
                                     style="width: <?php echo ($row['result'] > 100) ? 100 : $row['result']; ?>%;">
                                    <?php echo $row['result']; ?>%
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div id="footersection">
        <p>2024 &copy; <a href="#">Uvote</a>. All rights reserved.</p>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

<?php include("footer.html"); ?>
