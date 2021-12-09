<?php
    include '../../php/backend/languages.php';
    $onSite = $GLOBALS["onSite"];
    $_SESSION["onSite"] = $onSite;
?>
<header>
    <div id="nav_menu">
        <div id="logo_div">
            <img src="../../assets/imgs/logo.svg">
        </div>
        <div id="right_div">
            <div id="right_div_content">
                <div id="title_div">
                    <h1><?php echo $title; ?></h1>
                </div>
                <div id="nav_div">
                    <nav>
                        <a href="../../php/sites/index.php" <?php if ($onSite == 0) echo 'class="selected"'?>><?php echo $home; ?></a>
                        <a href="../../php/sites/specs.php" <?php if ($onSite == 1) echo 'class="selected"'?>><?php echo $specs; ?></a>
                        <a href="../../php/sites/accessories.php" <?php if ($onSite == 2) echo 'class="selected"'?>><?php echo $accessories; ?></a>
                        <a href="../../php/sites/ios.php" <?php if ($onSite == 3) echo 'class="selected"'?>><?php echo $ios; ?></a>
                        <a href="../../php/sites/showcase.php" <?php if ($onSite == 4) echo 'class="selected"'?>><?php echo $showcase; ?></a>
                        <a href="../../php/sites/reviews.php" <?php if ($onSite == 5) echo 'class="selected"'?>><?php echo $reviews; ?></a>
                        <a href="../../php/sites/contact.php" <?php if ($onSite == 6) echo 'class="selected"'?>><?php echo $contact; ?></a>
                        <a href="../functions/changeLanguage.php"><?php echo $otherLanguage; ?></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
