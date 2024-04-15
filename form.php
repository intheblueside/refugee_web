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
        
        <title>Donate For Refugees</title>

        <style>
            .error {
            color: #FF0000;
            margin-top: 0.25rem;
            font-size: 0.875rem;
            }

            .form-group.row {
                margin-bottom: 1rem; /* Adjust as needed */
            }

            .form-group.row .col-sm-3 {
                text-align: right;
                padding-top: calc(0.375rem + 1px); /* To vertically center the label */
            }
            .row {
                background-color: lavenderblush;
            }

            button {
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                transition-duration: 0.4s;
                cursor: pointer;
                
            }

            .button-type-1, .button-type-2, .button-am-1, .button-am-2, .button-am-3, .button-am-4, .button-am-5 {
                background-color: white; 
                color: black; 
                border: 2px solid maroon;
            }

            .button-type-1:hover, .button-type-2:hover, .button-am-1:hover, .button-am-2:hover, .button-am-3:hover, .button-am-4:hover, .button-am-5:hover {
                background-color: maroon; 
                color: white; 
            }

            .button-type-2:clicked {
                background-color: maroon; 
                color: white; 
            }


        </style>
    </head>

    <body>

    <?php
    $firstErr = $lastErr = $emailErr = $contactErr = $suffixErr = $howErr = $checkErr = "";
    $first = $last = $email = $contact = $suffix = $how = $checkbox = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["firstname"])) {
            $firstErr = "First Name is required!!";
        } else {
            $first = test_input($_POST["firstname"]);
        }

        if (empty($_POST["lastname"])) {
            $lastErr = "Last Name is required!!";
        } else {
            $last = test_input($_POST["lastname"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required!!";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["contact"])) {
            $contactErr = "Contact Number is required!!";
        } else {
            $contact = test_input($_POST["contact"]);
        }

        if (empty($_POST["suffix"])) {
            $suffixErr = "Suffix is required!!";
        } else {
            $suffix = test_input($_POST["suffix"]);
        }

        if (empty($_POST["how"])) {
            $howErr = "This is required!!";
        } else {
            $how = test_input($_POST["how"]);
        }

        if (empty($_POST["check-donate"])) {
            $checkErr = "This is required!!";
        } else {
            $checkbox = test_input($_POST["check-donate"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

        <!--no header-->
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2>DONATE TODAY AND SAVE A LIFE</h2><br>
                    <h5>Vulnerable refugees need your help now more than ever, spare a few minutes to help them by donating for their happiness.
                        Your gift today can help make change that protects the lives of children, families and their communities.
                    </h5>
                    <p>What you can acheive with your support?</p>
                    <ul class="ul-amount-info">
                        <li>$25 - can invite someone to a workshop to learn about their rights and options</li>
                        <li>$50 - can support a family to navigate the asylum process</li>
                        <li>$100 - can help free a refugee client from unlawful detention</li>
                        <li>$150 - can wrap 30 warm, cozy blankets around children affected by conflict</li>
                        <li>$250 - can train a refugee paralegal to help defend the rights of their community</li>
                    </ul>
                    <p><u>Join us today and make changes for refugees.</u></p>

                    <!--form-->
                    <div class="form-row">
                        <h4 class="section-header-container text-center">Choose your gift type</h4>
                        <div class="type-container">
                            <div class="mb-3 row">
                                <div class="col">
                                    <button type="button" value="onetime" class="button-type-1" id="button-type-1">One-Time</button>
                                </div>
                                <div class="col">
                                    <button type="button" value="monthly" class="button-type-2" id="button-type-2">Monthly</button>
                                </div>
                            </div>

                        </div>

                        <h4 class="section-header-container text-center">Select your one-time amount</h4>
                        <div class="mb-3 form-check">
                            <div class="row">
                                <div class="col">
                                    <button type="button" onclick="updateAmount(250)" class="button-am-1">RM 250</button>
                                </div>
                                <div class="col">
                                    <button type="button" onclick="updateAmount(150)" class="button-am-2">RM 150</button>
                                </div>
                                <div class="col">
                                    <button type="button" onclick="updateAmount(100)" class="button-am-3">RM 100</button>
                                </div>
                                <div class="col">
                                    <button type="button" onclick="updateAmount(50)" class="button-am-4">RM 50</button>
                                </div>
                                <div class="col">
                                    <button type="button" onclick="updateAmount(25)" class="button-am-5">RM 25</button>
                                </div>
                                <div class="col">
                                    <!--user input amount-->
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" id="amountInput" aria-describedby="user-entered-amount" oninput="updateAmount(this.value)">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="check-donate">
                            <label class="form-check-label" for="check-donate">To give in memory or honor of someone special</label>
                        </div>

                        <!--form using post as its private information-->
                        <hr>
                        <h4>Your Infomation</h4>
                        <p><span class="error"> * required field</span></p>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="showModal()">

                        <div class="form-group">
                            
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="user-first-name">
                                        <span class="error">* <?php echo $firstErr; ?> </span> 
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="user-last-name">
                                        <span class="error">* <?php echo $lastErr; ?> </span>
                                    </div>
            
                                    <div class="col-md-6">
                                        <label for="suffix" class="form-label">Suffix</label>
                                        <select class="form-select mb-3" id="suffix" name="suffix" aria-label="Default select example">
                                            <option selected>Select One</option>
                                            <option value="1">Mr</option>
                                            <option value="2">Mrs</option>
                                            <option value="3">Ms</option>
                                            <option value="4">Dr</option>
                                        </select>
                                        <span class="error">* <?php echo $suffixErr; ?> </span>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        <span class="error">* <?php echo $emailErr; ?> </span>
                                    </div>
            
                                    <div class="col-md-6">
                                        <label for="contactnum" class="form-label">Contact Number</label>
                                        <input type="number" class="form-control" id="contactnum" name="contact" aria-describedby="user-contact">
                                        <span class="error">* <?php echo $contactErr; ?> </span>
                                    </div>
            
                                    <div class="col-md-6">
                                        <label for="information" class="form-label">How did you hear about us?</label>
                                        <select class="form-select mb-6" id="information" name="how" aria-label="Default select example">
                                            <option selected>Select One</option>
                                            <option value="1">Search Engine</option>
                                            <option value="2">Social Media</option>
                                            <option value="3">News (e.g newspaper)</option>
                                            <option value="4">Charity portal</option>
                                            <option value="5">Word of mouth</option>
                                            <option value="6">Other</option>
                                        </select>
                                        <span class="error">* <?php echo $howErr; ?> </span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="comment" class="form-label">Comment</label>
                                        <textarea name="comment" rows="5" cols="40" class="form-control" id="comment" name="comment" aria-describedby="user-comment"></textarea>
                                        
                                    </div>
                                    
                                    <hr>
                                    <div class="col-md-6">
                                        <div id="amountDetails" class="form-text">One-time donation</div>
                                        <label for="amount" class="form-label" id="amountLabel"><b>0.00 MYR</b></label>
                                        
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="check-donate">
                                            <label class="form-check-label" for="confirmCheck" name="check-donate">I confirm that all information in here are accurate</label>
                                            <span class="error">* <?php echo $checkErr; ?> </span>
                                        </div>
                                    </div>
                                    <p>By clicking GIVE, I agree to the <a href="#">Terms of Service</a> and <a href="#">Classy Privacy Policy</a>*</p>
                                    <div class="mb-3">
                                        <button type="submit" name="submit" class="btn btn-primary" id="paynowButton">GIVE</button>
                                    </div>
                                    
                                    
                                </div>

                                <!--amount plus payment-->

                            
                        </div>
                    </form>
                        

                        
                    </div>

                </div>
            </div>
        </div>

        
        <div class="modal fade" id="paynowModal" tabindex="-1" aria-labelledby="modalLabelOne" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelTitle">Thank you for donating to RefugeeRights</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <img class="image-fluid" src="images/happy.jpg" alt="happy children" style="width: 100%;" />
                        <p class="card-text">Donate today, and save a life!
                        </p>
                        <p>You can support refugee rights by donating and giving refugees and their families access to safety and opportunity and also advancing transformative changes to the law that will benefit everyone.</p>
                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--javascript-->
        <script>
            // js to get amount to eb donated 
            function updateAmount(amount) {
                document.getElementById("amountLabel").textContent = parseFloat(amount).toFixed(2) + " MYR";
            }

            // change button color for gift type
            document.addEventListener('DOMContentLoaded', function() {
                const buttons = document.querySelectorAll('.button-type-1, .button-type-2');

                buttons.forEach((button) => {
                    button.addEventListener('click', () => {
                        buttons.forEach((btn) => {
                            btn.style.backgroundColor = 'white'; // Reset background color for all buttons
                        });
                        button.style.backgroundColor = 'red'; // Change background color of the clicked button
                    });
                });
            });

            // change button color for amount
            document.addEventListener('DOMContentLoaded', function() {
                const buttons = document.querySelectorAll('.button-am-1, .button-am-2, .button-am-3, .button-am-4, .button-am-5');

                buttons.forEach((button) => {
                    button.addEventListener('click', () => {
                        buttons.forEach((btn) => {
                            btn.style.backgroundColor = 'white'; // Reset background color for all buttons
                        });
                        button.style.backgroundColor = 'red'; // Change background color of the clicked button
                    });
                });
            });
            

            /*to show modal when click submit button
            function showModal () { 

                document.getElementById("payNowButton").addEventListener("click", function() {
                    //call php values
                    <?php
                    echo "var firstName = '" . $first . "';";
                    echo "var lastName = '" . $last . "';";
                    echo "var email = '" . $email . "';";
                    echo "var amount = '" . $amount . "';"; 
                    ?>

                    // set modal
                    var modalTitle = document.getElementById("modalLabelTitle");
                    modalTitle.innerHTML = "Confirmation for " + firstname; 

                    var modalBody = document.querySelector("#paynowModal .modal-body");
                    modalBody.innerHTML = "Thank you, " + firstName + ", for your donation of $" + amount + ".<br>";
                    modalBody.innerHTML += "A confirmation email will be sent to " + email + ".";

                    // Show the modal
                    var modal = new bootstrap.Modal(document.getElementById("paynowModal"));
                    modal.show();
                });

            }*/


        </script>

    </body>
</html>