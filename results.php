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
            
            margin-top: 50px;
            
            }

            .results {
                background-color: lavender;
            }

            h5 {
                font-size: 16px;
                font-family: Helvetica, sans-serif;
            }

            @media print {
                .btn{ 
                    visibility: hidden;
                }
            }

        </style>

    </head>
    <body>
        
        <?php
            
        // retrieve form data from URL parameters
        $first = $_GET['firstname'] ?? '';
        $last = $_GET['lastname'] ?? '';
        $email = $_GET['email'] ?? '';
        $contact = $_GET['contact'] ?? '';
        $suffix = $_GET['suffix'] ?? '';
        $how = $_GET['how'] ?? '';
        $comment = $_GET['comment'] ?? '';
        $amount = $_GET['amount'] ?? ''; 
        
        ?>
        
        <main>

            <div class="container">
                <div class="row results px-4">
                    <div class="col-lg-12">
                        <h2 class="text-center">Thank you for your donation to RefugeeRights</h2>
                        <h4 class="text-center">We are sure that this donation will be very beneficial for our refugees.</h4>
                        <p>Below are the details we received:</p><hr>

                        <h5>First Name: <?php echo $first ?> </h5>
                        <h5>Last Name: <?php echo $last ?> </h5>
                        <h5>Email   : <?php echo $email ?> </h5>
                        <h5>Contact No: <?php echo $contact ?></h5>
                        <h5>Amount donated: <?php echo $amount ?> MYR</h5>

                        <hr>
                        <div class="mb-3">
                            <button onclick="window.print()" class="btn btn-primary">Print Summary</button>
                            <a href="index.php" class="btn btn-secondary">Close</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>

        <script>
        
        </script>

        
    </body>
</html>