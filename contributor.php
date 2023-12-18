<?php 
include 'backend/user/user_access.php';
include 'backend/controllers/userFeedback.php';
$keyComponent = "kpum";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TENTANG DEVELOPER</title>
    <link rel="stylesheet" href="../aset/css/bootstrap.css">
    <link rel="stylesheet" href="../aset/css/style.css">

    <link rel="shortcut icon" href="/aset/images/BEM.png" type="image/x-png">

</head>

<body>

    <!-- navbar -->
    <?php 
        include 'component/navbar-user.php';
    ?>
    <!-- end navbar -->

    <!-- JUMBOTRON 2 -->
    <section class="jumbotron-2 mt-5 pt-5">
        <div class="container">
            <div class="row">
                <p>
                    <a href="/">HOME</a> >
                    CONTRIBUTOR
                </p>
            </div>
        </div>
    </section>
    <!-- END JUMBOTRON 2 -->

    <!-- CONTRIBUTOR -->
    <section class="contributor">
        <div class="container">
            <div class="row pb-3">
                <h1>TENTANG DEVELOPER</h1>
            </div>
            <div class="row">
                <ul class="ms-3">
                    <li>UX Design : Arrazaq Panca Putra</li>
                    <li>Front End : Imam Nurfalah</li>
                    <li>Back End  : Agung Prasetyo</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END CONTRIBUTOR -->

    <script src="../aset/js/jquery-3.5.1.js"></script>
    <script src="../aset/js/bootstrap.js"></script>
    <script src="../aset/js/script.js"></script>
</body>

</html>