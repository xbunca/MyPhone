<?php
    include '../../php/backend/api.php';
    include '../../php/backend/languages.php';
    $GLOBALS["onSite"] = 5;
    $rated = $_SESSION["siteRated"];

    $path = '../../assets/imgs/reviews/realReviews/';
    $review1 = getRandomReview();
    $review2 = getRandomReview();
    $review3 = getRandomReview();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $reviewsSiteTitle; ?></title>
    <link rel="stylesheet" href="../../css/navMenu.css">
    <link rel="stylesheet" href="../../css/fonts.css">

    <link rel="stylesheet" href="../../css/reviews.css">
</head>
<body>

<?php include("../../php/components/navigationMenu.php"); ?>

<div id="content">
    <div class="reviews_div">
        <h2><?php echo $phoneReviews; ?></h2>
        <div class="reviews_grid">
            <div class="review_cell">
                <h3><?php echo $review1["name"]; ?></h3>
                <img src="<?php echo $path.$review1["id"].".jpg"; ?>" class="profile_picture">
                <?php
                    switch ($review1["rating"]){
                        case 1:
                            echo '<img src="../../assets/imgs/reviews/star1.png">';
                            break;
                        case 2:
                            echo '<img src="../../assets/imgs/reviews/star2.png">';
                            break;
                        case 3:
                            echo '<img src="../../assets/imgs/reviews/star3.png">';
                            break;
                        case 4:
                            echo '<img src="../../assets/imgs/reviews/star4.png">';
                            break;
                        case 5:
                            echo '<img src="../../assets/imgs/reviews/star5.png">';
                            break;
                    }
                ?>
                <q><?php echo $review1["review"]; ?></q>
            </div>
            <div class="review_cell">
                <h3><?php echo $review2["name"]; ?></h3>
                <img src="<?php echo $path.$review2["id"].".jpg"; ?>" class="profile_picture">
                <?php
                switch ($review2["rating"]){
                    case 1:
                        echo '<img src="../../assets/imgs/reviews/star1.png">';
                        break;
                    case 2:
                        echo '<img src="../../assets/imgs/reviews/star2.png">';
                        break;
                    case 3:
                        echo '<img src="../../assets/imgs/reviews/star3.png">';
                        break;
                    case 4:
                        echo '<img src="../../assets/imgs/reviews/star4.png">';
                        break;
                    case 5:
                        echo '<img src="../../assets/imgs/reviews/star5.png">';
                        break;
                }
                ?>
                <q><?php echo $review2["review"]; ?></q>
            </div>
            <div class="review_cell">
                <h3><?php echo $review3["name"]; ?></h3>
                <img src="<?php echo $path.$review3["id"].".jpg"; ?>" class="profile_picture">
                <?php
                switch ($review3["rating"]){
                    case 1:
                        echo '<img src="../../assets/imgs/reviews/star1.png">';
                        break;
                    case 2:
                        echo '<img src="../../assets/imgs/reviews/star2.png">';
                        break;
                    case 3:
                        echo '<img src="../../assets/imgs/reviews/star3.png">';
                        break;
                    case 4:
                        echo '<img src="../../assets/imgs/reviews/star4.png">';
                        break;
                    case 5:
                        echo '<img src="../../assets/imgs/reviews/star5.png">';
                        break;
                }
                ?>
                <q><?php echo $review3["review"]; ?></q>
            </div>
        </div>
        <a href="../../php/sites/makeReview.php" class="button"><?php echo $makeReviews; ?></a>
    </div>


    <div class="likes_dislikes_div">
        <h2><?php echo $howDoYouLike; ?></h2>
        <div class="likes_dislikes_div_grid">
            <div class="likes_div">
                <div class="likes_div_top">
                    <h3><?php echo $likes; ?></h3>
                    <img src="../../assets/imgs/reviews/like.png">
                    <h4><?php echo getLikes(); ?></h4>
                </div>
                <?php if (!$rated || $rated == null): ?>
                    <a href="../../php/functions/likeSite.php" class="button"><?php echo $like; ?></a>
                <?php endif; ?>
            </div>
            <div class="dislikes_div">
                <div class="dislikes_div_top">
                    <h3><?php echo $dislikes; ?></h3>
                    <img src="../../assets/imgs/reviews/dislike.png">
                    <h4><?php echo getDisLikes(); ?></h4>
                </div>
                <?php if (!$rated || $rated == null): ?>
                    <a href="../../php/functions/disLikeSite.php" class="button"><?php echo $dislike; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include("../../php/components/footer.php"); ?>

</body>
</html>