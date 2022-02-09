<?php
    if(!isset($page_title)) { $page_title = 'MIRUN 2022';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiLU RUN - <?php echo $page_title; ?></title>
    <link rel="stylesheet" media="all"  href="<?php echo url_for('../css/main.css'); ?>"/>

</head>

<body>
         <!-- Navbar-->
        <div class="navbar">
            <div><img class="img" src="../images/ACN_logo.png" alt="Milkrun Logo"></div>
                <nav>   
                    <ul class="navbar ul">
                        <li><a class="navbar a" href="<?php echo WWW_ROOT . '/index.php'; ?>" alt="selected for delivery">Planning</a></li>
                        <li><a class="navbar a" href="<?php echo WWW_ROOT . '/public/ManualAdd.php'; ?>" alt="Manual input">Manual Input</a></li>
                        <li><a class="navbar a" href="<?php echo PROJECT_PATH . '/functions/FollowUp.php'; ?>">Follow up</a></li>
                        <li><a class="navbar a" href="<?php echo PROJECT_PATH . '/subjects/index.php'; ?>" alt="About User">User Settings</a></li>
                    </ul>
                </nav>
            <div><img class="img2" src="../images/Schiphol_logo.png" alt="Participant Logo"></div>
        </div>