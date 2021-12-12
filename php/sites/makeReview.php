<?php
    include '../../php/backend/api.php';
    include '../../php/backend/languages.php';
    $GLOBALS["onSite"] = 5;

    if (isset($_POST["make"])){
        $reviewerName = $_POST["nameField"];
        $image = $_FILES["reviewImage"];
        $reviewRating = $_POST["reviewRating"];
        $reviewMessage = $_POST["reviewArea"];

        makeAReview($reviewerName, $reviewRating, $reviewMessage, $image);
        header('Location: ../../php/sites/reviews.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $makeReviewSiteTitle; ?></title>
    <link rel="stylesheet" href="../../css/navMenu.css">
    <link rel="stylesheet" href="../../css/fonts.css">
    <link rel="stylesheet" href="../../css/forms.css">

    <link rel="stylesheet" href="../../css/makeReview.css">
</head>
<body>

<?php include("../../php/components/navigationMenu.php"); ?>

<div id="content">
    <h2><?php echo $makeAReview; ?></h2>
    <div class="review_form_div">
        <form method="post" enctype="multipart/form-data">
            <div class="review_top_form">
                <div class="name_form_div">
                    <label for="nameField"><?php echo $name; ?></label><br>
                    <input type="text" id="nameField" class="form_field" name="nameField" required>
                </div>
                <div class="image_form_div">
                    <label for="reviewImage"><?php echo $profilePicture; ?></label><br>
                    <input type="file" id="reviewImage" accept="image/png, image/jpeg, image/jpg, image/JPEG" name="reviewImage">
                </div>
            </div>

            <div class="review_bottom_form">
                <div class="review_bottom_form_moving">
                    <label for="reviewRating"><?php echo $rating; ?></label>
                    <input type="number" id="reviewRating" max="5" min="1" value="1" class="form_field" name="reviewRating" required>

                    <br><label for="reviewArea"><?php echo $review; ?></label><br>
                    <textarea id="reviewArea" rows="15" class="form_field" name="reviewArea" required>

                </textarea><br>
                    <input type="submit" id="makeButton" value="<?php echo $make; ?>" class="form_button" name="make">
                </div>
            </div>
        </form>
    </div>
</div>

<?php include("../../php/components/footer.php"); ?>

</body>
</html>