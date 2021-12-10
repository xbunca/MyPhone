<?php
    include "../../php/backend/api.php";
    $id = $_GET["id"];
    $image = getReviewImage($id)["image"];
    header('Content-type: image/png');
    if (!empty($image)){
        echo $image;
    } else {

    }
?>