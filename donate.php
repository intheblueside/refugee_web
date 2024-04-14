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
        
        <title>Donate</title>

        <style>
            main {
            
            margin-top: 150px;
            }

            .ul-donation-info {
                list-style: none;
                padding-left: 2px;
                padding-right: 5px;
            }

            .ul-donation-info li {
                margin-bottom: 5px;
                margin-right: 10px; 
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
                                    
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donateModal">Donate Now</a>
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
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelOne">Volunteering with RefugeeRights</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <img class="image-fluid" src="images/happy.jpg" alt="happy children" style="width: 100%;" />
                        <p class="card-text">Volunteers are vital in our organizations, thus we welcome anyone who is willing to give us a lending hand! 
                            Applications are accepted on a rolling basis, with new volunteer advocate programs begin two to three times per year. 
                        </p>
                        <p><i><u>Open Volunteer Positions</u></i></p>
                        <ul>
                            <li> Volunteer Legal Advocate</li>
                            <li> Volunteer Support</li>
                            <li> Volunteer Communicatior</li>
                            <li> Volunteer Administrator</li>
                        </ul>
                        <p><i><u>Benefits of being a volunteer at RefugeeRights</u></i></p>
                        <ul>
                            <li> Play a key role in protecting and ensuring refugee rights</li>
                            <li> Sharpen your advocacy skills through daily interaction with clients</li>
                            <li>Understand the range of local, national, and international players in the human rights arena</li>
                        </ul>

                        <p>Interested individuals may send an email to <a href="#">refugeerights@example.com</a> </p>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--modal popup card 2-->
        <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="modalLabelOne" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelOne">Donate to RefugeeRights</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <img class="image-fluid" src="images/happy.jpg" alt="happy children" style="width: 100%;" />
                        <p class="card-text">Donate today, and save a life!
                        </p>
                        <p>You can support refugee rights by donating and giving refugees and their families access to safety and opportunity and also advancing transformative changes to the law that will benefit everyone.</p>
                        <a href="form.php" class="btn btn-primary">Donate Now</a>
                        <p>Other ways to donate:</p>
                        <ul class="ul-donation-info">
                            <li><i class="bi bi-pencil-square"></i> To donate via check, send a check made out to RefugeeRights to 35 Jalan Sakura, 4 Taman Sakura, Bayan Lepas, 11900 Penang</li>
                            <li><i class="bi bi-bar-chart"></i> To donate stocks or bonds to RefugeeRights, please email Melissa Zaidy our Director at <a href="#">mellissazaidy@example.com</a></li>
                            <li><i class="bi bi-heart-fill"></i> To donate second-hand items to RefugeeRights, please post it to our address or drop it in our office by <a href="contact.php">Contacting Us</a></li>
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--modal popup card 3-->
        <div class="modal fade" id="petitionModal" tabindex="-1" aria-labelledby="modalLabelOne" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelOne">Sign the petition</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <img class="image-fluid" src="images/happy.jpg" alt="happy children" style="width: 100%;" />
                        <p class="card-text">The right to petition permits us to ask government to take action to address a need or concern. While it doesn't guarantee a desired result
                            it does ensure a  level of participation in the democratic process.
                        </p>
                        <p>Add your name to the petition to support renewing the Malaysian commitment to refugees and a robust increase in annual refugee admissions.</p>
                        <p>Below are a few petition's that would love to get your support!</p>
                        <ul>
                            <li> Give Refugees the Right to Work in Malaysia -> <a href="https://www.change.org/p/the-government-of-malaysia-refugees-right-to-work-in-malaysia">Sign Here</a></li>
                            <li> Hold a referendum on the Refugee Convention referendum at the general election -> <a href="https://petition.parliament.uk/petitions/648938">Sign Here</a></li>
                            <li> Provide advocacy for refugees to protect them in court -> <a href="#">Sign Here</a></li>
                        </ul>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--modal popup card 4-->
        <div class="modal fade" id="partnerModal" tabindex="-1" aria-labelledby="modalLabelOne" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelOne">Partner with RefugeeRights</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <img class="image-fluid" src="images/happy.jpg" alt="happy children" style="width: 100%;" />
                        <p class="card-text">We know there are many people who share our passion for creating a world where all refugees can live safely, move freely, work and go to school. 
                            We want you to partner with us! Please see the sections below to explore possibilities:
                        </p>
                        <p><i>Funding</i></p>
                        <p>If you are a representative of a foundation or grant-making organization, please feel free to contact our Development Director
                            Melissa Zaidy, at <a href="#">melissazai@example.com</a> to discuss funding partnership opportunities to protect and advance refugee rights
                        </p>
                        <p><i>Education</i></p>
                        <p>If you are a teacher or lecturer teaching about refugee issues and would like to request a member of our team 
                            to share about our work or field questions from your students about refugee rights, feel free to get in touch with our HeadQuarters through our 
                            <a href="contact.php">Contact Us</a> page.
                        </p>
                        <p><i>Advocacy</i></p>
                        <p>We believe that significant, systemic change is needed in how we support people who have been forcibly displaced from their home countries. If you are a representative
                            of a human rights organization or group and would like to work on advocacy initiatives to advance changes, please <a href="contact.php">Contact Us</a>
                        </p>
                        <p><i>Media Appearancce</i></p>
                        <p>We are well versed at providing expert and on-the-ground insight into the issues that affect refugees and migrants.
                        If you are a journalist, radio host or podcast host and would like to interview a member of Asylum Access about our work
                        or about issues affecting refugees and migrants, please email us at <a href="#">refugeerights@example.com</a></p>
                        <p><i>Didn't find what you were looking for?</i></p>
                        <p>We are always looking for opportunities to partner with leading organizations that support refugees. 
                            Feel free to email us at <a href="#">refugeerights@example.com</a>
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