<?php
    session_start();
    $enJson = file_get_contents("../../assets/text/en.json");
    $skJson = file_get_contents("../../assets/text/sk.json");
    $languages = array(
        'en' => json_decode($enJson, true),
        'sk' => json_decode($skJson, true)
    );

    $currentLanguage = "en";
    $otherLanguage = "SK";

    if (($sessionLanguage = $_SESSION["lang"]) != null) {
        $currentLanguage = $sessionLanguage;
    }

    switch ($currentLanguage) {
        case "en":
            $otherLanguage = "SK";
            break;
        case "sk":
            $otherLanguage = "EN";
            break;
    }

    $title = $languages[$currentLanguage]["_SITE_TITLE"];
    $home = $languages[$currentLanguage]["_NAV_HOME"];
    $specs = $languages[$currentLanguage]["_NAV_SPECS"];
    $accessories = $languages[$currentLanguage]["_NAV_ACCESSORIES"];
    $ios = $languages[$currentLanguage]["_NAV_IOS"];
    $showcase = $languages[$currentLanguage]["_NAV_SHOWCASE"];
    $reviews = $languages[$currentLanguage]["_NAV_REVIEWS"];
    $contact = $languages[$currentLanguage]["_NAV_CONTACT"];

    $homeSiteTitle = $languages[$currentLanguage]["_HOME_SITE_TITLE"];
    $specsSiteTitle = $languages[$currentLanguage]["_SPECS_SITE_TITLE"];
    $accessoriesSiteTitle = $languages[$currentLanguage]["_ACCESSORIES_SITE_TITLE"];
    $iosSiteTitle = $languages[$currentLanguage]["_IOS_SITE_TITLE"];
    $showcaseSiteTitle = $languages[$currentLanguage]["_SHOWCASE_SITE_TITLE"];
    $reviewsSiteTitle = $languages[$currentLanguage]["_REVIEWS_SITE_TITLE"];
    $makeReviewSiteTitle = $languages[$currentLanguage]["_MAKE_REVIEW_SITE_TITLE"];
    $contactSiteTitle = $languages[$currentLanguage]["_CONTACT_SITE_TITLE"];

    $authorC = $languages[$currentLanguage]["_FOOTER_AUTHOR"];

    //index
    $quality = $languages[$currentLanguage]["_QUALITY"];
    $qualityGood = $languages[$currentLanguage]["_QUALITY_VERY_GOOD"];
    $qualityPremium = $languages[$currentLanguage]["_QUALITY_PREMIUM_FEELING"];
    $qualityAlu = $languages[$currentLanguage]["_QUALITY_RECYCLED_ALU"];

    $satisfaction = $languages[$currentLanguage]["_SATIS"];
    $satisfactionHappy = $languages[$currentLanguage]["_SATIS_HAPPY"];
    $satisfactionJack = $languages[$currentLanguage]["_SATIS_JACK"];
    $satisfactionRecommend = $languages[$currentLanguage]["_SATIS_RECOMMEND"];

    $design = $languages[$currentLanguage]["_DESIGN"];
    $designElegant = $languages[$currentLanguage]["_DESIGN_ELEGANT"];
    $designEdges = $languages[$currentLanguage]["_DESIGN_EDGES"];
    $designLogo = $languages[$currentLanguage]["_DESIGN_LOGO"];
    //

    //specs
    $specsTitle = $languages[$currentLanguage]["_SPECS_TITLE"];
    $info = $languages[$currentLanguage]["_INFO"];

    $color = $languages[$currentLanguage]["_COLOR"];
    $colorValue = $languages[$currentLanguage]["_COLOR_VALUE"];
    $colorElegant = $languages[$currentLanguage]["_COLOR_ELEGANT"];
    $colorHiv = $languages[$currentLanguage]["_COLOR_HIV"];

    $chip = $languages[$currentLanguage]["_CHIP"];
    $chipValue = $languages[$currentLanguage]["_CHIP_VALUE"];
    $chipHz = $languages[$currentLanguage]["_CHIP_HZ"];
    $chipNm = $languages[$currentLanguage]["_CHIP_NM"];

    $capacity = $languages[$currentLanguage]["_CAPACITY"];
    $capacityValue = $languages[$currentLanguage]["_CAPACITY_VALUE"];
    $capacitySpace = $languages[$currentLanguage]["_CAPACITY_SPACE"];
    $capacityFast = $languages[$currentLanguage]["_CAPACITY_FAST"];

    $display = $languages[$currentLanguage]["_DISPLAY"];
    $displayValue = $languages[$currentLanguage]["_DISPLAY_VALUE"];
    $displaySize = $languages[$currentLanguage]["_DISPLAY_SIZE"];
    $displayRes = $languages[$currentLanguage]["_DISPLAY_RES"];
    $displayRatio = $languages[$currentLanguage]["_DISPLAY_RATIO"];

    $resistant = $languages[$currentLanguage]["_RESISTANT"];
    $resistantValue = $languages[$currentLanguage]["_RESISTANT_VALUE"];
    $resistantDepth = $languages[$currentLanguage]["_RESISTANT_DEPTH"];

    $weight = $languages[$currentLanguage]["_WEIGHT"];
    $weightValue = $languages[$currentLanguage]["_WEIGHT_VALUE"];
    $weightLight = $languages[$currentLanguage]["_WEIGHT_LIGHT"];
    $weightHandling = $languages[$currentLanguage]["_WEIGHT_HANDLING"];

    $size = $languages[$currentLanguage]["_SIZE"];
    $sizeValue = $languages[$currentLanguage]["_SIZE_VALUE"];
    $sizeElegant = $languages[$currentLanguage]["_SIZE_ELEGANT"];
    $sizePockets = $languages[$currentLanguage]["_SIZE_POCKETS"];
    //

    //ACCESSORIES
    $earPods = $languages[$currentLanguage]["_EARPODS"];
    $earPodsPlaying = $languages[$currentLanguage]["_EARPODS_PLAYING"];
    $earPodsVolume = $languages[$currentLanguage]["_EARPODS_VOLUME_CONTR"];
    $earPodsMic = $languages[$currentLanguage]["_EARPODS_MICROPHONE"];

    $lightningCable = $languages[$currentLanguage]["_LIGHTNING_CABLE"];
    $lightningCableMaterial = $languages[$currentLanguage]["_LIGHTNING_CABLE_MATERIAL"];
    $lightningCableOlderDevices = $languages[$currentLanguage]["_LIGHTNING_CABLE_OLDER_DEVICES"];

    $powerAdapter = $languages[$currentLanguage]["_POWER_ADAPTER"];
    $powerAdapterW = $languages[$currentLanguage]["_POWER_ADAPTER_W"];
    $powerAdapterShape = $languages[$currentLanguage]["_POWER_ADAPTER_SHAPE"];
    $powerAdapterOlderDevices = $languages[$currentLanguage]["_POWER_ADAPTER_OLDER_DEVICES"];

    $documentation = $languages[$currentLanguage]["_DOCUMENTATION"];
    $documentationStickers = $languages[$currentLanguage]["_DOCUMENTATION_STICKERS"];
    $documentationInstructions = $languages[$currentLanguage]["_DOCUMENTATION_INSTRUCTIONS"];
    //

    //IOS
    $ios15 = $languages[$currentLanguage]["_IOS_15"];
    $iosSystem = $languages[$currentLanguage]["_IOS_SYSTEM"];
    $iosWorking = $languages[$currentLanguage]["_IOS_WORKING"];
    $iosSupported = $languages[$currentLanguage]["_IOS_SUPPORTED"];
    $moreInfo = $languages[$currentLanguage]["_MORE_INFO"];
    //

    //SHOWCASE
    $ui = $languages[$currentLanguage]["_UI"];
    $ringtones = $languages[$currentLanguage]["_RINGTONES"];
    $openingRingtone = $languages[$currentLanguage]["_OPENING_RINGTONE"];
    $silkRingtone = $languages[$currentLanguage]["_SILK_RINGTONE"];
    $crystalRingtone = $languages[$currentLanguage]["_CRYSTAL_RINGTONE"];
    $alarm = $languages[$currentLanguage]["_ALARM"];
    $lockScreen = $languages[$currentLanguage]["_LOCK_SCREEN"];
    $moreRingtones = $languages[$currentLanguage]["_MORE_RINGTONES"];
    $starSky = $languages[$currentLanguage]["_STAR_SKY"];
    $radar = $languages[$currentLanguage]["_RADAR"];
    $space = $languages[$currentLanguage]["_SPACE"];
    $owl = $languages[$currentLanguage]["_OWL"];
    $freeTime = $languages[$currentLanguage]["_FEE_TIME"];
    //

    //REVIEWS
    $phoneReviews = $languages[$currentLanguage]["_PHONE_REVIEWS"];
    $makeReviews = $languages[$currentLanguage]["_MAKE_REVIEW"];
    $howDoYouLike = $languages[$currentLanguage]["_HOW_DO_YOU_LIKE_SITE"];
    $likes = $languages[$currentLanguage]["_LIKES"];
    $like = $languages[$currentLanguage]["_LIKE"];
    $dislikes = $languages[$currentLanguage]["_DISLIKES"];
    $dislike = $languages[$currentLanguage]["_DISLIKE"];
    //

    //MAKE REVIEW
    $makeAReview = $languages[$currentLanguage]["_MAKE_A_REVIEW"];
    $name = $languages[$currentLanguage]["_NAME"];
    $profilePicture = $languages[$currentLanguage]["_PROFILE_PICTURE"];
    $rating = $languages[$currentLanguage]["_RATING:"];
    $review = $languages[$currentLanguage]["_REVIEW"];
    $make = $languages[$currentLanguage]["_MAKE"];
    //

    //CONTACT
    $contactMe = $languages[$currentLanguage]["_CONTACT_ME"];
    $authorName = $languages[$currentLanguage]["_AUTHOR_NAME"];
    $authorEmail = $languages[$currentLanguage]["_AUTHOR_EMAIL"];
    $authorPhone = $languages[$currentLanguage]["_AUTHOR_PHONE"];
    $authorAddress = $languages[$currentLanguage]["_AUTHOR_ADDRESS"];
    $doYouHaveQ = $languages[$currentLanguage]["_DO_YOU_HAVE_Q"];
    $email = $languages[$currentLanguage]["_EMAIL"];
    $message = $languages[$currentLanguage]["_MESSAGE"];
    $send = $languages[$currentLanguage]["_SEND"];
    //

?>
