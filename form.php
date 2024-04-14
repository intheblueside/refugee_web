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
            .error {color: #FF0000;}

            .row {
                background-color: lavenderblush;
            }

        </style>
    </head>

    <body>

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
                        <h4 class="section-header-container">Choose your gift type</h4>
                        <div class="type-container">
                            <button type="button">One-Time</button>
                            <button type="button">Monthly</button>
                        </div>

                        <h4 class="section-header-container">Select your one-time amount</h4>
                        <div class="amount-container">
                            <button type="button">$250</button>
                            <button type="button">$150</button>
                            <button type="button">$100</button>
                            <button type="button">$50</button>
                            <button type="button">$25</button>
                            <input type="number" id="amount"/>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="check-donate">
                            <label class="form-check-label" for="exampleCheck1">To give in memory or honor of someone special</label>
                        </div>

                        <!--form-->
                        <hr>
                        <h4>Your Infomation</h4>
                        <p><span class="error"> * required field</span></p>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"></form>

                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input required type="text" class="form-control" id="firstname" aria-describedby="user-first-name">
                        </div>

                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input required type="text" class="form-control" id="lastname" aria-describedby="user-last-name">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="contactnum" class="form-label">Contact Number</label>
                            <input required type="number" class="form-control" id="contactnum" aria-describedby="user-contact">
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea name="comment" rows="5" cols="40" class="form-control" id="comment" aria-describedby="user-comment"></textarea>
                        </div>
                        

                    </div>

                </div>
            </div>
        </div>

    </body>
</html>