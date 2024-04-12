<?php include '../php/top_of_page.php';
$act = 3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="../iteration2/images/devoidIcon.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/novel.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>deVOID ||| ACT3</title>
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
                <img id="PAGE21" class="page" src="..\novel\pages\PAGE21.jpg" alt="page 21">
                <img id="PAGE22" loading="lazy" class="page" src="..\novel\pages\PAGE22.jpg" alt="page 22">
                <img id="PAGE23" loading="lazy" class="page" src="..\novel\pages\PAGE23.jpg" alt="page 23">
                <img id="PAGE24" loading="lazy" class="page" src="..\novel\pages\PAGE24.jpg" alt="page 24">
                <img id="PAGE25" loading="lazy" class="page" src="..\novel\pages\PAGE25.jpg" alt="page 25">
                <img id="PAGE26" loading="lazy" class="page" src="..\novel\pages\PAGE26.jpg" alt="page 26">
            </div>
        </main>
    </div>

</body>
</html>