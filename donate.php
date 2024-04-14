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
                        <div class="card h-100">
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
                    <!--donate card-->
                    <div class="col-lg-3">
                        <div class="card h-100">
                            <img src="images/happy.jpg" class="card-img-top" alt="volunteer">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title">Donate</h5>
                                    <p class="card-text">By donating to RefugeeRights, you will provide refugees with ongoing relief and protection and help them regain hope for a better future.</p>
                                    
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donateModal">Learn More</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!--petition card-->
                    <div class="col-lg-3">
                        <div class="card h-100">
                            <img src="images/happy.jpg" class="card-img-top" alt="volunteer">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title">Sign the petition</h5>
                                    <p class="card-text">When a large number of people sign petitions to support refugees, it can create a sense of momentum and pressure 
                                        on the relevant authorities to take action</p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#petitionModal">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--partner card-->
                    <div class="col-lg-3">
                        <div class="card h-100">
                            <img src="images/happy.jpg" class="card-img-top" alt="volunteer">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title">Partner with us</h5>
                                    <p class="card-text">We know there are many people who share our passion for creating a world where all refugees can live safely, move freely, work and go to school. We want you to partner with us! </p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#partnerModal">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--modal popup card 1-->
        <div class="modal fade" id="volunteerModal" tabindex="-1" aria-labelledby="modalLabelOne" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelOne">Volunteering with RefugeeRights</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <img class="image-fluid" src="images/happy.jpg" alt="happy children" style="width: 100%;" />
                        <p class="card-text">yaya 
                        </p>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--modal popup card 2-->
        <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="modalLabelOne" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelOne">Donate to RefugeeRights</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <img class="image-fluid" src="images/happy.jpg" alt="happy children" style="width: 100%;" />
                        <p class="card-text">yaya 
                        </p>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--modal popup card 3-->
        <div class="modal fade" id="petitionModal" tabindex="-1" aria-labelledby="modalLabelOne" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelOne">Sign the petition</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <img class="image-fluid" src="images/happy.jpg" alt="happy children" style="width: 100%;" />
                        <p class="card-text">yaya 
                        </p>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--modal popup card 4-->
        <div class="modal fade" id="partnerModal" tabindex="-1" aria-labelledby="modalLabelOne" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelOne">Partner with RefugeeRights</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <img class="image-fluid" src="images/happy.jpg" alt="happy children" style="width: 100%;" />
                        <p class="card-text">yaya 
                        </p>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </main>


    <!-- footer -->
    <?php
        include 'footer.php';
    ?>

    </body>
</html>