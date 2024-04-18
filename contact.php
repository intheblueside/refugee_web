<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap ver 5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <title>Contact Us</title>

        <style>
            main {
            
            margin-top: 150px;
            }

            .ul-location-info {
                list-style: none;
                padding-left: 2px;
                padding-right: 5px;
            }

            .ul-location-info li {
                margin-bottom: 5px;
                margin-right: 10px; 
            }

            .ul-refugee-cont li {
                margin-bottom: 15px;
            }

            .card.shadow:hover {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            }

            .card-body {
                padding: 30px;
            }

            .card-title {
                color: #333;
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 15px;
            }

            .card-text {
                color: #666;
                font-size: 18px;
                margin-bottom: 10px;
            }

            /* Responsive styles */
            @media (max-width: 768px) {
                .card-body {
                    padding: 20px;
                }

                .card-title {
                    font-size: 20px;
                }

                .card-text {
                    font-size: 16px;
                }
            }

            #contact-p {
                font-size: 20px;
                margin-bottom: 30px;
            }

        </style>

    </head>

    <body>

    <!--header -->
    <?php
        include 'base.php';
    ?>

    <main>
        <h2 class="text-center display-4">Contact Us</h2>
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <p class="text-center" id="contact-p"><i>We would love to hear from you, feel free to contact us via any methods as listed below</i></p>
                    <hr>
                    <div class="image-fluid">
                        <img src="images/contact.jpg" src="woman calling" style="width: 100%;">
                    </div>
                    
                </div>
            </div>

            <div class="row mt-4">
                <!--section refugee-->
                <section>
                    <h4>Are you a refugee?</h4>
                    <ul class="ul-refugee-cont">
                        <li>Please contact our national organization directly by email, phone, or in person.</li>
                        <li>If you are planning on immigration, please visit the <a href="https://www.lawofficemalaysia.com/immigrate-to-malaysia" target="_blank">Immigration Law Help</a> website for more resources.</li>
                        <li>If you want to apply for an asylum, please contact <a href="https://help.unhcr.org/caribbean/asylum/unhcr/" target="_blank">UNHCR</a> for furthur details</li>
                    </ul>
                    <hr>
                </section>
            </div>
        </div>
            <!--section volunteer-->
            <section id="primary" class="content-area">
                <div class="container my-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- maps location -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254234.33665716046!2d100.36300209999999!3d5.354003950000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304a9403095390dd%3A0x29c305a5f38f633f!2sPenang!5e0!3m2!1sen!2smy!4v1713014056991!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-lg-6">
                            <!-- location details -->
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title">RefugeeRights HeadQuarters</h5>
                                    <ul class="ul-location-info row">
                                        <li class="col-12 col-sm-12"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i>  35 Jalan Sakura 4, Taman Sakura, 11900 Bayan Lepas, Penang, Malaysia</li>
                                        <li class="col-12 col-sm-12 col-md-6"><i class="bi bi-telephone-fill" aria-hidden="true"></i><a href="tel:(60) 11 123456789">  (60) 11 12345 6789</a></li>
                                        <li class="col-12 col-sm-12"><i class="bi bi-envelope-fill" aria-hidden="true"></i><a href="mailto:refugeerights@example.com">  refugeerights@example.com</a></li>
                                    </ul>
                                    
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