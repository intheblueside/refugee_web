<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap ver 5-->
        <!--bootstrap ver 5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <title>Results</title>

        <style>
            main {
            
            margin-top: 150px;
            }
        </style>

    </head>
    <body>
        
        <?php
            
        // Retrieve form data from URL parameters
        $first = $_GET['firstname'] ?? '';
        $last = $_GET['lastname'] ?? '';
        $email = $_GET['email'] ?? '';
        $contact = $_GET['contact'] ?? '';
        $suffix = $_GET['suffix'] ?? '';
        $how = $_GET['how'] ?? '';
        $comment = $_GET['comment'] ?? '';


        ?>
        
        <main>

            <div class="container mt-5">
                <h1>Form Submission Results</h1>
                <p>Below are the details submitted:</p>

                <h2>First Name: <?php echo $first ?> </h2>
                <h2>Last Name: <?php echo $last ?> </h2>
                <h2>Email   : <?php echo $email ?> </h2>

                <div class="mt-3">
                    <button onclick="window.print()" class="btn btn-primary">Print</button>
                    <a href="index.php" class="btn btn-secondary">Close</a>
                </div>
            </div>
            
        </main>

        <script>
        
        </script>

        
    </body>
</html>