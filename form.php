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

        <!--custom css-->
        <link rel="stylesheet" href="stylesform.css" >
        
        <title>Donate For Refugees</title>

    </head>

    <body class="form">

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

    // check if all are not empty
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($firstErr) && empty($lastErr) && empty($emailErr) && empty($contactErr) && empty($suffixErr) && empty($howErr) && empty($checkErr)) {
        // Construct modal content with user information
        $modalContent = "
            <div class='modal-body'>
                <p>First Name: $first</p>
                <p>Last Name: $last</p>
                <p>Email: $email</p>
                <p>Contact Number: $contact</p>
                <p>Suffix: $suffix</p>
                <p>How did you hear about us?: $how</p>
                
            </div>
        ";

        // Use JavaScript to show the modal
        echo "<script>showModal('$modalContent');</script>";
    }

?>

        <!--no header-->
        <div class="container my-5">
            <div class="row form-page">
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
                                    <div class="input-group">
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
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="donationForm">

                            <div class="form-group">
                            
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="firstname" class="form-label">First Name</label><span class="error">* <?php echo $firstErr; ?> </span> 
                                        <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="user-first-name">
                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="lastname" class="form-label">Last Name</label><span class="error">* <?php echo $lastErr; ?> </span>
                                        <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="user-last-name">
                                        
                                    </div>
            
                                    <div class="col-md-6">
                                        <label for="suffix" class="form-label">Suffix</label><span class="error">* <?php echo $suffixErr; ?> </span>
                                        <select class="form-select mb-3" id="suffix" name="suffix" aria-label="Default select example">
                                            <option selected>Select One</option>
                                            <option value="1">Mr</option>
                                            <option value="2">Mrs</option>
                                            <option value="3">Ms</option>
                                            <option value="4">Dr</option>
                                        </select>
                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email address</label><span class="error">* <?php echo $emailErr; ?> </span>
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        
                                    </div>
            
                                    <div class="col-md-6">
                                        <label for="contactnum" class="form-label">Contact Number</label><span class="error">* <?php echo $contactErr; ?> </span>
                                        <input type="number" class="form-control" id="contactnum" name="contact" aria-describedby="user-contact">
                                        
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
                                        <button type="submit" name="submit" class="donate" id="paynowButton">GIVE</button>
                                    </div>
                                    
                                    
                                </div>

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
                    <div class="modal-body" id="modalBody">
                        <img class="image-fluid" src="images/happy.jpg" alt="happy children" style="width: 100%;" />
                        <p class="card-text">Donate today, and save a life!
                        </p>
                        <p>Thank you for your kind donation for refugees!</p>
                        <p>Name: <?php echo $first ?> </p>
                        

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
                            btn.style.backgroundColor = 'white'; // reset background color for all buttons
                            btn.style.color = 'black';
                        });
                        button.style.backgroundColor = 'maroon'; // change background color of the clicked button
                        btn.style.color = 'white';
                    });
                });
            });

            // change button color for amount
            document.addEventListener('DOMContentLoaded', function() {
                const buttons = document.querySelectorAll('.button-am-1, .button-am-2, .button-am-3, .button-am-4, .button-am-5');

                buttons.forEach((button) => {
                    button.addEventListener('click', () => {
                        buttons.forEach((btn) => {
                            btn.style.backgroundColor = 'white'; 
                            btn.style.color = 'black';
                        });
                        button.style.backgroundColor = 'maroon'; 
                    });
                });
            });

            // modal 
            function showModal(content) {
                document.getElementById('modalBody').innerHTML = content;
                // Show the modal
                $('#paynowModal').modal('show');

            }
            /*
            document.getElementById('donationForm').addEventListener('submit', function(event) {
                // Prevent default form submission
                event.preventDefault();
                // Show the modal
                showModal();
            });*/

        </script>

    </body>
</html>