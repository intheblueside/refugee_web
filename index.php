<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap ver 5-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
        <!--custom css-->
        <link rel="stylesheet" href="styles.css" >
        <title>Home Page</title>

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

                <a class="prev" onclick="plusSlides(-1)"> ❮ </a>
                <a class="next" onclick="plusSlides(1)"> ❯ </a>

            </div>

            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            <!--section for more info-->

            <section>
                <h2 class="text-center mb-4">Over 26 million people have fled violence <br>or prosecution in their homecountry</h2>
                <br><br>
                <div class="container px-4">
                    <div class="row align-items-center">
                    <!--small heading 1-->
                        <div class="col-md mb-5">
                            <div class="thumbnail" style="border:none; background:white;">
                                <div class="col-md-4 image-fluid">
                                    <img src="r4.jpg" alt="refugee image" style="max-height:300px; margin-left:-15px;" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md mb-5">
                            <h4 class="mb-3">Who are refugees?</h4>
                            <p>Refugees are people who have been forced to flee their home country because of feared persecution, conflict, violence, or other circumstances.</p>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button" value="Learn More" onclick="stories.php">Learn More</button>
                            </div>
                        </div>
              
               
                    </div>

                    <div class="row align-items-center">
                        <!--small heading 2-->
                        <div class="col-md mb-5">
                            <h4 class="mb-5">Why should we help them?</h4>
                            <p>Without livelihood opportunities to help them earn income, refugees struggle to purchase even the most basic necessities, including the food they need to keep their families healthy and strong.
                                Even donating the smallest thing could benefit refugees tremendously
                            </p>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button">Donate Now</button>
                            </div>
                        </div>
                        <div class="col-md mb-5">
                            <div class="thumbnail" style="border:none; background:white;">
                                <div class="col-md-4 image-fluid">
                                    <img src="r5.jpg" alt="man helping refugees" style="max-height:300px; margin-left:-15px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>


            </section>
        </main>
        
        
        <!--js for slideshow-->
        <script>
        let slideIndex = 1;

        showSlides(slideIndex);

        function plusSlides(n){
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            
            /*if (n < 1) {slideIndex = slides.length}*/
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // change slide img every 2 sec

            // function for opening new page
            function openPage() {

            }

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