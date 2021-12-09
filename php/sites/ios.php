<?php
    include '../../php/backend/languages.php';
    $GLOBALS["onSite"] = 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $iosSiteTitle; ?></title>
    <link rel="stylesheet" href="../../css/navMenu.css">
    <link rel="stylesheet" href="../../css/fonts.css">

    <link rel="stylesheet" href="../../css/ios.css">
</head>
<body>

<?php include("../../php/components/navigationMenu.php"); ?>

<div id="content">
    <div class="grid">
        <div class="grid_left">
            <div class="grid_left_top">
                <img src="../../assets/imgs/ios/ios_logo.png">
                <h3><?php echo $ios15; ?></h3>
            </div>
            <div class="grid_left_list">
                <ul>
                    <li><?php echo $iosSystem; ?></li>
                    <li><?php echo $iosWorking; ?></li>
                    <li><?php echo $iosSupported; ?></li>
                </ul>
            </div>
        </div>
        <div class="grid_right">
            <img src="../../assets/imgs/ios/apple_logo.png">
            <a href="https://www.apple.com/ios/ios-15/" class="button" target="blank"><?php echo $moreInfo; ?></a>
        </div>
    </div>

</div>

<?php include("../../php/components/footer.php"); ?>

</body>
</html>