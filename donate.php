<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap ver 5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
        <title>Donate</title>

        <style>
            main {
            
            margin-top: 150px;
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
            <!--section volunteer-->
            <section id="primary" class="content-area">
                <div class="container my-5">
                    <div class="row g-2">
                        <div class="col-lg-12">
                            <h5>You can support refugee rights by donating to RefugeeRights, giving refugees the help for safety
                                and opportunity and also bringing them closer to their freedom
                            </h5>
                            <div class="image-fluid">
                                <img src="images/happy.jpg" alt="happy refugee children" style="width: 100%;">
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