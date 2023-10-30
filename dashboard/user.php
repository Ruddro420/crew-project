<?php
// session start

session_start();
$userName =  $_SESSION['userName'];
$email =  $_SESSION['email'];

if ($userName == '') {
    header("Location: ../");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./admin.css">
    <title>User Dashboard</title>
</head>

<body>
    <nav class="nav bg-purple justify-content-center">
        <a class="nav-link text-white" href="#"><i class="fa fa-home" aria-hidden="true"></i> Email :
            <?php echo $email ?></a>
        <a class="nav-link text-white" href="../logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 p-5">
                <h1> <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard : User :
                    <b><?php echo $userName  ?></b>
                </h1>
                <hr />
            </div>
        </div>
        <h1>Thank You For Login</h1>
    </div>

    <footer class="footer fixed-bottom">
        <div class="row text-center p-3">
            <p class="small text-muted">Develop & Design by @ruddro420</p>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="modelHELP" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Technical Support
                        24/7</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <p>
                        <small>(Mon - Sat / 10AM - 6PM)</small>
                    </p>
                    <hr />
                    <p> <i class="fa fa-envelope mr-3" aria-hidden="true"></i> </p>
                    <p><i class="fa fa-volume-control-phone mr-3" aria-hidden="true"></i> +91-123654789 </p>

                </div>

            </div>
        </div>
    </div>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>