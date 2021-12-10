<?php
    include '../../php/backend/api.php';
    include '../../php/backend/languages.php';
    $GLOBALS["onSite"] = 6;

    if (isset($_POST["send"])){
        $askerName = $_POST["nameField"];
        $askerEmail = $_POST["emailField"];
        $askerMessage = $_POST["message"];

        sendEmail($askerName, $askerEmail, $askerMessage);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $contactSiteTitle; ?></title>
    <link rel="stylesheet" href="../../css/navMenu.css">
    <link rel="stylesheet" href="../../css/fonts.css">
    <link rel="stylesheet" href="../../css/forms.css">

    <link rel="stylesheet" href="../../css/contact.css">
</head>
<body>

<?php include("../../php/components/navigationMenu.php"); ?>

<div id="content">
    <h2><?php echo $contactMe; ?></h2>
    <div class="contact_div">
        <div class="photo_div">
            <img src="../../assets/imgs/contact/me.jpg">
        </div>
        <div class="ino_div">
            <h3><?php echo $authorName; ?></h3>
            <h4><a href="mailto:<?php echo $authorEmail; ?>"><?php echo $authorEmail; ?></a></h4>
            <h4><?php echo $authorPhone; ?></h4>
            <h4><?php echo $authorAddress; ?></h4>
        </div>
        <div class="map_div">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.1520456346907!2d21.35962011587671!3d48.85531097928713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ee817b2f0170b%3A0x6e406c0492b6f88b!2sVarha%C5%88ovce%2057%2C%20082%2005%20Varha%C5%88ovce!5e0!3m2!1ssk!2ssk!4v1636648906933!5m2!1ssk!2ssk"
                    width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <br>
    <img src="../../assets/imgs/contact/smile.gif" id="smile_gif">
    <h2><?php echo $doYouHaveQ; ?></h2>
    <div class="contact_form_div">
        <form method="post">
            <div class="contact_form_div_in">
                <div class="name_div">
                    <label for="nameLabel"><?php echo $name; ?></label><br>
                    <input type="text" id="nameLabel" class="form_field" name="nameField"><br>
                </div>
                <div class="email_div">
                    <label for="emailLabel"><?php echo $email; ?></label><br>
                    <input type="email" id="emailLabel" class="form_field" name="emailField"><br>
                </div>
                <br>

                <label for="messageArea"><?php echo $message; ?></label><br>
                <textarea id="messageArea" rows="15" class="form_field" name="message">

                </textarea><br>
                <input type="submit" id="sendButton" value="<?php echo $send; ?>" class="form_button" name="send">
            </div>
        </form>
    </div>
</div>

<?php include("../../php/components/footer.php"); ?>

</body>
</html>