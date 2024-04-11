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
            <h2 class="text-center display-4">Refugee Stories</h2>
            <p class="text-center mx-auto">Refugee stories often encapsulate the resilience and courage of individuals forced to flee their homes due to 
                conflict or persecution. Through their narratives, they shed light on the human spirit's ability to endure adversity and find hope amidst unimaginable 
                challenges.
            </p>
            <div class="container">
                
                <!--card 1-->
                <div class="card mb-4 p-3">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-4">
                            <a href="#" class="image-link1">
                                <img class="mx-auto d-block" src="images/daniel.webp" alt="image of man" style="width: 50%;" />
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body d-flex flex-column justify-content-center h-100">
                                <h4 class="card-title">Daniel's Story</h4>
                                <p class="card-text">Daniel was a teacher at a university in Ethiopia. He is now a permanent resident in Australia but his wife and children are still in Ethiopia</p>
                                <button type="button" class="btn btn-primary" id="read-more-button1" data-bs-toggle="modal" data-bs-target="#modalOne">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--card 2-->
                <div class="card mb-4 p-3">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-4">
                            <a href="#" class="image-link2">
                                <img class="image-fluid" src="images/sabri.jpg" alt="image of man" style="width: 100%;" />
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body d-flex flex-column justify-content-center h-100">
                                <h4 class="card-title">Sabri's Story</h4>
                                <p class="card-text">Sabri fled his home in Aleppo, Syria and is currently living in Paiania, Greece. Sabri is 16 years old</p>
                                <button type="button" class="btn btn-primary" id="read-more-button2" data-bs-toggle="modal" data-bs-target="#modalTwo">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!--card 3-->
                <div class="card mb-4 p-3">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-4">
                            <a href="#" class="image-link3">
                                <img class="mx-auto d-block" src="images/sag.jpg" alt="image of woman" style="width: 65%;" />
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body d-flex flex-column justify-content-center h-100">
                                <h4 class="card-title">Sagheera's Story</h4>
                                <p class="card-text">Sagheera is a refugee from Syria and came with her husband and 2 children to seek a brighter and safer future for her family.</p>
                                <button type="button" class="btn btn-primary" id="read-more-button3" data-bs-toggle="modal" data-bs-target="#modalThree">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--videos embeded youtube-->
                <h4 class="text-center mb-4">Further Videos to Learn More about refugees</h4>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <iframe width="420" height="345" src="https://www.youtube.com/embed/8bEK6gytwec?si=U-VlUWBeumj-tlLB">
                        </iframe>
                    </div>
                    <div class="col-md-6 mb-4">
                        <iframe width="420" height="345" src="https://www.youtube.com/embed/hiujzFNgHcE?si=l9oXubQoZPX-xgce">
                        </iframe>
                    </div>
                </div>
            </div>


            <!--modal popup card 1-->
            <div class="modal fade" id="modalOne" tabindex="-1" aria-labelledby="modalLabelOne" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabelOne">Daniel's Story</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                        <div class="modal-body">
                            <img class="image-fluid" src="images/daniel.webp" alt="man refugee" style="width: 100%;" />
                            <p class="card-text">Daniel was a teacher from Ethiopia, married his wife in 2005 and was gifted with 4 children.
                                At one point there were a lot of protests against the governemnt which led to teachers there being arrested.
                                Daniel was terrified what would happen to him and planned to fled to Australia. In 2013, he applied for a student visa and
                                went to Australia. He planned to live for a short time there, yet things got worse as his best friend was tortured and killed in 
                                prison. He attended a memorial for his friend in Melbourne and someone took photos of Daniel there and put them online. He knew then that it wasn not yet 
                                safe for him to go home and had to apply for asylum.
                                <br>Now he is a permanent resident and works in Australia while his family are in Ethiopia. He hasnt seen them in four years. 
                            </p>
                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--modal popup card 2-->
            <div class="modal fade" id="modalTwo" tabindex="-1" aria-labelledby="modalLabelTwo" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabelTwo">Sabri's Story</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                        <div class="modal-body">
                            <img class="image-fluid" src="images/sabri.jpg" alt="man refugee" style="width: 100%;" />
                            <p class="card-text">Sabri fled his home in Aleppo, Syria and is currently living in Paiania, Greece. 
                                Sabri shared his story with us through Emfasis, a Greek organization responding to the needs of Syrian refugees in Greece and implementing 
                                a photography project to help Syrian children address psychological problems. Sabri is 16 years old.
                            </p>
                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--modal popup card 3-->
            <div class="modal fade" id="modalThree" tabindex="-1" aria-labelledby="modalLabelThree" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabelThree">Sagheera's Story</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                        <div class="modal-body">
                            <img class="image-fluid" src="images/sag.jpg" alt="woman refugee" style="width: 100%;" />
                            <p class="card-text">Sagheera is a refugee from Syria and came with her husband and 2 children to seek a brighter and safer future for her family.
                                Sagheera and her family waited 9 years in a refugee camp before they were able to come to the United States in Spring 2022.
                                Sagheera was not allowed to go to school when she was growing up and had been mocked often because she was illiterate, 
                                and was afraid other students would be unkind to her. Now she is studying with students who are also learning to read for the first time
                                and feels optimistic for their opportunities and hopes that all refugees have the same chance to be resettled and have a bright future like her family does now.
                            </p>
                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
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

        <!--js-->
        <script>
            // to trigger modal
            document.addEventListener("DOMContentLoaded", function () {
                const imageLink1 = document.querySelector(".image-link1");
                const imageLink2 = document.querySelector(".image-link2");
                const imageLink3 = document.querySelector(".image-link3");
                
                const learnMoreButton1 = document.getElementById("read-more-button1");
                const learnMoreButton2 = document.getElementById("read-more-button2");
                const learnMoreButton3 = document.getElementById("read-more-button3");
                
                const modal1 = new bootstrap.Modal(document.getElementById("modalOne"));
                const modal2 = new bootstrap.Modal(document.getElementById("modalTwo"))
                const modal3 = new bootstrap.Modal(document.getElementById("modalThree"))
        
                imageLink1.addEventListener("click", function (event) {
                    event.preventDefault();
                    modal1.show();
                });

                imageLink2.addEventListener("click", function (event) {
                    event.preventDefault();
                    modal2.show();
                });

                imageLink3.addEventListener("click", function (event) {
                    event.preventDefault();
                    modal3.show();
                });
        
                learnMoreButton1.addEventListener("click", function () {
                    modal1.show();
                });
                learnMoreButton2.addEventListener("click", function () {
                    modal2.show();
                });
                learnMoreButton3.addEventListener("click", function () {
                    modal3.show();
                });
            });
        </script>

    </body>
</html>