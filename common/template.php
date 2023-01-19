<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TP_PHP</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php
        include 'common/header.php' ;
        include 'common/navigation.php' ;
        
        switch($page){
            case $page == 'actu':
                include 'content/index_content.php';
                break;
            case $page == 'equipe':
                include 'content/equipe_content.php';
                break;
            case $page == 'stages':
                include 'content/stages_content.php';
                break;
            case $page == 'creneaux':
                include 'content/creneaux_content.php';
                break;
            default:
                header('Location:content/404.html');
                die();
                break;

        }
        include 'common/footer.php' ;
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
