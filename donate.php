<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap ver 5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
        <title>Donate</title>

        <style>
            main {
            
            margin-top: 150px;
            }
        </style>

    </head>

    <body>

    <!--header -->
    <?php
        include 'base.php';
    ?>

    <main>
        <h2 class="text-center display-4">Help Refugees</h2>
            <!--section main heading-->
        <section id="primary" class="content-area">
            <div class="container my-5">
                <div class="row g-2">
                    <div class="col-lg-12">
                        <h5>You can support refugee rights by donating to RefugeeRights, giving refugees the help for safety
                                and opportunity and also bringing them closer to their freedom
                        </h5><hr>
                        <div class="image-fluid">
                            <img src="images/happy.jpg" alt="happy refugee children" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--section donation-->
        <section>
            <div class="container my-5">
                <div class="row g-2">
                    <!--volunteer card-->
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="images/happy.jpg" class="card-img-top" alt="volunteer">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title">Volunteer with us</h5>
                                    <p class="card-text">Volunteers fill vital roles in our national organizations. They offer support to forcibly displaced clients on stages both large and small 
                                        providing advice, encouragement and solidarity in the face of country-wide discrimination. </p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#volunteerModal">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--volunteer card-->
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="images/happy.jpg" class="card-img-top" alt="volunteer">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title">Donate</h5>
                                    <p class="card-text">yaydayaydaydya</p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#volunteerModal">Learn More</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!--volunteer card-->
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="images/happy.jpg" class="card-img-top" alt="volunteer">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title">Sign the petition</h5>
                                    <p class="card-text">yaydayaydaydya</p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#volunteerModal">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--volunteer card-->
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="images/happy.jpg" class="card-img-top" alt="volunteer">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title">Partner with us</h5>
                                    <p class="card-text">yaydayaydaydya</p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#volunteerModal">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>


    <!-- footer -->
    <?php
        include 'footer.php';
    ?>

    </body>
</html>