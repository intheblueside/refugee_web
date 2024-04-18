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
        <title>Our Rights</title>

        <style>
            main {
            
            margin-top: 150px;
            }

            .button-quiz {
                color: #fff;
                border: none;
                background-color: #f255c6;
                font-size: 16px;
                border-radius: 10px;
                transition: background-color 0.3 ease;
                padding: 8px 10px; 
            }

            .button-quiz:hover {
                background-color: #0056b3; 
            }

            .button-submit {
                color: #fff;
                border: none;
                background-color: #04AA6D;
                font-size: 16px;
                border-radius: 10px;
                transition: background-color 0.3 ease;
                padding: 8px 10px; 
            }

            .button-submit:hover {
                background-color: #0056b3; 
            }

        </style>

    </head>
    <body>
        <!--include header-->
        <nav>
            <?php
                include 'base.php';
            ?>
        </nav>

        <!--main content-->
        <main>
            <h2 class="text-center display-4">Refugee Rights</h2>
            <section id="primary" class="content-area">
                <!--law-->
                <div class="container my-5">
                    <div class="row g-2">
                        <div class="col-lg-12">
                            <h3>What Rights Do Refugees Have?</h3>
                            <p style="text-align: justify;">Refugee law and internation human rights law are closely interwined; refugees are fleeing governemnts that are
                            either unable of unwilling to protect their basic human rights. Additionally, refugee law also intersects
                            with internation humanitarian law.
                            </p>

                            <!--law 1-->
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <h4>UNIVERSAL DECLARATION OF HUMAN RIGHTS</h4>
                                    <p>The <a href="https://www.un.org/en/about-us/universal-declaration-of-human-rights" target="_blank">Universal Declaration of Human Rights (Article 14)</a>, which states that everyone has the right to 
                                        seek and enjoy asylum from persecution in other countries. There are 30 Article's the Human Rights which all says that everyone is entitled to be treated as a human. Some article's below:
                                    </p>
                                    <!--accordian-->
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <strong>Article 1</strong> 
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            All human beings are born free and equal in dignity and rights. They are endowed with reason and conscience and should act towards one another in a spirit of brotherhood.
                                            </div>
                                        </div>
                                        </div>
                                        <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <strong>Article 2</strong> 
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            Everyone is entitled to all the rights and freedoms set forth in this Declaration, without distinction of any kind
                                            </div>
                                        </div>
                                        </div>
                                        <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <strong>Article 3</strong> 
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            Everyone has the right to life, liberty and security of person. 
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                    <a href="https://www.un.org/en/about-us/universal-declaration-of-human-rights" target="_blank" class="btn btn-primary">Learn More</a>
                                    </div>
                                </div>
                            </div>

                            <!--law 2-->
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <h4>UN REFUGEE PROTOCOL</h4>
                                    <p>The 1951 <a href="https://www.unhcr.org/my/about-unhcr/who-we-are/1951-refugee-convention" target="_blank">UN Refugee Convention </a>, (and its 1967 Protocol), which 
                                    protects refugees from being returned to countries where they risk being persecuted
                                    </p>

                                    <!--accordian-->
                                    <div class="accordion" id="accordionExample2">
                                        <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            <strong>Core Principles</strong>
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                The core principle of the 1951 Convention is non-refoulement, which asserts that a refugee should not be returned to a country where they face serious threats to their life or freedom.
                                            </div>
                                        </div>
                                        </div>
                                        <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                <strong>Rights in the 1951 Convention</strong> 
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                            <ul>
                                                <li>The right not to be expelled, except under certain, strictly defined conditions (Article 32)</li>
                                                <li>The right not to be punished for irregular entry into the territory of a contracting State (Article 31)</li>
                                                <li>The right to non-discrimination (Articles 3 and 5)</li>
                                                <li>The right to freedom of religion (Article 4) </li>
                                                <li>The right to access to justice (Article 16)</li>
                                            </ul>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                <strong>List of Countries in the Convention</strong> 
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                To date, 146 countries are party to the 1951 Convention, and 147 to the 1967 Protocol<br>
                                                <a target="_blank" href="https://treaties.un.org/pages/ViewDetailsII.aspx?src=TREATY&mtdsg_no=V-2&chapter=5&Temp=mtdsg2&clang=_en">View here</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                    <a href="https://www.unhcr.org/my/about-unhcr/who-we-are/1951-refugee-convention" target="_blank" class="btn btn-primary">Learn More</a>
                                    </div>
                                </div>
                            </div>

                            <!--law 3-->

                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <h4>MIGRANT WORKER RIGHTS</h4>
                                    <p>The <a href="https://www.ohchr.org/en/instruments-mechanisms/instruments/international-convention-protection-rights-all-migrant-workers" target="_blank">1990 Migrant Workers Rights </a> which 
                                    protects migrants and their families. At present there are a total of 93 Article for this Convention Right. Below are some examples: 
                                    </p>

                                    <!--accordian 3-->
                                    <div class="accordion" id="accordionExample3">
                                        <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSeven">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            <strong>Article 10</strong>
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                No migrant worker or member of his or her family shall be subjected to torture or to cruel, inhuman or degrading treatment or punishment.
                                            </div>
                                        </div>
                                        </div>
                                        <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEight">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                <strong>Article 24</strong> 
                                            </button>
                                        </h2>
                                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                Every migrant worker and every member of his or her family shall have the right to recognition everywhere as a person before the law.
                                            </div>
                                        </div>
                                        </div>
                                        <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingNine">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                <strong>Article 47</strong> 
                                            </button>
                                        </h2>
                                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                Migrant workers shall have the right to transfer their earnings and savings, in particular those funds necessary for the support of their families.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                    <a href="https://www.ohchr.org/en/instruments-mechanisms/instruments/international-convention-protection-rights-all-migrant-workers" target="_blank" class="btn btn-primary">Learn More</a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        </div>
                    </div>
                  
                    </div>
                </div>
            </section>

            <!--quiz-->
            <section>
                <div class="container my-2" style="background-color: #f7e4f4;" >
                    <div class="row g-2">
                        <div class="col-lg-12 mb-4">
                            <h5>Take this short quiz to check your understanding!</h5>
                            <button id="quiz-btn" class="button-quiz">Start Quiz</button>
                            <!--form with php-->
                            <div id="quiz" style="display:none;">
                                <form id="quizForm" method="post" action="quiz.php">
                                    <!-- Quiz questions and options -->
                                    <div class="question mt-4">
                                        <h6>Why is the 1990 Migrant Workers Rights Important?</h6>
                                        <input type="radio" name="q1" value="q1-1"> To allow migrants to be tortured at work<br>
                                        <input type="radio" name="q1" value="q1-2"> To ensure migrants do not work<br>
                                        <input type="radio" name="q1" value="q1-3"> To protect the jobs for migrants and their families<br>    
                                    </div>
                                    
                                    <div class="question-two mt-4">
                                        <h6>Which country did not sign the 1951 Refugee Convention?</h6>
                                        <input type="radio" name="q2" value="q2-1"> India<br>
                                        <input type="radio" name="q2" value="q2-2"> Morocco<br>
                                        <input type="radio" name="q2" value="q2-3"> Bulgaria<br>
                                    </div>

                                    <div class="question-three mt-4">
                                        <h6>The Universal Declaration of Human Rights has how many articles?</h6>
                                        <input type="radio" name="q3" value="q3-1"> 93 Articles <br>
                                        <input type="radio" name="q3" value="q3-2"> 30 Articles <br>
                                        <input type="radio" name="q3" value="q3-3"> 60 Articles <br>
                                    </div>

                                    <div class="question-four mt-4">
                                        <h6>Which of the following is not the core principle for the UN Refugee Protocol?</h6>
                                        <input type="radio" name="q4" value="q4-1"> A refugee should not be returned to a country where they face serious threats<br>
                                        <input type="radio" name="q4" value="q4-2"> A refugee should be given the chance to return to the country that does not provide freedom<br>
                                        <input type="radio" name="q4" value="q4-3"> A refugee should be allowed to seek asylum from persecution in other countries<br>
                                    </div>

                                    <!-- submit button -->
                                    <div class="mt-4">
                                        <button type="submit" id="submitQuiz" class="button-submit">Submit Quiz</button>
                                    </div>
                                    
                                </form>
                            </div>

                        </div>
                        
                    </div>

                    <!-- modal pop up for results -->
                    <div id="quizModal" class="modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Quiz Results</h5>
                                    <button type="button" class="btn-close" onclick="closeModal()" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p id="quizResult"></p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>


            <script>
                function closeModal() {
                    document.getElementById("quizModal").style.display = "none";
                    
                }

                const startQuiz = document.getElementById("quiz-btn");
                const sectionQuiz = document.getElementById("quiz");

                // open quiz section
                startQuiz.addEventListener("click", function() {
                    sectionQuiz.style.display = "block";
                    // hide button when section display
                    startQuiz.style.display = "none";
                });
            
                // pass data to quiz php and show modal
                document.getElementById("quizForm").addEventListener("submit", function(event) {
                    event.preventDefault();
                    var formData = new FormData(this);
            
                    fetch("quiz.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById("quizResult").textContent = data.result;
                        document.getElementById("quizModal").style.display = "block";
                    })
                    .catch(error => console.error('Error:', error));
                });
            </script>

        </main>

        <footer>
            <!--include footer php-->
            <?php 
                include 'footer.php';
            ?>
        </footer>

    </body>
</html>