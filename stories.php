<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap ver 5-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
        <title>Our Stories</title>

        <style>
            main {
            
            margin-top: 150px;
            }

        </style>
    </head>

    <body>
       <!--header-->
       <?php
            include 'base.php';
        ?>
        <main>
            <h2 class="text-center">Refugee Stories</h2>
            <div class="container">
                
                <!--card-->
                <div class="card">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <a href="#" class="image-link">
                                <img class="image-fluid" src="daniel.jpg" alt="image of man" style="width: 100%;" />
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body d-flex flex-column justify-content-center h-100">
                                <h4 class="card-title">Daniel's Story</h4>
                                <p class="card-text">Daniel was a teacher at a university in Ethiopia. He is now a permanent resident in Australia but his wife and children are still in Ethiopia</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                    
                
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <iframe width="420" height="345" src="https://www.youtube.com/embed/8bEK6gytwec?si=U-VlUWBeumj-tlLB">
                        </iframe>
                    </div>
                </div>
            </div>
        </main>

        <!--footer take file-->
        <footer>
            <?php 
                include 'footer.php';
            ?>
        </footer>

    </body>
</html>