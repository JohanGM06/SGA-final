<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="onichang" />
        <title>Dashboard - SB Admin</title>
<!-- deps -->
<?php require_once "views/Dashboard/Modules/dep.php"; ?>
    </head>
    <body class="sb-nav-fixed">
<!-- nav sup -->
<?php require_once "views/Dashboard/Modules/navSup.php"; ?>
        <div id="layoutSidenav"> <!-- contenedor principal -->
<!-- nav lat -->
<?php require_once "views/Dashboard/Modules/navLat.php"; ?>
            <div id="layoutSidenav_content">
                <!-- footer -->
                <?php require_once "views/Dashboard/Modules/footer.php"; ?>
            </div>
        </div>

    </body>
</html>
