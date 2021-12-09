<?php
    include '../../php/backend/languages.php';
    $GLOBALS["onSite"] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $homeSiteTitle; ?></title>
    <link rel="stylesheet" href="../../css/navMenu.css">
    <link rel="stylesheet" href="../../css/fonts.css">

    <link rel="stylesheet" href="../../css/index.css">
</head>
<body>

<?php include("../../php/components/navigationMenu.php"); ?>

<div id="content">

    <div class="index_content_item">
        <div class="index_content_item_image">
            <img src="../../assets/imgs/home/phone1.JPG">
        </div>
        <div class="index_content_item_text">
            <div>
                <h2><?php echo $quality; ?></h2>
                <p><?php echo $qualityGood; ?></p>
                <p><?php echo $qualityPremium; ?></p>
                <p><?php echo $qualityAlu; ?></p>
            </div>
        </div>
    </div>

    <div class="index_content_item">
        <div class="index_content_item_text">
            <div>
                <h2><?php echo $satisfaction; ?></h2>
                <p><?php echo $satisfactionHappy; ?></p>
                <p><?php echo $satisfactionJack; ?></p>
                <p><?php echo $satisfactionRecommend; ?></p>
            </div>
        </div>
        <div class="index_content_item_image">
            <img src="../../assets/imgs/home/phone2.JPG">
        </div>
    </div>

    <div class="index_content_item">
        <div class="index_content_item_image">
            <img src="../../assets/imgs/home/phone3.JPG">
        </div>
        <div class="index_content_item_text">
            <div>
                <h2><?php echo $design; ?></h2>
                <p><?php echo $designElegant; ?></p>
                <p><?php echo $designEdges; ?></p>
                <p><?php echo $designLogo; ?></p>
            </div>
        </div>
    </div>

</div>

<?php include("../../php/components/footer.php"); ?>

</body>
</html>