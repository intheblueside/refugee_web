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
        
        <title>Refugee Crisis</title>

        <style>
            main {
    
            margin-top: 150px;
            }

            #crisis-p {
                font-size: 20px;
                margin-bottom: 30px;
            }

            .btn-donate {
                background-color: #f44336; 
                color: white;
                border: none; 
                padding: 10px 20px; 
                border-radius: 25px;
                font-family: Helvetica, sans-serif; 
                font-size: 18px; 
                text-decoration: none; 
                cursor: pointer; 
                transition: background-color 0.3s, color 0.3s; 
            }

            .btn-donate:hover {
                background-color: #d32f2f; 
                color: white; 
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); 
            }

            @media (min-width: 768px) {
                .btn-donate {
                    font-size: 20px; 
                    padding: 15px 30px; 
                }
            }

            #myBtn {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 20px;
                
            }

            .btn-more {
                font-family: Helvetica, sans-serif;
                background-color: #f255c6; 
                color: #fff; 
                border: none; 
                padding: 10px 20px; 
                border-radius: 5px; 
                transition: background-color 0.3s ease; 
            }

            .btn-more:hover {
                background-color: #e002a2; 
                color: #fff;
            }

        </style>

    </head>
    <body>
        <!--header-->
        <?php
            include 'base.php';
        ?>
        
        <main>
            <div class="container my-5">
                <div class="row g-2">

                    <div class="col-lg-12">
                
                        <h2 class="text-center display-4 p-2">What Refugee Crisis is Happening in the World Right Now?</h2>
                        <p class="text-center mx-auto" id="crisis-p">In today's world, numerous humanitarian crises demand our attention, emphasizing the vital need for us to extend a helping hand wherever we can. 
                            After all, who else but humans can truly understand and aid fellow humans in times of need?</p>
                            
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <h4>Myanmar</h4>
                                <div class="col-md-4 p-2">
                                    <img class="mx-auto d-block" src="images/malaysia.webp" alt="syrian refugees" style="width: 100%;" />  
                                </div>
                                <ul>
                                    <li>Number of refugees: 1.2 million</li>
                                    <li>Number of internally displaced people: 1.3 million</li>
                                </ul>
                                <p>The Rohingya people are an ethnic minority group in Myanmar. Since the early 1990s, they have faced discrimination and violence, forcing many to flee the country. Myanmar's government considers them
                                    illegal immigrants from Bangladesh. 
                                    Since 2017, 773000 Rohingya refugees have fled to Bangladesh to escape the escalating violence in Myanmar's Rakhine state. The vast majority settled in refugee camps in Cox's Bazar. 
                                </p>
                                
                                <div class="mt-3">
                                    <a href="https://reporting.unhcr.org/operational/situations/myanmar-situation" target="_blank" class="btn-more">Learn More  <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </div>
                        
                            </div>
                        </div>
                        <!--crisis 2-->

                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <h4>Syria</h4>
                                <div class="col-md-4 p-2">
                                    <img class="mx-auto d-block" src="images/syria.jpg" alt="syrian refugees" style="width: 100%;" />  
                                </div>
                                <ul>
                                    <li>Number of refugees: 5.4 million</li>
                                    <li>Number of internally displaced people: 6.9 million</li>
                                </ul>
                                <p>Syria continues to be the worlds largest refugee crisis as we enter 2024, representing nearly 25% of the total global refugee population. As of mid-2023, 6.49 million Syrians 
                                    have sought refuge, primarily in Lebanon, Jordan, Iraq, Egypt, and Türkiye. In Lebanon, there are no formal camps, which leaves its population of over 1 million Syrians living across 2,000 communities, 
                                    often in overcrowded temporary shelters. 
                                </p>
                            
                                <div class="mt-3">
                                    <a href="https://www.unrefugees.org/news/syria-refugee-crisis-explained/" target="_blank" class="btn-more">Learn More  <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </div>
                        
                            </div>
                        </div>

                        <!--crisis 3-->

                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <h4>Ukraine</h4>
                                <div class="col-md-4 p-2">
                                    <img class="mx-auto d-block" src="images/ukr.webp" alt="ukraine refugees" style="width: 100%;" />  
                                </div>
                                <ul>
                                    <li>Number of refugees: 3.7 million</li>
                                    <li>Number of internally displaced people: 4.9 million</li>
                                </ul>
                                <p>In February 2022, escalated conflict in Ukraine led to a full humanitarian crisis that has displaced over 5.8 million refugees in the last two years. This is more than 13% of the 
                                    countrys population, and just under 20% of the world's global refugee population. 
                                    According to official statistics, about 1.1 million Ukrainian refugees currently reside in Germany. 
                                </p>
                                <div class="mt-3">
                                    <a href="https://www.unrefugees.org/emergencies/ukraine/" target="_blank" class="btn-more">Learn More  <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </div>
                        
                            </div>
                        </div>

                        <!--crisis 4-->

                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <h4>Yemen</h4>
                                <div class="col-md-4 p-2">
                                    <img class="mx-auto d-block" src="images/yemen.jpg" alt="yemen refugees" style="width: 100%;" />  
                                </div>
                                <ul>
                                    <li>Number of refugees: 141 308 </li>
                                    <li>Number of internally displaced people: 4 million</li>
                                </ul>
                                <p>Since conflict erupted in Yemen in 2015, 200,000 people have fled the country and approximately 4 million have become internally displaced. 
                                    An estimated 20.7 million people are in dire need of humanitarian assistance.
                                    Yemen is facing the worst humanitarian crises in the world today. Even so, the country still hosts more than 200,000 refugees from neighbouring Somalia and Ethiopia. 
                                </p>
                                <div class="mt-3">
                                    <a href="https://www.unrefugees.org/emergencies/yemen/" target="_blank" class="btn-more">Learn More  <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </div>
                        
                            </div>
                        </div>

                        <!--crisis 5-->

                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <h4>Afghanistan</h4>
                                <div class="col-md-4 p-2">
                                    <img class="mx-auto d-block" src="images/afgan.jpg" alt="afgan refugees" style="width: 100%;" />  
                                </div>
                                <ul>
                                    <li>Number of refugees: 2.8 million</li>
                                    <li>Number of internally displaced people: 2.9 million</li>
                                </ul>
                                <p>Afghanistan has endured a two-decade conflict, economic hardship and climate-related challenges. As a result, more than 2.8 million people have 
                                    fled the country, with 90 per cent hosted by Iran and Pakistan, and the rest going to different countries in Europe and elsewhere. 
                                    Although 5.3 million refugees have returned to Afghanistan since 2002, the number of Afghans going back home has sharply declined in recent times. 
                                    One major contributor to this is the increase in violence across the country.n 2021, the latest surge of violence in Afghanistan has forced another 600,000 people to flee their homes. 
                                    Of all recently displaced Afghans, 80 per cent are women and children.  

                                </p>
                                <div class="mt-3">
                                    <a href="https://www.unhcr.org/countries/afghanistan" target="_blank" class="btn-more">Learn More  <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </div>
                        
                            </div>
                        </div>


                        <div class="row p-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <div>
                                    <a href="form.php" class="btn-donate">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--button scroll up-->
            <button onclick="topFunction()" class="btn btn-danger btn-floating btn-lg" id="myBtn" title="Go to top"><i class="bi bi-arrow-up"></i></button>
            
        </main>

        <script>
            // button id        
            let mybutton = document.getElementById("myBtn");

            // show button when user scrolls
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        

        <!--footer take file-->
        <footer>
            <?php 
                include 'footer.php';
            ?>
        </footer>
        
    </body>
</html>