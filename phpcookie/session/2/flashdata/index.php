<?php require_once('function.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Messages</title>
    <link rel="stylesheet" href="./Font-Awesome-master/css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
        <div class="container">
            <a class="navbar-brand" href="https://sourcecodester.com">
            Sourcecodester
            </a>

            <div>
                <b class="text-light">Flash Messages</b>
            </div>
        </div>
    </nav>
    <div class="container py-5" id="page-container">
        <h4 class="text-center"><b>Flash Messages Like CodeIgniter's Flashdata Functions.</b></h4>

        <!-- Displaying Flash Data if exist -->
        <?php if(isset($_SESSION['_flashdata'])): ?>
            <!-- Looping All Flash messages -->
            <?php foreach($_SESSION['_flashdata'] as $key => $val): ?>
                <div class="my-2 px-3 py2 alert alert-<?= $key ?>">
                    <div class="d-flex align-items-center">
                        <div class="col-11">
                            <!-- Displaying the Flash Message -->
                            <p><?= get_flashdata($key) ?></p>
                        </div>
                        <div class="col-1 text-end">
                            <button class="btn-close" type="button" onclick="this.closest('.alert').remove()"></button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Looping All Flash messages -->
        <?php endif; ?>
        <!-- Displaying Flash Data if exist -->
        

        <div class="col-lg-12 pt-5">
            <div class="row">
                <div class="col-md-3 px-2">
                    <a href="set_messages.php?msg=info" class="btn btn-lg rounded-pill btn-pill btn-info">Show an Info Message</a>
                </div>
                <div class="col-md-3 px-2">
                    <a href="set_messages.php?msg=success" class="btn btn-lg rounded-pill btn-pill btn-success">Show a Success Message</a>
                </div>
                <div class="col-md-3 px-2">
                    <a href="set_messages.php?msg=error" class="btn btn-lg rounded-pill btn-pill btn-danger">Show an Error Message</a>
                </div>
                <div class="col-md-3 px-2">
                    <a href="set_messages.php?msg=multiple" class="btn btn-lg rounded-pill btn-pill btn-default border">Show a Multiple Message</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>