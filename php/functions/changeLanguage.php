<?php
    session_start();
    if ($_SESSION["lang"] == null) {
        $_SESSION["lang"] = "sk";
    } else if ($_SESSION["lang"] == "sk") {
        $_SESSION["lang"] = null;
    }

    $onSite = $_SESSION["onSite"];

    switch ($onSite){
        case 0:
            header('Location: ../../php/sites/index.php');
            break;
        case 1:
            header('Location: ../../php/sites/specs.php');
            break;
        case 2:
            header('Location: ../../php/sites/accessories.php');
            break;
        case 3:
            header('Location: ../../php/sites/ios.php');
            break;
        case 4:
            header('Location: ../../php/sites/showcase.php');
            break;
        case 5:
            header('Location: ../../php/sites/reviews.php');
            break;
        case 6:
            header('Location: ../../php/sites/contact.php');
            break;
    }

?>
