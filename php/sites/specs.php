<?php
    include '../../php/backend/languages.php';
    $GLOBALS["onSite"] = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $specsSiteTitle; ?></title>
    <link rel="stylesheet" href="../../css/navMenu.css">
    <link rel="stylesheet" href="../../css/fonts.css">

    <link rel="stylesheet" href="../../css/specs.css">
</head>
<body>

<?php include("../../php/components/navigationMenu.php"); ?>

<div id="content">
    <h2 class="title"><?php echo $specsTitle; ?></h2>
    <div class="specs_table">
        <div class="specs_table_row">
            <div class="specs_table_row_left">
                <div class="specs_table_row_left_component">
                    <div>
                        <img src="../../assets/imgs/specs/drop.png">
                        <h3><?php echo $color; ?></h3>
                    </div>
                </div>
                <div class="specs_table_row_left_component_name">
                    <h3><?php echo $colorValue; ?></h3>
                </div>
            </div>
            <div class="specs_table_row_right">
                <div class="specs_table_row_right_info">
                    <h3 class="title"><?php echo $info; ?></h3>
                    <ul>
                        <li><?php echo $colorElegant; ?></li>
                        <li><?php echo $colorHiv; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="specs_table_row">
            <div class="specs_table_row_left">
                <div class="specs_table_row_left_component">
                    <div>
                        <img src="../../assets/imgs/specs/cpu.png">
                        <h3><?php echo $chip; ?></h3>
                    </div>
                </div>
                <div class="specs_table_row_left_component_name">
                    <h3><?php echo $chipValue; ?></h3>
                </div>
            </div>
            <div class="specs_table_row_right">
                <div class="specs_table_row_right_info">
                    <h3 class="title"><?php echo $info; ?></h3>
                    <ul>
                        <li><?php echo $chipHz; ?></li>
                        <li><?php echo $chipNm; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="specs_table_row">
            <div class="specs_table_row_left">
                <div class="specs_table_row_left_component">
                    <div>
                        <img src="../../assets/imgs/specs/storage.png">
                        <h3><?php echo $capacity; ?></h3>
                    </div>
                </div>
                <div class="specs_table_row_left_component_name">
                    <h3><?php echo $capacityValue; ?></h3>
                </div>
            </div>
            <div class="specs_table_row_right">
                <div class="specs_table_row_right_info">
                    <h3 class="title"><?php echo $info; ?></h3>
                    <ul>
                        <li><?php echo $capacitySpace; ?></li>
                        <li><?php echo $capacityFast; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="specs_table_row">
            <div class="specs_table_row_left">
                <div class="specs_table_row_left_component">
                    <div>
                        <img src="../../assets/imgs/specs/display.png">
                        <h3><?php echo $display; ?></h3>
                    </div>
                </div>
                <div class="specs_table_row_left_component_name">
                    <h3><?php echo $displayValue; ?></h3>
                </div>
            </div>
            <div class="specs_table_row_right">
                <div class="specs_table_row_right_info">
                    <h3 class="title"><?php echo $info; ?></h3>
                    <ul>
                        <li><?php echo $displaySize; ?></li>
                        <li><?php echo $displayRes; ?></li>
                        <li><?php echo $displayRatio; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="specs_table_row">
            <div class="specs_table_row_left">
                <div class="specs_table_row_left_component">
                    <div>
                        <img src="../../assets/imgs/specs/resis.png">
                        <h3><?php echo $resistant; ?></h3>
                    </div>
                </div>
                <div class="specs_table_row_left_component_name">
                    <h3><?php echo $resistantValue; ?></h3>
                </div>
            </div>
            <div class="specs_table_row_right">
                <div class="specs_table_row_right_info">
                    <h3 class="title"><?php echo $info; ?></h3>
                    <ul>
                        <li><?php echo $resistantDepth; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="specs_table_row">
            <div class="specs_table_row_left">
                <div class="specs_table_row_left_component">
                    <div>
                        <img src="../../assets/imgs/specs/weight.png">
                        <h3><?php echo $weight; ?></h3>
                    </div>
                </div>
                <div class="specs_table_row_left_component_name">
                    <h3><?php echo $weightValue; ?></h3>
                </div>
            </div>
            <div class="specs_table_row_right">
                <div class="specs_table_row_right_info">
                    <h3 class="title"><?php echo $info; ?></h3>
                    <ul>
                        <li><?php echo $weightLight; ?></li>
                        <li><?php echo $weightHandling; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="specs_table_row">
            <div class="specs_table_row_left">
                <div class="specs_table_row_left_component">
                    <div>
                        <img src="../../assets/imgs/specs/size.png">
                        <h3><?php echo $size; ?></h3>
                    </div>
                </div>
                <div class="specs_table_row_left_component_name">
                    <h3><?php echo $sizeValue; ?></h3>
                </div>
            </div>
            <div class="specs_table_row_right">
                <div class="specs_table_row_right_info">
                    <h3 class="title"><?php echo $info; ?></h3>
                    <ul>
                        <li><?php echo $sizeElegant; ?></li>
                        <li><?php echo $sizePockets; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../../php/components/footer.php"); ?>

</body>
</html>