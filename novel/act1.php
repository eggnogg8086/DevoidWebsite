<?php include '../php/top_of_page.php';
$act = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="../images/devoidIcon.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/novel.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>deVOID ||| ACT1</title>
</head>
<?php include '../php/analytics.php';?>
<body>
    <header>
        <?php include '../php/view_components/navbar.php';?>
    </header>
    <div class="body-container">
        <main>
            <?php include '../php/view_components/action-bar.php';?>

            <div class="comicPages">
                <img id="PAGE1" class="page" src="..\novel\pages\PAGE1.jpg" alt="page 1">
                <img id="PAGE2" loading="lazy" class="page" src="..\novel\pages\PAGE2.jpg" alt="page 2">
                <img id="PAGE3" loading="lazy" class="page" src="..\novel\pages\PAGE3.jpg" alt="page 3">
                <img id="PAGE4" loading="lazy" class="page" src="..\novel\pages\PAGE4.jpg" alt="page 4">
                <img id="PAGE5" loading="lazy" class="page" src="..\novel\pages\PAGE5.jpg" alt="page 5">
                <img id="PAGE6" loading="lazy" class="page" src="..\novel\pages\PAGE6.jpg" alt="page 6">
                <img id="PAGE7" loading="lazy" class="page" src="..\novel\pages\PAGE7.jpg" alt="page 7">
                <img id="PAGE8" loading="lazy" class="page" src="..\novel\pages\PAGE8.jpg" alt="page 8">
                <img id="PAGE9" loading="lazy" class="page" src="..\novel\pages\PAGE9.jpg" alt="page 9">
                <img id="PAGE10" loading="lazy" class="page" src="..\novel\pages\PAGE10.jpg" alt="page 10">
            </div>
        </main>
    </div>

</body>
</html>