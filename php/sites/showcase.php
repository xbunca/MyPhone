<?php
    include '../../php/backend/languages.php';
    $GLOBALS["onSite"] = 4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $showcaseSiteTitle; ?></title>
    <link rel="stylesheet" href="../../css/navMenu.css">
    <link rel="stylesheet" href="../../css/fonts.css">

    <link rel="stylesheet" href="../../css/showcase.css">
</head>
<body>

<?php include("../../php/components/navigationMenu.php"); ?>

<div id="content">
    <div class="grid">
        <div class="video_c">
            <h3><?php echo $ui; ?></h3>
            <video controls>
                <source src="../../assets/video/showcase/using.mov" type="video/mp4">
            </video>
        </div>
        <div class="right_c">
            <div class="right_c_ringtone_cell">
                <h3><?php echo $ringtones; ?></h3>
                <div class="right_c_ringtone_cell_audio">
                    <p><?php echo $openingRingtone; ?></p>
                    <audio controls>
                        <source src="../../assets/audio/showcase/default.mp3" type="audio/mpeg">
                    </audio>
                    <p><?php echo $silkRingtone; ?></p>
                    <audio controls>
                        <source src="../../assets/audio/showcase/silk.mp3" type="audio/mpeg">
                    </audio>
                    <p><?php echo $crystalRingtone; ?></p>
                    <audio controls>
                        <source src="../../assets/audio/showcase/crystals.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
            <div class="right_c_image_cell">
                <h3><?php echo $alarm; ?></h3>
                <img src="../../assets/imgs/showcase/alarm.PNG">
            </div>
            <div class="right_c_image_cell">
                <h3><?php echo $lockScreen; ?></h3>
                <img src="../../assets/imgs/showcase/lock.PNG">
            </div>
            <div class="right_c_info_cell">
                <h3><?php echo $moreRingtones; ?></h3>
                <ul>
                    <li><?php echo $starSky; ?></li>
                    <li><?php echo $radar; ?></li>
                    <li><?php echo $space; ?></li>
                    <li><?php echo $owl; ?></li>
                    <li><?php echo $freeTime; ?></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<?php include("../../php/components/footer.php"); ?>

</body>
</html>