<?php
    include_once '../../php/backend/api.php';

    $rated = $_SESSION["siteRated"];
    if (!$rated || $rated == null){
        likeSite();
        $_SESSION["siteRated"] = true;
    }
    header('Location: ../../php/sites/reviews.php');
?>