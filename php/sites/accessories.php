<?php
    include '../../php/backend/languages.php';
    $GLOBALS["onSite"] = 2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $accessoriesSiteTitle; ?></title>
    <link rel="stylesheet" href="../../css/navMenu.css">
    <link rel="stylesheet" href="../../css/fonts.css">

    <link rel="stylesheet" href="../../css/accessories.css">
</head>
<body>

<?php include("../../php/components/navigationMenu.php"); ?>

<div id="content">
    <div class="accessories_collection">
        <div class="accessories_collection_cell">
            <div class="accessories_collection_cell_left">
                <img src="../../assets/imgs/accessories/earpods.jpg">
            </div>
            <div class="accessories_collection_cell_right">
                <h3><?php echo $earPods; ?></h3>
                <ul>
                    <li><?php echo $earPodsPlaying; ?></li>
                    <li><?php echo $earPodsVolume; ?></li>
                    <li><?php echo $earPodsMic; ?></li>
                </ul>
            </div>
        </div>
        <div class="accessories_collection_cell">
            <div class="accessories_collection_cell_left">
                <img src="../../assets/imgs/accessories/cable.JPG">
            </div>
            <div class="accessories_collection_cell_right">
                <h3><?php echo $lightningCable; ?></h3>
                <ul>
                    <li><?php echo $lightningCableMaterial; ?></li>
                    <li><?php echo $lightningCableOlderDevices; ?></li>
                </ul>
            </div>
        </div>
        <div class="accessories_collection_cell">
            <div class="accessories_collection_cell_left">
                <img src="../../assets/imgs/accessories/brick.JPG">
            </div>
            <div class="accessories_collection_cell_right">
                <h3><?php echo $powerAdapter; ?></h3>
                <ul>
                    <li><?php echo $powerAdapterW; ?></li>
                    <li><?php echo $powerAdapterShape; ?></li>
                    <li><?php echo $powerAdapterOlderDevices; ?></li>
                </ul>
            </div>
        </div>
        <div class="accessories_collection_cell">
            <div class="accessories_collection_cell_left">
                <img src="../../assets/imgs/accessories/docs.JPG">
            </div>
            <div class="accessories_collection_cell_right">
                <h3><?php echo $documentation; ?></h3>
                <ul>
                    <li><?php echo $documentationStickers; ?></li>
                    <li><?php echo $documentationInstructions; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include("../../php/components/footer.php"); ?>

</body>
</html>