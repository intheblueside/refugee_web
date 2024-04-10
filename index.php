<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap ver 5-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
        <title>Home Page</title>

        <style>
            * {box-sizing: border-box;}
            body {font-family: Helvetica, sans-serif;}
            .mySlider {display:none;}
            img {vertical-align: middle;}

            /* Slideshow container */
            .slideshow-container {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
            margin: auto;
            }

            /* Caption text */
            .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            height: 8px;
            width: 8px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }
            h2 {text-align: center;}
        </style>

    </head>
    <body>
        <!--header-->
        <?php
            include 'base.php';
        ?>
        
        <main>
            <!--main image slideshow-->
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="r1.jpg" alt="test1" style="width:100%">
                        
                </div>
                <div class="mySlides fade">
                    <img src="r2.jpg" alt="test2" style="width:100%">
                        
                </div>
                <div class="mySlides fade">
                    <img src="r3.jpg" alt="test3" style="width:100%">
                        
                </div>
            </div>

            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

            <!--section for more info-->

            <section>
                <h2>Over 26 million people have fled violence <br>or prosecution in their homecountry</h2>
                <br><br>
                <div class="container px-4">
                    <div class="row gx-5">
                    <!--small heading 1-->
                        <div class="col-md mb-5">
                            <div class="thumbnail" style="border:none; background:white;">
                                <div class="col-md-4 image-fluid">
                                    <img src="r4.jpg" alt="refugee image" style="height:200px; margin-left:-15px;" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md mb-5">
                            <h4 class="mb-5">Who are refugees?</h4>
                            <p>Refugees are people who have been forced to flee their home country because of feared persecution, conflict, violence, or other circumstances.</p>
                        </div>
              
               
                    </div>

                    <div class="row gx-5">
                        <!--small heading 2-->
                        <div class="col-md mb-5">
                            <h4 class="mb-5">Why should we help them?</h4>
                            <p>Without livelihood opportunities to help them earn income, refugees struggle to purchase even the most basic necessities, including the food they need to keep their families healthy and strong.
                                Even donating the smallest thing could benefit refugees tremendously
                            </p>
                        </div>
                        <div class="col-md mb-5">
                            <div class="thumbnail" style="border:none; background:white;">
                                <div class="col-md-4 image-fluid">
                                    <img src="r5.jpg" alt="man helping refugees" style="height:200px; margin-left:-15px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>


            </section>
        </main>
        
        
        <!--js for slideshow-->
        <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
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